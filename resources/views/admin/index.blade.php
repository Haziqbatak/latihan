@extends('admin.parent')



@section('content')

<div class="card p-4">
    <h1>Category index</h1>


    <div class="d-flex justify-content-end">
        <a href="{{ route('category.create') }}" class="btn btn-succes">Create category</a>
    </div>
</div>


@endsection
