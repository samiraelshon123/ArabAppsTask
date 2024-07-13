@extends('layouts.app')

@section('content')
<h2>Personal Information</h2>
<form method="POST" action="{{ route('personalInfo.submit') }}">
    @csrf
    <div class="row">
        <div class="col-6">
            <label for="country">country</label>
            <select name="country" id=""class="form-control">
                <option value="Egypt">Egypt</option>
                <option value="Qatar">Qatar</option>
                <option value="Kanada">Kanada</option>
            </select>
            @error('country')
                                <span style="color: red;">{{ $message }}</span>

            @enderror
        </div>
        <div class="col-6">
            <label for="birth_date">birth_date</label>
            <input type="date" name="birth_date" class="form-control" value="{{($data != null)?$data->birth_date:''}}">
            @error('birth_date')
                                <span style="color: red;">{{ $message }}</span>

            @enderror
        </div>
        <div class="col-6">
            <label for="type">type</label>
            <select name="type" id=""class="form-control">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            @error('type')
                                <span style="color: red;">{{ $message }}</span>

            @enderror
        </div>
        <div class="col-6">
            <label for="salary">salary</label>
            <input type="number" name="salary" class="form-control" value="{{($data != null)?$data->salary:''}}"><br>
            @error('salary')
                                <span style="color: red;">{{ $message }}</span><br>

            @enderror
        </div>
        <div class="col-6">
        <a href="{{route('generalInfo')}}"  class="btn btn-primary">Previous</a>

        <button type="submit" class="btn btn-primary">Next</button>

        </div>
    </div>

</form>
@endsection
