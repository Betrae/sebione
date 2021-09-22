@extends('layouts.app')
@section('content')

<div class="container-fluid">
    <div class="d-flex justify-content-between my-5">
        <h2 class="font-weight-light">List of Employees</h2>
        <button type="button" class="btn btn-primary mt-3" data-toggle="modal" data-target="#createEmployee">Add new Employee</button>
    </div>
    <table id="dataTable" class="table table-striped table-bordered p-2" style="width:100%">
        <thead>
            <tr>
                <th>Logo</th>
                <th>Name</th>
                <th>Email</th>
                <th>Website</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
@endsection