@extends('admin.parent')

@section('title')

<
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card p-4">
        <h1>Category Index</h1>

        <div class="container d-flex justify-content-end">
            <a href="{{ route('category.create') }}" class="btn btn-success">Create Category</a>
        </div>
    </div>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('succes') }}
        </div>
    @endif

@endsection
