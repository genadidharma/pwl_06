<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        $customers = Customer::customers();
        return view('customer', compact('customers'));
    }
}
