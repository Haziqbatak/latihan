@extends('admin.parent')

@section('content')

<div class="card p-4 d-flex">
        <h1 class="fw-bold">
                Name
        </h1>
        <h1 class="lead">
                name: {{ $category->name }}
        </h1>
        <h1 class="fw-bold">
                ID
        </h1>
        id: {{ $category->id }}
</div>

@endsection