<!-- resources/views/employee/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Employee</h1>

        <!-- Add a form for updating the employee here -->
        <form method="POST" action="{{ route('employee.update', $employeeInfo) }}" class="employee-form">
            @csrf
            @method('PUT') <!-- Use PUT method for updating -->

            <!-- Display existing data for editing -->
            <div class="form-group">
                <label for="full_name">Full Name:</label>
                <input type="text" name="full_name" class="form-control" value="{{ $employeeInfo->full_name }}" required>
            </div>

            <div class="form-group">
                <label for="date_of_birth">Date of Birth:</label>
                <input type="date" name="date_of_birth" class="form-control" value="{{ $employeeInfo->date_of_birth }}" required>
            </div>

            <div class="form-group">
                <label for="gender">Gender:</label>
                <select name="gender" class="form-control" required>
                    <option value="male" {{ $employeeInfo->gender == 'male' ? 'selected' : '' }}>Male</option>
                    <option value="female" {{ $employeeInfo->gender == 'female' ? 'selected' : '' }}>Female</option>
                    <option value="other" {{ $employeeInfo->gender == 'other' ? 'selected' : '' }}>Other</option>
                </select>
            </div>

            <div class="form-group">
                <label for="nationality">Nationality:</label>
                <input type="text" name="nationality" class="form-control" value="{{ $employeeInfo->nationality }}" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" class="form-control" value="{{ $employeeInfo->email }}" required>
            </div>

            <div class="form-group">
                <label for="phone_number">Phone Number:</label>
                <input type="text" name="phone_number" class="form-control" value="{{ $employeeInfo->phone_number }}" required>
            </div>

            <div class="form-group">
                <label for="address">Address:</label>
                <textarea name="address" class="form-control" required>{{ $employeeInfo->address }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Update Employee</button>
        </form>
    </div>
@endsection
