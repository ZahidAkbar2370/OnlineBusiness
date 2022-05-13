<?php

namespace App\Http\Controllers;

use App\Models\Template;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function home()
    {
        $id = 3;
        $values = Template::find($id);

        return view('Shop.Home.home',["values" => $values]);
    }

    public function product()
    {
        $id = 3;
        $values = Template::find($id);

        return view('Shop.Product.product',["values" => $values]);
    }
}
