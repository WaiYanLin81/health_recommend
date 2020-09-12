<?php

namespace App\Http\Controllers;

use App\Disease;
use App\Product;
use Illuminate\Http\Request;

class DiseaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        $diseases =Disease::all( );
        $products = Product::all();
        return view('backend.diseases.create',compact('products','diseases'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       

        $request->validate([
           
            "name" => 'required',
            "description" => 'required',
            "product"     => 'required|array'
         ]); 

        $description=explode('/',$request->description);
        // dd($description,$request->product);
         $disease = new Disease;
         $disease->name = $request->name;   
         $disease->save();
         $product = $request->product;

        

        // var_dump($description); 
        // var_dump($request->product);
        // die();
                        
                    
                

                   //  $disease->products()->attach($pts, ['description'=>$des]);


                   //      }
            for($j=0;$j<count($product);$j++){
                for($i=0;$i<count($description);$i++){
                     $disease->products()->attach($product,['description' =>$description[$i]]);
                 }
                }

               

                       
                     
                
                 

             
      
           
            
            
        
        

    } 

    /**
     * Display the specified resource.
     *
     * @param  \App\Disease  $disease
     * @return \Illuminate\Http\Response
     */
    public function show(Disease $disease)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Disease  $disease
     * @return \Illuminate\Http\Response
     */
    public function edit(Disease $disease)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Disease  $disease
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Disease $disease)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Disease  $disease
     * @return \Illuminate\Http\Response
     */
    public function destroy(Disease $disease)
    {
        //
    }
}
