@extends('layout.master')
@section('title', 'Create User')
@section('content')
<div class="container-fluid">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Add New Packeges</h1>
</div>
<div class="row">
    <div class="col-lg-6">
    <form class="user">
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="text" class="form-control form-control-user" name="first_name" id="first_name"
                    placeholder="First Name">
            </div>
            <div class="col-sm-6">
                <input type="text" class="form-control form-control-user" name="last_name" id="exampleLastName"
                    placeholder="Last Name">
            </div>
        </div>
        <div class="form-group">
            <input type="email" class="form-control form-control-user" name="email" id="exampleInputEmail"
                placeholder="Email Address">
        </div>
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="password" name="password" class="form-control form-control-user"
                    id="exampleInputPassword" placeholder="Password">
            </div>
            <div class="col-sm-6">
                <input type="number"  name="phone" class="form-control form-control-user"
                    id="exampleRepeatPassword" placeholder="Enter Phone Number">
            </div>
        </div>
        <a href="#" class="btn btn-primary btn-user btn-block">
            Add Account
        </a>
        <hr>
       
    </form>
    </div>

</div>

</div>
@stop