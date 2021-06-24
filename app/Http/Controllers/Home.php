<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Passport;
class Home extends Controller
{
    //
    function get_passports($id=null){
        return $id? Passport::find($id) : Passport::all();
    }
    function add_passport(Request $req){
        print_r($req);
        $passport = new Passport;
        $passport->passport_title = $req->passport_title;
        $passport->passport_details = $req->passport_details;
        $passport->due_date = $req->due_date;
        $passport->is_active = $req->is_active;
        $passport->user_id = $req->user_id;
        //$passport->save();
        return ['Result'=>'Data has been saved'];
    }
   
}
