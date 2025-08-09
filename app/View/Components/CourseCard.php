<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CourseCard extends Component
{
    public $image;
    public $title;
    public $category;
    public $link;
    public $description;

    public function __construct($image, $title, $category, $link, $description)
    {
        $this->image = $image;
        $this->title = $title;
        $this->category = $category;
        $this->description = $description;
        $this->link = $link;
    }

    public function render()
    {
        return view('components.course-card');
    }
}