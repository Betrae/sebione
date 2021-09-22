@extends('layouts.app')
@section('content')
@include('layouts.modals.employees.create')
@include('layouts.modals.employees.delete')

<div class="container-fluid">
    <div class="d-flex justify-content-between my-5">
        <h2 class="font-weight-light">List of Employees</h2>
        <button type="button" class="btn btn-primary mt-3" data-toggle="modal" data-target="#createEmployee">Add new
            Employee</button>
    </div>
    <table id="dataTable" class="table table-striped table-bordered p-2 text-center" style="width:100%">
        <thead>
            <tr>
                <th>Company</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($employees as $employee)
            <tr>
                <td>{{ $employee->company->name }}</td>
                <td>{{ $employee->first_name }} {{ $employee->last_name }}</td>
                <td>{{ $employee->email }}</td>
                <td>{{ $employee->phone }}</td>
                <td nowrap="">
                    <a href="#" class="btn btn-info" data-toggle="modal" data-target="#editEmployee" onclick="modify_emp('{{$employee->id}}','{{$employee->company_id}}', '{{$employee->first_name}}',
                            '{{$employee->last_name}}','{{$employee->email}}','{{$employee->phone}}')">
                        <i class="fa fa-edit"></i>
                    </a>

                    <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#deleteEmployee"
                        onclick="deleteEmp({{$employee->id}})">
                        <i class="fa fa-trash"></i>
                    </a>
                </td>
            </tr>
            @include('layouts.modals.employees.edit')
            @endforeach
        </tbody>
    </table>
</div>
@endsection