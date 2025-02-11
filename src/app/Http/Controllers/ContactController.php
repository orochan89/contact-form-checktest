<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('index', compact('categories'));
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'address', 'building', 'detail', 'content']);
        $tell = $request->tel1 . '-' . $request->tel2 . '-' . $request->tel3;
        $categories = Category::all();
        return view('confirm', compact('contact', 'tell', 'categories'));
    }

    public function store(ContactRequest $request)
    {
        $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tell', 'address', 'building', 'detail', 'content']);
        $tell = $request->tel1 . '-' . $request->tel2 . '-' . $request->tel3;
        $categories = Category::all();
        Contact::create($contact);
        return view('thanks');
    }

    public function admin()
    {
        $items = Contact::all();
        $contents = Contact::Pagenate(7);
        return view('admin', compact('items', 'contents'));
    }
}
