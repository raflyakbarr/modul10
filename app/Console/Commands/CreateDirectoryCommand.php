<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;

class CreateDirectoryCommand extends Command
{
    protected $signature = 'directory:create';
    
    protected $description = 'Create a new directory';
    
    public function handle()
    {
        $directoryPath = 'path/to/directory';
        mkdir($directoryPath, 0777, true);
        
        $this->info("Directory created at {$directoryPath}");
    }
}
