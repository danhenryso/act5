@extends('ProductFolder.layout')
@section('content')
<div class="card">
  <div class="card-header">Create Page</div>
  <div class="card-body">
      
      <form action="{{ url('products') }}" method="post">
        {!! csrf_field() !!}
        <label>ProductCode</label></br>
        <input type="text" name="productcode" id="productcode" class="form-control"></br>
        <label>ProductName</label></br>
        <input type="text" name="productname" id="productname" class="form-control"></br>
        <label>Description</label></br>
        <input type="text" name="description" id="description" class="form-control"></br>
        <label>Price</label></br>
        <input type="text" name="price" id="price" class="form-control"></br>
        <label>IsActive</label></br>
        <input type="text" name="isactive" id="isactive" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop
