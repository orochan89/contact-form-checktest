<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $items = Contact::with('category')->get();

        $items = Contact::Paginate(7);
        return view('admin', compact('items'));
    }
}
