<?php

namespace App\Http\Controllers\Admin;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function registred(){

        $users = User::All();
        return view('admin.Aregister')->with('users',$users);
    }
    public function registrededit(Request $request, $id){
        $users = User::findOrFail($id);
        return view('admin.edit')->with('users',$users);
        
    }
    public function registreupdate(Request $request, $id){
            $users =    User::find($id);
            $users->name=$request->input('name');
            $users->email=$request->input('email');
            $users->password=$request->input('pwd');
            $users->update();
            return redirect('/Aregister')->with('status','your data has been updated');
    }
    public function registredelete(Request $request, $id){
        $users = User::findOrFail($id);
        $users->delete();
        return redirect('/Aregister')->with('status','your data has been deleted');

    }
}
