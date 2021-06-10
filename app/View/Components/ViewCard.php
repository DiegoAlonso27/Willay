<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ViewCard extends Component
{
    public $titulo;
    public $link;
    public $img;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($titulo, $link, $img)
    {
        $this->titulo = $titulo;
        $this->link = $link;
        $this->img = $img;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.view-card');
    }
}
