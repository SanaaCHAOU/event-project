<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Categories;

class CategoryController extends Controller
{

    public function create(){
        return view('category.create');


    }

    public function store(Request $req){
        $cat = new Categories();
        $cat->category_label= $req->input('category');
        $cat->description= $req->input('description');
        $cat->save();
        return redirect('table-list');
    }

    public function edit($category_id){

        $listcat = Categories::where('category_id', '=', $category_id)->firstOrFail();
        return view('category.edit', ['cat' => $listcat]);

    }

    public function update(Request $req, $category_id){
        $listcat = Categories::where('category_id', '=', $category_id)->firstOrFail();
        $listcat->category_label = $req->input('category');
        $listcat->description = $req->input('description');
        $listcat->save();
        return redirect('table-list');

    }

    public function destroy(Request $req, $category_id){

        $listcat = Categories::where('category_id', '=', $category_id)->firstOrFail();
        $listcat->delete();
        return redirect('table-list');


    }
}
