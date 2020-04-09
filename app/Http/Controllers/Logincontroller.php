<?php

namespace App\Http\Controllers;
use App\AdminLogin;
use Illuminate\Http\Request;
use DB;

class Logincontroller extends controller
{
    // public function log(Request $request){
    //    $login=new AdminLogin(["Username"=>$request->username,"Password"=>$request->password,"Status"=>"Admin"]);
    //    $login->save();
    //   }

    #Admin
      public function Login(Request $request){
        $username=$request->username;
        $password=$request->password;
        $status="Admin";
        $this->validate($request,['username'=>'required|regex:/^[a-zA-Z]+$/u','password'=>'max:8|required']);
        
       $user = DB::table('AdminLogins')->where('Username',$username)->first();
       if(is_null($user)){
          // echo "incorrect username";
          return redirect('viewadminlogin')->with('errorMessage','Incorrect Username');
        }
        elseif(($username==$user->Username)&&($password==$user->Password)){
      //   echo "login success";
      if($status==$user->Status){
        
        $request->session()->put('loginid',$user->LoginId);
       
        return redirect('home');
      }
        }
        else{
          //   echo "incorrect password";
          return redirect('viewadminlogin')->with('errorMessage','Incorrect Password!');
        }
      }
      public function sessionget(){
        if (session()->has('loginid')) {
          $loginid=session()->get('loginid');        
          $user = DB::table('AdminLogins')->where('LoginId',$loginid)->first();
          //  print_r($user);
           return view('Admin.adminhome',['loginid' => $user]);
        }
        else{
          return redirect('viewadminlogin')->with('error3','Please login first!!');
      }
        }

        #Logout
        public function Logout(){
          $loginid=session()->forget('loginid');
          return redirect('index');
        }
       
    
        #users
        public function UserLogin(Request $request){
          $username=$request->username;
          $password=$request->password;
          $status="User";
          $this->validate($request,['username'=>'required','password'=>'max:8|required']);
          
         $user = DB::table('AdminLogins')->where('Username',$username)->first();
         if(is_null($user)){
            // echo "incorrect username";
            return redirect('farmerlogin')->with('errorMessage','Incorrect Username');
          }
          elseif(($username==$user->Username)&&($password==$user->Password)){
        //   echo "login success";
        if($status==$user->Status){
          
          $request->session()->put('loginid',$user->LoginId);
         
          return redirect('farmerhome');
        }
          }
          else{
            //   echo "incorrect password";
            return redirect('farmerlogin')->with('errorMessage','Incorrect Password!');
          }
        }
        public function session(){
          if (session()->has('loginid')) {
            $loginid=session()->get('loginid');        
            $user = DB::table('AdminLogins')->where('LoginId',$loginid)->first();
            //  print_r($user);
             return view('Farmer.home',['loginid' => $user]);
          }
          else{
            return redirect('farmerlogin')->with('error3','Please login first!!');
        }
          }
}
