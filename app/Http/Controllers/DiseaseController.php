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
            "photo" => 'required',
            "about" => 'required',
            "description" => 'required',
            "product"     => 'required|array'
         ]); 

         $imageName = time().'.'.$request->photo->extension();

        $request->photo->move(public_path('backend/diseaseimg'),$imageName);

        $path = 'backend/diseaseimg/'.$imageName;


        $description=explode('/',$request->description);
        // dd($description,$request->product);
         $disease = new Disease;
         $disease->name = $request->name;
         $disease->photo = $path;
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
        $products = Product::all();
         return view('backend.diseases.edit',compact('disease','products'));

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
           
            "name" => 'required',
            "photo" => 'sometimes',
            "oldphoto" =>'required',
            "about" => 'required',
            "description" => 'required',
            "product"     => 'required|array'
         ]); 


        //  $imageName = time().'.'.$request->photo->extension();

        // $request->photo->move(public_path('backend/diseaseimg'),$imageName);

        // $path = 'backend/diseaseimg/'.$imageName;

         if($request->hasFile('photo')){

                $imageName = time().'.'.$request->photo->extension();

                $request->photo->move(public_path('backend/diseaseimg'),$imageName);

                $path = 'backend/diseaseimg/'.$imageName;


          }else{

            $path=$request->oldphoto;

          }


        // $description=explode('/',$request->description);
        // dd($description,$request->product);
        
         $disease->name = $request->name;
         $disease->photo = $path;
         $disease->about = $request->about;   
         $disease->save();
         $disease->products()->deatch();
         $product = $request->product;
            $description=explode('/',$request->description);

           for($i=0; $i<count($product);$i++){
                $array = [$product[$i] => ['description' => $description[$i]]
            ];

            $disease->products()->attach($array);
    }
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
