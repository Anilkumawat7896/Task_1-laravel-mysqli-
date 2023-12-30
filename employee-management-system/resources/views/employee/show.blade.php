<!-- resources/views/employee/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Employee Details</h1>

        <div class="card">
            <div class="card-body">
                <p class="card-text"><strong>ID:</strong> {{ $employeeInfo->id }}</p>
                <p class="card-text"><strong>Full Name:</strong> {{ $employeeInfo->full_name }}</p>
                <p class="card-text"><strong>Date of Birth:</strong> {{ $employeeInfo->date_of_birth }}</p>
                <p class="card-text"><strong>Gender:</strong> {{ $employeeInfo->gender }}</p>
                <p class="card-text"><strong>Nationality:</strong> {{ $employeeInfo->nationality }}</p>
                <p class="card-text"><strong>Email:</strong> {{ $employeeInfo->email }}</p>
                <!-- Add more details as needed -->

                <div class="mt-4">
                    <a href="{{ route('employee.edit', $employeeInfo) }}" class="btn btn-warning mr-2">Edit</a>
                    <form method="POST" action="{{ route('employee.destroy', $employeeInfo) }}" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    <a href="{{ route('employee.index') }}" class="btn btn-primary ml-2">Back to Employee List</a>
                </div>
            </div>
        </div>
    </div>
@endsection
