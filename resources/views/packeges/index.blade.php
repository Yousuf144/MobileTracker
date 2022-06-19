@extends('layout.master')
@section('title', 'Create User')
@section('content')
<div class="container-fluid">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">View Pacakges</h1>
</div>
<div style="overflow-x:scroll ">
  
<table class="table table-striped">
  <thead class="thead-danger" style="background-color: #4e73df;color:#ffffff">
    <tr>
     
      <th scope="col">Pacakge Name</th>
      <th scope="col">Price</th>
      <th scope="col">Allowed User</th>
      <th scope="col">Packege Detail</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data as $item)
    <tr>
      
        <td>{{$item->package_name}}</td>
        <td>{{$item->price}}</td>
        <td>{{$item->allowed_user}}</td>
        <td>{{$item->pacakge_detail}}</td>
  
        <td><form action="{{ route('admin.packeges.edit') }}" method="get" style="padding-bottom: 1%">
            <input type="hidden" value="{{$item->id}}" name="id" />
            <input type="submit" value="Edit" class="btn btn-primary">
        </form>
            
            
            <input type="button" class="btn btn-primary" onclick="itemdelete({{$item->id}})" value="Delete"/></td>
      </tr>
    @endforeach
 
 
  </tbody>
</table>
</div>
  

</div>
    


<script>
function itemdelete(id){
    console.log(id)
    $.ajax({
            type: "get", 
            url: '{{ route('admin.packeges.delete') }}',
            data:{'id':id},
            success: function(response)
            {
              if(response == 'true'){
                window.location.reload();
              }  
            }
       });
}

</script>
@stop