<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;
use DB;
class Farmercontroller extends Controller
{
     public function registration(Request $request){
      $Name=$request->name;
      $Place=$request->place;
      $Address=$request->address;
      $Contact=$request->contact;
      // $profile=$request->profile;
      $Email=$request->email;
      $Password=$request->password;
      $ConfirmPassword=$request->cfpassword;
      $Status="User";
       #get image file
       $fileName="filename".time().'.'.request()->profile->getClientOriginalExtension();
       #upload image
       $request->file('profile')->storeAs('public/Profile',$fileName);
     DB::table('FarmerRegistration')->insert([
       ['Name'=>$Name,'Place'=>$Place,'Address'=>$Address,'Contact'=>$Contact,'Profile'=>$fileName,
       'Email'=>$Email,'Password'=>$Password]
         
     ]);  
     DB::table('AdminLogins')->insert([
       ['Username'=>$Email,'Password'=>$Password,'Status'=>$Status]        
     ]);  
     return redirect('viewusers');
    }

    //change password
    public function changepass(Request $request){
      $loginid=session()->get('loginid');
     
      $user = DB::table('AdminLogins')->where('LoginId',$loginid)->first();
            return view('Admin.changepass',['loginid' => $user]);
       
     }
     public function passupd(Request $request){
        $currentpass=$request->cpassword;
        $newpass=$request->password;
        $confirmpass=$request->cfpassword;
        $loginid=session()->get('loginid');
         
        $user = DB::table('AdminLogins')->where('LoginId',$loginid)->first();
       
        if ($currentpass!="" && $newpass!="" && $confirmpass!="") {
            if ($currentpass==$user->Password)
             {
                 if ($newpass==$confirmpass) {
                    DB::table('AdminLogins')
                   ->where('LoginId',  $loginid)
                   ->update([
                     'password'=>$newpass
                   ]);
                    return redirect('adminhome')->with('msg','Your password has been changed successfully!!!');
                  }
                 else
                  {
                    return redirect('changepss'.$request->id)->with('msg','New password and confirm password does not match!!!');
                  }
             }
             else {
                return redirect('changepss'.$request->id)->with('msg','Existing password is incorrect!!!');
              }
        }              
      }
      #Products
      public function product(Request $request){
          $Productname=$request->name;
          $Description=$request->description;
          $Price=$request->price;
          // $Image=$request->image;
           #get image file
       $fileName="Image".time().'.'.request()->profile->getClientOriginalExtension();
       #upload image
       $request->file('profile')->storeAs('public/Products',$fileName);
          DB::table('Products')->insert([
            ['ProductName'=>$Productname,'Description'=>$Description,'Price'=>$Price,'Image'=>$fileName]
              
          ]); 
          return redirect('product');
          // $product=new Product(["ProductName"=>$request->name,"Description"=>$request->description,"Price"=>$request->price,"Image"=>$request->image]);
          // $product->save();
          // return redirect('product');
      }
}
