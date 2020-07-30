@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('category_update', ['cate' => $category->id]) }}" method="post" style="text-align: center">
        @csrf
        <label for="title" style="font-size: 30px">Title: </label><br>
        <input type="text" name="title" id="title" value="{{ $category->title }}" style="width: 60%; height: 40px;"><br><br>
        <label for="description" style="font-size: 30px">Description: </label><br>
        <textarea name="description" id="description" cols="30" rows="3" style="width: 60%;">{{ $category->description }}</textarea>
        <br>
        <button type="submit" class="btn btn-primary">Update Category</button>
    </form>
</div>
@endsection