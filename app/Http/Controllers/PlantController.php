<?php

namespace App\Http\Controllers;

use App\Models\Plant;
use Illuminate\Support\Facades\Http;
use App\Http\Requests\StorePlantRequest;
use App\Http\Requests\UpdatePlantRequest;

class PlantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getPlantParameters()
    {
       $response = Http::get("https://fra1.blynk.cloud/external/api/get?token=cXO6-0ZTmHMlyDiwmKr9I0R_Ur3ykuQZ&V0&V1&V2&V3&V4&V5");
    //    $humidity = Http::get("https://fra1.blynk.cloud/external/api/get?token=cXO6-0ZTmHMlyDiwmKr9I0R_Ur3ykuQZ&V1");
    //    $moisture = Http::get("https://fra1.blynk.cloud/external/api/get?token=cXO6-0ZTmHMlyDiwmKr9I0R_Ur3ykuQZ&V2");
    //    $nitrogen = Http::get("https://fra1.blynk.cloud/external/api/get?token=cXO6-0ZTmHMlyDiwmKr9I0R_Ur3ykuQZ&V3");
    //    $phosphorus = Http::get("https://fra1.blynk.cloud/external/api/get?token=cXO6-0ZTmHMlyDiwmKr9I0R_Ur3ykuQZ&V4");
    //    $potassium = Http::get("https://fra1.blynk.cloud/external/api/get?token=cXO6-0ZTmHMlyDiwmKr9I0R_Ur3ykuQZ&V5");
       //$response = Http::get("https://jsonplaceholder.typicode.com/posts");
      $temperature = number_format($response['V0'],2);
      $humidity = number_format($response['V1'],2);
      $moisture = number_format($response['V2'],2);
      $nitrogen = number_format($response['V3'],2);
      $phosphorus = number_format($response['V4'],2);
      $potassium = number_format($response['V5'],2);

    // Testing scenarios
    //  $temperature = 0.00;
    //  $humidity = 90.00;
    //  $moisture = 80.00;
    //  $nitrogen = 1999;
    //  $phosphorus = 1999;
    //  $potassium = 1999;
    //   Temperature checking for min and max values
      if(10.00 < $temperature && $temperature < 24.00)
      {
        $MaxTemp = false;
        $MinTemp = false;
      }
      elseif($temperature > 24.00)
      {
        $MaxTemp = true;
        $MinTemp = false;
      }
      else
      {
        $MaxTemp = false;
        $MinTemp = true;
      }

    //   Humidity checking for min and max values
      if(20.00 < $humidity && $humidity < 80.00)
      {
        $MaxHum = false;
        $MinHum =false;
      }
      elseif($humidity > 80.00)
      {
        $MaxHum = true;
        $MinHum = false;
      }
      else
      {
        $MaxHum = false;
        $MinHum = true;
      }
    //   Soil Moisture checking for min and max values
      if(20.00 < $moisture && $moisture < 60.00)
      {
        $MaxMois = false;
        $MinMois =false;
      }
      elseif($moisture > 60.00)
      {
        $MaxMois = true;
        $MinMois = false;
      }
      else
      {
        $MaxMois = false;
        $MinMois = true;
      }

      //   Nitrogen content checking for min and max values
      if(20.00 < $nitrogen && $nitrogen < 80.00)
      {
        $MaxNit = false;
        $MinNit =false;
      }
      elseif($nitrogen > 80.00)
      {
        $MaxNit = true;
        $MinNit = false;
      }
      else
      {
        $MaxNit = false;
        $MinNit = true;
      }
       //   Phosphorus content checking for min and max values
       if(25.00 < $phosphorus && $phosphorus < 50.00)
       {
         $MaxPho = false;
         $MinPho = false;
       }
       elseif($phosphorus > 50.00)
       {
         $MaxPho = true;
         $MinPho = false;
       }
       else
       {
         $MaxPho = false;
         $MinPho = true;
       }

       //   Potassium content checking for min and max values
       if(40.00 < $potassium && $potassium < 80.00)
       {
         $MaxPot = false;
         $MinPot = false;
       }
       elseif($potassium > 80.00)
       {
         $MaxPot = true;
         $MinPot = false;
       }
       else
       {
         $MaxPot = false;
         $MinPot = true;
       }

       return view('dashboard')->with([
        'temperature'=>$temperature,'humidity'=>$humidity, 
        'moisture'=>$moisture,'nitrogen'=>$nitrogen,
        'phosphorus'=>$phosphorus,'potassium'=>$potassium, 
        'MaxTemp'=>$MaxTemp, 'MinTemp'=>$MinTemp,
        'MaxHum'=>$MaxHum,'MinHum'=>$MinHum,
        'MaxMois'=>$MaxMois,'MinMois'=>$MinMois,
        'MaxNit'=>$MaxNit,'MinNit'=>$MinNit,
        'MaxPho'=>$MaxPho,'MinPho'=>$MinPho,
        'MaxPot'=>$MaxPot,'MinPot'=>$MinPot]);
    }
    // public function getTemperature()
    // {
    //    $temp = Http::get("https://fra1.blynk.cloud/external/api/get?token=cXO6-0ZTmHMlyDiwmKr9I0R_Ur3ykuQZ&V0");
    //    //$response = Http::get("https://jsonplaceholder.typicode.com/posts");
    //    return $temp->json();
    // }
    // public function getHumidity()
    // {
    //    $hum = Http::get("https://fra1.blynk.cloud/external/api/get?token=cXO6-0ZTmHMlyDiwmKr9I0R_Ur3ykuQZ&V1");
    //    return $hum->json();
    // }
    // public function getSoilMoisture()
    // {
    //    $moisture = Http::get("https://fra1.blynk.cloud/external/api/get?token=cXO6-0ZTmHMlyDiwmKr9I0R_Ur3ykuQZ&V2");
    //    return $moisture->json();
    // }
    // public function getNitrogen()
    // {
    //    $nitrogen = Http::get("https://fra1.blynk.cloud/external/api/get?token=cXO6-0ZTmHMlyDiwmKr9I0R_Ur3ykuQZ&V3");
    //    return $nitrogen->json();
    // }

    // public function getPhosphorus()
    // {
    //    $phos = Http::get("https://fra1.blynk.cloud/external/api/get?token=cXO6-0ZTmHMlyDiwmKr9I0R_Ur3ykuQZ&V4");
    //    return $phos->json();
    // }
    // public function getPotassium()
    // {
    //    $pot = Http::get("https://fra1.blynk.cloud/external/api/get?token=cXO6-0ZTmHMlyDiwmKr9I0R_Ur3ykuQZ&V5");
    //    return $pot->json();
    // }
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
     * @param  \App\Http\Requests\StorePlantRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePlantRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Plant  $plant
     * @return \Illuminate\Http\Response
     */
    public function show(Plant $plant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Plant  $plant
     * @return \Illuminate\Http\Response
     */
    public function edit(Plant $plant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePlantRequest  $request
     * @param  \App\Models\Plant  $plant
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePlantRequest $request, Plant $plant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Plant  $plant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plant $plant)
    {
        //
    }
}
