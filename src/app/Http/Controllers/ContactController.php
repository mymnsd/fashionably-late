<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\Category;

class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::with('category')->get();
        $categories = Category::all();
        return view('index',compact('contacts','categories'));
    }
    
    public function confirm(ContactRequest $request){
        $tel =$request->tel1 . $request->tel2 . $request->tel3;
        $contact = (['tel' => $tel]) + $request->only(['category_id','last_name','first_name','gender','email','tel1','tel2','tel3','address','building','content','detail']);
        return view('confirm',compact('contact'));
    }
    public function store(ContactRequest $request){
        $tel =$request->tel1 . $request->tel2 . $request->tel3;
        $contact = (['tel' => $tel]) + $request->only(['category_id','last_name','first_name','gender','email','address','building','detail']);
        Contact::create($contact);
        // 値を保持したままリダイレクト
        if($request->input('back') == 'back'){
            return redirect('/')->withInput();
        }
        return view('thanks');
    }
}
