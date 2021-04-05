<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pricelist;

class ProductController extends Controller
{
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function insertItems()
    {
        //
        return view('products');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeItems(Request $request)
    {
        //validation
                   

        //img 
        $imgName = time().'.'.$request->img->extension();

        $request->img->move(public_path('/assets_items/img/new'),$imgName);

        //table object creation
        $priceList = new pricelist();

        //table colomn assign
        $priceList->Items = $request->items;
        $priceList->Price = $request->price;
        $priceList->Range = $request->range;
        $priceList->Image = $imgName;

        //insert data
        $priceList->save();

        return redirect(route('temp1'))->with('successMsg','Data Successfully Inserted');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function destroy($id)
    {
        //
    }

    public function index()
    {
        $priceLists = pricelist::all();
        return view('/services' , compact('priceLists'));
    }
}
