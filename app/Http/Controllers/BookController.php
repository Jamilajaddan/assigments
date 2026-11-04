<?php 

namespace App\Http\Controllers; 

use Illuminate\Http\Request; 

class BookController extends Controller 
{ 
    public function store(Request $request)
    {
        $request->validate([
            'book_title' => 'required',
            'book_price' => 'required|numeric',
            'author' => 'required',
        ]);
    }
}
