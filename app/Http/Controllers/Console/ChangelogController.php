<?php

namespace App\Http\Controllers\Console;

use App\Http\Controllers\Controller;
use App\Models\Version;

class ChangelogController extends Controller
{
    public function list() {
        $versions = Version::paginate(10);

        return inertia('Console/Changelog/List', [
            'versions' => $versions,
        ]);
    }

    public function create() {
        return inertia('Console/Changelog/Add');
    }

    public function store() {
        $data = request()->validate([
            'name' => ['required', 'string',  'max:255'],
            'generation' => ['required', 'integer'],
            'correction' => ['required', 'integer'],
            'revision' => ['required', 'integer'],
            'changelog' => ['required', 'string'],
        ]);

        Version::where('archived_at', null)->update([
            'archived_at' => now(),
        ]);

        Version::create([
            'name' => $data['name'],
            'generation' => $data['generation'],
            'correction' => $data['correction'],
            'revision' => $data['revision'],
            'changelog' => $data['changelog'],
        ]);

        return redirect()->route('console.auth.changelog.list')->with('toast', [
            'type' => 'success',
            'message' => "La version a bien été crée.",
        ]);
    }

    public function edit(Version $version) {
        return inertia('Console/Changelog/Edit', [
            'versions' => $version,
        ]);
    }

    public function editPut(Version $version) {
        $data = request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'generation' => ['required', 'integer'],
            'correction' => ['required', 'integer'],
            'revision' => ['required', 'integer'],
            'changelog' => ['string'],
        ]);

        $version->update([
            'name' => $data['name'],
            'generation' => $data['generation'],
            'correction' => $data['correction'],
            'revision' => $data['revision'],
            'changelog' => $data['changelog'],
        ]);

        return redirect()->route('console.auth.changelog.list')->with('toast', [
            'type' => 'success',
            'message' => "La version a bien été modifiée.",
        ]);
    }
}