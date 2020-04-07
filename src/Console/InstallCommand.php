<?php


namespace Rs\RsAdmin\Console;


use Illuminate\Console\Command;

class InstallCommand extends Command
{
    protected $signature = 'rs-admin:install';

    protected $description = 'Install rs admin panel';

    public function handle()
    {
        $directory = app_path('Admin');

        if (is_dir($directory)) {
            $this->line("<error>admin directory already exists !</error> ");

            return;
        }

        $this->laravel['files']->makeDirectory($directory, 0755, true, true);
        $this->line('<info>Admin directory was created:</info> '.str_replace(base_path(), '', $directory));
        $this->laravel['files']->makeDirectory("$directory/Controllers", 0755, true, true);

        $this->laravel['files']->put("$directory/navigation.php", '<?php' . PHP_EOL . "return [];");
    }
}
