<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Admincontroller extends controller
{
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
                      return redirect('changepass'.$request->id)->with('msg','New password and confirm password does not match!!!');
                    }
               }
               else {
                  return redirect('changepass'.$request->id)->with('msg','Existing password is incorrect!!!');
                }
          }              
        }
        #verify account
        public function verifyaccount(){
           $users = DB::table('FarmerRegistration')->get();
             return view('Admin.verifyaccount', ['users' => $users]);
       }
       public function verifyitems(){
        $users = DB::table('Products')->get();
          return view('Admin.verifyitems', ['users' => $users]);
    }

    #manage
       #delete
       public function delete(Request $request,$id){
        DB::table('Products')->where('ProductId',$id)->delete();
        // echo $id;
      return back();
      }
      #update
         #to print values in the form
          public function updform(Request $request,$id){
            $Productname=$request->name;
            $Description=$request->description;
            $Price=$request->price;
            $users = DB::table('Products')->where('ProductId',$id)->first();  
            return view('Admin.updateitems',['user'=>$users]);
          } 
      public function update(Request $request,$id){
      //  echo "hi";
      $Productname=$request->name;
      $Description=$request->description;
      $Price=$request->price;
      $fileName="Image".time().'.'.request()->profile->getClientOriginalExtension();
      #upload image
      $request->file('profile')->storeAs('public/Products',$fileName);
        DB::table('Products')->where('ProductId',$id)->update(['ProductName'=>$Productname,'Description'=>$Description,'Price'=>$Price,'Image'=>$fileName]);
      return redirect('viewform');
      }
  
}
