@extends('layouts.app')

@section('content')
<div class="container" style="text-align: center;">
    <h1>Categories List</h1>
    <a href="{{ route('category_create') }}" class="btn btn-primary" style="margin: auto">Add Category</a>
    <div class="row" style="margin: 5px;">
        @foreach($categories as $category)
            <div class="card col-sm-12 col-md-4 col-lg-4" style="margin: ;">
                <div class="card-body">
                    <h4 class="card-title">{{ $category->title }}</h4>
                    <p class="card-text">
                    {{ $category->description }}
                    </p>
                    <div style="desplay: flex;">
                        <a href="{{ route('category_edit', ['cate' => $category->id]) }}" class="card-link btn btn-success" style="float: left">Edit</a>
                        <form action="{{ route('category_delete', ['cate' => $category->id]) }}" method="post">
                            @csrf
                            <button class="card-link btn btn-danger" style="float: right">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection