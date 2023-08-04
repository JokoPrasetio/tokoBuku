<?php

namespace App\Http\Controllers;

use App\Http\Controllers\helper\helperController;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => 'Category || Toko Buku',
        ];

        return view('kategori.index', $data);
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
            'name' => 'required',
        ]);
        $data['uid'] = $uid;
        request()->validate([
            'image' => 'required|mimes:png,jpg,jpeg|max:2048'
        ]);
        $image = request()->file('image');
        $imageName = Str::random(40) . '.' . $image->getClientOriginalExtension();
        Storage::disk('image_category')->put($imageName, file_get_contents($image));
        $data['image'] = $imageName;
        // dd($data);
        category::create($data);
        return redirect('/category')->with(['alertSuccess' => 'Successfuly create category']);
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(category $category)
    {
        $imageCategory = $category->toArray();
        // dd($imageCategory);
        $category->delete();
        if ($imageCategory['image']) {
            Storage::disk('image_category')->delete($imageCategory['image']);
        }

        return back()->with(['alertSuccess' => 'Successfully delete category']);
    }

    public function dataTable()
    {
        return category::all();
    }
}
