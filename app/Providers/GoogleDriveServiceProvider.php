<?php

namespace App\Providers;

use Exception;
use Google\Client;
use Google\Service\Drive\Drive;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Filesystem\FilesystemAdapter;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\ServiceProvider;
use League\Flysystem\Filesystem as FlysystemFilesystem;
use Masbug\Flysystem\GoogleDriveAdapter;

class GoogleDriveServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // $this->loadGoogleStorageDriver();
    }

    /**
     * Bootstrap services.
     */
    private function loadGoogleStorageDriver(string $driverName = 'google') {
        // try {
        //     Storage::extend($driverName, function($app, $config) {
        //         $options = [];

        //         if (!empty($config['teamDriveId'] ?? null)) {
        //             $options['teamDriveId'] = $config['teamDriveId'];
        //         }

        //         $client = new Client();
        //         $client->setClientId($config['clientId']);
        //         $client->setClientSecret($config['clientSecret']);
        //         $client->refreshToken($config['refreshToken']);

        //         $service = new Drive($client);
        //         $adapter = new GoogleDriveAdapter($service, $config['folder'] ?? '/', $options);
        //         $driver = new FlysystemFilesystem($adapter);

        //         return new FilesystemAdapter($driver, $adapter);
        //     });
        // } catch(Exception $e) {
        //     // your exception handling logic
        // }
    }

}
