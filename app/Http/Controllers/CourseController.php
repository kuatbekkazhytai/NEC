<?php

namespace App\Http\Controllers;


use App\Course;
use App\Level;
use App\Advantage;
use App\ClassRate;
use App\CourseType;
use App\GraduationStaff;
use App\Price;
use Illuminate\Support\Facades\DB;
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
        $validator = Validator::make( $records,[
            'courseName' => ['required', 'string', 'max:255'],
            'advantage' => ['required', 'string', 'max:255'],
            'output' => ['required', 'string', 'max:255'],
            'courseType' => ['required', 'string', 'max:255'],
            'price' => ['required', 'string', 'max:255'],
            'duration' => ['required', 'string', 'max:255'],
        ]);

        DB::transaction(function () use($records, $request) {
            $course = Course::create([
                'name' => $records['courseName'],
                'level_id' => $records['level']
            ]);

            $this->insertAdvantages($request->all(), $course->id);
            $this->insertClassRates($request->all(),$course->id);
            $this->insertCourseTypes($request->all(), $course->id);
            $this->insertGraduationStaff($request->all(), $course->id);
            $this->insertPrices($request->all(), $course->id);
        });
        
        return Redirect::route('course.index')->with('status', 'Course was successfully inserted!');
    }

    public function edit(Course $course) 
    {
        $levels = Level::all()->whereNotIn('id', [$course->level->id]);
        return view('course.edit', compact('course', 'levels'));
    }

    public function update(Course $course, Request $request) 
    {
        $records = array_slice($request->all(), 2);
        $validator = Validator::make( $records,[
            'courseName' => ['required', 'string', 'max:255'],
        ]);

        DB::transaction(function () use($records, $request, $course) {
            $course->name = $records['courseName'];
            $course->level_id = $records['level'];
            $course->update();
            $this->updateAdvantages($records, $course);
            $this->updateClassRates($request->all(),$course);
            $this->updateCourseTypes($request->all(), $course);
            $this->updateGraduationStaff($request->all(), $course);
            $this->updatePrices($request->all(), $course);
        });
        return Redirect::route('course.index')->with('status', 'Course was successfully updated!');
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

    private function updateAdvantages($array, $course) 
    {   
        $reversed = array_reverse($array["advantages"]);
        foreach($course->advantages as $advantage) {
            if($reversed) {
                $advantage->name = array_pop($reversed);
                $advantage->update();
            } else {
                $advantage->delete();
            }
        }
        if (sizeof($reversed) !== Null) {
            foreach($reversed as $item) {
                Advantage::create([
                    'name' => $item,
                    'course_id' => $course->id,
                ]);
            }
        }
    }
    private function updateClassRates($array, $course) 
    {   
        $reversed = array_reverse($array["durations"]);
        foreach($course->classRates as $rate) {
            if($reversed) {
                $rate->name = array_pop($reversed);
                $rate->update();
            } else {
                $rate->delete();
            }     
        }
        if (sizeof($reversed) !== Null) {
            foreach($reversed as $item) {
                ClassRate::create([
                    'name' => $item,
                    'course_id' => $course->id,
                ]);
            }
        }
    }
    private function updateCourseTypes($array, $course) 
    {   
        $reversed = array_reverse($array["courseTypes"]);
        foreach($course->courseTypes as $type) {
            if($reversed) {
                $type->name = array_pop($reversed);
                $type->update();
            } else {
                $type->delete();
            }
            
        }
        if (sizeof($reversed) !== Null) {
            foreach($reversed as $item) {
                CourseType::create([
                    'name' => $item,
                    'course_id' => $course->id,
                ]);
            }
        }
    }
    private function updateGraduationStaff($array, $course) 
    {   
        $reversed = array_reverse($array["outputs"]);
        foreach($course->graduationStaffs as $staff) {
            if($reversed) {
                $staff->name = array_pop($reversed);
                $staff->update();
            } else {
                $staff->delete();
            }
        }
        if (sizeof($reversed) !== Null) {
            foreach($reversed as $item) {
                GraduationStaff::create([
                    'name' => $item,
                    'course_id' => $course->id,
                ]);
            }
        }
    }
    private function updatePrices($array, $course) 
    {   
        $reversed = array_reverse($array["prices"]);
        foreach($course->prices as $price) {
            if($reversed) {
                $price->name = array_pop($reversed);
                $price->update();
            } else {
                $price->delete();
            }
        }
        if (sizeof($reversed) !== Null) {
            foreach($reversed as $item) {
                Price::create([
                    'name' => $item,
                    'course_id' => $course->id,
                ]);
            }
        }
    }

} 
