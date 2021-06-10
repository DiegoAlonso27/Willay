<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ShowPost extends Component
{
    public $titulo;
    public $link;
    public $img;
    public $content;
    public $categoria;
    public $link1;
    public $link2;
    public $img1;
    public $img2;
    public $name1;
    public $name2;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.show-post');
    }
}
