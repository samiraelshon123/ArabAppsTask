@extends('layouts.app')

@section('content')
<h2>General Information</h2>
<form method="POST" action="{{ route('generalInfo.submit') }}">
    @csrf
    <div class="row">
        <div class="col-6">
            <label for="name">name</label>
            <input type="text" name="name" class="form-control" value="{{($data != null)?$data->name:''}}">
            @error('name')
            <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-6">
            <label for="job_title">job_title</label>
            <input type="text" name="job_title" class="form-control" value="{{($data != null)?$data->job_title:''}}">
            @error('job_title')
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-12">
            <label for="bio">bio</label>
            <textarea name="bio" id="" class="form-control" >{{($data != null)?$data->bio:''}}</textarea><br>
            @error('bio')
            <span style="color: red;">{{ $message }}</span><br>
            @enderror
        </div>
        <div class="col-6">
        <button type="submit" class="btn btn-primary">Next</button>

        </div>
    </div>

</form>
@endsection
