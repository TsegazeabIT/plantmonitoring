<!DOCTYPE html>
<html lang=" str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Plant Monitoring</title>

    <!-- Fonts -->
    <!-- <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> -->

    <!-- Styles -->
    <!-- <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style> -->
    <!-- Google Chart API -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    @vite('resources/css/app.css')
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
        .blink{
            animation: blink 2s linear infinite;
            color: red;
            transform: translate(-50%,-50%)
        }
        .blinker{
            animation: blink 2s linear infinite;
            color: red;
            transform: translate(-50%,-50%)
        }
        @keyframes blink{
            0%{opacity:0;}
            50%{opacity:.5;}
            100%{opacity:1;}
        }
        @keyframes blinker{
            0%{opacity:0;}
            50%{opacity:.5;}
            100%{opacity:1;}
        }
    </style>
    <script>
        var updateParameters = function(){
            $.ajax({
                url:"{{route('getPlantParameters')}}",
                type: 'GET',
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
                }
            });
        }
        updateParameters();
        setInterval(() => {
            updateParameters();
        }, 2000);
    </script>
</head>

<body>
    <!-- Main display board -->
    <h1 class="mt-16 mb-8 text-center text-xl font-bold">Welcome To Indoor Plant Health Monitoring Dashboard</h1>
    <div class="columns-2 flex flex-row">
        <div class="p-16 my-4 bg-gray-400 rounded-xl ml-16">
            <!-- Main parameters display -->
            <div class="my-5 text-black-700 font-bold rounded-full border border-gray-200 w-full p-3 text-center">
                Plant Health Parameters
            </div>
            <div class="columns-3 flex flex-row justify-between text-center">
                <!-- Temperature Display -->
                <div class="mx-2">
                    <h1 class="font-bold text-xs">
                        Ambient Temperature <br> (0C)
                    </h1>
                    <div class="w-36 h-24 min-w-60 rounded-xl border border-gray-200 p-4 bg-green-600">
                        <p class="text-wrap text-gray-200 ">{{$temperature}}</p>
                    </div>
                </div>
                <!-- Humidity Display -->
                <div class="mx-2">
                    <h1 class="font-bold text-xs">
                        Ambient Humidity <br> (%RH)
                    </h1>
                    <div class="w-36 h-24 min-w-60 rounded-xl border border-gray-200 p-4 bg-blue-800">
                        <p class="text-wrap text-gray-200">{{$humidity}}</p>
                    </div>
                </div>
                <!-- Moisture Display -->
                <div class="mx-2">
                    <h1 class="font-bold text-xs">
                        Soil Moisture <br> (%RH)
                    </h1>
                    <div class="w-36 h-24 min-w-60 rounded-xl border border-gray-200 p-4 bg-gray-400">
                        <p class="text-wrap text-gray-200">{{$moisture}}</p>
                    </div>
                </div>
            </div>

            <!-- NPK Parameters display -->

            <div class="my-5 text-black-700 font-bold rounded-full border border-gray-200 w-full p-3 text-center ">
                Soil Nitrogen-Phosphorus-Potassium (NPK) Contents
            </div>
            <!-- Nitrogen Display -->
            <div class="columns-3 flex flex-row justify-between text-center mb-6">
                <div class="mx-2">
                    <h1 class="font-bold text-xs">
                        N(mg/Kg)
                    </h1>
                    <div class="w-36 h-24 min-w-60 rounded-xl border border-gray-200 p-4 bg-gray-600">
                        <p class="text-wrap text-gray-200">{{$nitrogen}}</p>
                    </div>
                </div>
                <!-- Phosphorus Display -->
                <div class="mx-2">
                    <h1 class="font-bold text-xs">
                        P(mg/Kg)
                    </h1>
                    <div class="w-36 h-24 min-w-60 rounded-xl border border-gray-200 p-4 bg-gray-400">
                        <p class="text-wrap text-gray-200">{{$phosphorus}}</p>
                    </div>
                </div>
                <!-- Potassium Display -->
                <div class="mx-2">
                    <h1 class="font-bold text-xs">
                        K(mg/Kg)
                    </h1>
                    <div class="w-36 h-24 min-w-60 rounded-xl border border-gray-200 p-4 bg-amber-600">
                        <p class="text-wrap text-gray-200">{{$potassium}}</p>
                    </div>
                </div>
            </div>
            <hr>
            <div class="my-5 text-black-700 font-bold rounded-full border border-gray-200 w-full p-3 text-center ">
                User Settings For Optimum Parameters
            </div>
            <form class="bg-blue-500 shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <div class="mb-4">
                  <label class="text-gray-700 text-sm font-bold mb-2" for="MaxTemp">
                    Max Temperature (<sup>0</sup>C)
                  </label>
                  <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="MaxTemp" type="text" placeholder="Max Temp">
                </div>
                <div class="mb-4">
                  <label class="text-gray-700 text-sm font-bold mb-2" for="MinTemp">
                    Min Temperature (<sup>0</sup>C)
                  </label>
                  <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="MinTemp" type="text" placeholder="Min Temp">
                </div>
                <div class="mb-4">
                <label class="text-gray-700 text-sm font-bold mb-2" for="MaxHum">
                    Max Humidity (%RH)
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="MaxHum" type="text" placeholder="Max Humidity">
                </div>
                <div class="mb-4">
                <label class="text-gray-700 text-sm font-bold mb-2" for="MinMin">
                    Min Humidity (%RH)
                </label>
                <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="MinHum" type="text" placeholder="Min Humidity">
                </div>
                <div class="mb-4">
                <label class="text-gray-700 text-sm font-bold mb-2" for="MaxMois">
                    Max Soil Moisture (%RH)
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="MaxMois" type="text" placeholder="Max Moisture">
                </div>
                <div class="mb-4">
                <label class="text-gray-700 text-sm font-bold mb-2" for="MinMois">
                    Min Soil Moisture (%RH)
                </label>
                <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="MinMois" type="text" placeholder="Min Moisture">
                </div>
                <div class="flex items-center justify-between">
                  <button class="bg-green-500 hover:bg-blue-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                    Update
                  </button>
                </div>
              </form>
        </div>
    
        <!-- Alerts display borad -->
        <div class="p-16 my-4 bg-gray-400 rounded-xl mr-16 ml-4">
            <div class="mt-5 p-3 text-black-700 font-bold bg-gray-400 rounded-full border border-gray-200 w-full text-center">
               Make sure dashboard is clear of any alert for proper plant health!
            </div>
            <!-- Alert Indicators container -->
            <div class="flex justify-between align-items-center p-5 bg-gray-400">
                @if($MaxTemp==false && $MaxHum==false && $MaxMois==false && $MaxNit==false && $MaxPho==false && $MaxPot==false && $MinTemp==false && $MinHum==false && $MinMois==false && $MinNit==false && $MinPho==false && $MinPot==false)
                    <h1 class="font-bold my-2">Plant is in safety with no operational limits</h1>
                @endif
                <!-- Maximum and Minimum alerts container -->
                <div class="p-5 flex flex-col h-full justify-content-between">
                    
                    @if($MaxTemp==true || $MaxHum==true || $MaxMois==true || $MaxNit==true || $MaxPho==true || $MaxPot==true)
                        <h1 class="font-bold my-2 text-center"><span class="blink"><em>ALERT!</em></span> Maximum Limits Reached!</h1>
                    @endif
                
                    <!-- Max To Circle -->
                    @if($MaxTemp==true)
                        <div
                            class="bg-red-700 my-3 overflow-hidden h-28 w-28 text-center relative  rounded-full border border-gray-200">
                            <div class="absolute top-10 w-full h-full text-sm">Temperature <br> <span class="blinker">{{$temperature}} <em><sup>0</sup>C</em></span></div>
                        </div>
                    @endif
                    <!-- Max %RH Circle -->
                    @if($MaxHum==true)
                        <div
                            class="bg-red-700 my-3 overflow-hidden h-28 w-28 text-center relative  rounded-full border border-gray-200">
                            <div class="absolute top-10 w-full h-full text-sm">Humidty <br> <span class="blinker"><em>{{$humidity}} %RH </em></span></div>
                        </div>
                    @endif
                    <!-- Max Soil Moisture Circle -->
                    @if($MaxMois==true)
                        <div
                            class="bg-red-700 my-3 overflow-hidden h-28 w-28 text-center relative  rounded-full border border-gray-200">
                            <div class="absolute top-10 w-full h-full text-sm">Soil Moisture <br> <span class="blinker"><em>{{$moisture}}%</em></span></div>
                        </div>
                    @endif
                    <!-- Max Nitrogen Circle -->
                    @if($MaxNit==true)
                        <div
                            class="bg-red-700 my-3 overflow-hidden h-28 w-28 text-center relative  rounded-full border border-gray-200">
                            <div class="absolute top-10 w-full h-full text-sm">Nitrogen <br> <span class="blinker"><em>{{$nitrogen}}</em></span></div>
                        </div>
                    @endif
                    <!-- Max Phosphorus Circle -->
                    @if($MaxPho==true)
                        <div
                            class="bg-red-700 my-3 overflow-hidden h-28 w-28 text-center relative  rounded-full border border-gray-200">
                            <div class="absolute top-10 w-full h-full text-sm">Phosphorus<br> <span class="blinker"><em>{{$phosphorus}}</em></span> </div>
                        </div>
                    @endif
                    <!-- Max Potassium Circle -->
                    @if($MaxPot==true)
                        <div
                            class="bg-red-700 my-3 overflow-hidden h-28 w-28 text-center relative  rounded-full border border-gray-200">
                            <div class="absolute top-10 w-full h-full text-sm">Potassium <br> <span class="blinker"><em>{{$potassium}}</em></span> </div>
                        </div>
                    @endif
                </div>
                <div class="p-5 flex flex-col h-full justify-content-between text-wrap text-center align-items-right">
                    @if($MinTemp==true || $MinHum==true || $MinMois==true || $MinNit==true || $MinPho==true || $MinPot==true)
                    <h1 class="font-bold my-2 text-center"><span class="blink"><em>ALERT!</em></span> Minimum Limits Reached!</h1>
                    @endif
                    <!-- Min To Circle -->
                    @if($MinTemp==true)
                        <div
                            class="bg-yellow-400 my-3 relative overflow-hidden h-28 w-28 align-middle rounded-full border border-gray-200">
                            <div class="absolute top-10 w-full h-full text-sm">Temperature <br> <span class="blinker"><em>{{$temperature}} <sup>0</sup>C</em></span> </div>
                        </div>
                    @endif
                    <!-- Min %RH Circle -->
                    @if($MinHum==true)
                        <div
                            class="bg-yellow-400 my-3 overflow-hidden h-28 w-28 text-center relative  rounded-full border border-gray-200">
                            <div class="absolute top-10 w-full h-full text-sm">Humidity <br> <span class="blinker"><em>{{$humidity}} %RH </em></span></div>
                        </div>
                    @endif

                    <!-- Min Soil Moisture Circle -->
                    @if($MinMois==true)
                        <div
                            class="bg-yellow-400 my-3 overflow-hidden h-28 w-28 text-center relative  rounded-full border border-gray-200">
                            <div class="absolute top-10 w-full h-full text-sm">Soil Moisture <br> <span class="blinker"><em>{{$moisture}} %</em></span> </div>
                        </div>
                    @endif

                    <!-- Min Nitrogen Circle -->
                    @if($MinNit==true)
                        <div
                            class="bg-yellow-400 my-3 overflow-hidden h-28 w-28 text-center relative  rounded-full border border-gray-200">
                            <div class="absolute top-10 w-full h-full text-sm">Nitrogen <br> <span class="blinker"><em>{{$nitrogen}}</em></span> </div>
                        </div>
                    @endif

                    <!-- Min Phosphorus Circle -->
                    @if($MinPho==true)
                        <div
                            class="bg-yellow-400 my-3 overflow-hidden h-28 w-28 text-center relative  rounded-full border border-gray-200">
                            <div class="absolute top-10 w-full h-full text-sm">Phosphorus <br> <span class="blinker"><em>{{$phosphorus}}</em></span></div>
                        </div>
                    @endif

                    <!-- Min Potassium Circle -->
                    @if($MinPot==true)
                        <div
                            class="bg-yellow-400 my-3 overflow-hidden h-28 w-28 text-center relative rounded-full border border-gray-200">
                            <div class="absolute top-10 w-full h-full text-sm">Postassium <br><span class="blinker"><em>{{$potassium}}</em></span> </div>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
    <!-- Google chart API implementation -->
    {{-- <div id="chart_div">

    </div> --}}
</body>


</html>