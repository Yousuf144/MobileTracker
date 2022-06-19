@extends('layout.master')
@section('title', 'Create User')
@section('content')
<div class="container-fluid">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Add New Packeges</h1>
</div>
<div class="row">
    <div class="col-lg-6">
    <form class="user" action="{{ route('admin.packeges.store') }}" method="POST">
        @csrf
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="text" class="form-control form-control-user" required name="package_name" id="first_name"
                    placeholder="Packege Name">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="number" class="form-control form-control-user" required min="0" name="price" id="first_name"
                    placeholder="Price">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="number" class="form-control form-control-user" required min="0" name="allowed_user" id="first_name"
                    placeholder="User Allowed">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="text" class="form-control form-control-user" required name="pacakge_detail" id="first_name"
                    placeholder="Packege Detail">
            </div>
        </div>
        <input type="submit" class="btn btn-primary mb-3 mb-sm-0 col-sm-6 btn-user btn-block">
     
        </a>
        <hr>
       
    </form>
    </div>

</div>

</div>
@stop