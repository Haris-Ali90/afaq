<?php

namespace App\Http\Controllers;

use App\Models\Folder;
use App\Models\FolderImage;
use App\Models\User;
use DateInterval;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProfileController extends Controller
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
        $user = auth()->user();
        return view('admin.profile.index', compact('user'));
    }

    public function update(Request $request)
    {
        $data= [
            'first_name' => $request->fname,
            'last_name' => $request->lname,
            'user_name' => $request->company,
            'email' => $request->website
        ];
        User::where('id', auth()->user()->id)->update($data);
        return redirect()->route('admin.profile.view');
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
