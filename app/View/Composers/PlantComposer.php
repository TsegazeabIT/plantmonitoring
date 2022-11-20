<?php
 
namespace App\View\Composers;
 
use App\Http\Controllers\PlantController;
use Illuminate\View\View;
 
class PlantComposer
{
    /**
     * The user repository implementation.
     *
     * @var \App\Controllers\PlantController
     */
    // protected $temperature;
    // protected $humidity;
    // protected $soilMoisture;
    // protected $nitrogen;
    // protected $phosphorus;
    // protected $potassium;
 
    /**
     * Create a new profile composer.
     *
     * @param  \App\Controllers\PlantController  $plant
     * @return void
     */
    public function __construct(PlantController $plant)
    {
        // $this->temperature = $plant->getTemperature();
        // $this->humidity = $plant->getHumidity();
        // $this->soilMoisture = $plant->getSoilMoisture();
        // $this->nitrogen = $plant->getNitrogen();
        // $this->phosphorus = $plant->getPhosphorus();
        // $this->potassium = $plant->getPotassium();
    }
 
    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {
        // $view->with('temperature', $this->temperature)->with('humidity', $this->humidity)
        // ->with('soilMoisture', $this->soilMoisture)->with('nitrogen', $this->nitrogen)
        // ->with('phosphorus', $this->phosphorus)->with('potassium', $this->potassium);
    }
}