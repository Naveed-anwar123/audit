@extends('survey::templates.html')
@section('content')

    <h3>Add Survey</h3>


    <div class="col-md-6 col-md-offset-2">

        @if(\Illuminate\Support\Facades\Session::has('success'))
            <div class="alert alert-success">
                Audit Information added successfully.
            </div>
        @endif
        <form method="post" action="{{route('add-survey')}}">

            {{csrf_field()}}

            <div class="form-group">
                <label>Enter your name</label>
                <input type="text" class="form-control" name="name" value="{{old('name')}}">
                @if($errors->has('name'))
                    <span class="error">{{$errors->first('name')}}</span>
                @endif
            </div>

            <div class="form-group">
                <label>
                <input type="checkbox"  name="published">
                Publish the Survey</label>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" >
            </div>
        </form>

    </div>


@endsection