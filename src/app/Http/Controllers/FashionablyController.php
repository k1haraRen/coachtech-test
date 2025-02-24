<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;

class FashionablyController extends Controller
{
    public function contact(Request $request)
    {
        $contacts = Contact::with('category')->get();
        $categories = Category::all();

        $contact = $request->session()->get('contact', []);

        return view('contact', compact('contacts','categories', 'contact'));
    }
    public function confirm(Request $request)
    {
        $tel = "{$request->tel1}{$request->tel2}{$request->tel3}";

        $contact = $request->only(['category_id', 'first_name', 'last_name', 'gender', 'email', 'address', 'building', 'detail']);
        $contact['tel'] = $tel;

        $category = Category::find($contact['category_id']);

        $request->session()->put('contact', $contact);

        return view('confirm', compact('contact','category'));
    }
    public function thanks(Request $request)
    {
        $request->session()->forget('contact');

        $contact = $request->only(['category_id', 'first_name', 'last_name', 'gender', 'email', 'tel', 'address', 'building', 'detail']);
        Contact::create($contact);

        return view('thanks');
    }

    public function admin()
    {
        return view('admin');
    }
    public function register()
    {
        return view('register');
    }
    public function login()
    {
        return view('login');
    }
}
