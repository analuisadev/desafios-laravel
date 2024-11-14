<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show($userName)
    {

        $description = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto perferendis a, asperiores sed ad culpa, ipsam saepe soluta facilis minima doloremque maxime dicta dolore consequatur iste quas. Deserunt, repellendus voluptates.";

        return view('profile', ['nome' => $userName, 'descricao' => $description]);
    }
}
