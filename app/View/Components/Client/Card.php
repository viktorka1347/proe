<?php

namespace App\View\Components\Client;

use Illuminate\View\Component;

class Card extends Component
{
    public $halls, $seances, $film, $seats, $dateChosen, $dateCurrent;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($seances='', $seats='', $halls='', $film='', $dateChosen='', $dateCurrent='')
    {
        $this->halls = $halls;
        $this->film = $film;
        $this->seances = $seances;
        $this->seats = $seats;
        $this->dateChosen = $dateChosen;
        $this->dateCurrent = $dateCurrent;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.client.card');
    }
}
