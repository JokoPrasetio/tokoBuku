<?php

namespace App\Http\Controllers;

use App\Http\Controllers\helper\helperController;
use App\Models\category;
use App\Models\productBook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class productBookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = category::all();
        $data = [
            'title' => 'Product Book | Joko Prasetio',
            'category' => $category
        ];
        return view('productBook.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->toArray());
        $uid = (new helperController)->getUid();
        $data = $request->validate([
            'category_uid' => 'required',
            'name_produk' => 'required',
            'amount' => 'required',
            'title' => 'required',
            'address' => 'required',
            'deskripsi' => 'required',
            'price' => 'required'
        ]);
        $data['uid'] = $uid;

        request()->validate([
            'image' => 'required|mimes:png,jpg,jpeg'
        ]);
        $image = request()->file('image');
        $imageName = Str::random(40) . '.' . $image->getClientOriginalExtension();
        Storage::disk('image_product')->put($imageName, file_get_contents($image));
        $data['image'] = $imageName;
        // dd($data);
        productBook::create($data);
        return back()->with(['alertSuccess' => 'Successfulyy added product neww Congratolations']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $uid)
    {
        // dd($uid);
        $productBook = productBook::where('uid', $uid)->get()->toArray();
        $category = category::all();
        $data = [
            'title' => 'Edit Product Book | Joko Prasetio',
            'productBook' => $productBook[0],
            'categories' => $category,
        ];
        return view('productBook.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, productBook $uid)
    {
        // dd($request->toArray());
        // Validate the form data   
        $productImage = $uid->toArray();
        // dd($productImage);
        $request->validate([
            'category_uid' => 'required',
            'name_produk' => 'required',
            'amount' => 'required',
            'title' => 'required',
            'address' => 'required',
            'price' => 'required',
            'image' => 'image|mimes:jpeg,png,jpeg|max:2048',
        ]);
        $data = [
            'category_uid' => $request->input('category_uid'),
            'name_produk' => $request->input('name_produk'),
            'amount' => $request->input('amount'),
            'title' => $request->input('title'),
            'address' => $request->input('address'),
            'price' => $request->input('price'),
        ];
        if ($request->hasFile('image')) {
            Storage::disk('image_product')->delete($productImage['image']);
            $img = request()->file('image');
            $imgName = Str::random(40) . '.' . $img->getClientOriginalExtension();
            Storage::disk('image_product')->put($imgName, file_get_contents($img));
            $data['image'] = $imgName;
        }
        // dd($data);
        $uid->update($data);
        return redirect('/product-book')->with(['alertSuccess' => 'Successfuly Updated Product Book']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(productBook $product_book)
    {
        // dd($product_book->toArray());

        $image = $product_book->toArray();

        $product_book->delete();
        if ($image['image']) {
            Storage::disk('image_product')->delete($image['image']);
        }
        return back()->with(['alertSuccess' => 'Successfuly Deleted Product Book']);
    }

    public function dataTable()
    {
        return productBook::all();
    }
}
