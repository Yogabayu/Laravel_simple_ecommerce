<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('app.index');
    }

    public function profil(){
        return view('app.profile');
    }

    // public function list()
    // {
    //     // $products = DB::table('products')->where('kategori','=','test')->get();
    //     $products = DB::table('products')->get();
  
    //     return view('app.product',compact('products'))
    //         ->with('i', (request()->input('page', 1) - 1) * 5);
    // }


    public function index()
    {
        $products = Product::latest()->paginate(5);
        
        // $products = DB::table('products')->where('kategori','=','test')->get();
  
        return view('products.index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
   
    public function pengharum()
    {
        $products = DB::table('products')->where('kategori','=','pengharum')->get();
  
        return view('app.pengharum',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function kantor()
    {
        $products = DB::table('products')->where('kategori','=','alat_kantor')->get();
  
        return view('app.kantor',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function tisue()
    {
        $products = DB::table('products')->where('kategori','=','tisue')->get();
  
        return view('app.tisue',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function kebersihan()
    {
        $products = DB::table('products')->where('kategori','=','alat_kesehatan')->get();
  
        return view('app.kebersihan',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
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
            'name' => 'required',
            'detail' => 'required',
            'kategori' => 'required',
            'satuan' => 'required',
            'tersedia' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
  
        Product::create($input);
   
        return redirect()->route('products.index')
                        ->with('success','Product created successfully.');
    }
   
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show',compact('product'));
    }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit',compact('product'));
    }
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
            'kategori' => 'required',
            'satuan' => 'required',
            'tersedia' => 'required',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }
        
        $product->update($input);
  
        return redirect()->route('products.index')
                        ->with('success','Product updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
  
        return redirect()->route('products.index')
                        ->with('success','Product deleted successfully');
    }
}
