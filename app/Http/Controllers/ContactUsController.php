<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\contactus;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createContact()
    {
        return view('main.viewcontact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeContact(Request $request)
    {
        $contactUs = new contactus();

        //table colomn assign
        $contactUs->name = $request->name;
        $contactUs->contact = $request->contact;
        $contactUs->message = $request->message;
        $contactUs->deleted_at = $request->deleted_at;
        //insert data
        $contactUs->save();

        return redirect(route('viewcontact'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deletecontact($id)
    {
        contactus::find($id)->delete();
        return redirect(route('viewcontact'));
    }

    public function forcedeletecontact($id)
    {
        contactus::find($id)->forcedelete();
        return redirect(route('viewcontact'));
    }

    public function index()
    {
        $contactUs = contactus::paginate(3);
        return view('main.viewcontact' , compact('contactUs'));
    }

    public function find()
    { 
        $id = $_GET['id'];
        $contactUs =  contactus::where('id',$id)->get();
        return view('main.new' , compact('contactUs'));
    }

    public function findmore()
    {
        $id = $_GET['id'];
        $contactUs =  contactus::where('id','<',$id)->get();
        return view('main.new' , compact('contactUs'));
    }

    public function editData($id){
        $contactUs = contactus::find($id);
        return view('main.edit', ['contactUs' => $contactUs]);
    }

    public function updateData(Request $request){
        $contactUs = contactus::find($request->id);
        $contactUs->name = $request->name;
        $contactUs->contact = $request->contact;
        $contactUs->message = $request->message;
        
        //insert data
        $contactUs->save();

        return redirect(route('viewcontact'));
    }

}
