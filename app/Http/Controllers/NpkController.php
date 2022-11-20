<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Npk;

class NpkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getNitrogenBlynk()
    {
       $response = Http::get("https://fra1.blynk.cloud/external/api/get?token=cXO6-0ZTmHMlyDiwmKr9I0R_Ur3ykuQZ&V3");
       return $response->json();
    }

    public function getPhosphorusBlynk()
    {
       $response = Http::get("https://fra1.blynk.cloud/external/api/get?token=cXO6-0ZTmHMlyDiwmKr9I0R_Ur3ykuQZ&V4");
       return $response->json();
    }
    public function getPotassiumBlynk()
    {
       $response = Http::get("https://fra1.blynk.cloud/external/api/get?token=cXO6-0ZTmHMlyDiwmKr9I0R_Ur3ykuQZ&V5");
       return $response->json();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
