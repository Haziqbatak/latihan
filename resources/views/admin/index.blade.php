@extends('admin.parent')



@section('content')
<div class="container">
    <a href="{{ route('admin.create') }}" class="btn btn-primary">Click</a>
</div>

<div class="container">
    <h1 class="font-bold">Users</h1>
    <table class="table">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Gender</th>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
</div>
@endsection
