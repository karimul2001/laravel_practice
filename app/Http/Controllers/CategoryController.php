<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $c_name = Category::all();

        //dd($c_name);

        return view('backend.category.index', compact("c_name")); //compact('c_name') means 'c_name' => $c_name
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validation
        $request->validate(
            [
                'category' => 'required|max:10|min:3|unique:categories,name' //validatin condition
            ],
            [
                'required' => 'Category must be Entry',
                'max' => 'Category name Maximum 10 Later',
                'min' => 'Category name Minimum 3 Later'
            ]
        );
        //dd(request('category')) ;

        $category = [
            'name' => $request->category
        ];

        Category::create($category);
        return redirect()->route('category.index')->with('success', 'Category Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('backend.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $request->validate(
            [
                'category' => 'required|max:10|min:3|unique:categories,name' //validatin condition
            ],
            [
                'required' => 'Category must be Entry',
                'max' => 'Category name Maximum 10 Later',
                'min' => 'Category name Minimum 3 Later'
            ]
        );


        $data = [
            'name' => $request->category
        ];
        $category->update($data);
        return redirect()->route('category.index')->with('success', 'Successfully Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //delete function
        $category->delete();
        return redirect()->route('category.index')->with('success', 'Delete Succussfully');
    }
}
