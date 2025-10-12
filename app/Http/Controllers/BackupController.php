<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Enum\PermissionEnum;
use App\Jobs\Backup\GenerateDatabaseBackup;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Inertia\Response;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

final class BackupController extends Controller
{
    public function index(): Response
    {
        $this->authorize(PermissionEnum::BACKUP_VIEW->value);
        // Just use the relative path under the disk root
        // @phpstan-ignore-next-line
        $files = Storage::disk('backups')->files(config('app.name', 'Laravel'));

        // Return mapped backup info
        $backups = collect($files)->map(fn ($file): array => [
            'path' => $file,
            // @phpstan-ignore-next-line
            'size' => $this->formatBytes(Storage::disk('backups')->size($file)),
            // @phpstan-ignore-next-line
            'generated_at' => date('Y-m-d H:i:s', Storage::disk('backups')->lastModified($file)),
        ]);

        return inertia('backup/index', [
            'backups' => $backups,
        ]);
    }

    public function generate(): RedirectResponse
    {
        $this->authorize(PermissionEnum::BACKUP_GENERATE->value);
        GenerateDatabaseBackup::dispatch();

        return to_route('backups.index')->with('success', 'Generated started. Please wait for a second');
    }

    public function destroy(Request $request): RedirectResponse
    {

        $this->authorize(PermissionEnum::BACKUP_DELETE->value);
        $disk = Storage::disk('backups');

        $decodedPath = urldecode((string) $request->string('path'));

        if ($disk->exists($decodedPath)) {
            $disk->delete($decodedPath);

        }

        return to_route('backups.index')->with('success', 'Backup deleted successfully');
    }

    public function download(Request $request): BinaryFileResponse
    {
        $this->authorize(PermissionEnum::BACKUP_DOWNLOAD->value);
        $disk = Storage::disk('backups');
        // @phpstan-ignore-next-line
        $path = config('app.name').'/'.$request->string('path');

        abort_unless($disk->exists($path), 404, 'Backup file not found.');

        // @phpstan-ignore-next-line
        return response()->download($disk->path($path), $request->string('path'));

    }

    private function formatBytes(int $bytes, int $precision = 2): string
    {
        $units = ['B', 'KB', 'MB', 'GB', 'TB'];

        $bytes = max($bytes, 0);
        $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
        $pow = min($pow, count($units) - 1);

        $bytes /= 1024 ** $pow;

        // @phpstan-ignore-next-line
        return round($bytes, $precision).' '.$units[$pow];
    }
}
