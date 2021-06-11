<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request) {
        if(!empty($request)) {
            if($request->email == 'admin' ) {
                return redirect('/admin/dashboard');
            }
            if($request->email == 'customer') {
                return redirect('customer/index');
            }
            if($request->email == 'business') {
                return redirect('/Business/Dashboard');
            }
        }
    }
}
