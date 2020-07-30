@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('category_store') }}" method="post" style="text-align: center">
        @csrf
        <label for="title" style="font-size: 30px">Title: </label><br>
        <input type="text" name="title" id="title" style="width: 60%; height: 40px;"><br><br>
        <label for="description" style="font-size: 30px">Description: </label><br>
        <textarea name="description" id="description" cols="30" rows="3" style="width: 60%;"></textarea>
        <br>
        <button type="submit" class="btn btn-primary">Add Category</button>
    </form>
</div>
@endsection