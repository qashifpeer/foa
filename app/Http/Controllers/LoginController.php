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

            return redirect()->back()->with('error', 'Invalid Credentials! Or You forgot to Register First');
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
            'confirm_password' => 'required|same:password',


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
        $subject = 'Confirm Email';
        $message = 'Please click on the following link To Confirm Your email: <br>';
        $message .= '<a href="' . $reset_link . '"> Verify Your Email</a>';

        \Mail::to($request->email)->send(new LoginMail($subject, $message));

        return redirect()->back()->with('success','Verification Link sent to Your Email!');
    } //Method Ends Here********************

    public function verify_mail($token, $email)
    {
        $user = User::where('token', $token)->where('email', $email)->first();
        if (!$user) {
            return redirect()->route('login');
        }
        $user->status = "active";
        $user->token = "";
        $user->update();

        //echo "sucess";
         return redirect()->route('login')->with('error','Email Verified Successfully-Login Now');
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
           return redirect()->back()->with('error','Email Not found');
        }

        $user->token = $token;
        $user->update();

        $reset_link = url('reset-password/' . $token . '/' . $request->email);
        $subject = 'Reset Password';
        $message = 'You are receiving this mail because you have asked for Password reset. If it is not you , contact immediately Compsoft Solutions: <br><a href="' . $reset_link . '">Click here to reset your password</a>';

        \Mail::to($request->email)->send(new LoginMail($subject, $message));

        return redirect()->back()->with('error','Verification Link sent to your Email!');
        //echo 'Check your email.';
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
        $request->validate([
            'new_password'=> 'required',
           'confirm_password'=> 'required|same:new_password'

        ]);
        $user = User::where('token', $request->token)->where('email', $request->email)->first();

        $user->token = "";
        $user->password = Hash::make($request->new_password);
        $user->update();

        return redirect()->route('login')->with('error','Password Reset was Successful');
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
