<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MainCourseCard extends Component
{
    /**
     * Create a new component instance.
     */

    public $title;
    public $image;
    public $description;
    public $total;
    public $type;
    public $jenjang;

    public function __construct($title, $image, $description, $total, $type, $jenjang)
    {
        $this->title = $title;
        $this->image = $image;
        $this->description = $description;
        $this->total = $total;
        $this->type = $type;
        $this->jenjang = $jenjang;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.main-course-card');
    }
}
