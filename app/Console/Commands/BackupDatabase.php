<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class BackupDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:backup-database';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Backup the MySQL database';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $dbName = env('DB_DATABASE');
        $dbUser = env('DB_USERNAME');
        $dbPass = env('DB_PASSWORD');
        $backupPath = storage_path($dbName . '_' . date('Y-m-d_H-i-s') . '.sql');


        // Execute mysqldump command
        $command = "C:\\path\\to\\mysql\\bin\\mysqldump -u{$dbUser} -p{$dbPass} {$dbName} > {$backupPath}";
        exec($command);

        $this->info("Database {$dbName} backup completed successfully!");
    }
}
