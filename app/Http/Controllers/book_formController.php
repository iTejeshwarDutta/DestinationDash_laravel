<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\book_form;

class book_formController extends Controller
{
    
    function Addbook_form(Request $req){
        $book_form= new book_form;
        $book_form->name=$req->name;
        $book_form->email=$req->email;
        $book_form->address=$req->address;
        $book_form->phone=$req->phone;
        $book_form->location=$req->location;
        $book_form->guests=$req->guests;
        $book_form->arrivals=$req->arrivals;
        $book_form->leaving=$req->leaving;
$book_form->save();
return redirect('book');
    }
}
