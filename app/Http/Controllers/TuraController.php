<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tura;
class TuraController extends Controller
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
            "nev"=> "required|string|max:50",
            "tav"=> "required|integer|min:1",
            "elerheto_hely" => "required|integer"
        ], [
            "required"=>":attribute mező kötelező!",
            "integer"=>":attribute mezőnek számnak kell lennie!",
            "string" => ":attribute mezőnek szövegnek kell lennie!",
            "min"=>":attribute mezőnek minimum :min hosszúnak kell lennie",
            "max" => ":attribute mező maximum :max hosszú lehet"
        ]);
        Tura::create([
            "nev"=>$request->nev,
            "tav" => $request->tav,
            "elerheto_hely" => $request->elerheto_hely
        ]);
        return response()->json(["uzenet" => "Túra rögzítve!"],201,options:JSON_UNESCAPED_UNICODE);
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
