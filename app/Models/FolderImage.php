<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class FolderImage extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function folder()
    {
        return $this->belongsTo(Folder::class);
    }


    public function getImage($filename)
    {
        // Check if the file exists in the storage directory
        if (Storage::disk('public')->exists($filename)) {
            // Generate the URL to the file
            $url = Storage::disk('public')->url($filename);
            // Return the URL
            return $url;
        }
    }
}
