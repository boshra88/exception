<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product_img;
use App\Product;
use App\Product_menu;
use App\For_menu;
use App\For_image;
use App\Slider;
use App\Logo;
use View;
use Auth;
    

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
  {
    //its just a dummy data object.
    $logo = Logo::first();

    // Sharing is caring
    View::share('logo', $logo);
  }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)

    {  
         $user = Auth::user();
         $sliders=Slider::all();
         $products_img =Product_img::orderBy('id', 'asc')->get();
        
         $menues =Product_menu::orderBy('id', 'desc')->get();
          $first=$menues->first();
         if($first)
         {
         $second =Product_menu::where('id','<>',$first->id)->get();


                if($request->qq)
                  {
                    $products= Product::where('tittle','LIKE','%'.$request->qq.'%')->get();
                    $in_menus= For_menu::where('tittle','LIKE','%'.$request->qq.'%')->get();
                    $in_images=For_image::where('tittle','LIKE','%'.$request->qq.'%')->get();
                      return view('products.search',compact('products','user','second','first' ,'request','in_menus','in_images'));  


                 }

        return view('index',compact('products_img','user','second','first','request','sliders'));
        }


    if($request->qq)
      {
        $products= Product::where('tittle','LIKE','%'.$request->qq.'%')->get();
                    $in_menus= For_menu::where('tittle','LIKE','%'.$request->qq.'%')->get();
                    $in_images=For_image::where('tittle','LIKE','%'.$request->qq.'%')->get();
                      return view('products.search',compact('products','user','second','first' ,'request','in_menus','in_images'));      


     }

         return view('index',compact('products_img','user','request','first','sliders'));

    }
}
