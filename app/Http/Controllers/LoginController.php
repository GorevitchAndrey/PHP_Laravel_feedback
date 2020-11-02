<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Contracts\View\Factory;
use Illuminate\View\View;
use App;

class LoginController extends Controller
{
    public function __construct()
    {
        App::setLocale('ru');
    }

    /**
     * @return Factory|View
     */
    public function index()
    {
        return view('login.index');
    }

    public function submit(LoginRequest $request)
    {
        $this->validate($request, $request->rules());

        dd($request);
        die();
    }
}
