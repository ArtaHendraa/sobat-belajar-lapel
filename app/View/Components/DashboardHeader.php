<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DashboardHeader extends Component
{
    public $image;
    public $page;

    public function __construct($image, $page)
    {
        $this->image = $image;
        $this->page = $page;
    }

    public function render()
    {
        return view('components.dashboard-header');
    }
}
