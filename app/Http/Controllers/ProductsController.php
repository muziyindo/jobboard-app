<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $title = 'Product' ;
        $description = 'Welcome to Laravel' ;
        return view('products.index', compact('title','description'));
    }

    public function about(){

        $data = [
            'product 1'=>'iphone',
            'product 2'=>'samsung'
        ];
        return view('products.about')->with('data',$data);
    }

    public function show($name){

        $data = [
            'product1'=>'iphone',
            'product2'=>'samsung'
        ];
        return view('products.detail',[
            'product'=>$data[$name] ?? 'Product '.$name.' does not exist ',
            'age'=>'29'
        ]);

    }

    function showBooks(){

        //display route named books
        echo(route('books'));

    }
}
