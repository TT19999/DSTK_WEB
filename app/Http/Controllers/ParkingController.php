<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function Psy\debug;
use App\Models\CarPark;
use Illuminate\Support\Facades\DB;

class ParkingController extends Controller
{
    public function getParkingForUser(Request $request) {
        $cars = DB::table('CarParks')->where('user_id', 1)->get();
        return view('Business/parking')->with(compact('cars'));
    }

    public function addParking(Request $request) {
        $cars = DB::table('CarParks')->where('user_id', 1)->get();
        return view("Business/addNewParking")->with(compact('cars'));
    }

    public function handleAdd(Request $request) {
        $input = $request->all();
        $newParking = CarPark::create([
            'user_id' => 1,
            'title' => $request->input('title'),
            'description' => $request->input('decription'),
            'subDescription' => $request->input('subDecription'),
            'location' => $request->input('location'),
            'lat_map' => $request->input('Lat'),
            'lng_map' => $request->input('Lnt'),
            'city' => $request->input('city'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect('/Business/Parking');
    }

    public function exportData(Request $request) {
        return view('/Business/exportData');
    }

    public function handleAddEmployee(Request $request) {
//        $input = $request->all();
//        $newParking = CarPark::create([
//            'user_id' => 1,
//            'carpark_id'=> 1,
//            'title' => $request->input('title'),
//            'description' => $request->input('decription'),
//            'subDescription' => $request->input('subDecription'),
//            'location' => $request->input('location'),
//            'lat_map' => $request->input('Lat'),
//            'lng_map' => $request->input('Lnt'),
//            'city' => $request->input('city'),
//            'created_at' => now(),
//            'updated_at' => now(),
//        ]);
//
//        return redirect('/Business/Account');
    }

    public function getFreeSpace(){
        // $filename = "/home/tungpn/Desktop/app/react code/DSTK_WEB/resources/c++/data.txt";
        // $fp = fopen($filename, "r");
        
        // $contents = fread($fp, filesize($filename));
        
        // echo ;
        // fclose($fp);

        $csv = array();
        $file = fopen('/home/tungpn/Desktop/app/react code/DSTK_WEB/resources/c++/data.txt', 'r');

        while (($result = fgetcsv($file)) !== false)
        {
            $csv[] = $result;
        }

        fclose($file);
        if(!empty($csv)) {
            return response()->json([
                'freeSpace'=> $csv[0][0],
                'totalSpace' => $csv[0][1]
            ]); 
        }
        else {
            return response()->json([
                'freeSpace'=> 0,
                'totalSpace' => 0
            ]); 
        }

        
    }
}
