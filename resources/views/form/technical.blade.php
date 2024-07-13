@extends('layouts.app')

@section('content')
<h2>Technical Information</h2>
<form method="POST" action="{{ route('technicalInfo.submit') }}">
    @csrf
    <div class="row">
        <div class="col-6">
            <label for="phone">phone</label>
            <input type="number" name="phone" class="form-control" value="{{($data != null)?$data->phone:''}}">
            @error('phone')
            <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-6">
            <label for="email">email</label>
            <input type="email" name="email" class="form-control" value="{{($data != null)?$data->email:''}}">
            @error('email')
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-12">
            <label for="domain">domain</label>
            <input type="text" name="domain" class="form-control" value="{{($data != null)?$data->domain:''}}"><br>

            @error('domain')
            <span style="color: red;">{{ $message }}</span><br>
            @enderror
        </div>
        <div class="col-6">
        <a href="{{route('personalInfo')}}"  class="btn btn-primary">Previous</a>

        <button type="submit" class="btn btn-primary">Next</button>

        </div>
    </div>

</form>
@endsection
