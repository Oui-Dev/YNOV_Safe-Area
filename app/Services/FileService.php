<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Contracts\Filesystem\Filesystem;
use Illuminate\Support\Facades\Storage;

/**
 * Class FileService
 * @package App\Services
 */
class FileService
{
    protected  Filesystem $fs;

    public function __construct()
    {
        $this->fs = Storage::disk('minio');
    }

    public function store(User $user, string $name, $file)
    {
        $path = $user->reference.'/'.$name.'.'.$file->getClientOriginalExtension();
        $this->fs->put($path, file_get_contents($file));
        return $path;
    }

    public function delete(string $path)
    {
        $this->fs->delete(str_replace(config('AWS_ENDPOINT').'/'.config('AWS_BUCKET'), '',$path));
    }
}
