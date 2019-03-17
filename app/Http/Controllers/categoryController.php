<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        //return view('namaview',compact('namavariabel'));
        return view('category',compact('categories'));

        // sebelum dikasih viewdd($categories);
        //ga harus pakai sih return Category::all()->toArray();
    }
    public function cari(Request $request)
    {
        $cari = $request->cari;

        $categories=Category::where('name_category','like',"%".$cari."%")->paginate();

        return view('category.index',['categories'=> $categories]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        \App\Category::create($request->all());
        return redirect('dataCategory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
      $categories=\App\Category::find($id);
        return view('category.edit',['categories'=>$categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $categories=\App\Category::find($id);
        $categories->update($request->all());
        return redirect('dataCategory');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categories=\App\Category::find($id);
        $categories->delete($categories);
        return redirect('dataCategory');
    }
}
