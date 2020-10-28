<?php


namespace TiborHegedus\GitVersion\Exception;

class CouldNotGetGitVersionException extends \Exception
{
    /**
     * CouldNotGetGitVersionException constructor.
     */
    public function __construct()
    {
        parent::__construct("Could not get version string (`git describe` failed)");
    }
}
