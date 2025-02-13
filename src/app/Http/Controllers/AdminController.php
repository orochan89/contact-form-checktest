<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin()
    {
        $items = Contact::all();
        return view('admin', compact('item'));
    }
}
