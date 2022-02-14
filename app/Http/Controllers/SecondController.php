<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecondController extends Controller
{
    public function _construct()
    {
        $this->middleware('Add');
    }
  public function MyFun()
  {
return 'OK';
  }
}
