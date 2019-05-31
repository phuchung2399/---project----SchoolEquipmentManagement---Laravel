<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use App\Image;
use Illuminate\Support\Facades\Auth;
use App\User;	
use App\Http\Requests\LoginRequest;
use App\Http\Requests\SinginRequest;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function getIndex(){
         $image = Image::all();
    	return view('page.trangchu', compact('image'));
    }


    public function getDangNhap(){
        return view('page.trangchu');
    }
   
public function getLienHe(){
    return view('page.lienhe');
}

    public function postLogin(LoginRequest $req)
    {
        $credentials = array('username' => $req->Email, 'password' => $req->Password);
        $user = User::where([
            ['Email', '=', $req->username],
            ['Password', '=', $req->password]
        ])->first();
         

        if ($user) {
            if (Auth::attempt($credentials)) {
                
            } else {
                return view('page.Yeucau',compact('user'));
            }
        } else {
           Session::flash('error', 'Email hoặc mật khẩu không đúng!');
           return redirect()->route('trangchu');
            
        }
    }

    public function postLogout()
    {
        Auth::logout();
        return redirect()->route('trang-chu');
    }


    public function getSignin(){
        return view('page.Register');
    }

    public function postSignin(Request $req){
        $user = new User();
        $user->UserName = $req->UserName;
        $user->Class = $req->Class;
        $user->Email = $req->Email;
        $user->Password = $req->Password;
        $user->save();
        return redirect()->back()->with('thanhcong','Create account success');
    }

    public function getmail(Request $request)
    {
        $input = $request->all();
        Mail::send('page.mail', array('ten'=>$input["ten"],'lop'=>$input["lop"],'thietBi'=>$input["thietBi"] ), function($message){
	        $message->to('cuong.phan@student.passerellesnumeriques.org', '')->subject('[Email từ hệ thống] - Thông báo thiết bị hư hổng');
	    });
        Session::flash('flash_message', 'Send message successfully!');
        return view('page.Yeucau');
    }
    
    public function getmailComment(Request $request)
    {
        $input = $request->all();
        Mail::send('page.mailComment', array('yourname'=>$input["yourname"],'youremail'=>$input["youremail"],'yourmessage'=>$input["yourmessage"]), function($message){
	        $message->to('phuchung996@gmail.com', '')->subject('[Email góp ý kiến từ người dùng]');
	    });
        Session::flash('flash_message', 'Send message successfully!');
        return view('page.lienhe');
    }

}

