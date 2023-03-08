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
    protected Filesystem $fs;

    public function __construct()
    {
        $this->fs = Storage::disk('local');
    }

    public function get(string $path)
    {
        return $this->fs->get($path);
    }

    public function store(User $user, string $name, $file) : string
    {
        $path = $user->reference.'/'.$name.'.'.$file->getClientOriginalExtension();
        $this->fs->put($path, file_get_contents($file));
        return $path;
    }

    public function delete(string $path) : void
    {
        $this->fs->delete($path);
    }
}
