@extends('layouts.app')

@section('title', 'Students list')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="d-flex justify-content-between align-items-center create">
                    <h1>Student List</h1>
                    <a class="btn btn-info" href="{{ route('students.create')}}">Create</a>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-center text-uppercase">id</th>
                            <th class="text-center text-uppercase">matricola</th>
                            <th class="text-center text-uppercase">first name</th>
                            <th class="text-center text-uppercase">last name</th>
                            <th class="text-center text-uppercase">email</th>
                            <th class="text-center text-uppercase">actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students_list as $student)
                            <tr>
                                <td>{{ $student->id }}</td>
                                <td>{{ $student->matricola }}</td>
                                <td>{{ $student->first_name }}</td>
                                <td>{{ $student->last_name }}</td>
                                <td>{{ $student->email }}</td>
                                <td><a href="{{ route('students.show', ['student' => $student->id]) }}"></a> </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>



            </div>
        </div>

    </div>




@endsection
