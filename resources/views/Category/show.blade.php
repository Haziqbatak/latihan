@extends('admin.parent')

@section('content')

$category = Category::findOrFail($id);

        return view('category.show', compact('category'));

@endsection