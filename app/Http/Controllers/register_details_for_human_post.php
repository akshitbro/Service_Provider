<?php

namespace App\Http\Controllers;

use App\Models\register_for_human;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class register_details_for_human_post extends Controller
{
    function add1(Request $request){

        $request->validate(
            [
                'registering_username1' => 'required',
                'registering_contactnumber1' => 'required',
                'registering_country1' => 'required',
                'registering_state1' => 'required',
                'registering_sectorandhousenumber1' => 'required',
                'img_base' => 'required',
            ]
        );

        // echo "<pre>";
        // print_r($request->all());
        // echo "</pre>";
        
        $register_for_human = new register_for_human;
        $register_for_human->r1_name1 = $request['registering_username1'];
        $register_for_human->r1_contactnumber1 = $request['registering_contactnumber1'];
        $register_for_human->r1_country1 = $request['registering_country1'];
        $register_for_human->r1_state1 = $request['registering_state1'];
        $register_for_human->r1_sectorandhousenumber1 = $request['registering_sectorandhousenumber1'];
        $register_for_human->r1_image = $request['img_base'];
        $register_for_human->save();

        // header("location:../../index.php");
        // header("location:/dashboard.blade.php");

        // return view('dashboard');
        // url("/dashboard");
        // route('dashboard');



        $register_for_human2 = register_for_human::where('r1_name1', '=', $request['registering_username1'])->where('r1_contactnumber1', '=', $request['registering_contactnumber1'])->where('r1_country1', '=', $request['registering_country1'])->where('r1_state1', '=', $request['registering_state1'])->where('r1_sectorandhousenumber1', '=', $request['registering_sectorandhousenumber1'])->first('id');


        return Redirect::to(url('/')."/after_add_register_for_human"."/".$register_for_human2->id);
    }
}
