# Example Backup Database

Backup Database menggunakan Laravel-backup dan menyimpan ke GDrive

## Run Locally

Clone the project

```bash
  git clone https://github.com/rifjan29/example-backup-database.git
```

Go to the project directory

```bash
  cd my-project
```

Install dependencies

```bash
  npm install
```

```bash
  composer install 
```

```bash
  cp .env.example .env
```

```bash
  php artisan vendor:publish --provider="Spatie\Backup\BackupServiceProvider"
```

Start the server

```bash
  php artisan serve 
```

Run the Backup

```bash
  php artisan backup:run
```

## Documentation

[Laravel-Backup](https://spatie.be/docs/laravel-backup/v8/introduction)

## Acknowledgements

- [spatie/laravel-backup]([Laravel-Backup](https://spatie.be/docs/laravel-backup/v8/introduction))
- [masbug/flysystem-google-drive-ext](https://github.com/masbug/flysystem-google-drive-ext)
- [link referensi](https://medium.com/@al_imran_ahmed/how-to-backup-your-laravel-application-in-google-drive-2803c31756a0)

## Environment Variables

To run this project, you will need to add the following environment variables to your .env file

`GOOGLE_DRIVE_CLIENT_ID=your_google_drive_id`

`GOOGLE_DRIVE_CLIENT_SECRET=GOOGLE_DRIVE_CLIENT_SECRET_id`

`GOOGLE_DRIVE_REFRESH_TOKEN=GOOGLE_DRIVE_REFRESH_TOKEN`

`GOOGLE_DRIVE_FOLDER=`
