<?php

namespace App\Http\Controllers;

use App\Models\MyTorage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DefaultController extends Controller
{
    public function uploadStore(Request $request)
    {
        $request->validate([
            'file' => 'required|file'
        ]);

        // let's upload to the tests directory :!
        $filePath = $request->file('file')->store('tests', 'b2');

        $myTorage = new MyTorage();
        $myTorage->path = $filePath;
        $myTorage->name = 'test';
        $myTorage->save();

        return "The file $filePath is uploaded";
    }

    public function getFile()
    {
        $myStorage = MyTorage::firstOrFail(); // Make sure to replace MyStorage with the correct model name

        if (Storage::disk('b2')->exists($myStorage->path)) {
            return Storage::disk('b2')->response($myStorage->path);
        }

        return response()->json(['error' => 'File not found'], 404);
    }
}
