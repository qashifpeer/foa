<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Mail\LoginMail;
use mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('welcome');

        // $pass=bcrypt('pass');
        // dd($pass);

    } //Method Ends Here********************
    public function login()
    {
        
        return view('frontend.login_form');
        // $pass=bcrypt('pass');
        // dd($pass);

    } //Method Ends Here********************




    public function login_submit(Request $request)
    {
        $request->validate([

            'email' => 'required|email',
            'password' => 'required',

        ]);
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
            'status' => 'active'
        ];

        if (Auth::attempt($credentials)) {
            if (Auth::guard('web')->user()->role == 1) {

                return redirect()->route('admin_dash');
            } else {

                return redirect()->route('user_dash');
            }
        } else {

            return redirect()->route('login')->with('error', 'Credentials do not match');;
        }
    }//Method Ends Here********************

    public function register()
    {

        return view('frontend.register');
    } //Method Ends Here********************

    public function register_submit(Request $request)
    {

        $request->validate([

            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|',


        ]);
        $token = hash('sha256', time());
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->token = $token;
        $user->status = 'pending';
        $user->save();

        $reset_link = url('verify-email/' . $token . '/' . $request->email);
        $subject = 'Reset Password';
        $message = 'Please click on the following link: <br>';
        $message .= '<a href="' . $reset_link . '">Click Here</a>';

        \Mail::to($request->email)->send(new LoginMail($subject, $message));

        return redirect()->back()->with('success','Please Check Your Mail to verify');
    } //Method Ends Here********************

    public function verify_mail($token, $email)
    {
        $user = User::where('token', $token)->where('email', $email)->first();
        if (!$user) {
            return redirect()->route('frontend.login_form');
        }
        $user->status = "active";
        $user->token = "";
        $user->update();

        //echo "sucess";
         return redirect()->route('login')->with('success','Email Verified Successfully');
    } //Method Ends Here********************



    public function user_dash()
    {

        return view('user.dash');
    } //Method Ends Here********************
    public function admin_dash()
    {

        return view('admin.dash');
    } //Method Ends Here********************

    public function forgot_password()
    {
        return view('frontend.forgot_password');
    } //Method Ends Here********************


    public function forget_password_submit(Request $request)
    {

        $token = hash('sha256', time());

        $user = User::where('email', $request->email)->first();
        if (!$user) {
            dd('Email not found');
        }

        $user->token = $token;
        $user->update();

        $reset_link = url('reset-password/' . $token . '/' . $request->email);
        $subject = 'Reset Password';
        $message = 'Please click on the following link: <br><a href="' . $reset_link . '">Click here</a>';

        \Mail::to($request->email)->send(new LoginMail($subject, $message));

        echo 'Check your email.';
    } //Method Ends Here********************

    public function reset_password($token, $email)
    {
        $user = User::where('token', $token)->where('email', $email)->first();
        if (!$user) {
            return redirect()->route('login');
        }

        return view('frontend.reset_password', compact('token', 'email'));
    } //Method Ends Here********************

    public function reset_password_submit(Request $request)
    {
        $user = User::where('token', $request->token)->where('email', $request->email)->first();

        $user->token = "";
        $user->password = Hash::make($request->new_password);
        $user->update();

        echo 'Password is reset.';
    } //Method Ends Here********************

    public function logout()
    {

        Auth::guard('web')->logout();
        return redirect()->route('login');
    } //Method Ends Here********************



    public function settings()
    {
        return view('admin.settings');
    }
}
