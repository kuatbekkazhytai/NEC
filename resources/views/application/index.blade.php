@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('List Of Applications') }} <a class="btn btn-secondary ml-4" href="{{ route('home') }}">Back</a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-hover">
			            <thead>
			              <tr>
			                <th class="text-center" style="width:7%;">#</th>
			                <th class="text-center" style="width:25%;">Applicant name</th>
                            <th class="text-center" style="width:25%;">Email</th>
                            <th class="text-center" style="width:25%;">Phone</th>
                            <th class="text-center" style="width:18%;">Created at</th>
			              </tr>
			            </thead>
			            <tbody>
                            @foreach($applications as $application)
                            <tr>
                                <td class="text-center"><a href="{{ route('application.view', ['application' => $application]) }}">{{$loop->iteration}}</a></td>
                                <td class="text-center">
                                    {{$application->name}}
                                </td>
                                <td class="text-center">
                                    {{$application->email}}
                                </td>
                                <td class="text-center">
                                    {{$application->phone}}
                                </td>
                                <td class="text-center">
                                    {{$application->created_at->addHours(6)}}
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
