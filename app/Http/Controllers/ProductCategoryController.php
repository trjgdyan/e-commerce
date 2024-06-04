<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductCategory;
use Illuminate\Support\Facades\Storage;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('product-categories.index', [
            'categories' => ProductCategory::get(),
        ]);
    }

    public function home()
    {
        $categories = ProductCategory::all();
        return view('frontend.home', [
            'categories' => $categories,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product-categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:50'],
            'slug' => ['required', 'string', 'max:50'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048']
        ]);

        $image = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('images');
        }

        $category = new ProductCategory();
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->image = $image;
        $category->save();

        return redirect()->route('product-categories.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('product-categories.show', [
            'category' => ProductCategory::find($id),


        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = ProductCategory::find($id);
        return view('product-categories.edit', [
            'category' => $category,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:50'],
            'slug' => ['required', 'string', 'max:50'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048']
        ]);

        $category = ProductCategory::find($id);

        $image = $category->image;

        if ($request->hasFile('image')) {
            if ($image !== null) {
                if (Storage::exists($category->image)) {
                    Storage::delete($category->image);
                }
            }
            $image = $request->file('image')->store('images');
        }

        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->image = $request->image;
        $category->save();

        return redirect()->route('product-categories.index')->with('info', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = ProductCategory::find($id);
        $category->delete();

        return redirect()->route('product-categories.index')->with('error', 'Data berhasil dihapus');
    }
}
