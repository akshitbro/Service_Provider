<?php

namespace App\Http\Controllers;

use App\Models\register_for_qr_code1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class add_register_for_qr_code1 extends Controller
{
    function add1(Request $request){ 

        $request->validate(
            [
                'registering_username1' => 'required',
                'registering_contactnumber1' => 'required',
                'registering_country1' => 'required',
                'registering_state1' => 'required',
                'registering_sectorandhousenumber1' => 'required',
                'registering_verify_question1' => 'required',
                'registering_verify_answer1' => 'required',
            ]
        );

        // echo "<pre>";
        // print_r($request->all());
        // echo "</pre>";
        
        $register_for_qr_code1 = new register_for_qr_code1;
        $register_for_qr_code1->r1_name1 = $request['registering_username1'];
        $register_for_qr_code1->r1_contactnumber1 = $request['registering_contactnumber1'];
        $register_for_qr_code1->r1_country1 = $request['registering_country1'];
        $register_for_qr_code1->r1_state1 = $request['registering_state1'];
        $register_for_qr_code1->r1_sectorandhousenumber1 = $request['registering_sectorandhousenumber1'];
        $register_for_qr_code1->registering_verify_question1 = $request['registering_verify_question1'];
        $register_for_qr_code1->registering_verify_answer1 = $request['registering_verify_answer1'];
        $register_for_qr_code1->save();

        // header("location:../../index.php");
        // header("location:/dashboard.blade.php");

        // return view('dashboard');
        // url("/dashboard");
        // route('dashboard');



        $register_for_human2 = register_for_qr_code1::where('r1_name1', '=', $request['registering_username1'])->where('r1_contactnumber1', '=', $request['registering_contactnumber1'])->where('r1_country1', '=', $request['registering_country1'])->where('r1_state1', '=', $request['registering_state1'])->where('r1_sectorandhousenumber1', '=', $request['registering_sectorandhousenumber1'])->first('id');


        return Redirect::to(url('/')."/after_add_register_for_qr_code1"."/".$register_for_qr_code1->id);
    }
}
