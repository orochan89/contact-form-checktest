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
        $input = $request->only(['first_name', 'last_name', 'gender', 'email', 'address', 'building', 'category_id', 'detail']);
        $tell = $request->tel1 . $request->tel2 . $request->tel3;
        $category = Category::find($input['category_id']);
        $category_content = $category ? $category->content : null;
        return view('confirm', compact('input', 'tell', 'category_content'));
    }

    public function complete(Request $request)
    {
        if ($request->input('back') == 'back') {
            return redirect('/')
                ->withInput();
        }
        return view('/thanks');
    }

    public function thanks(Request $request)
    {
        $action = $request->input('action');

        if ($action == 'back') {
            return redirect('/')->withInput();
        }
        if ($action == 'complete') {
            $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tell', 'address', 'building', 'category_id', 'detail', 'content']);
            Contact::create($contact);
            return view('thanks');
        }
    }

    public function admin()
    {
        // $items = Contact::all();
        // $contents = Contact::Pagenate(7);
        return view('admin');
    }
}
