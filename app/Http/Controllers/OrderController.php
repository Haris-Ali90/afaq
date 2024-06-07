<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Folder;
use App\Models\FolderImage;
use App\Models\Location;
use App\Models\OrderCategory;
use App\Models\Sprint;
use App\Models\SprintContact;
use App\Models\Task;
use DateInterval;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class OrderController extends Controller
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
    public function orderCreationByForm()
    {
        return view('admin.orders.form');
    }

    public function orderCreationFormStore(Request $request)
    {
        $user = auth()->user();
        $category = OrderCategory::create(['name' => $request->category]);

        $sprintContact = SprintContact::create([
            'name' => $request->fname .' '. $request->lname,
            'phone' => $request->phone,
            'email' => $request->email,
        ]);

        $location = Location::create([
            'address' => $request->address,
            'city_id' => 1,
            'state_id' => 1,
            'country_id' => 1,
        ]);
        $sprint = [
            'creator_id' => $user->id,
            'creator_type' => 'vendor',
            'vehicle_id' => 3,
            'status_id' => 61,
        ];
        $sprint = Sprint::create($sprint);

        $pickupTask = [
            'sprint_id' => $sprint->id,
            'ordinal' => 1,
            'type' => 'pickup',
            'location_id' => $location->id,
            'contact_id' => $sprintContact->id,
            'status_id' => 61,
        ];
        Task::create($pickupTask);

        $sprintContactDrop = SprintContact::create([
            'name' => $request->d_fname .' '. $request->d_lname,
            'phone' => $request->d_phone,
            'email' => $request->d_email,
        ]);

        $locationDrop = Location::create([
            'address' => $request->d_address,
            'city_id' => 1,
            'state_id' => 1,
            'country_id' => 1,
        ]);

        $dropOffTask = [
            'sprint_id' => $sprint->id,
            'ordinal' => 2,
            'type' => 'dropoff',
            'location_id' => $locationDrop->id,
            'contact_id' => $sprintContactDrop->id,
            'status_id' => 61,
        ];
        Task::create($dropOffTask);

//        return redirect()->route('rfq.create')->with('success', 'order created successfully');
    }

    public function orderCreationByCSV()
    {
        return view('admin.orders.csv');
    }

    public function orderCreationCSVStore(Request $request)
    {

        $file = $request->file('csvFile');

        if ($file) {
            $csvData = $this->readCsvFile($file->getPathname());
            return response()->json($csvData);
        } else {
            return response()->json(['error' => 'No file uploaded'], 400);
        }

    }

    private function readCsvFile($filePath)
    {
        $csvData = [];

        if (($handle = fopen($filePath, "r")) !== FALSE) {
            $firstRowSkipped = false; // Flag to skip the first row
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                if (!$firstRowSkipped) {
                    $firstRowSkipped = true;
                    continue; // Skip the first row
                }
                $csvData[] = $data;
            }
            fclose($handle);
        }

        return $csvData;
    }

    public function orderCreationCSVProcess(Request $request)
    {
        foreach($request->column1 as $key => $column){
            $user = auth()->user();
            $category = OrderCategory::create(['name' => $request->column1[$key]]);

            $sprintContact = SprintContact::create([
                'name' => $request->column2[$key],
                'phone' => $request->column3[$key],
                'email' => $request->column4[$key],
            ]);

            $location = Location::create([
                'address' => $request->column5[$key],
                'city_id' => 1,
                'state_id' => 1,
                'country_id' => 1,
            ]);
            $sprint = [
                'creator_id' => $user->id,
                'creator_type' => 'vendor',
                'vehicle_id' => 3,
                'status_id' => 61,
            ];
            $sprint = Sprint::create($sprint);

            $pickupTask = [
                'sprint_id' => $sprint->id,
                'ordinal' => 1,
                'type' => 'pickup',
                'location_id' => $location->id,
                'contact_id' => $sprintContact->id,
                'status_id' => 61,
            ];
            Task::create($pickupTask);

            $sprintContactDrop = SprintContact::create([
                'name' => $request->column8[$key],
                'phone' => $request->column9[$key],
                'email' => $request->column10[$key],
            ]);

            $locationDrop = Location::create([
                'address' => $request->column11[$key],
                'city_id' => 1,
                'state_id' => 1,
                'country_id' => 1,
            ]);

            $dropOffTask = [
                'sprint_id' => $sprint->id,
                'ordinal' => 2,
                'type' => 'dropoff',
                'location_id' => $locationDrop->id,
                'contact_id' => $sprintContactDrop->id,
                'status_id' => 61,
            ];
            Task::create($dropOffTask);
        }

    }

    public function getCountryIdOrCreation($countryName)
    {
        $country = Country::where('name', $countryName)->orWhere('code', $countryName)->first();
        if($country != null){
            $countryId =  $country->id;
        }

        if($country == null){
            $country = Country::create([
                'name' => $countryName,
            ]);
            $countryId = $country->id;
        }
        return $countryId;
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

    public function pending(Request $request)
    {
        $orders = Sprint::all();
        return view('admin.orders.order_list', compact('orders'));
    }
}
