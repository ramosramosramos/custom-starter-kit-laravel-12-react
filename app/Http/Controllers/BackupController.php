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

class BackupController extends Controller
{
    /**
     * @return Response
     */
    public function index(): Response
    {
        $this->authorize(PermissionEnum::BACKUP_VIEW->value);
        // Just use the relative path under the disk root
        // @phpstan-ignore-next-line
        $files = Storage::disk('backups')->files(config('app.name', 'Laravel'));

        // Return mapped backup info
        $backups = collect($files)->map(function ($file): array {
            return [
                'path' => $file,
                // @phpstan-ignore-next-line
                'size' => $this->formatBytes(Storage::disk('backups')->size($file)),
                // @phpstan-ignore-next-line
                'generated_at' => date('Y-m-d H:i:s', Storage::disk('backups')->lastModified($file)),
            ];
        });

        return inertia('backup/index', [
            'backups' => $backups,
        ]);
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function generate(): RedirectResponse
    {
        $this->authorize(PermissionEnum::BACKUP_GENERATE->value);
        GenerateDatabaseBackup::dispatch();

        return to_route('backups.index')->with('success', 'Generated started. Please wait for a second');
    }

    /**
     * @return RedirectResponse
     */
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

    /**
     * @return BinaryFileResponse
     */
    public function download(Request $request): BinaryFileResponse
    {
        $this->authorize(PermissionEnum::BACKUP_DOWNLOAD->value);
        $disk = Storage::disk('backups');
        // @phpstan-ignore-next-line
        $path = config('app.name').'/'.$request->string('path');

        if (! $disk->exists($path)) {
            abort(404, 'Backup file not found.');
        }

        // @phpstan-ignore-next-line
        return response()->download($disk->path($path), $request->string('path'));

    }

    /**
     * @return string
     */
    protected function formatBytes(int $bytes, int $precision = 2): string
    {
        $units = ['B', 'KB', 'MB', 'GB', 'TB'];

        $bytes = max($bytes, 0);
        $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
        $pow = min($pow, count($units) - 1);

        $bytes /= pow(1024, $pow);

        return round($bytes, $precision).' '.$units[$pow];
    }
}
