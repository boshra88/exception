<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product_img;

class ProductImgController extends Controller
{

 public function edit(Request $request)
    {  
   
$this->validate($request, [

    'email'=>'unique:users' ,
    'password' => 'confirmed|min:6',
]);
        
        $Product_img = new Product_img;
        $Product_img->tittle=$request->form34;
        $Product_img->body=$request->form7;
        $Product_img->description=$request->form29;
        $Product_img->tittle_1=$request->form32;
        $Product_img->body_1=$request->email;
        $Product_img->tittle_2=$request->form33;
        $Product_img->body_2=$request->form8;
       
      

      

      
      
        $file=$request->file('image');
        $path = 'img/products';
        $filename =$file->getClientOriginalName();
        $file->move($path,$filename);
        $Product_img->image=$filename;   

         $file=$request->file('image_1');
        $path_1 = 'img/products';
        $filename_1 =$file->getClientOriginalName();
        $file->move($path_1,$filename_1);
        $Product_img->image=$filename_1; 

         $file=$request->file('image_2');
        $path_2 = 'img/products';
        $filename_2 =$file->getClientOriginalName();
        $file->move($path_2,$filename_2);
        $Product_img->image=$filename_2;    

        $Product_img->save();  

         return redirect('create_user');   


         }   
       

}
