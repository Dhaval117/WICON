<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function home(){
    	return view('user.home');
    }

    public function about(){
    	return view('user.about');
    }

    public function menu(){
    	return view('user.menu');
    }

    public function contact(){
    	return view('user.contact');
    }

    public function admin(){
        return view('auth.login');
    }

    public function base(){
        return view('admin.base');
    }

    public function menu3(){
        $items = DB::select('select * from items'); 
        return view('user.menu3',['items'=>$items]);
    }

    public function checkout(){
        return view('user.checkout');
    }

    public function cart_add($id){
       $item = DB::select('select * from items where Item_ID = ?',[$id]);
       $name = $item[0]->Item_Name;
       $price = $item[0]->Item_Price;
       $quantity = 1;
       DB::insert('insert into carts (Item_Name,Item_Price,Item_Quantity) values(?,?,?)',[$name,$price,$quantity]);
    }
}