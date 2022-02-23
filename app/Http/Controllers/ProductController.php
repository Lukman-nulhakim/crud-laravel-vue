<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = Products::all();
        return response()->json($result);
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
    public function store(Request $request)
    {
        try {
            // $request->validate([
            //     'name' => 'required',
            //     'price' => 'required',
            //     'description' => 'required',
            //     'imageFile' => 'required|mimes:jpg,jpeg,png|max:2048',
            //     'variant' => 'required'
            // ]);

            if ($request->file()) {
                $imageName = time().'_'.$request->imageFile->getClientOriginalName();
                $path = $request->file('imageFile')->storeAs('product-image', $imageName, 'public');

                $result = Products::create([
                    'name' => $request['name'],
                    'price' => $request['price'],
                    'description' => $request['description'],
                    'image' => '/storage/'. $path,
                    'variant' => $request['variant']
                ]);
            }
            return response()->json($result);
        } catch (\Throwable $th) {
            return "error : " .$th->getMessage();
        }
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
        if ($id) {
            $result = Products::find($id);
            return response()->json($result);
        }
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
        dd($request->all());
        if ($id) {
            $product = Products::find($id);
            dd($request->all());
            // if ($request->file()) {
            //     $imageName = time().'_'.$request->imageFile->getClientOriginalName();
            //     $path = $request->file('imageFile')->storeAs('product-image', $imageName, 'public');

            //     $result = Products::create([
            //         'name' => $request['name'],
            //         'price' => $request['price'],
            //         'description' => $request['description'],
            //         'image' => '/storage/'. $path,
            //         'variant' => $request['variant']
            //     ]);
            // }
            $result = $product->update($request->all());
            return response()->json($result);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if ($id) {
            $product = Products::find($id);
            $product->delete();
            return response()->json(['status' => true]);
        }
    }
}
