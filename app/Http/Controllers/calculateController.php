<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class calculateController extends Controller
{
    public function cal(Request $request) {
        $num1 = $request->num1;
        $num2 = $request->num2;

        $sum = $num1+$num2;

        //return redirect()->action('${App\Http\Controllers\HomeController@index}', ['parameterKey' => 'value']);
        
        /*return view('show',[
            'num1' => $num1,
            'num2' => $num2,
            'sum' => $sum
        ]);
        */
        return view('cal',
            [
            'num1' => $num1,
            'num2' => $num2,
            'sum' => $sum
        ]);
        
    }

    public function addStep(Request $req) {
        $step = [1,2,3];
        $u = count($step);

        return view('cal',[
            'step' => $step,
            'ia' => $i
            ]);
    }
}
