@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="text-center mt-5">Apalit Dhvsu</h2>
        <div class="row justify-content-center">
            
            <div class="col-md-8">
            <h4 class="text-left mt-5">Register</h4>
                <div class="card mt-4">
                    <div class="card-body">
                        <form method="POST" action="{{ route('employ.store') }}">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="first_name" class="form-label">Employee FN</label>
                                    <input type="text" class="form-control" id="first_name" name="first_name" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="last_name" class="form-label">Employee LN</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="dob" class="form-label">Employee DOB</label>
                                    <input type="date" class="form-control" id="dob" name="dob" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="phone" class="form-label">CP NO.</label>
                                    <input type="text" class="form-control" id="phone" name="phone" required>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-success w-100">Register</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                
                <h4 class="text-left mt-5">Employee List</h4>
                <table class="table mt-5">
                    <thead class="table-dark">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Employee First Name</th>
                        <th scope="col">Employee Last Name</th>
                        <th scope="col">DOB</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($employees as $key => $employee)
                        <tr>
                            <td scope="row">{{ $key + 1 }}</td>
                            <td>{{ $employee->first_name }}</td>
                            <td>{{ $employee->last_name }}</td>
                            <td>{{ $employee->dob }}</td>
                            <td>{{ $employee->phone }}</td>
                            <td>
                                <a href="{{ route('employ.edit', $employee->id) }}" class="btn btn-primary btn-sm">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                </a>
                                <form action="{{ route('employ.destroy', $employee->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-success btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
