<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        return view('products.index', [
            'products' => Product::latest()->get(),
        ]);
    }

    public function home()
    {
        $products = Product::all();
        return view('frontend.home', [
            'products' => $products,
        ]);
    }

    public function create()
    {
        return view('products.create', [
            'categories' => ProductCategory::get(),
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:50'],
            'price' => ['required', 'string'],
            'stock' => ['required', 'string'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048']
        ]);

        $image = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('images');
        }

        $product = new Product();
        $product->name = $validated['name'];
        $product->product_category_id = $request->product_category_id;
        $product->price = $validated['price'];
        $product->stock = $validated['stock'];
        $product->image = $image;
        $product->save();

        return redirect()->route('products.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit', [
            'product' => $product,
            'categories' => ProductCategory::get(),
        ]);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:50'],
            'price' => ['required', 'string'],
            'stock' => ['required', 'string'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048']
        ]);

        $product = Product::find($id);
        $image = $product->image;

        if ($request->hasFile('image')) {
            if ($image !== null && Storage::exists($product->image)) {
                Storage::delete($product->image);
            }
            $image = $request->file('image')->store('images');
        }

        $product->name = $request->name;
        $product->product_category_id = $request->product_category_id;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->image = $image;
        $product->save();

        return redirect()->route('products.index')->with('info', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        if ($product->image && Storage::exists($product->image)) {
            Storage::delete($product->image);
        }
        $product->delete();

        return redirect()->route('products.index')->with('error', 'Data berhasil dihapus');
    }

    public function addCart($id)
    {
        $product = Product::find($id);
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                'name' => $product->name,
                'price' => (float) $product->price,
                'quantity' => 1,
                'image' => $product->image
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function increaseCartQuantity($id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        }

        session()->put('cart', $cart);
        return redirect()->route('cart');
    }

    public function decreaseCartQuantity($id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']--;
            if ($cart[$id]['quantity'] <= 0) {
                unset($cart[$id]); // Hapus produk dari keranjang jika kuantitasnya kurang dari atau sama dengan nol
            }
        }

        session()->put('cart', $cart);
        return redirect()->route('cart');
    }

    public function cart()
    {
        $cart = session()->get('cart', []);
        return view('frontend.cart', compact('cart'));
    }

    public function checkout(Request $request)
    {
        $nama_pembeli = Auth::user()->name;
        $request->session()->put('nama_pembeli', $nama_pembeli);

        return redirect()->route('print_receipt');
    }

    public function printReceipt(Request $request)
    {

        $nama_pembeli = $request->session()->get('nama_pembeli');
        $alamat_pembeli = $request->session()->get('alamat_pembeli');

        return view('frontend.print_receipt', compact('nama_pembeli', 'alamat_pembeli'));
    }

    public function addCartPrint($id)
    {
        $product = Product::find($id);
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                'name' => $product->name,
                'price' => (float) $product->price,
                'quantity' => 1,
                'image' => $product->image
            ];
        }

        session()->put('cart', $cart);
        // return redirect()->back()->with('success', 'Product added to cart successfully!');
        return redirect()->route('print_receipt');
    }
}
