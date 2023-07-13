<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class Testc extends Controller
{
    public function home(){
        $n="priya";
        $e="p@gmail.com";
        $w=array(
            'name'=> $n,
            'email'=> $e,
        );
        return view("abc")->with($w);
    }
    public function add(){
       return view("adform");
    }
    public function ins(Request $r){
        $n=$r->pname;
        $d=$r->desp;
        $p=$r->price;
        $q=$r->quantity;
        
        $fl=$r->file("simg");
        if(isset($fl)){
            $fn=time().$fl->getClientOriginalName();
            $fl->move("std_img",$fn);
        }

        $obj=new Product();
        $obj->pname=$n;
        $obj->desp=$d;
        $obj->price=$p;
        $obj->quantity=$q;
        
        if(isset($fn)){
            $obj->image=$fn;
        }else{
                $obj->image="";
            }
        
        $obj->save();

        return redirect(url('/sel'));
    }
    public function sel(){
        $u=Auth::user();

        $obj=Product::all();
        return view("show")->with(["pd"=>$obj,"usr"=>$u]);
    }
    public function del(Request $b){
        $id=$b->id;
        $obj=Product::find($id);
        if(isset($obj->image) && $obj->image!=""){
        unlink("std_img/".$obj->image);
        }
        $obj->delete();
        return redirect(url("/sel"));
    }
    public function edit(Request $r){
        $id=$r->id;
        $obj=Product::find($id);
        return view("edit")->with(["pd"=>$obj]);
    }
    public function update(Request $r){
        $id=$r->id;
        $n=$r->pname;
        $d=$r->desp;
        $p=$r->price;
        $q=$r->quantity;
       
        $fl=$r->file("simg");
        if(isset($fl)){
            $fn=time().$fl->getClientOriginalName();
            $fl->move("std_img",$fn);
        }

        $obj=Product::find($id);
        
        $obj->pname=$n;
        $obj->desp=$d;
        $obj->price=$p;
        $obj->quantity=$q;
        
        if(isset($fn)){
            $obj->image=$fn;
        }

        
        $obj->update();

        return redirect(url('/sel'));

    }
   
    public function reguser(){
        return view("reguser");
    }
    public function regins(Request $r){
        $n=$r->name;
        $e=$r->email;
        $p=$r->pass;
        
        

        $obj=new User();
        $obj->name=$n;
        $obj->email=$e;
        $obj->role="admin";
        $obj->password=bcrypt($p);
        $obj->save();
   
    }
    public function loginuser(){
        return view("login");
    }
    public function lc_check(Request $r){
        $e=$r->email;
        $p=$r->pass;

        $w=array(
            
            'email'=> $e,
            'password'=> $p
        );
        if(Auth::attempt($w)){
            return redirect(url('/sel'));
        }
        else{
            return redirect(url('/loginuser'))->with(["msg"=>"Invalid Login"]);
        }
    }
    public function logout(){
        Auth::logout();
        return redirect(url('/loginuser'));
    }
}
