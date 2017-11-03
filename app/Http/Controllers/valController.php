<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class valController extends Controller
{
    public function show(Request $req) {
        $task = $req->sTask;
        $step[] = $req->sStep;

        return ([$task, $step]);
    }
}
