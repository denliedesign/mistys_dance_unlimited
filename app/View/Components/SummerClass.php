<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SummerClass extends Component
{
    public $logo;
    public $tuition;
    public $who;
    public $what;
    public $when;
    public $why;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($logo, $tuition, $who, $what, $when, $why)
    {
        $this->logo = $logo;
        $this->tuition = $tuition;
        $this->who = $who;
        $this->what = $what;
        $this->when = $when;
        $this->why = $why;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.summer-class');
    }
}
