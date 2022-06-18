@extends('layout.master')
@section('title', 'Create User')
@section('content')
<div class="container-fluid">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">View Accounts</h1>
</div>
<div style="overflow-x:scroll ">
  
<table class="table table-striped">
  <thead class="thead-danger" style="background-color: #4e73df;color:#ffffff">
    <tr>
     
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    <tr>
   
      <td>Muhammad</td>
      <td>Yousuf</td>
      <td>MuhammadYousuf144@gmail.com</td>
      <td><input type="button" class="btn btn-primary" value="Detail"/></td>
    </tr>
 
  </tbody>
</table>
</div>
  

</div>
@stop