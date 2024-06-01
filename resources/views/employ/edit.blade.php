@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="text-center mt-5">Employee Management DHVSU APALIT</h2>
        <div class="row justify-content-center">
            <div class="col-md-8">
            <h4 class="text-left mt-5">Employee Edit Credentials BSIT IN DHVSU APALIT</h4>
                <div class="card mt-4">
                    <div class="card-body">
                        <form method="POST" action="{{ route('employ.update', $employee->id) }}">
                            @csrf
                            @method('PATCH')
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="first_name" class="form-label">Employee FirstName</label>
                                    <input type="text" class="form-control" id="first_name" name="first_name" value="{{ $employee->first_name }}" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="last_name" class="form-label">Employee LName</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name" value="{{ $employee->last_name }}" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="dob" class="form-label">Employee DOB</label>
                                    <input type="date" class="form-control" id="dob" name="dob" value="{{ $employee->dob }}" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="phone" class="form-label">CP NO.</label>
                                    <input type="text" class="form-control" id="phone" name="phone" value="{{ $employee->phone }}" required>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-warning w-100">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('css')
    <style>
        .card {
            background-color: #b3e5fc;
        }
        .form-label {
            font-weight: bold;
        }
    </style>
@endpush
