@extends('layouts.app');

@section('title', 'Students list');

@section('content')
    <h1>sdhkfhdkjashfjhas</h1>
        @foreach ($students_list as $student)
            <p>{{ $student->id }}</p>
            <p>{{ $student->first_name }}</p>
        @endforeach



@endsection
