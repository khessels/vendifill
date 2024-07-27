<?php

namespace App\Livewire;

use JetBrains\PhpStorm\NoReturn;
use Livewire\Component;
use Livewire\Attributes\On;
class Map extends Component
{
    public $latitude    = 9.934739;
    public $longitude   = -84.087502;
    public $title       = 'Title';
    public $zoom        = 19;
    public $height      = 800;
    public $id          = null;
    public $component   = null;

    #[NoReturn] #[On('map-update')]
    public function setCoordinates($data = []): void
    {
        $this->latitude   = empty($data['latitude']) ? 9.934739 : $data['latitude'];
        $this->longitude  = empty($data['longitude']) ? -84.087502 : $data['longitude'];
        $this->title      = empty($data['name']) ? 'Title' : $data['name'];
        $this->zoom       = empty($data['zoom']) ? 19 : $data['zoom'];
        $this->height     = empty($data['height']) ? 700 : $data['height'];
        $this->id         = empty($data['id']) ? null : $data['id'];
        $this->component  = empty($data['component']) ? null : $data['component'];
        $data['title']    = $this->title;
        $this->dispatch('map-updated', $data);
    }

    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\View\View
    {
        return view('livewire.map')
            ->with('id'             , $this->id)
            ->with('component'      , $this->component)
            ->with('height'         , $this->height)
            ->with('latitude'       , $this->latitude)
            ->with('longitude'      , $this->longitude)
            ->with('title'          , $this->title)
            ->with('zoom'           , $this->zoom);
    }

}
