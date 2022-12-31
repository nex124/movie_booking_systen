@extends('master')

@section('edit')
<center>
<form action="/personal/{{$data->id}}/update" method="POST" >   
@method('put')   
{{csrf_field()}}   
<table class="table table-bordered" style="width: 1500px;">
  <thead class="thead-dark">
   
    <tr>
      <th scope="col">Name</th>
      <td> <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="name" value= "{{$data->name}}"></td>   
    </tr>
  </thead> 
  <tbody>
  <thead class="thead-dark">   
    <tr>
      <th scope="col">Email address</th>  
      <td> <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="email" value= "{{$data->email}}" ></td>
    </tr>
    </thead> 
    <thead class="thead-dark"> 
    <tr>
       <th scope="col">Password (encrypted)</th>
       <td> <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="password" value= "{{$data->password}}" disabled></td>
    </tr>
    </thead> 
  </tbody>
   
</table>

<button type="submit" class="btn btn-success btn-lg">Update</button>
 
</form>
@endsection