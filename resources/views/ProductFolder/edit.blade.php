@extends('ProductFolder.layout')
@section('content')
<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">
      
      <form action="{{ url('contact/' .$products->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$products->id}}" id="id" />
        <label>ProductCode</label></br>
        <input type="text" name="ProductCode" id="ProductCode" value="{{$products->ProductCode}}" class="form-control"></br>
        <label>ProductName</label></br>
        <input type="text" name="ProductName" id="ProductName" value="{{$products->ProductName}}" class="form-control"></br>
        <label>Description</label></br>
        <input type="text" name="Description" id="Description" value="{{$products->Description}}" class="form-control"></br>
        <label>Price</label></br>
        <input type="text" name="Price" id="Price" value="{{$products->Price}}" class="form-control"></br>
        <label>IsActive</label></br>
        <input type="text" name="IsActive" id=IsActive" value="{{$products->IsActive}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop
