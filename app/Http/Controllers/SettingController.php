<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use \Illuminate\Support\Facades\Route;
use Illuminate\View\View;

class SettingController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return View
     */
    public function __invoke(Request $request): View
    {
        if(Route::currentRouteName() === "individual"){
           return $this->individual();
        }

        if(Route::currentRouteName() === "organization"){
            return $this->organisation();
        }

        return view('404');
    }

    private function individual(): View
    {
        return view('individual');
    }

    private function organisation(): View
    {
        return view('organization');
    }
}
