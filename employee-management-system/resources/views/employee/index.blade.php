<!-- resources/views/employee/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Employee List</h1>

    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Full Name</th>
                    <th>Date of Birth</th>
                    <th>Gender</th>
                    <th>Nationality</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Address</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($employeeInfos as $employeeInfo)
                <tr>
                    <td>{{ $employeeInfo->id }}</td>
                    <td>{{ $employeeInfo->full_name }}</td>
                    <td>{{ $employeeInfo->date_of_birth }}</td>
                    <td>{{ $employeeInfo->gender }}</td>
                    <td>{{ $employeeInfo->nationality }}</td>
                    <td>{{ $employeeInfo->email }}</td>
                    <td>{{ $employeeInfo->phone_number }}</td>
                    <td>{{ $employeeInfo->address }}</td>
                    <td>
                        <a href="{{ route('employee.show', $employeeInfo) }}" class="btn btn-info"><i
                                class="fas fa-eye"></i>
                        </a>     
                    </td>
                </tr>
                @endforeach



            </tbody>
        </table>
    </div>

    <a href="{{ route('employee.create') }}" class="btn btn-primary">Create New Employee</a>
</div>
@endsection