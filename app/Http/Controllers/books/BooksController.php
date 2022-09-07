<?php

namespace App\Http\Controllers\books;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index(){
        return \View('books/listarBooks');
    }    
}
