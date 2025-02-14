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
        $categories = Category::all();
        $genders = Contact::pluck('gender')->unique;
        return view('admin', compact('items', 'categories', 'genders'));
    }

    public function search(Request $request)
    {
        if ($request->has('reset')) {
            return redirect()->route('admin.search');
        }

        $items = Contact::with('category')->CategorySearch($request->category_id)->GenderSearch($request->gender)->DateSearch($request->created_at)->KeywordSearch($request->keyword)->Paginate(7);
        $categories = Category::all();
        $genders = Contact::pluck('gender');
        return view('admin', compact('items', 'categories', 'genders'));
    }
}
