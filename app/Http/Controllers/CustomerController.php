<?php

namespace App\Http\Controllers;

class CustomerController extends Controller
{
    public function index()
    {
        return view('dashboard.customer');
    }

    public function order()
    {
        return view('dashboard.orders');
    }
}
