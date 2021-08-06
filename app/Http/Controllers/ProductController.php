<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    
{        return view('admin.produk.index', [
            'products' => Product::paginate(5)
        ]);
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
    public function store()
    {
        $attr = $this->validate(request(), [
            'name' => 'required',
            'img' => 'required'
        ]);
        $img_req = request('img');
        $ekstName = time() . rand(100, 999) . "." . $img_req->getClientOriginalName();
        $img_req->move(public_path() . '/product_images', $ekstName);
        $attr['img'] = $ekstName;
        Product::create($attr);
        return back()->with('success', 'Data berhasil di buat!');
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
        $produk = Product::findOrFail($id);
        return view('admin.produk.edit-produk', compact('produk'));
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
        $produk = Product::findOrFail($id);
        if(request()->file('product_images') == "")
        {
            $produk->img = $produk->img;
        } else {
            if(request()->hasFile('img'))
            {
                $file = 'product_images/'.$product_images->img;
                if(is_file($file))
                {
                    unlink($file);
                }
                $file = request()->file('img');
                $filename = time().rand(100,999).".".$file->getClientOriginalName();
                request()->file('img')->move('product_images/', $filename);
                $produk->img = $filename;
                $produk->img = $request->img;
            }
        }
        $produk->save();
        session()->flash('success', 'Data Was Updated Successfully');
        return redirect()->route('admin.product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::findOrFail($id)->delete();
        return back()->with('success', 'Data di hapus!');
    }
}
