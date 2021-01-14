@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Application info view') }}<a class="btn btn-primary ml-4" href="{{ route('application.index') }}">Back</a></div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div>
                        <p><b>Applicant name:</b> {{$application->name}}</p>
                        <p><b>Email:</b> {{$application->email}}</p>
                        <p><b>Phone:</b> {{$application->phone}}</p>
                        <p><b>Time message sent:</b> {{$application->created_at}}</p>
                    </div>
					
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
