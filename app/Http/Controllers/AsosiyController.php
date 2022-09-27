<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Foydalanuvchilar;
use Illuminate\Support\Facades\DB;

class AsosiyController extends Controller
{
    public function show(){
        $data = "Salom Dunyo";
        return view('asosiy.index',compact('data'));
    }

    public function loginview(){
        return view('login.login');
    }

    public function check(Request $request){


        $data = $request->validate([
            'name' => 'required',
            'password' => 'required|integer'
        ]);
        

        // $login  = $request->name;;
        // $parol = $request->password;
        // $list = Admin::all();

        

        // $list1 = $list->where('name', $login);
        // $list = Admin::query();
        // $list2 = $list->where('password', $parol);

        // $results = DB::select('select name from admins where name = ?',$login1);
         

        // echo($list1);

        $foy = Foydalanuvchilar::all();
        

        $n = $request->name;
        $name = Admin::where('name',$request->name)->get();
        $password = Admin::where('name',$request->name)->get();
        // echo($name);
        // echo($password);
         if ($name->isNotEmpty() && $password->isNotEmpty()) {
            return view('admin.index', compact('n','foy'));
            // echo("to'g'ri");
        }else{
            return view('asosiy.index');
            // echo("noto'g'ri");
        }

    }

    public function asosiy(){
        return view('asosiy.index');
    }

    public function form(){
        return view('forma.form');
    }

   
    public function index1(){
        $foy = Foydalanuvchilar::all();
        return view('admin.index', compact('foy'));
    }

    public function meeting(){
        return view('asosiy.meeting');
    }

    public function meeting_detailes(){
        return view('asosiy.meeting-detailes');
    }

}
