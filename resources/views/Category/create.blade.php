@extends('admin.parent')

@section('content')

<div class="card p-4">

    <h1>Create Category</h1>

    <form action="{{ route('admin.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-floating mb-3">
            <input type="tetx" class="form-control" id="floatingInput" placeholder="Kesehatan" name="name">
            <label for="floatingInput">Name Category</label>
        </div>

        <button type="submit" class="btn btn-primary">Create</button>

    </form>

</div>

</div>

@endsection
