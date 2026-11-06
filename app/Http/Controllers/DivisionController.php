<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;

class DivisionController extends Controller
{
    public function index()
    {
        return view('division');
    }

    public function divide(Request $request)
    {
        $result = null;
        $error  = null;

        try {
            $a = $request->num_a;
            $b = $request->num_b;

            if ($b == 0) {
                throw new Exception("You cannot divide by zero!");
            }

            $result = $a / $b;

        } catch (Exception $e) {
            $error = $e->getMessage();
        }

        return view('division', compact('result', 'error'));
    }
}