@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('List Of Teachers') }}<a class="btn btn-primary ml-4" href="{{ route('teacher.create') }}">Create</a><a class="btn btn-secondary ml-4" href="{{ route('home') }}">Back</a></div>

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
			                <th style="width:33%;">Teacher name</th>
                            <th style="width:30%;">Teacher country</th>
                            <th style="width:30%;">Action</th>
			              </tr>
			            </thead>
			            <tbody>
                            @foreach($teachers as $teacher)
                            <tr>
                                <td><a href="{{ route('teacher.view', ['teacher' => $teacher]) }}">{{$loop->iteration}}</a></td>
                                <td>
                                    {{$teacher->name}}
                                </td>
                                <td>
                                    {{$teacher->country}}
                                </td>
                                <td>
                                    <div class="row">
                                    <button class="btn btn-link btn-simple-primary" data-original-title="Изменить" onclick="window.location='{{ route('teacher.edit', ['teacher' => $teacher]) }}'">
                                       edit
                                    </button>
                                    <form action="{{ route('teacher.delete', ['teacher' => $teacher]) }}" method="POST">
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
