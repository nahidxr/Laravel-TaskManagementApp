@extends('layouts.app')
<hr>
@section('contents')
<h3> Add new Task</h3>
<form class="form-horizontal" action="{{ url("/tasks") }}" method="POST">
    @csrf
    <div class="form-group">
        <label class="control-label col-sm-2" for="Task">Task Name</label>
        <div class="col-sm-10">
            <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Enter Task Name">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="category">Category</label>
        <div class="col-sm-10">
            <select name="category_id" class="form-control">
                <option value="">Select a CAtegory</option>

                @foreach ($categories_list as $item)
                <option value="{{ $item->id }}" {{ old('category_id')==$item->id ? 'selected' : ''}}>{{ $item->name }}
                </option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="category">Task Details</label>
        <div class="col-sm-10">
            <textarea name="details" cols="30" rows="10" class="form-control">{{ old("details") }}</textarea>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="category">Task deadline</label>
        <div class="col-sm-10">
            <input type="date" name="deadline" value="{{ old('deadline') }}" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="category">Task Status</label>
        <div class="col-sm-10">
            <select name="status" class="from-control">
                <option value="">Select a Status</option>
                @foreach ($task_status as $x=>$status)
                <option value="{{ $x }}" {{ old('status')==$x ? 'selected' : ''}}>{{ $status }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-success">create</button>
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
