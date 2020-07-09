<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Events extends Component
{
    public $size;
    public $name;
    public $img;
    public $target;
    public $attendees;
    public $date;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($size, $name, $img, $target, $attendees, $date)
    {
        $this->size = $size;
        $this->name = $name;
        $this->img = $img;
        $this->target = $target;
        $this->attendees = $attendees;
        $this->date = $date;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.events');
    }
}
