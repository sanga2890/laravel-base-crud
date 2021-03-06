@extends('layouts.app')

@section('title', 'Students list')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="d-flex justify-content-between align-items-center create">
                    <h1>Student List</h1>
                    <a class="btn btn-primary" href="{{ route('students.create')}}">Create</a>
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
                                <td class="text-center">{{ $student->id }}</td>
                                <td class="text-center">{{ $student->matricola }}</td>
                                <td class="text-center">{{ $student->first_name }}</td>
                                <td class="text-center">{{ $student->last_name }}</td>
                                <td class="text-center">{{ $student->email }}</td>
                                <td class="text-center d-flex"><a class="btn btn-info mr-1" href="{{ route('students.show', ['student' => $student->id]) }}">Data</a>
                                <a class="btn btn-secondary mr-1" href="{{ route('students.edit', ['student' => $student->id]) }}">Edit</a>
                                <form action="{{ route('students.destroy', ['student' => $student->id]) }}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <input type="submit" class="btn btn-danger" value="Delete">
                                    </td>
                                </form>


                            </tr>
                        @endforeach
                    </tbody>
                </table>



            </div>
        </div>

    </div>




@endsection
