<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\History;
use App\Models\Material;
use App\Models\MaterialContent;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function show(string $id, string $materi_id)
    {
        $course = Course::find($id);

        $materials = $course->material;

        $content = MaterialContent::find($materi_id);

        // Insert ke tabel histories
        History::firstOrCreate(
            [
                'user_id' => session('user_id'),
                'course_id' => $id
            ]
        );


        return view('content', compact('materials', 'course', 'content'));
    }
}
