<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index(){
        return view('index');
    }
    public function confirm(ContactRequest $request){
        $contact = $request->only(['last_name','first_name','gender','email','tel','address','building','content','detail']);
        return view('confirm',compact('contact'));
        // $contact = $request->session()->put([
        //     'last_name' => $request->last_name,
        //     'first_name' => $request->first_name,
        //     'gender' => $request->gender,
        //     'email' => $request->email,
        //     'tel' => $request->tel,
        //     'address' => $request->address,
        //     'building' => $request->building, 
        //     'content' => $request->content,
        //     'detail' => $request->detail,
        // ]);
        // $contact = $request->sesseion()->flash('_old_input',[
        //     'last_name' => $request->session()->get('last_name'),
        //     'first_name' => $request->session()->get('first_name'),
        //     'gender' => $request->session()->get('gender'),
        //     'email' => $request->session()->get('email'),
        //     'tel' => $request->session()->get('tel'),
        //     'address' => $request->session()->get('address'),
        //     'building' => $request->session()->get('building'),
        //     'content' => $request->session()->get('content'),
        //     'detail' => $request->session()->get('detail'),
        // ]);
        // $contact = $request->session()->forget([
        //     $request->session()->forget('last_name'),
        //     $request->session()->forget('first_name'),
        //     $request->session()->forget('gender'),
        //     $request->session()->forget('email'),
        //     $request->session()->forget('tel'),
        //     $request->session()->forget('address'),
        //     $request->session()->forget('building'),
        //     $request->session()->forget('content'),
        //     $request->session()->forget('detail'),
        // ]);
        // $contact = $request->session()->save();

        // return redirect()->route('/');
    }
    public function store(ContactRequest $request){
        $contact = $request->only(['category_id','last_name','first_name','gender','email','tel','address','building','detail']);
        Contact::create($contact);
        return view('thanks');
    }
}
