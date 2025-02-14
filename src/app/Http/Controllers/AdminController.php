<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $contacts = Contact::with('category')->get();
        $contacts = Contact::Paginate(7);
        $categories = Category::all();
        $genders = Contact::pluck('gender')->unique;
        return view('admin', compact('contacts', 'categories', 'genders', 'contacts'));
    }

    public function search(Request $request)
    {
        if ($request->has('reset')) {
            return redirect()->route('admin.search');
        }

        $contacts = Contact::with('category')->CategorySearch($request->category_id)->GenderSearch($request->gender)->DateSearch($request->created_at)->KeywordSearch($request->keyword)->Paginate(7);
        $categories = Category::all();
        $genders = Contact::pluck('gender');
        return view('admin', compact('contacts', 'categories', 'genders'));
    }

    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        return redirect('/admin');
    }
}
