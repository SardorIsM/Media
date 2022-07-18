<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests\RegistrRequest;
use Illuminate\Support\Facades\Hash;
use App\Models\Registr;

class RegistrController extends Controller{
    public function submit(RegistrRequest $req) {
        $day = $req->day;
        $month = $req->month;
        $year = $req->year;

        $birthday_day = new Carbon($year . '-' . $month . '-' . $day);

        $registr = new Registr();
        $registr->name = $req->name;
        $registr->surname = $req->surname;
        $registr->email = $req->email;
        $registr->birthday_day = $birthday_day;
        $registr->gender = $req->gender;
        $registr->password = Hash::make($req->password);

        $registr->save();

        return redirect()->route('welcome')->with('success', 'Вы успешно зарегестрировались');
    }
    public function society() {
        $registrs = Registr::all()->take(10);
        return view('society', compact('registrs'));
    }
    public function persona($id) {
        $registr = Registr::find($id);
        return view('personal-page', compact('registr'));
    }
    public function myPage($id) {
        $registr = Registr::find($id);
        return view('my-page', compact('registr'));
    }
//    public function updateMyPage($id) {
//        $registr = Registr::find($id);
//        return view('update-my-page', compact('registr'));
//    }
//    public function updateMyPageSubmit($id, RegistrRequest $req) {
//        $day = $req->day;
//        $month = $req->month;
//        $year = $req->year;
//
//        $birthday_day = new Carbon($year . '-' . $month . '-' . $day);
//
//        $registr = Registr::find($id);
//        $registr->name = $req->name;
//        $registr->surname = $req->surname;
//        $registr->email = $req->email;
//        $registr->birthday_day = $birthday_day;
//        $registr->gender = $req->gender;
//        $registr->password = $req->password;
//
//        $registr->save();
//
//        return redirect()->route('my-page', $id)->with('success', 'Вы успешно изменили свой аккаунт');
//    }
}
