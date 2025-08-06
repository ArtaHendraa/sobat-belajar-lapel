<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DashboardHeader extends Component
{
    public $image;

    public function __construct($image)
    {
        $this->image = $image;
    }

    public function render()
    {
        return view('components.dashboard-header');
    }
}
