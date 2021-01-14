@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('List Of Courses') }} <a class="btn btn-primary ml-4" href="{{ route('course.create') }}">Create</a><a class="btn btn-secondary ml-4" href="{{ route('home') }}">Back</a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

					<table class="table table-hover">
			            <thead>
			              <tr>
			                <th style="width:7%;">#</th>
			                <th style="width:33%;">CourseName</th>
                            <th style="width:30%;">Prerequisites</th>
                            <th style="width:30%;">Action</th>
			              </tr>
			            </thead>
			            <tbody>
                            @foreach($courses as $course)
                            <tr>
                                <td><a href="{{ route('course.view', ['course' => $course]) }}">{{$loop->iteration}}</a></td>
                                <td>
                                    {{$course->name}}
                                </td>
                                <td>
                                    {{$course->level->name}}
                                </td>
                                <td>
                                    <div class="row">
                                    <button class="btn btn-link btn-simple-primary" data-original-title="Изменить" onclick="window.location='{{ route('course.edit', ['course' => $course]) }}'">
                                       edit
                                    </button>
                                    <form action="{{ route('course.delete', ['course' => $course]) }}" method="POST">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        <button type="submit" class="btn btn-link btn-danger" data-original-title="Удалить">
                                            delete
                                        </button>
                                    </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
			            </tbody>
			        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
