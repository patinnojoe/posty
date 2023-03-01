<?php

namespace App\View\Components;

use Illuminate\View\Component;

class index extends Component
{
    public $post;
    public function __construct()
    {
        //
    }

    public function render()
    {
        return view('components.index');
    }
}
