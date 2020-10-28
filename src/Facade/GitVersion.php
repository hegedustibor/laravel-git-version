<?php

namespace TiborHegedus\GitVersion\Facade;

use Illuminate\Support\Facades\Facade;

/**
 * @see \TiborHegedus\GitVersion\GitVersion
 * @method static string getVersion()
 * @method static string getVersionFromGit()
 * @method static string getVersionFromFile()
 */
class GitVersion extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'git-version';
    }
}
