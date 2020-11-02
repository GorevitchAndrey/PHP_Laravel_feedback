<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

/**
 * Class Hello
 * @package App\Http\Controllers
 */
class Hello extends Controller
{
    /**
     * @return Factory|View
     */
    public function index()
    {

        return redirect()->route('login-form');

//        return view('hello');
    }

    /**
     * @param string $name
     * @return Factory|View
     */
    public function indexName(string $name)
    {
        return view('hello', ['name' => $name]);
    }

    /**
     * @param string $id
     * @return Factory|View
     */
    public function indexId(float $id)
    {
        return view('hello', ['id' => $id]);
    }
}


