<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\add_register_for_qr_code1;
use App\Http\Controllers\register_details_for_human_post;
use App\Models\register_for_qr_code1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\register_for_human;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('index');
});

Route::get('/index', function () {
    return view('index');
})->name('index1');

Route::get('/index', function () {
    return view('index');
})->name('index1');

Route::get('/human_help', function () {
    return view('human_help');
})->name('human_help');

Route::get('/qrcode1', function (Request $req) {
    $search = $req->search ?? "";
    $register_for_qr_code2 = "";
    if ($search == "") {
        
    }else {
        $register_for_qr_code1 = new register_for_qr_code1;
        $register_for_qr_code2 = register_for_qr_code1::where('id', '=', $search)->first("r1_name1");
    }
    return view('qrcode1')->with(compact('search', 'register_for_qr_code2'));
})->name('qrcode1');

Route::get('/register_details_for_pet_owner_qrcode1', function () {
    return view('register_details_for_pet_owner_qrcode1');
})->name('register_details_for_pet_owner_qrcode1');

Route::get('/register_details_for_human', function () {
    return view('register_details_for_human');
})->name('register_details_for_human');

Route::post('/for_add_register_details_for_pet_owner_qrcode1', [add_register_for_qr_code1::class, 'add1'])->name('register_details_for_pet_owner_qrcode1_post_add1.add');

Route::post('/register_details_for_human_post_add1', [register_details_for_human_post::class, 'add1'])->name('register_details_for_human_post_add1');




Route::get('/after_add_register_for_qr_code1/{id}', function ($id = null) {
    return view('after_add_register_for_qr_code1')->with(compact('id'));
})->name('after_add_register_for_qr_code1');

Route::get('/after_add_register_for_human/{id}', function ($id = null) {
    return view('linking_humans')->with(compact('id'));
})->name('after_add_register_for_human');

Route::get('/linking_for_humans/{id}', function ($id = null) {
    $register_for_human1 = new register_for_human;
    $register_for_human2 = register_for_human::where('id', '=', $id)->first();
    return view('human_show_information')->with(compact('id', 'register_for_human2'));
});



Route::get('/show_information1/{id}', function ($id = null) {
    $register_for_qr_code1 = new register_for_qr_code1;
    $register_for_qr_code2 = register_for_qr_code1::where('id', '=', $id)->first();
    return view('show_information1')->with(compact('id', 'register_for_qr_code2'));
})->name('show_information1');


Route::get('/about_pets1', function () {
    return view('about_pets1');
})->name('about_pets1');


Route::get('/edit_id_verification', function (Request $req) {
    $id = $req->id;
    $register_for_qr_code1 = new register_for_qr_code1;
    $register_for_qr_code2 = register_for_qr_code1::where('id', '=', $id)->first();
    $question1 = $register_for_qr_code2->registering_verify_question1;
    $answer1 = $register_for_qr_code2->registering_verify_answer1;
    return view('edit_id_verification')->with(compact('id', 'question1', 'answer1'));
})->name('edit_id_verification1');


Route::get('/edit_detail', function (Request $req) {
    $id = $req->id;

    $register_for_qr_code1 = new register_for_qr_code1;
    $register_for_qr_code2 = register_for_qr_code1::where('id', '=', $id)->first();

    $name = $register_for_qr_code2->r1_name1;
    $contact_number = $register_for_qr_code2->r1_contactnumber1;
    $country = $register_for_qr_code2->	r1_country1;
    $state = $register_for_qr_code2->r1_state1;
    $sectorandhousenumber = $register_for_qr_code2->r1_sectorandhousenumber1;
    return view('edit_detail')->with(compact('id', 'name', 'contact_number', 'country', 'state', 'sectorandhousenumber'));
})->name('edit_detail1');


Route::post('/editing_details', function (Request $req) {
    $id = $req->id;

    $req->validate(
        [
            'edit_registering_username1' => 'required',
            'edit_registering_contactnumber1' => 'required',
            'edit_registering_country1' => 'required',
            'edit_registering_state1' => 'required',
            'edit_registering_sectorandhousenumber1' => 'required',
        ]
    );


    // echo $id;
    // // echo "<pre>";
    // // print_r($request->all());
    // // echo "</pre>";
    
    $register_for_qr_code1 = register_for_qr_code1::find($id);
    if(is_null($register_for_qr_code1)){

        return Redirect::to(url('/')."/index");

    } else {

        $register_for_qr_code1->r1_name1 = $req['edit_registering_username1'];
        $register_for_qr_code1->r1_contactnumber1 = $req['edit_registering_contactnumber1'];
        $register_for_qr_code1->r1_country1 = $req['edit_registering_country1'];
        $register_for_qr_code1->r1_state1 = $req['edit_registering_state1'];
        $register_for_qr_code1->r1_sectorandhousenumber1 = $req['edit_registering_sectorandhousenumber1'];
        $register_for_qr_code1->save();

        return Redirect::to(url('/')."/show_information1/".$id);

    }
})->name('editing_details1');


Route::get('/give_qr_code', function (Request $req) {
    $id = $req->id;
    return view('give_qr_code')->with(compact('id'));
})->name('give_qr_code1');
