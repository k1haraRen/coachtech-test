<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\Category;

class FashionablyController extends Controller
{
    public function contact(Request $request)
    {
        $contacts = Contact::with('category')->get();
        $categories = Category::all();

        $contact = $request->session()->get('contact', []);
        $tel1 = $request->session()->get('tel1', '');
        $tel2 = $request->session()->get('tel2', '');
        $tel3 = $request->session()->get('tel3', '');

        return view('contact', compact('contacts','categories', 'contact'));
    }
    public function confirm(ContactRequest $request)
    {
        $tel1 = $request->tel1;
        $tel2 = $request->tel2;
        $tel3 = $request->tel3;

        $tel = "{$tel1}{$tel2}{$tel3}";

        $contact = $request->only(['category_id', 'first_name', 'last_name', 'gender', 'email', 'address', 'building', 'detail']);
        $contact['tel'] = $tel;

        $category = Category::find($contact['category_id']);

        $request->session()->put('contact', $contact);
        $request->session()->put('tel1', $tel1);
        $request->session()->put('tel2', $tel2);
        $request->session()->put('tel3', $tel3);

        return view('confirm', compact('contact','category'));
    }
    public function thanks(Request $request)
    {
        $request->session()->forget('contact');

        $contact = $request->only(['category_id', 'first_name', 'last_name', 'gender', 'email', 'tel', 'address', 'building', 'detail']);
        Contact::create($contact);

        return view('thanks');
    }

    public function admin(Request $request)
    {
        $contacts = Contact::with('category')->paginate(7);
        $categories = Category::all();

        return view('admin', compact('contacts', 'categories'));
    }
    public function search(Request $request)
    {
        if ($request->has('reset') && $request->reset) {
            return redirect()->route('admin');
        }

        $contacts = Contact::with('category')->CategorySearch($request->category_id)->KeywordSearch($request->keyword)->GenderSearch($request->gender)->DateSearch($request->created_at)->paginate(7);
        $categories = category::all();

        return view('admin', compact('contacts', 'categories'));
    }
    public function destroy(Request $request, $id)
    {
        $contact = Contact::find($id);

        if ($contact) {
            $contact->delete();
            return response()->json(['message' => '削除しましたわ💖'], 200);
        }

        return response()->json(['message' => 'データが見つかりませんでしたわ💦'], 404);
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
