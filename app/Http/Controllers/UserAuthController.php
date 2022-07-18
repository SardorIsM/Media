<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use App\Models\Registr;

class UserAuthController extends Controller{
    function login() {
        return view('login');
    }
    function check(Request $request) {
            $request->validate([
                'email'=>'required|email',
                'password'=>'required|min:6|max:25'
            ]);

            $user = Registr::where('email', '=', $request->email)->first();
            if ($user) {
                if (Hash::check($request->password, $user->password)) {
                    $request->session()->put('LoggedUser', $user->id);
                    return redirect('profile');
                }else{
                    return back()->with('fail','Invail password');
                }
            }else{
                return back()->with('fail','No account foud for this email');
            }
    }
    function profile() {
        if(session()->has('LoggedUser')) {
            $user = Registr::where('id', '=', session('LoggedUser'))->first();
            $data = [
                'LoggedUserInfo'=>$user
            ];
        }
        return view('profile', $data);
    }

    function logout() {
        if (session()->has('LoggedUser')) {
            session()->pull('LoggedUser');
            return redirect('login');
        }
    }
    public function updateMyPage($id) {
        $registr = Registr::find($id);
        return view('update-my-page', compact('registr'));
    }
    public function updateMyPageSubmit($id, Request $req) {
        $day = $req->day;
        $month = $req->month;
        $year = $req->year;

        $birthday_day = new Carbon($year . '-' . $month . '-' . $day);

        $registr = Registr::find($id);
        $registr->name = $req->name;
        $registr->surname = $req->surname;
        $registr->email = $req->email;
        $registr->birthday_day = $birthday_day;
        $registr->gender = $req->gender;
        $registr->password = $req->password;

        $registr->save();

        return redirect()->route('my-page', $id)->with('success', 'Вы успешно изменили свой аккаунт');
    }
}
