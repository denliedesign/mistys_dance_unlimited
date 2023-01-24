<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Instructor extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $image;
    public $name;
    public $title;
    public $bio;

    public function __construct($image, $name, $title, $bio)
    {
        $this->image = $image;
        $this->name = $name;
        $this->title = $title;
        $this->bio = $bio;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.instructor');
    }
}
