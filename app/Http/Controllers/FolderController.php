<?php

namespace App\Http\Controllers;

use App\Models\Folder;
use App\Models\FolderImage;
use DateInterval;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class FolderController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $folders = Folder::all();
        return view('admin.folder.index', compact('folders'));
    }

    public function store(Request $request)
    {
        $currentDate = new DateTime(); // Current date and time
        $currentDate->add(new DateInterval('P20D')); // Add 20 days

        $newDate = $currentDate->format('Y-m-d');
        $folder = Folder::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'link' => $request->link,
            'folder_type' => 'free',
            'folder_limit' => 20,
            'due_date' => $newDate,
        ]);
    }

    public function folderImage(Folder $folder)
    {
        $images = FolderImage::where('folder_id', $folder->id)->get();
        return view('admin.folder.folder_images.index', compact('folder', 'images'));
    }

    public function submitFolderImages(Request $request)
    {
        $request->validate([
            'file' => 'required|file|max:10240', // Max size: 10 MB
        ]);

        // Store the uploaded file
        if ($request->file('file')->isValid()) {
            // Store the file in the storage/app/public directory
            $path = $request->file('file')->store('uploads', 'public');
            // You can also use the putFile method to store the file
//             $path = Storage::putFile('uploads', $request->file('file'));
            FolderImage::create([
                'folder_id' => $request->folder_id,
                'path' => $path
            ]);
        }

        // If the file upload fails
//        return response()->json(['error' => 'File upload failed'], 500);
    }
}
