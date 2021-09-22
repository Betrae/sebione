@extends('layouts.app')
@section('content')
@include('layouts.modals.companies.create')
@include('layouts.modals.companies.delete')

<div class="container-fluid">
    <div class="d-flex justify-content-between my-5">
        <h2 class="font-weight-light">List of Companies</h2>
        <button type="button" class="btn btn-primary mt-3" data-toggle="modal" data-target="#createCompany">Add new Company</button>
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
            @foreach($companies as $company)
                    <tr>
                        <td>
                            <div class="m-r-10"><img src="/storage/logo/{{$company->logo}}" alt="user" class="rounded" width="45"></div>
                        </td>
                        <td>{{$company->name}}</td>
                        <td>{{$company->email}}</td>
                        <td><a href="{{$company->website}}">{{$company->website}}</a></td>
                        <td nowrap="">
                            <a href="#" class="btn btn-info edit_company" data-toggle="modal" data-target="#editCompany" value="{{ $company->id }}">
                                <i class="fa fa-edit"></i>
                            </a>

                            <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#deleteCompany" onclick="deleteData('{{$company->id}}')">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
        </tbody>
    </table>
</div>
@endsection


