<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        $Categories = Categories::all();
      return view ('Categories.index')->with('Categories', $Categories);
    }
 
    
    public function create()
    {
        return view('Categories.create');
    }
 
  
    public function store(Request $request)
    {
        $input = $request->all();
        Categories::create($input);
        return redirect('Categories')->with('flash_message', 'Categories Addedd!');  
    }
 
    
    public function show($id)
    {
        $Categories = Categories::find($id);
        return view('Categories.show')->with('Categories', $Categories);
    }
 
    
    public function edit($id)
    {
        $Categories = Categories::find($id);
        return view('Categories.edit')->with('Categories', $Categories);
    }
 
  
    public function update(Request $request, $id)
    {
        $Categories = Categories::find($id);
        $input = $request->all();
        $Categories->update($input);
        return redirect('Categories')->with('flash_message', 'Categories Updated!');  
    }
 
  
    public function destroy($id)
    {
        Categories::destroy($id);
        return redirect('Categories')->with('flash_message', 'Categories deleted!');  
    }
}