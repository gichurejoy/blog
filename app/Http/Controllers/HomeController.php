<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
      //  $allcategories = ['Category 1' , 'Category 2'];

     $allCategories = Category::all();
     //$allCategories = DB::table('categories')->get(); 
     return view('home', ['categories' => $allCategories]);
    }
}
