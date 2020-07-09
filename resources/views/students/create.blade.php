@extends('layouts.app')

@section('title', 'Add new student')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="text-uppercase">add new student</h1>
                <form action="{{ route('students.store') }}" method="post">
                    @csrf
                    @method('POST')
                  <div class="form-group">
                        <label for="matricola">Matricola</label>
                        <input name="matricola" type="number" class="form-control" id="matricola">
                  </div>
                  <div class="form-group">
                        <label for="first-name">First name</label>
                        <input name="first_name" type="text" class="form-control" id="first-name">
                  </div>
                  <div class="form-group">
                        <label for="last-name">Last name</label>
                        <input name="last_name" type="text" class="form-control" id="last-name">
                  </div>
                  <div class="form-group">
                        <label for="email">Email</label>
                        <input name="email" type="email" class="form-control" id="email">
                  </div>
                      <button type="submit" class="btn btn-primary">Add</button>
                </form>


            </div>

        </div>

    </div>

@endsection
