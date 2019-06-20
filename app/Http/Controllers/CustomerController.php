<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        return view('customers');
    }

    public function getCustomer(){
        $customers = Customer::get();
        return response()->json($customers);
    }

    public function createCustomer(){
        return view('customer-create');
    }
}
