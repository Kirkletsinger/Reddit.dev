<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function showWelcome()
    {
        return view('welcome');
    }
    public function upperCase ($word)
    {
      $data['word'] = strtoupper($word);

    return view('uppercase')->with ($data);
    }
    public function incrementThis ($numTo)
    {
      $add['num'] = $numTo;
    return view('increment')->with($add);
    }
}
