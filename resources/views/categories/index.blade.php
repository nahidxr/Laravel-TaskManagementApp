@extends('layouts.app')
@section('contents')
<a href="{{ url('/categories/create') }}" class="btn btn-success">Add Category </a>
<hr>


<table class="table table-bordered">
    <tr>
        <th>Name</th>
        <th>Action</th>
    </tr>
    @foreach ($category_list as $item)
    <tr>
        <td>{{ $item->name }}</td>
        <td>
            <a href="{{ url("/categories/$item->id/edit") }}" class="btn btn-warning bt-sm">Update</a>
            {{-- <a href="" class="btn btn-danger btn-sm">Delete</a> --}}
            <form action="{{ url("/categories/$item->id") }}" method="POST"
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
