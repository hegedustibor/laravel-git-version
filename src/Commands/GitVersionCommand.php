<?php

namespace TiborHegedus\GitVersion\Commands;

use Illuminate\Console\Command;
use TiborHegedus\GitVersion\Exception\CouldNotGetGitVersionException;
use TiborHegedus\GitVersion\Facade\GitVersion;

class GitVersionCommand extends Command
{
    public $signature = 'laravel-git-version';

    public $description = 'Display version of application';

    public function handle()
    {
        try {
            $version = GitVersion::getVersion();

            $this->info("Version of application: {$version}");
        } catch (CouldNotGetGitVersionException $exception) {
            $this->error($exception->getMessage());
        }
    }
}
