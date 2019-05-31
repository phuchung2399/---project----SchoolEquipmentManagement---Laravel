<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;   
use App\User_demaged;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Session;
class DeviceController extends Controller
{

	public function getYeucau(Request $Email){
        return view('page.Yeucau');
        return back();
    }

    // Lấy dữ liệu vừa nhập và lưu lại
    public function postAdd(Request $request) {
    	$demaged = new User_demaged;
    	$demaged->name = $request->txtname;
    	$demaged->class = $request->txtclass;
    	$demaged->classroom = $request->txtclassroom;
    	$demaged->demaged_device = $request->txtdemaged_device;
    	$demaged->status = $request->txtstatus;
    	$demaged->save();
    	return redirect()->route('form.yeucau')->with('Thông báo', 'Yêu cầu thành công');
		
    }


}
