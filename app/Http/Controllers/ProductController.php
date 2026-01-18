<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;



class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Product::all();
        return view('backend.product.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Category::all();
        return view('backend.product.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // ✅ Validation
        $request->validate([
            'product_name' => 'required|min:3|max:100',
            'price'        => 'required|numeric',
            'stock'        => 'required|numeric',
            'category'     => 'required',
            'sku'          => 'required',
            'photo'        => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // ✅ Image upload
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $filename = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('product_photo'), $filename);
            $product_img = 'product_photo/' . $filename;
        } else {
            $product_img = 'product_photo/nophoto.jpg';
        }

        // ✅ Data insert
        Product::create([
            'name'        => $request->product_name,
            'details'     => $request->details,
            'sku'         => $request->sku,
            'stock'       => $request->stock,
            'price'       => $request->price,
            'image'       => $product_img,
            'category_id' => $request->category,
        ]);

        return redirect()->route('product.index')
            ->with('success', 'Product Added Successfully');
    }


    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $imagePath = public_path($product->image);

        if (File::exists($imagePath) && $product->image != 'product_photo/nophoto.jpg') {
            unlink($imagePath);
        }

        $product->delete();

        return redirect()->route('product.index')->with('success', 'Successfully Delete');
    }
}
