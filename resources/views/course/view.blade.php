@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Course view') }}<a class="btn btn-primary ml-4" href="{{ route('course.index') }}">Back</a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div>
                        <p><b>Course name:</b> {{$course->name}}</p>
                        <p><b>Level required:</b> {{$course->level->name}}</p>
                        <p><b>What will you learn?</b></p>
                        <ul>
                        @foreach($course->advantages as $advantage)
                            <li>{{$advantage->name}}</li>
                        @endforeach
                        </ul>
                        <p><b>What will student get after completing the course?</b></p>
                        <ul>
                        @foreach($course->graduationStaffs as $staff)
                            <li>{{$staff->name}}</li>
                        @endforeach
                        </ul>
                        <p><b>Courses are for individual or in a group?</b></p>
                        <ul>
                        @foreach($course->courseTypes as $type)
                            <li>{{$type->name}}</li>
                        @endforeach
                        </ul>
                        <p><b>What are the prices?</b></p>
                        <ul>
                        @foreach($course->prices as $price)
                            <li>{{$price->name}}</li>
                        @endforeach
                        </ul>
                        <p><b>How many hours per month? </b></p>
                        <ul>
                        @foreach($course->classRates as $rate)
                            <li>{{$rate->name}}</li>
                        @endforeach
                        </ul>
                        
                    </div>
					
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
