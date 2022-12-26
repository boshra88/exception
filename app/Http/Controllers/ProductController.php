<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product ;
use App\Product_img ;
use App\Catalog;
use App\Product_menu;
use App\For_menu;
use App\For_image;
use App\Logo;
use View;
use Auth;




class ProductController extends Controller
{

   public function __construct()
  {
    //its just a dummy data object.
    $logo = Logo::first();

    // Sharing is caring
    View::share('logo', $logo);
  }
    // index page

     public function index(Request $request)
    {
        $user = Auth::user();
       $products =Product::orderBy('id', 'desc')->paginate(10);

        $menues =Product_menu::orderBy('id', 'desc')->get();
         $first=$menues->first();
     if($first){
         $second =Product_menu::where('id','<>',$first->id)->get();

           if($request->qq)
      {
        $products= Product::where('tittle','LIKE','%'.$request->qq.'%')->paginate(10);
       
      }
       return view('products.index', compact('products','first','second' ,'user','request'));

    }

       return view('products.index', compact('products' ,'user','request' ,'first'));
    }


     //show product
    public function show($id)

    { 
    	$product_details = Product::find($id);
      $products =Product::orderBy('id', 'desc')->get();
       $menues =Product_menu::orderBy('id', 'desc')->get();
       $first=$menues->first();
  if($first){
       
       $second =Product_menu::where('id','<>',$first->id)->get();
    	return view('products.show' , compact('product_details','first' ,'products','second'));

    }
        return view('products.show' , compact('product_details','products','first'));


    }

 //show product
    public function img_show($id)

    { 
      $product_details = Product_img::find($id);
      $products =$product_details->for_images;
       $menues =Product_menu::orderBy('id', 'desc')->get();
       $first=$menues->first();
     if($first){   
       $second =Product_menu::where('id','<>',$first->id)->get();
      return view('products.show_image' , compact('product_details','first' ,'products','second'));

    }

      return view('products.show_image' , compact('product_details' ,'products' ,'first'));

    }


      public function img_details($id)

    { 
      $product_details = For_image::find($id);
       $menues =Product_menu::orderBy('id', 'desc')->get();
       $first=$menues->first();
     if($first){   
       $second =Product_menu::where('id','<>',$first->id)->get();
      return view('products.details' , compact('product_details','first' ,'products','second'));

    }

      return view('products.details' , compact('product_details' ,'products' ,'first'));

    }


 //show menu
    public function menu_show($id)


    { 
      $product_details = Product_menu::find($id);
      $products =$product_details->for_menus;
       $menues =Product_menu::orderBy('id', 'desc')->get();
       $first=$menues->first();
        if($first){   
       $second =Product_menu::where('id','<>',$first->id)->get();
      return view('products.show_menu' , compact('product_details','first' ,'products','second'));

    }

      return view('products.show_menu' , compact('product_details','products' ,'first'));

  }


  public function menu_details($id)
  {
     $product_details = For_menu::find($id);
       $menues =Product_menu::orderBy('id', 'desc')->get();
       $first=$menues->first();
        if($first){   
       $second =Product_menu::where('id','<>',$first->id)->get();
      return view('products.details' , compact('product_details','first' ,'products','second'));

    }

      return view('products.details' , compact('product_details','products' ,'first'));

  }



     public function catalogs(Request $request)
    {
        $user = Auth::user();
       $catalogs =Catalog::orderBy('id', 'desc')->paginate(10);
        $menues =Product_menu::orderBy('id', 'desc')->get();
         $first=$menues->first();
       if($first){   
         $second =Product_menu::where('id','<>',$first->id)->get();

           if($request->q2)
      {
        $catalogs= Catalog::where('tittle','LIKE','%'.$request->q2.'%')->paginate(10);
       
      }
       return view('pages.search', compact('catalogs','first','second','user','request'));
    }

           if($request->q2)
      {
        $catalogs= Catalog::where('tittle','LIKE','%'.$request->q2.'%')->paginate(10);
       
      }

     return view('pages.search', compact('catalogs','user','request' ,'first'));

  }


    
   

    
  



}
