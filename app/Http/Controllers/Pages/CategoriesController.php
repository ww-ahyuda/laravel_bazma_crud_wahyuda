<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\CategoriesBooks;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        return view("pages.categories.index");
    }
    public function create()
    {
        return view("pages.categories.create");
    }
    public function store(Request $request)
    {
        
        $request->validate([
            'name'=>'required|unique:categories_books,name',
        ],[
            'name.required'=>'nama harus diisi',
            'name.unique'=>'nama telah dipakai'
        ]);
        $data = [
            'name'=>$request->name,
        ];
        CategoriesBooks::create($data);

        return 'hi';
    }
    public function show(Request $request, string $id)
    {
    }
    public function update(Request $request, string $id)
    {
    }
    public function destroy($id)
    {
    }
}
