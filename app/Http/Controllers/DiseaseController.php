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
         $diseases = Disease::all();
        return view('backend.diseases.index',compact('diseases'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        
        $products = Product::all();
        return view('backend.diseases.create',compact('products'));

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
            "about" => 'required',
            "description" => 'required',
            "product"     => 'required|array'
         ]); 

        $description=explode('/',$request->description);
        // dd($description,$request->product);
         $disease = new Disease;
         $disease->name = $request->name;
         $disease->about = $request->about;   
         $disease->save();
         $product = $request->product;

        

        // var_dump($description); 
        // var_dump($request->product);
        // die();
                        
                    
                

                   //  $disease->products()->attach($pts, ['description'=>$des]);


             for($i=0; $i<count($product);$i++){
                $array = [$product[$i] => ['description' => $description[$i]]
            ];

            $disease->products()->attach($array);
             }

                       
                     
                
                 

             
       return redirect()->route('diseases.create');
           
            
            
        
        

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
        //By Ye Win Naing
         return view('backend.diseases.edit',compact('disease'));

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
         //By Ye Win Naing
        $request->validate([
            'name'=> 'required',
            'about' => 'required',
        ]);

        $disease->name = $request->name;
        $disease->about = $request->about;
        $disease->save();
        return redirect()->route('diseases.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Disease  $disease
     * @return \Illuminate\Http\Response
     */
    public function destroy(Disease $disease)
    {
        // //By Ye Win Naing
         $disease->delete();
        return redirect()->route('diseases.index');
    }
}
