<?php

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;
use Symfony\Component\Finder\SplFileInfo;

/**
 * getFileNamesFromDir
 *
 * @return Collection
 */
function getFileNamesFromDir(string $path)
{
    $files = File::files($path);
    $files = collect($files);
    $fileNames = $files->map(function (SplFileInfo $file) {
        return $file->getRelativePathname();
    });

    return $fileNames;
}

/**
 * create folder
 *
 * @return void
 */
function createFolder(string $folderName)
{
    if (! file_exists($folderName)) {
        mkdir($folderName);
    }
}
