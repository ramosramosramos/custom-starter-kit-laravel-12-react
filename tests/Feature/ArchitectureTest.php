<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ArchitectureTest extends TestCase
{
    use RefreshDatabase;
    protected Filesystem $fs;

    public function setUp(): void
    {
        parent::setUp();
        $this->fs = new Filesystem();
    }

    public function test_app_uses_strict_types()
    {
        $files = $this->fs->allFiles(app_path());
        $violations = [];

        foreach ($files as $file) {
            $contents = $this->fs->get($file->getPathname());

            if (!str_contains($contents, 'declare(strict_types=1);')) {
                $violations[] = $file->getRelativePathname();
            }
        }

        $this->assertEmpty(
            $violations,
            'Missing strict_types declaration in: ' . implode(', ', $violations)
        );
    }

    public function test_app_does_not_use_die_or_dd()
    {
        $files = $this->fs->allFiles(app_path());
        $violations = [];

        foreach ($files as $file) {
            $contents = $this->fs->get($file->getPathname());

            if (preg_match('/\b(dd|die|dump)\s*\(/', $contents)) {
                $violations[] = $file->getRelativePathname();
            }
        }

        $this->assertEmpty(
            $violations,
            'Forbidden functions (dd/die/dump) found in: ' . implode(', ', $violations)
        );
    }


    public function test_services_do_not_depend_on_controllers()
    {
        $serviceDir = app_path('Services');
        if (!is_dir($serviceDir)) {
            $this->markTestSkipped('No Services directory found.');
        }

        $violations = [];

        foreach ($this->fs->allFiles($serviceDir) as $file) {
            $contents = $this->fs->get($file->getPathname());

            if (str_contains($contents, 'App\\Http\\Controllers')) {
                $violations[] = $file->getRelativePathname();
            }
        }

        $this->assertEmpty(
            $violations,
            'Services must not depend on controllers. Violations: ' . implode(', ', $violations)
        );
    }


}
