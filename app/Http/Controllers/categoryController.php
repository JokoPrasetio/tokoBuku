<?php

namespace App\Http\Controllers;

use App\Http\Controllers\helper\helperController;
use App\Models\category;
use Illuminate\Http\Request;

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
        $uid = (new helperController)->getUid();
        // $data = [
        //     'uid' => $uid,
        //     'name' => request('name'),
        //     'description' => request('description')
        // ];
        $data = $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);
        $data['uid'] = $uid;
        // dd($data);
        category::create($data);
        return redirect('/category');
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
    public function destroy(string $id)
    {
        //
    }
}
