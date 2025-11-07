<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function welcome()
    {
        return view('welcome_message');
    }
}
