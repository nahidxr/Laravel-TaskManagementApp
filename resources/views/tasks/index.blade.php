@extends('layouts.app')
@section('contents')
<a href="{{ url('/tasks/create') }}" class="btn btn-success">Add New Task </a>
<hr>


<table class="table table-bordered">
    <tr class="thead-danger">
        <th>Name</th>
        <th>Details</th>
        <th>Category</th>
        <th>deadline</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
    @foreach ($tasks as $item)
    <tr>
        <td>{{ $item->name }}</td>
        <td>{{ $item->details }}</td>
        <td>{{ $item->category->name }}</td>
        <td>{{ $item->deadline }}</td>
        {{-- <td>{{ $item->status }}</td> --}}
        <td>{{ App\Enums\TaskStatus::getDescription($item->status)  }}</td>

        <td>
            <a href=" {{ url("/tasks/$item->id/edit") }}" class="btn btn-warning bt-sm">Update</a>
            <form action="{{ url("/tasks/$item->id") }}" method="POST"
                onsubmit="return confirm('Do you really want to Delete the value?');">
                @csrf
                @method('delete')
                <input type="submit" value="Delete" class="btn btn-danger bt-sm">
            </form>
        </td>
    </tr>
    @endforeach


</table>


@endsection
