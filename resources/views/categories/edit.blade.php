@extends('layouts.app')
<hr>
@section('contents')
<h3>Edit category</h3>
<form class="form-horizontal" action="{{ url("/categories/$category->id") }}" method="POST">
    @method("put");
    @csrf
    <div class="form-group">
        <label class="control-label col-sm-2" for="category">Name</label>
        <div class="col-sm-10">
            <input value={{ $category->name }} type="text" name="category_name" class="form-control" id="cname"
                placeholder="Enter Category Name">
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </div>
</form>
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@endsection
