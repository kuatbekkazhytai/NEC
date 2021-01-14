<?php

namespace App\Http\Controllers;


use App\Course;
use App\Level;
use App\Advantage;
use App\ClassRate;
use App\CourseType;
use App\GraduationStaff;
use App\Price;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('course.index', compact('courses'));
    }

    public function create()
    {
        $levels = Level::all();
        return view('course.create', compact('levels'));
    }

    public function store(Request $request) 
    {
        $records = array_slice($request->all(), 1);
        // dd($records);
        $validator = Validator::make( $records,[
            'courseName' => ['required', 'string', 'max:255'],
            'advantage' => ['required', 'string', 'max:255'],
            'output' => ['required', 'string', 'max:255'],
            'courseType' => ['required', 'string', 'max:255'],
            'price' => ['required', 'string', 'max:255'],
            'duration' => ['required', 'string', 'max:255'],
        ]);
        $course = Course::create([
            'name' => $records['courseName'],
            'level_id' => $records['level']
        ]);
        
        $this->insertAdvantages($request->all(), $course->id);
        $this->insertClassRates($request->all(),$course->id);
        $this->insertCourseTypes($request->all(), $course->id);
        $this->insertGraduationStaff($request->all(), $course->id);
        $this->insertPrices($request->all(), $course->id);
        

        return Redirect::route('course.index')->with('status', 'Course was successfully inserted!');
    }

    public function view(Course $course) 
    {
        return view('course.view', compact('course'));
    }
    public function delete(Course $course) 
    {
        Advantage::where('course_id', $course->id)->delete();
        Price::where('course_id', $course->id)->delete();
        CourseType::where('course_id', $course->id)->delete();
        GraduationStaff::where('course_id', $course->id)->delete();
        ClassRate::where('course_id', $course->id)->delete();
        $course->delete();
        return Redirect::back()->with('status', 'Course was successfully deleted!');
    }


    private function insertAdvantages($array, $courseId) 
    {
        Advantage::create([
            'name' => $array['advantage'],
            'course_id' => $courseId,
        ]);

        if (isset($array['advantages'])) {
            foreach($array['advantages'] as $advantage) {
                Advantage::create([
                    'name' => $advantage,
                    'course_id' => $courseId,
                ]);
            }
        }
    }

    private function insertClassRates($array, $courseId) 
    {
        ClassRate::create([
            'name' => $array['duration'],
            'course_id' => $courseId,
        ]);

        if (isset($array['durations'])) {
            foreach($array['durations'] as $duration) {
                ClassRate::create([
                    'name' => $duration,
                    'course_id' => $courseId, 
                ]);
            }
        }
    }

    private function insertCourseTypes($array, $courseId) 
    {
        CourseType::create([
            'name' => $array['courseType'],
            'course_id' => $courseId,
        ]);

        if (isset($array['courseTypes'])) {
            foreach($array['courseTypes'] as $courseType) {
                CourseType::create([
                    'name' => $courseType,
                    'course_id' => $courseId,
                ]);
            }
        }
    }

    private function insertGraduationStaff($array, $courseId) 
    {
        GraduationStaff::create([
            'name' => $array['output'],
            'course_id' => $courseId,
        ]);

        if (isset($array['outputs'])) {
            foreach($array['outputs'] as $output) {
                GraduationStaff::create([
                    'name' => $output,
                    'course_id' => $courseId,
                ]);
            }
        }
    }
    private function insertPrices($array, $courseId) 
    {
        Price::create([
            'name' => $array['price'],
            'course_id' => $courseId,
        ]);

        if (isset($array['prices'])) {
            foreach($array['prices'] as $price) {
                Price::create([
                    'name' => $price,
                    'course_id' => $courseId,
                ]);
            }
        }
    }

} 
