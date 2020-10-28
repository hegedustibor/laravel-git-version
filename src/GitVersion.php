<?php

namespace TiborHegedus\GitVersion;

use Symfony\Component\Process\Process;
use TiborHegedus\GitVersion\Exception\CouldNotGetGitVersionException;

class GitVersion
{
    public function getVersionFromFile()
    {
        $versionFilePath = base_path() . '/' . config('laravel-git-version.file-name');

        if (file_exists($versionFilePath)) {
            return trim(file_get_contents($versionFilePath));
        }

        return null;
    }

    /**
     * @return string
     * @throws CouldNotGetGitVersionException
     */
    public function getVersionFromGit()
    {
        $path = base_path();
        $command = "git describe --always --tags --dirty";

        try {
            $process = Process::fromShellCommandline($command, $path);
            $process->mustRun();

            return trim($process->getOutput());
        } catch (\Exception $exception) {
            throw new CouldNotGetGitVersionException;
        }
    }

    /**
     * @return string|null
     * @throws CouldNotGetGitVersionException
     */
    public function getVersion(): string
    {
        if ($output = $this->getVersionFromFile()) {
            return $output;
        }

        return $this->getVersionFromGit();
    }
}
