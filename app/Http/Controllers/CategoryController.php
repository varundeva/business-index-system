<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware("auth");
    }



    public function index()
    {
        $categories = Category::all()->reverse()->toArray();
        // dd($categories);
        return view('category.index', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view("category.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:categories,name'
        ]);

        $category = new Category;
        $category->name = $request->name;
        $category->save();

        return redirect()->route('category.index')->with('success', 'Permission Added Successfully');
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
        $category = Category::where('id', $id)->get()->toArray();
        return view('category.edit', ['category' => $category]);
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
        $category = Category::where('id', $id)->get()->toArray();

        if ($request->name == $category[0]['name']) {
            return redirect(route('category.index'))->with('success', 'Nothing Changed..!');
        }
        $this->validate($request, [
            'name' => 'required|unique:categories,name'
        ]);
        $updateCategory = Category::find($id);
        $updateCategory->name = $request->name;
        $updateCategory->update();

        return redirect(route('category.index'))->with('success', 'Category Name Updated..!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Category::destroy($id)) {
            return redirect()->back()->with('success', 'Category Deleted Successfully');
        } else {
            return redirect()->back()->with('error', 'Something Wrong!');
        }
    }
}
