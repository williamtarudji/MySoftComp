<?php

namespace App\Http\Controllers;

use App\Software;
use Illuminate\Http\Request;

class SoftwareController extends Controller
{
    //
    public function getAll(){
        $software = Software::all();
        return view('view_product', compact('software'));
    }
}
