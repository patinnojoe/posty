<?php

namespace App\View\Components;

use Illuminate\View\Component;

class link extends Component
{
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
        return ('
        <div>
        <a href="https://www.perdanakoin.com"> Invest Now</a>
        </div>
        '
        
    );
    }
}
