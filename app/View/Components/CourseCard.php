<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CourseCard extends Component
{
    public $image;
    public $title;
    public $category;
    public $total;
    public $level;
    public $link;

    public function __construct($image, $title, $category, $total, $level, $link)
    {
        $this->image = $image;
        $this->title = $title;
        $this->category = $category;
        $this->total = $total;
        $this->level = $level;
        $this->link = $link;
    }

    public function render()
    {
        return view('components.course-card');
    }
}

