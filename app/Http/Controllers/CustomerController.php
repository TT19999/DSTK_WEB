<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function map() {
        $cars = DB::table('CarParks')->get();
        return view("customer/mapCustomer")->with(compact('cars'));
    }
}
