<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactsValidation;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $contacts= Contact::all();
       return view('contacts.index',compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ContactsValidation $request)
    {
        $validation=$request->validated();
        $contact=Contact::create($request->except('_token'));
        if($contact){
            return redirect('/contacts/create')->with([
                "message"=>"add contact"
            ]);
        }
       
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $contact=Contact::find($id);
       // var_dump($contacts->name);
        return view('contacts.show',compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $contacts=Contact::find($id);
       // var_dump($contacts->name);
        return view('contacts.edit',compact('contacts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ContactsValidation $request,$id)
    {
        $validate=$request->validated();
        //var_dump($request->input(),$id);
        $contact=Contact::where('id',$id)->update($request->except('_token','_method'));
        return redirect('/')->with('message', 'Contact updated!');;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
      Contact::where('id',$id)->delete();
      return redirect('/')->with('delete', 'Contact delete!');
    }

    public function serarcedata(Request $request){
       $search=$request->search;
       $contacts=Contact::where(function($query) use ($search){
        $query->where('name','like',"%$search%") 
        ->orWhere('email','like',"%$search%");
    })->get();

    return view('contacts.index',compact('contacts'));
    }
    public function shortbyname(){
        $contacts=Contact::orderBy('name')->get();
        return view('contacts.index',compact('contacts'));
    }
    public function shortbydate(){
        $contacts=Contact::orderBy('created_at')->get();
        return view('contacts.index',compact('contacts'));
    }
}
