@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Teacher info view') }}<a class="btn btn-primary ml-4" href="{{ route('teacher.index') }}">Back</a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div>
                        <p><b>Teacher name:</b> {{$teacher->name . ' ' . $teacher->surname}}</p>
                        <p><b>Country:</b> {{$teacher->country}}</p>
                        <p><b>Experience:</b> {{$teacher->experience}}</p>
                        <p><b>Avatar </b><img src="{{asset('storage/' . $teacher->avatar_path)}}" alt="avatar" height="100" ></p>
                        
                    </div>
					
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
