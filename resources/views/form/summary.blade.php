@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Summary</h2>
    <ul class="list-group">
        <li class="list-group-item">name: {{ $data->name }}</li>
        <li class="list-group-item">phone: {{ $data->phone }}</li>
        <li class="list-group-item">email: {{ $data->email }}</li>
        <li class="list-group-item">job_title: {{ $data->job_title }}</li>
        <li class="list-group-item">country: {{ $data->country }}</li>
        <li class="list-group-item">domain: {{ $data->domain }}</li>
        <li class="list-group-item">birth_date: {{ $data->birth_date }}</li>
        <li class="list-group-item">type: {{ $data->type }}</li>
        <li class="list-group-item">salary: {{ $data->salary }}</li>
        <li class="list-group-item">bio: {{ $data->bio }}</li>

    </ul>
    <form method="POST" action="{{ route('summary.submit') }}">
        @csrf
        <a href="{{route('technicalInfo')}}"  class="btn btn-primary mt-3">Previous</a>

        <button type="submit" class="btn btn-success mt-3">Submit</button>
    </form>
</div>
@endsection
