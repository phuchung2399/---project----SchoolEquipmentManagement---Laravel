<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController; // trung ten
use App\Http\Requests\adminRequest;
use Illuminate\Support\Facades\Auth;
use App\Trademark;
use App\Category;
use App\Equipment;
use App\User;
use App\admin;	
use Request;
use Illuminate\Http\Request as ProductRequest;

use DB;


class AdminController extends BaseController
{
    public function getIndex(){
    	return view('admin.login');
    }
    public function getTables(){
    	return view('admin.tables');
    }

    public function getListUser(){
         $user = User::select('ID', 'UserName', 'Class', 'Email', 'Password')->get()->toArray();
         return view('Equipment.list_user', compact('user'));
    }

    public function getList(){
    	$equipment = Equipment::select('id','Trademark_id','user_id', 'cate_id','VerificationCode', 'date_equip','Status')->get();
    	$category = Category::select('id','name_category','quantity')->get()->toArray();
      $users = User::select('id','username','class','email','password')->get()->toArray();
      $trademark = Trademark::select('id','name')->get()->toArray();
    return view('Equipment.list_equipment', compact('equipment','category','users','trademark'));
    }

    public function getDeleteUser($id)
    {
        DB::update('delete from user where id=?',[$id]);
        return back()->with('success', 'Xóa sản phẩm thành công!');
    }

    public function getEdit($id){
        //   $equipment = Equipment::select('id','Trademark_id','user_id', 'cate_id','VerificationCode', 'date_equip','Status')->get();
         $category = Category::select('id','name_category','quantity')->get();
         $users = User::select('id','username','class','email','password')->get();
         $trademark = Trademark::select('id','name')->get();
        $equipment = Equipment::find($id); 
      return view('Equipment.edit_equipment', compact('equipment','category','users','trademark','id'));
      }
      
      public function postEdit($id,ProductRequest $request) {
        
          // $equipments = Equipment::find($id);   
          // $equipments->User_ID = $request->username;
          // $equipments->Cate_ID = $request->role;
          // $equipments->Trademark_ID = $request->trademark;
          // $equipments->VerificationCode = $request->code;
          // $equipments->Date_Equip = $request->date;
          // $equipments->save(); 
  
          DB::update('update equipment set User_ID = ?,Cate_ID = ?,Trademark_ID = ?,VerificationCode = ?,
          Date_Equip = ?  where id = ?',[$request->username,$request->role,$request->trademark,$request->code,$request->date,$id]);
  
          return redirect()->route('Equipment.getList');
      }
  
          public function getDelete($id){
          DB::update('delete from equipment where id=?',[$id]);
          return back(); 
      }
  
      public function getAdd(){
          $category = Category::select('id','name_category','quantity')->get()->toArray();
          $trademark = Trademark::select('id','name')->get()->toArray();
          
          return view('Equipment.add_equipment', compact('category','trademark'));
      }
  
      public function postAdd(ProductRequest $request) {
          $validatedData = $request->validate([
          'username' => 'required',
          'role' => 'required',
          'trademark' => 'required',
          'code' => 'required',
          'date' => 'required',]);
          $equipment = new Equipment; 
          $equipment->trademark_id = $request->trademark;       
          $equipment->user_id = $request->username;
          $equipment->cate_id = $request->role;
          $equipment->VerificationCode = $request->code;
          $equipment->date_equip = $request->date;
          $equipment->Status = "1";
          $equipment->save();
          return redirect()->route('Equipment.getList');      
      }

public function postLogin(adminRequest $req)
    {
        $credentials = array('username' => $req->Email, 'password' => $req->Password);
        $user = admin::where([
            ['username', '=', $req->username],
            ['password', '=', $req->password]
        ])->first();
        if ($user) {
            if (Auth::attempt($credentials)) {
 
            } else {
               return view('Homepages.homepage',compact('user'));
            }
        } else {
           Session::flash('error', 'Email hoặc mật khẩu không đúng!');
           return redirect()->route('trangchu');
            
        }
    }


}
