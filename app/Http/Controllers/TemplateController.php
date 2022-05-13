<?php

namespace App\Http\Controllers;

use App\Models\Template;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function index()
    {
        $id = 4;
        $values = Template::find($id);

        return view('Shop.Home.home',["values" => $values]);
    }
}
