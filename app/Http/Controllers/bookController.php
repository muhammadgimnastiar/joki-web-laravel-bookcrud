<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class bookController extends Controller
{
    //
    public function index(){
        $halaman = "Halaman Utama";
        return view('welcome', compact("halaman"));
        // $book = Book::get();
        // return view('product.index', compact('book'));
    }
}
