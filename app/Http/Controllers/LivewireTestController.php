<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LivewireTestController extends Controller
{
    function __invoke()
    {
        // echo "In __invoke()<br>";
        return view('livewire.report');
    }

    public function run()
    {
        // echo "In run()<br>";
        return view('livewire.report');
    }
}
