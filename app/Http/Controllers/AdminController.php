<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Product_img;
use App\Product_menu;
use App\Product;
use App\User;
use App\Catalog;
use App\Contact;
use App\For_image;
use App\For_menu;
use App\Logo;
use App\Slider;
use View;
use Validator;







class AdminController extends Controller
{
    public function __construct()
  {
    //its just a dummy data object.
    $logo = Logo::first();

    // Sharing is caring
    View::share('logo', $logo);
  }

     public function  user_management(Request $request)
    { 
       $users =User::where('id','<>',0)->orderBy('id', 'asc')->paginate(10);

         if($request->q)
      {
        $users= User::where('name','LIKE','%'.$request->q.'%')->orWhere('id',$request->q)->paginate(10);
      }
       return view('admin.user_management',compact('users','request'));
    }


    public function  image_management(Request $request)
    { 
       $products =Product_img::where('id','<>',0)->orderBy('id', 'asc')->paginate(10);

         if($request->q)
      {
        $products= Product_img::where('tittle','LIKE','%'.$request->q.'%')->orWhere('id',$request->q)->paginate(10);
      }
       return view('admin.image_management',compact('products','request'));
    }

 public function  product_management(Request $request)
    { 
        $products =Product::where('id','<>',0)->orderBy('id', 'asc')->paginate(10);

         if($request->q)
      {
        $products= Product::where('tittle','LIKE','%'.$request->q.'%')->orWhere('id',$request->q)->paginate(10);
      }
       return view('admin.product_management',compact('products','request'));
    }


    public function  catalog_management(Request $request)
    { 
        $catalogs =Catalog::where('id','<>',0)->orderBy('id', 'asc')->paginate(10);

         if($request->q)
      {
        $catalogs = Catalog::where('tittle','LIKE','%'.$request->q.'%')->orWhere('id',$request->q)->paginate(10);
      }
       return view('admin.catalog_management',compact('catalogs','request'));
    }



    public function  menu_management(Request $request)
    { 
        $menus =Product_menu::where('id','<>',0)->orderBy('id', 'asc')->paginate(10);

         if($request->q)
      {
        $menus = Product_menu::where('tittle','LIKE','%'.$request->q.'%')->orWhere('id',$request->q)->paginate(10);
      }
       return view('admin.menu_management',compact('menus','request'));
    }


      public function  contact_management(Request $request)
    { 
        $contacts =Contact::where('id','<>',0)->orderBy('id', 'asc')->paginate(10);

         if($request->q)
      {
        $contacts = Contact::where('name','LIKE','%'.$request->q.'%')->orWhere('id',$request->q)->paginate(10);
      }
       return view('admin.contact_management',compact('contacts','request'));
    }


      public function  slider_management(Request $request)
    { 
        $sliders =Slider::where('id','<>',0)->orderBy('id', 'asc')->paginate(10);

         if($request->q)
      {
        $sliders = Slider::where('name','LIKE','%'.$request->q.'%')->orWhere('id',$request->q)->paginate(10);
      }
       return view('admin.slider_management',compact('sliders','request'));
    } 


//products
 public function add_product(Request $request)
    {  

     
          $exist = \App\Product::where("tittle", "=", $request->input('form34'))->first();

         if($exist != null) {

     return redirect('/admin/products_management')->with('error', 'The tittle has already exist ');   

   } 

          $Product_img = new Product;
        $Product_img->tittle=$request->form34;
        $Product_img->body=$request->form7;
        $Product_img->description=$request->form29;
        $Product_img->tittle_1=$request->form32;
        $Product_img->body_1=$request->form8;
        $Product_img->tittle_2=$request->form33;
        $Product_img->body_2=$request->form9;
       
      

      

      
        if ($request->hasFile('img')) {
        $image = $request->file('img');
        $name = $image->getClientOriginalName();
        $destinationPath = public_path('../../public_html/img/products');
        $image->move($destinationPath, $name);
        $Product_img->image=$name;

        }

         
        if ($request->hasFile('image_1')) {
        $image1 = $request->file('image_1');
        $name1 = $image1->getClientOriginalName();
        $destinationPath1 = public_path('../../public_html/img/products');
        $image1->move($destinationPath1, $name1);
        $Product_img->image_1=$name1;

        }

         if ($request->hasFile('image_2')) {
        $image2 = $request->file('image_2');
        $name2 = $image2->getClientOriginalName();
        $destinationPath2 = public_path('../../public_html/img/products');
        $image2->move($destinationPath2, $name2);
        $Product_img->image_2=$name2;

        }
      
      
      


        $Product_img->save();
           
       
         return redirect('/admin/products_management')->with('status', 'You have successfully Created! ');  


          
       }



 public function update_product(Request $request)
    {  
   
        

           $Product_img = Product::find($request->pro_id);

              if($request->input('form34')!=  $Product_img->tittle ){

          $exist = \App\Product::where("tittle", "=", $request->input('form34'))->first();

         if($exist != null) {

     return redirect('/admin/products_management')->with('error', 'The tittle has already exist ');   

   }

}
        $Product_img->tittle=$request->form34;
        $Product_img->body=$request->form7;
        $Product_img->description=$request->form29;
        $Product_img->tittle_1=$request->form32;
        $Product_img->body_1=$request->form8;
        $Product_img->tittle_2=$request->form33;
        $Product_img->body_2=$request->form9;
       
      

      

      
        if ($request->hasFile('img')) {
        $image = $request->file('img');
        $name = $image->getClientOriginalName();
        $destinationPath = public_path('../../public_html/img/products');
        $image->move($destinationPath, $name);
        $Product_img->image=$name;

        }

         
        if ($request->hasFile('image_1')) {
        $image1 = $request->file('image_1');
        $name1 = $image1->getClientOriginalName();
        $destinationPath1 = public_path('../../public_html/img/products');
        $image1->move($destinationPath1, $name1);
        $Product_img->image_1=$name1;

        }

         if ($request->hasFile('image_2')) {
        $image2 = $request->file('image_2');
        $name2 = $image2->getClientOriginalName();
        $destinationPath2 = public_path('../../public_html/img/products');
        $image2->move($destinationPath2, $name2);
        $Product_img->image_2=$name2;

        }
      
      
      


        $Product_img->save();
         return redirect('/admin/products_management')->with('status', 'You have successfully Updated! ');   


          
       }


     public function destroy_product(Request $request)
    {
          $Product_img= Product::find($request->del_pro);
           $Product_img->delete();
         return redirect('/admin/products_management')->with('error', 'You have deleted ');   

    }

    

    


   //Product_img

    public function products_for_image($id , Request $request)
    {
         $image=Product_img::find($id);
             $products = For_image::where('product_img_id','=', $id)->orderBy('id', 'asc')->paginate(10);

         if($request->q)
      {
         $products =  For_image::where('product_img_id','=', $id)->where('tittle','LIKE','%'.$request->q.'%')->orWhere('id',$request->q)->paginate(10);
      }

                
          
    
      
         return view('admin.for_image' , compact('image' ,'request', 'products'));
       
    }




 public function add_for_image(Request $request)
    {  
            $exist = \App\For_image::where('product_img_id','=', $request->image_id )->where("tittle", "=", $request->input('form34'))->first();

         if($exist != null) {

     return back()->with('error', 'The tittle has already exist ');   

   }
      
          $for_image= new For_image;
            $for_image->product_img_id=$request->image_id ;
        $for_image->tittle=$request->form34;
        $for_image->body=$request->form7;
        $for_image->description=$request->form29;
        $for_image->tittle_1=$request->form32;
        $for_image->body_1=$request->form8;
        $for_image->tittle_2=$request->form33;
        $for_image->body_2=$request->form9;
       
      

      

      
        if ($request->hasFile('img')) {
        $image = $request->file('img');
        $name = $image->getClientOriginalName();
        $destinationPath = public_path('../../public_html/img/products');
        $image->move($destinationPath, $name);
        $for_image->image=$name;

        }

         
        if ($request->hasFile('image_1')) {
        $image1 = $request->file('image_1');
        $name1 =$image1->getClientOriginalName();
        $destinationPath1 = public_path('../../public_html/img/products');
        $image1->move($destinationPath1, $name1);
        $for_image->image_1=$name1;

        }

         if ($request->hasFile('image_2')) {
        $image2 = $request->file('image_2');
        $name2 = $image2->getClientOriginalName();
        $destinationPath2 = public_path('../../public_html/img/products');
        $image2->move($destinationPath2, $name2);
        $for_image->image_2=$name2;

        }
      
      
      


         $for_image->save();
           
       
         return back()->with('status', 'You have successfully Created! ');  


          
       }


        public function update_for_image(Request $request)
    {  


   
         
  
           $Product = For_image::find($request->pro_id);



              if($request->input('form34')!=  $Product->tittle ){

          $exist = \App\For_image::where('product_img_id','=', $Product->product_img_id)->where("tittle", "=", $request->input('form34'))->first();

         if($exist != null) {

     return back()->with('error', 'The tittle has already exist ');   

   }

}
        $Product->tittle=$request->form34;
        $Product->body=$request->form7;
        $Product->description=$request->form29;
        $Product->tittle_1=$request->form32;
        $Product->body_1=$request->form8;
        $Product->tittle_2=$request->form33;
        $Product->body_2=$request->form9;
       
      

      

      
        if ($request->hasFile('img')) {
        $image = $request->file('img');
        $name = $image->getClientOriginalName();
        $destinationPath = public_path('../../public_html/img/products');
        $image->move($destinationPath, $name);
        $Product->image=$name;

        }

         
        if ($request->hasFile('image_1')) {
        $image1 = $request->file('image_1');
        $name1 = $image1->getClientOriginalName();
        $destinationPath1 = public_path('../../public_html/img/products');
        $image1->move($destinationPath1, $name1);
        $Product->image_1=$name1;

        }

         if ($request->hasFile('image_2')) {
        $image2 = $request->file('image_2');
        $name2 = $image2->getClientOriginalName();
        $destinationPath2 = public_path('../../public_html/img/products');
        $image2->move($destinationPath2, $name2);
        $Product->image_2=$name2;

        }
      
      
      


        $Product->save();
         return back()->with('status', 'You have successfully Updated! ');   


          
       }



     public function destroy_for_image(Request $request)
    {
          $Product = For_image::find($request->del_pro);
           $Product->delete();
         return back()->with('error', 'You have successfully deleted ');   

    }





    public function add(Request $request)
    {  
     $exist = \App\Product_img::where("tittle", "=", $request->input('form34'))->first();

if($exist != null) {

     return redirect('admin/management')->with('error', 'The tittle has already exist ');   

   }
   


       $count = Product_img::count();
     if(($count) < 9):
       
        $Product_img = new Product_img;
        $Product_img->tittle=$request->form34;
        $Product_img->body=$request->form7;
        $Product_img->description=$request->form29;
        $Product_img->tittle_1=$request->form32;
        $Product_img->body_1=$request->form8;
        $Product_img->tittle_2=$request->form33;
        $Product_img->body_2=$request->form9;
       
      

      

      
        if ($request->hasFile('image')) {
        $image = $request->file('image');
        $name = $image->getClientOriginalName();
        $destinationPath = public_path('../../public_html/img/products');
        $image->move($destinationPath, $name);
        $Product_img->image=$name;

        }

         
        if ($request->hasFile('image_1')) {
        $image1 = $request->file('image_1');
        $name1 = $image1->getClientOriginalName();
        $destinationPath1 = public_path('../../public_html/img/products');
        $image1->move($destinationPath1, $name1);
        $Product_img->image_1=$name1;

        }

         if ($request->hasFile('image_2')) {
        $image2 = $request->file('image_2');
        $name2 = $image2->getClientOriginalName();
        $destinationPath2 = public_path('../../public_html/img/products');
        $image2->move($destinationPath2, $name2);
        $Product_img->image_2=$name2;

        }
      
      
      


        $Product_img->save();
           
         return redirect('admin/management')->with('status', 'You have successfully Created! ');   

         endif;
          return redirect('admin/management')->with('error', 'You have added 9 items!  ');   
       
          
       }




    public function update(Request $request)
    {  
      
        
         $Product_img = Product_img::find($request->pro_id);

          if($request->input('form34')!=  $Product_img->tittle ){

          $exist = \App\Product_img::where("tittle", "=", $request->input('form34'))->first();

         if($exist != null) {

     return redirect('admin/management')->with('error', 'The tittle has already exist ');   

   }

}

        $Product_img->tittle=$request->form34;
        $Product_img->body=$request->form7;
        $Product_img->description=$request->form29;
        $Product_img->tittle_1=$request->form32;
        $Product_img->body_1=$request->form8;
        $Product_img->tittle_2=$request->form33;
        $Product_img->body_2=$request->form9;
       
      

      

      
        if ($request->hasFile('img')) {
        $image = $request->file('img');
        $name = $image->getClientOriginalName();
        $destinationPath = public_path('../../public_html/img/products');
        $image->move($destinationPath, $name);
        $Product_img->image=$name;

        }

         
        if ($request->hasFile('image_1')) {
        $image1 = $request->file('image_1');
        $name1 = $image1->getClientOriginalName();
        $destinationPath1 = public_path('../../public_html/img/products');
        $image1->move($destinationPath1, $name1);
        $Product_img->image_1=$name1;

        }

         if ($request->hasFile('image_2')) {
        $image2 = $request->file('image_2');
        $name2 = $image2->getClientOriginalName();
        $destinationPath2 = public_path('../../public_html/img/products');
        $image2->move($destinationPath2, $name2);
        $Product_img->image_2=$name2;

        }
      
      
      


        $Product_img->save();
         return redirect('admin/management')->with('status', 'You have successfully Updated!  ');   


          
       }


        public function destroy(Request $request)
    {      
            $Product_img= Product_img::find($request->del_pro);
           $Product_img->delete();
          return redirect('admin/management')->with('error', 'You have successfully deleted ');    

    }


//catalogs

    public function add_catalog(Request $request)
    {  
         $Category = \App\Catalog::where("tittle", "=", $request->input('form2'))->first();

if($Category != null) {

     return redirect('/admin/catalog')->with('error', 'The tittle has already exist ');   

   }
         


        $catalog = new Catalog;
        $catalog->tittle=$request->form2;     

      
        if ($request->hasFile('image')) {
        $image = $request->file('image');
        $name = $image->getClientOriginalName();
        $destinationPath = public_path('../../public_html/img/catalog');
        $image->move($destinationPath, $name);
        $catalog->image=$name;

        }

         
        if ($request->hasFile('pdf')) {
        $pdf = $request->file('pdf');
        $name1 = $pdf->getClientOriginalName();
        $destinationPath1 = public_path('../../public_html/img/catalog');
        $pdf->move($destinationPath1, $name1);
        $catalog->pdf=$name1;

        }

        $catalog->save();
         return redirect('/admin/catalog')->with('status', 'You have successfully Created!  ');   


          
       }



       public function update_catalog(Request $request)
    {  

         $catalog = Catalog::find($request->cata_id);
       if($request->input('form1')!=  $catalog->tittle ){
       $Category = \App\Catalog::where("tittle", "=", $request->input('form1'))->first();

if($Category != null) {

     return redirect('/admin/catalog')->with('status', 'The tittle has already exist');   

   }

}
         
      
        
         
    
        $catalog->tittle=$request->form1;     

      
        if ($request->hasFile('image')) {
        $image = $request->file('image');
        $name = $image->getClientOriginalName();
        $destinationPath = public_path('../../public_html/img/catalog');
        $image->move($destinationPath, $name);
        $catalog->image=$name;

        }

         
        if ($request->hasFile('pdf')) {
        $pdf = $request->file('pdf');
        $name1 = $pdf->getClientOriginalName();
        $destinationPath1 = public_path('../../public_html/img/catalog');
        $pdf->move($destinationPath1, $name1);
        $catalog->pdf=$name1;

        }

        $catalog->save();
         return redirect('/admin/catalog')->with('status', 'You have successfully Updated!  ');   

          
       }






         public function destroy_catalog(Request $request)
    {
          $catalog= Catalog::find($request->del_cata);
           $catalog->delete();
          return redirect('admin/catalog')->with('error', 'You have successfully deleted ');    

    }



//users

     public function add_user(Request $request)
    {  
   
$this->validate($request, [
   'email'=>'unique:users' ,
    'password2' => 'confirmed|min:6',

]);


        $user = new User;
        $user->name=$request->user_name;
        $user->email=$request->email;
        $user->password=Hash::make($request['password']);
        
       
        $user->save();
         return redirect('/admin/users_management')->with('status', 'You have successfully Created!  ');   


          
       }



           public function update_user(Request $request)
    {  
   
$this->validate($request, [
   'email'=>'unique:users' ,
    'password' => 'confirmed|min:6',

]);
         $user = User::find($request->user_id);    
         $user->name=$request->name;
        $user->email=$request->email;
        $user->password=Hash::make($request['password']);     

        $user->save();
         return redirect('/admin/users_management')->with('status', 'You have successfully Updated!  ');  

          
       }



         public function destroy_user(Request $request)
    {
           $user= User::find($request->user);
           $user->delete();
          return redirect('/admin/users_management')->with('error', 'You have successfully deleted ');    

    }


//contact


 public function  contact(Request $request)
 {

        $contact = new Contact;
        $contact->name=$request->name;
        $contact->email=$request->email;
        $contact->company=$request->Company;
        $contact->number=$request->number;
        $contact->country=$request->Country;
        $contact->message=$request->message;
        $contact->alias=url()->previous();
      
        
       
        $contact->save();
         return back();   



 }


 public function message($id)

    {
      $contact = Contact::find($id);
    
      return view('admin.show_contact' , compact('contact'));

    }

   
         public function destroy_contact(Request $request)
    {
          $contact= Contact::find($request->contact);
           $contact->delete();
          return redirect('admin/contact')->with('error', 'You have successfully deleted ');    

    }




 //product Menu


 public function products_for_menu($id , Request $request)
    {
         $menu=Product_menu::find($id);

            $products = For_menu::where('product_menu_id','=', $id)->orderBy('id', 'asc')->paginate(10);

         if($request->q)
      {
         $products =  For_menu::where('product_menu_id','=', $id)->where('tittle','LIKE','%'.$request->q.'%')->orWhere('id',$request->q)->paginate(10);
      }

      
         return view('admin.for_menu' , compact('menu' ,'request', 'products'));
       
    }


 public function add_menu(Request $request)
    {  
   
       
       


          $Product_img = new Product_menu;
        $Product_img->tittle=$request->form34;
        $Product_img->body=$request->form7;
        $Product_img->tittle_1=$request->form32;
        $Product_img->body_1=$request->form8;
        $Product_img->tittle_2=$request->form33;
        $Product_img->body_2=$request->form9;
       
      

      

      
        if ($request->hasFile('image')) {
        $image = $request->file('image');
        $name = $image->getClientOriginalName();
        $destinationPath = public_path('../../public_html/img/products');
        $image->move($destinationPath, $name);
        $Product_img->image=$name;

        }

         
        if ($request->hasFile('image_1')) {
        $image1 = $request->file('image_1');
        $name1 = $image1->getClientOriginalName();
        $destinationPath1 = public_path('../../public_html/img/products');
        $image1->move($destinationPath1, $name1);
        $Product_img->image_1=$name1;

        }

         if ($request->hasFile('image_2')) {
        $image2 = $request->file('image_2');
        $name2 = $image2->getClientOriginalName();
        $destinationPath2 = public_path('../../public_html/img/products');
        $image2->move($destinationPath2, $name2);
        $Product_img->image_2=$name2;

        }
      
      
      


        $Product_img->save();
           
       
         return back()->with('status', 'You have successfully Created! ');  


          
       }



 public function update_menu(Request $request)
    {  
   
    
           $Product_img = Product_menu::find($request->pro_id);
 if($request->input('form34')!=  $Product_img->tittle ){

          $exist = \App\Product_menu::where("tittle", "=", $request->input('form34'))->first();

         if($exist != null) {

     return redirect('admin/menu')->with('error', 'The tittle has already exist ');   

   }

}

        $Product_img->tittle=$request->form34;
        $Product_img->body=$request->form7;
        $Product_img->tittle_1=$request->form32;
        $Product_img->body_1=$request->form8;
        $Product_img->tittle_2=$request->form33;
        $Product_img->body_2=$request->form9;
       
      

      

      
        if ($request->hasFile('img')) {
        $image = $request->file('img');
        $name =$image->getClientOriginalName();
        $destinationPath = public_path('../../public_html/img/products');
        $image->move($destinationPath, $name);
        $Product_img->image=$name;

        }

         
        if ($request->hasFile('image_1')) {
        $image1 = $request->file('image_1');
        $name1 = $image1->getClientOriginalName();
        $destinationPath1 = public_path('../../public_html/img/products');
        $image1->move($destinationPath1, $name1);
        $Product_img->image_1=$name1;

        }

         if ($request->hasFile('image_2')) {
        $image2 = $request->file('image_2');
        $name2 = $image2->getClientOriginalName();
        $destinationPath2 = public_path('../../public_html/img/products');
        $image2->move($destinationPath2, $name2);
        $Product_img->image_2=$name2;

        }
      
      
      


        $Product_img->save();
         return back()->with('status', 'You have successfully Updated! ');   


          
       }


     public function destroy_menu(Request $request)
    {
          $Product_img= Product_menu::find($request->del_pro);
           $Product_img->delete();
         return back()->with('error', 'You have successfully deleted ');   

    }

    

    
 public function add_for_menu(Request $request)
    {  

      
          $for_image= new For_menu;
            $for_image->product_menu_id=$request->image_id ;
        $for_image->tittle=$request->form34;
        $for_image->body=$request->form7;
        $for_image->description=$request->form29;
        $for_image->tittle_1=$request->form32;
        $for_image->body_1=$request->form8;
        $for_image->tittle_2=$request->form33;
        $for_image->body_2=$request->form9;
       
      

      

      
        if ($request->hasFile('img')) {
        $image = $request->file('img');
        $name = $image->getClientOriginalName();
        $destinationPath = public_path('../../public_html/img/products');
        $image->move($destinationPath, $name);
        $for_image->image=$name;

        }

         
        if ($request->hasFile('image_1')) {
        $image1 = $request->file('image_1');
        $name1 = $image1->getClientOriginalName();
        $destinationPath1 = public_path('../../public_html/img/products');
        $image1->move($destinationPath1, $name1);
        $for_image->image_1=$name1;

        }

         if ($request->hasFile('image_2')) {
        $image2 = $request->file('image_2');
        $name2 = $image2->getClientOriginalName();
        $destinationPath2 = public_path('../../public_html/img/products');
        $image2->move($destinationPath2, $name2);
        $for_image->image_2=$name2;

        }
      
      
      


         $for_image->save();
           
       
         return back()->with('status', 'You have successfully Created! ');  


          
       }


        public function update_for_menu(Request $request)
    {  
   
         
  
           $Product = For_menu::find($request->pro_id);
        $Product->tittle=$request->form34;
        $Product->body=$request->form7;
        $Product->description=$request->form29;
        $Product->tittle_1=$request->form32;
        $Product->body_1=$request->form8;
        $Product->tittle_2=$request->form33;
        $Product->body_2=$request->form9;
       
      

      

      
        if ($request->hasFile('img')) {
        $image = $request->file('img');
        $name = $image->getClientOriginalName();
        $destinationPath = public_path('../../public_html/img/products');
        $image->move($destinationPath, $name);
        $Product->image=$name;

        }

         
        if ($request->hasFile('image_1')) {
        $image1 = $request->file('image_1');
        $name1 = $image1->getClientOriginalName();
        $destinationPath1 = public_path('../../public_html/img/products');
        $image1->move($destinationPath1, $name1);
        $Product->image_1=$name1;

        }

         if ($request->hasFile('image_2')) {
        $image2 = $request->file('image_2');
        $name2 = $image2->getClientOriginalName();
        $destinationPath2 = public_path('../../public_html/img/products');
        $image2->move($destinationPath2, $name2);
        $Product->image_2=$name2;

        }
      
      
      


        $Product->save();
         return back()->with('status', 'You have successfully Updated! ');   


          
       }



     public function destroy_for_menu(Request $request)
    {
          $Product = For_menu::find($request->del_pro);
           $Product->delete();
         return back()->with('error', 'You have successfully deleted ');   

    }



//sliders

 public function add_slider(Request $request)
    {  

         $counts = Slider::count();
     if(($counts) < 3):

        $slider = new Slider;
        $slider->tittle=$request->form1; 
         $slider->content=$request->form2;     

      
        if ($request->hasFile('image')) {
        $image = $request->file('image');
        $name = $image->getClientOriginalName();
        $destinationPath = public_path('img/products');
        $image->move($destinationPath, $name);
        $slider->image=$name;

        }        
       

        $slider->save();
         return redirect('/admin/slider_management')->with('status', 'You have successfully Created!  ');

     endif;
        return redirect('/admin/slider_management')->with('status', 'You have added three Sliders '); 
          
       }



       public function update_slider(Request $request)
       
    {  

         $slider = Slider::find($request->slide_id);
          
    
        $slider->tittle=$request->form1;  
         $slider->content=$request->form2;        

      
        if ($request->hasFile('image')) {
        $image = $request->file('image');
        $name = $image->getClientOriginalName();
        $destinationPath = public_path('img/products');
        $image->move($destinationPath, $name);
        $slider->image=$name;

        }

             

        $slider->save();
         return redirect('/admin/slider_management')->with('status', 'You have successfully Updated!  ');   

          
       }






         public function destroy_slider(Request $request)
    {
          $slider= Slider::find($request->del_slide);
           $slider->delete();
          return redirect('/admin/slider_management')->with('error', 'You have successfully deleted ');    

    }


 public function update_logo(Request $request)
       
    { 

         $logo = Logo::first();
        if ($request->hasFile('logo')) {
        $image = $request->file('logo');
        $name = $image->getClientOriginalName();
        $destinationPath = public_path('img/products');
        $image->move($destinationPath, $name);
        $logo->image=$name;

        }

             

        $logo->save();
         return redirect('/admin/slider_management')->with('status', 'You have successfully Updated!  ');   

          
       }



    


}








    



