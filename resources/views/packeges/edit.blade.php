@extends('layout.master')
@section('title', 'Create User')
@section('content')

<div class="container-fluid">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Packeges</h1>
</div>
<div class="row">
    <div class="col-lg-6">
    <form class="user" action="{{ route('admin.packeges.update') }}" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{$data->id}}" />
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <span>Packege Name</span>
                <input type="text" class="form-control form-control-user" value="{{$data->package_name}}" required name="package_name" id="first_name"
                    placeholder="Packege Name">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <span>Price</span>
                <input type="number" class="form-control form-control-user" value="{{$data->price}}" required min="0" name="price" id="first_name"
                    placeholder="Price">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <span>User Allowed</span>
                <input type="number" class="form-control form-control-user" value="{{$data->allowed_user}}" required min="0" name="allowed_user" id="first_name"
                    placeholder="User Allowed">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <span>Packege Detail</span>
                <input type="text" class="form-control form-control-user" required value="{{$data->pacakge_detail}}" name="pacakge_detail" id="first_name"
                    placeholder="Packege Detail">
            </div>
        </div>
        <input type="submit" class="btn btn-primary mb-3 mb-sm-0 col-sm-6 btn-user btn-block" value="Update">
     
        </a>
        <hr>
       
    </form>
    </div>

</div>

</div>
@stop