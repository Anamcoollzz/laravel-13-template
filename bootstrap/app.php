<?php

use App\Http\Middleware\CheckLaravelVersionMiddleware;
use App\Http\Middleware\EducationLevelMiddleware;
use App\Http\Middleware\EnsureAppKey;
use App\Http\Middleware\LogRequestMiddleware;
use App\Http\Middleware\OverrideConfig;
use App\Http\Middleware\ViewShare;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Middleware\PermissionMiddleware;
use Spatie\Permission\Middleware\RoleMiddleware;
use Spatie\Permission\Middleware\RoleOrPermissionMiddleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
        using: function () {

            // Route::get('/test-json-direct', function () {
            //     $path = storage_path('app/temp/json/2025-11-26_00.00.49_Contoh CRUD.json');

            //     header('Content-Type: application/json');
            //     header('Content-Disposition: attachment; filename="contoh-crud.json"');
            //     header('Content-Length: ' . filesize($path));

            //     readfile($path);
            //     exit;
            // });
            // Route::get('/test-download-file', function () {
            //     $path = storage_path('app/temp/json/2025-11-26_00.00.49_Contoh CRUD.json');
            //     return response()->file($path, [
            //         'Content-Disposition' => 'attachment; filename="contoh-crud.json"',
            //     ]);
            // });
            // Route::get('/test222', function () {
            //     return Storage::download('temp/json/2025-11-26_00.00.49_Contoh CRUD.json');
            // });
            Route::prefix('api')
                ->middleware([OverrideConfig::class, 'api', LogRequestMiddleware::class,  EnsureAppKey::class])->group(base_path('routes/api.php'));

            Route::middleware([OverrideConfig::class, 'web', LogRequestMiddleware::class,  ViewShare::class])->group(base_path('routes/stisla-web.php'));

            Route::middleware([OverrideConfig::class, 'web', LogRequestMiddleware::class, ViewShare::class, 'auth', EducationLevelMiddleware::class, CheckLaravelVersionMiddleware::class])->group(base_path('routes/stisla-web-auth.php'));

            $files = File::files(base_path('routes/modules'));
            foreach ($files as $file) {
                Route::middleware([OverrideConfig::class, 'web', LogRequestMiddleware::class, ViewShare::class, 'auth', EducationLevelMiddleware::class])->group(base_path('routes/modules/'.$file->getBasename()));
            }
        }
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->alias([
            'role' => RoleMiddleware::class,
            'permission' => PermissionMiddleware::class,
            'role_or_permission' => RoleOrPermissionMiddleware::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        $exceptions->shouldRenderJsonWhen(
            fn (Request $request) => $request->is('api/*'),
        );
    })->create();
