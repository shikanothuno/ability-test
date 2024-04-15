<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfirmController extends Controller
{
    public function index()
    {
        return view("index");
    }

    public function confirm()
    {
        return view("confirm");
    }

    public function admin()
    {
        return view("admin");
    }

    public function thanks()
    {
        return view("thanks");
    }
}
