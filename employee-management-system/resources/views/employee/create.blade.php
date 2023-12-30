<!-- resources/views/employee/create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="col-sm-3"></div>
<div class="container mt-4 pb-10 card p-5 col-sm-6 mb-10">
    <h1>Create New Employee</h1>

    <!-- Add a form for creating a new employee here -->
    <form method="POST" action="{{ route('employee.store') }}" class="employee-form ">
        @csrf

        <div class="form-group">
            <label for="full_name">Full Name:</label>
            <input type="text" name="full_name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="date_of_birth">Date of Birth:</label>
            <input type="date" name="date_of_birth" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="gender">Gender:</label>
            <select name="gender" class="form-control" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
        </div>

        <div class="form-group">
            <label for="nationality">Nationality:</label>
            <input type="text" name="nationality" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="phone_number">Phone Number:</label>
            <input type="tel" name="phone_number" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="address">Address:</label>
            <textarea name="address" class="form-control" rows="4" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Create Employee</button>
    </form>
</div>

<div class="col-sm-3"></div>

@endsection