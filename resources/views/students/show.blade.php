@extends('layouts.app')

@section('title', 'Dati studente')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h1>Dati studente</h1>
                <ul>
                    <li><strong>ID:</strong> {{ $students_list->id }}</li>
                    <li><strong>Matricola:</strong> {{ $students_list->matricola }}</li>
                    <li><strong>First name:</strong> {{ $students_list->first_name }}</li>
                    <li><strong>Last name:</strong> {{ $students_list->last_name }}</li>
                    <li><strong>E-mail:</strong> {{ $students_list->email }}</li>
                </ul>


            </div>

        </div>

    </div>

@endsection
