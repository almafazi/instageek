<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postController extends Controller
{
    public function show($id) {
        return 'Halo '.$id;
    }
}
