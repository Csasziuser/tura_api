<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jelentkezes;

class JelentkezesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "tura_id"=>"required|integer|exists:turak,id",
            "email"=>"required|email",
            "letszam"=>"required|integer|min:1"
        ],
        [
            "required"=>":attribute megadása kötelező.",
            "integer"=>":attribute mező csak szám lehet.",
            "exists"=>"Ilyen túra nem létezik.",
            "min"=>"Minimum 1 létszám.",
            "email"=>"Hibás email formátum."
        ]);

        Jelentkezes::create(["tura_id"=>$request->tura_id, "email"=>$request->email, "letszam"=>$request->letszam]);

        return response()->json("Sikeres jelentkezés!",201,options:JSON_UNESCAPED_UNICODE);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
