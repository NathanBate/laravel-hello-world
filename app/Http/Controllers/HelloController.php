<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(): View
    {
        return View("hello.hello");
    }

    public function name(string $customName):View
    {
        return View("hello.hello", ['customName' => $customName]);
    }

    public function addName(Request $request): View {
        $data['name'] = $request->input("name");
        return View("hello.submit-name-response", $data);
    }

}
