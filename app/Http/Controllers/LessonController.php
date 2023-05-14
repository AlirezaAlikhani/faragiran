<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Course $courses)
    {
        $courses = Course::all();

        $lessons = Lesson::query();
        $lessons = $lessons->latest()->paginate(100);
        return view('lesson.index', compact('lessons' , 'courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Course $course)
    {
        return view('lesson.create', compact('course'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request , Course $course)
    {
        $inputs = $request->all();
        $inputs['course_id'] = $course->id;
        $lesson = Lesson::create($inputs);
        return redirect()->route('courses.index', $course->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
