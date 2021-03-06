<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CardView extends Component
{
    public $titulo;
    public $link;
    public $img;
    public $content;
    public $categoria;
    public $tag;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($titulo, $link, $img, $content, $categoria, $tag)
    {
        $this->titulo = $titulo;
        $this->link = $link;
        $this->img = $img;
        $this->content = $content;
        $this->categoria = $categoria;
        $this->tag = $tag;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card-view');
    }
}
