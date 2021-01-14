@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Creation of course') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('course.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="courseName" class="col-md-4 col-form-label text-md-right">{{ __('Course name') }}</label>

                            <div class="col-md-6">
                                <input id="courseName" type="text" class="form-control @error('courseName') is-invalid @enderror" name="courseName" value="{{ old('courseName') }}" required autocomplete="courseName" autofocus>

                                @error('courseName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="level" class="col-md-4 col-form-label text-md-right">{{ __('Level Required') }}</label>
                            <div class="col-md-6">
                                <select class="form-control" name="level" id="level">
                                    <option value="" disabled selected>choose a level</option>
                                    @foreach($levels as $level)
                                    <option value="{{$level->id}}">{{ $level->name}}</option>
                                    @endforeach
                                </select>
                                @error('level')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div>
                            <div class="form-group row">
                                <label for="advantage" class="col-md-4 col-form-label text-md-right">{{ __('What will you learn?') }}</label>
                                <div class="col-md-6" id="input-advantage-list">
                                    <input class="form-control" type='text' name='advantage'><br>
                                </div>
                            </div>
                            <div class="text-center">
                                <input type='button' class="btn btn-info btn-sm" onclick="createAdvantageField()" value='Add'>
                                <input type='button' class="btn btn-danger btn-sm" onclick="removeAdvantageField()" value='Remove'>
                            </div>
                        </div>
                        <br>
                        <div>
                            <div class="form-group row">
                                <label for="output" class="col-md-4 col-form-label text-md-right">{{ __('What will student get after completing the course?') }}</label>
                                <div class="col-md-6 mb-0" id="input-output-list">
                                    <input class="form-control" type='text' name='output'><br>
                                </div>
                            </div>
                            <div class="text-center">
                                <input type='button' class="btn btn-info btn-sm" onclick="createOutputField()" value='Add'>
                                <input type='button' class="btn btn-danger btn-sm" onclick="removeOutputField()" value='Remove'>
                            </div>
                        </div>
                        <br>
                        <div>
                            <div class="form-group row">
                                <label for="courseType" class="col-md-4 col-form-label text-md-right">{{ __('Courses are for individual or in a group??') }}</label>
                                <div class="col-md-6 mb-0" id="input-courseType-list">
                                    <input class="form-control" type='text' name='courseType'><br>
                                </div>
                            </div>
                            <div class="text-center">
                                <input type='button' class="btn btn-info btn-sm" onclick="createCourseTypeField()" value='Add'>
                                <input type='button' class="btn btn-danger btn-sm" onclick="removeCourseTypeField()" value='Remove'>
                            </div>
                        </div>

                        <br>
                        <div>
                            <div class="form-group row">
                                <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('What are the prices?') }}</label>
                                <div class="col-md-6 mb-0" id="input-price-list">
                                    <input class="form-control" type='text' name='price'><br>
                                </div>
                            </div>
                            <div class="text-center">
                                <input type='button' class="btn btn-info btn-sm" onclick="createPriceField()" value='Add'>
                                <input type='button' class="btn btn-danger btn-sm" onclick="removePriceField()" value='Remove'>
                            </div>
                        </div>

                        <br>
                        <div>
                            <div class="form-group row">
                                <label for="duration" class="col-md-4 col-form-label text-md-right">{{ __('How many hours per month?') }}</label>
                                <div class="col-md-6 mb-0" id="input-duration-list">
                                    <input class="form-control" type='text' name='duration'><br>
                                </div>
                            </div>
                            <div class="text-center">
                                <input type='button' class="btn btn-info btn-sm" onclick="createDurationField()" value='Add'>
                                <input type='button' class="btn btn-danger btn-sm" onclick="removeDurationField()" value='Remove'>
                            </div>
                        </div>
                        
                        <br>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                                <a href="{{ route('course.index')}}" class="btn btn-secondary">
                                    {{ __('Back') }}
                                </a>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')

<script type="text/javascript">


    function createAdvantageField() {

        console.log('done')
        let input = document.createElement('input');
        let lineBreak = document.createElement('br');
        let  testId = "advantage";
        let i = 0;
        let x = document.getElementsByTagName('INPUT').length - 2;
        for (i = 0; i < x; i++) {
            i;
        }
        input.setAttribute('id', testId + i);
        input.type = 'text';
        input.name = 'advantages[]';
        input.classList.add("form-control");
        let advantageForm = document.getElementById('input-advantage-list');
        advantageForm.appendChild(input);
        advantageForm.appendChild(lineBreak);
    }

    function removeAdvantageField() {
        
        let x = document.getElementsByTagName('INPUT').length;
        if ( x > 3 ) {
            $('#input-advantage-list input:last').remove();
            $('#input-advantage-list br:last').remove();
            return false;
        } else {
        }
    }

    function createOutputField() {

        console.log('done')
        let input = document.createElement('input');
        let lineBreak = document.createElement('br');
        let  testId = "output";
        let i = 0;
        let x = document.getElementsByTagName('INPUT').length - 2;
        for (i = 0; i < x; i++) {
            i;
        }
        input.setAttribute('id', testId + i);
        input.type = 'text';
        input.name = 'outputs[]';
        input.classList.add("form-control");
        let outputForm = document.getElementById('input-output-list');
        outputForm.appendChild(input);
        outputForm.appendChild(lineBreak);
    }

    function removeOutputField() {

        let x = document.getElementsByTagName('INPUT').length;
        if ( x > 3 ) {
            $('#input-output-list input:last').remove();
            $('#input-output-list br:last').remove();
            return false;
        } else {
        }
    }

    function createCourseTypeField() {

        console.log('done')
        let input = document.createElement('input');
        let lineBreak = document.createElement('br');
        let  testId = "courseType";
        let i = 0;
        let x = document.getElementsByTagName('INPUT').length - 2;
        for (i = 0; i < x; i++) {
            i;
        }
        input.setAttribute('id', testId + i);
        input.type = 'text';
        input.name = 'courseTypes[]';
        input.classList.add("form-control");
        let courseTypeForm = document.getElementById('input-courseType-list');
        courseTypeForm.appendChild(input);
        courseTypeForm.appendChild(lineBreak);
    }

    function removeCourseTypeField() {

        let x = document.getElementsByTagName('INPUT').length;
        if ( x > 3 ) {
            $('#input-courseType-list input:last').remove();
            $('#input-courseType-list br:last').remove();
            return false;
        } else {
        }
    }

    function createPriceField() {

        console.log('done')
        let input = document.createElement('input');
        let lineBreak = document.createElement('br');
        let  testId = "price";
        let i = 0;
        let x = document.getElementsByTagName('INPUT').length - 2;
        for (i = 0; i < x; i++) {
            i;
        }
        input.setAttribute('id', testId + i);
        input.type = 'text';
        input.name = 'prices[]';
        input.classList.add("form-control");
        let priceForm = document.getElementById('input-price-list');
        priceForm.appendChild(input);
        priceForm.appendChild(lineBreak);
    }

    function removePriceField() {

        let x = document.getElementsByTagName('INPUT').length;
        if ( x > 3 ) {
            $('#input-price-list input:last').remove();
            $('#input-price-list br:last').remove();
            return false;
        } else {
        }
    }

    function createDurationField() {

        console.log('done')
        let input = document.createElement('input');
        let lineBreak = document.createElement('br');
        let  testId = "duration";
        let i = 0;
        let x = document.getElementsByTagName('INPUT').length - 2;
        for (i = 0; i < x; i++) {
            i;
        }
        input.setAttribute('id', testId + i);
        input.type = 'text';
        input.name = 'durations[]';
        input.classList.add("form-control");
        let durationForm = document.getElementById('input-duration-list');
        durationForm.appendChild(input);
        durationForm.appendChild(lineBreak);
    }

    function removeDurationField() {

        let x = document.getElementsByTagName('INPUT').length;
        if ( x > 3 ) {
            $('#input-duration-list input:last').remove();
            $('#input-duration-list br:last').remove();
            return false;
        } else {
        }
    }

</script>
@endsection

