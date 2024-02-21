@extends('admin.parent')


@section('content')
    <div class="card">
        <h1>Category Index</h1>
        {{-- 錯誤表列 --}}
        <hr>
        <div class=" d-flex justify-content-end">
            <a href="{{ route('category.create') }}" class="btn btn-outline-success">Create Category</a>

        </div>


        {{-- alere success --}}
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table">
            <th>
                <tr>
                    <td>No</td>
                    <td>Name</td>
                    <td>Action</td>
                </tr>
            </th>
            <tbody>
                @foreach ($category as $row)
                    <tr>
                        <td>{{ $row->loop }}</td>
                        <td>{{ $row->name }}</td>
                        <td><a href="{{ route('category.show', $row->id) }}" class="btn btn-info">Show Categories</a>
                            <form action="{{ route('category.destroy', $row->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection