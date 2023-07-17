<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TwoFactorController extends Controller
{

    public function index()
    {
        return view('auth.verify');
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $user = auth()->user();
        $inputCode = $request->input('code');

        if ($inputCode === $user->code) {
            $user->resetCode();
            return redirect()->route('dashboard');
        }

        return redirect()
            ->back()
            ->withErrors(['code' => 'The entry code is not correct']);
    }



    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        //
    }
}
