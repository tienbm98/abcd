@extends('backend.layout.app')

@section('header')

<div class="row">
    <div class="col-lg-12">
        <div>
            @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
            @endif
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-8">
        <a href="{{ route('category.create') }}">
            <button type="button" class="btn btn-primary">Create category</button>
        </a>
    </div>
    <div class="col-lg-4">
        <form class="form-group" method="get" role="search" action="{{ route('category.index') }}">
            <div class="input-group">
                <input type="text" class="form-control" name="name" placeholder="Search category">
                <div class="input-group-append">
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-secondary">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection

@section('content')

<div class="bd bd-gray-300 rounded table-responsive">
    <table class="table table-hover mg-b-0">
        <thead>
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Name</th>
                <th class="text-center" colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr class="text-center">
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td class="justify-center">
                    <a href="{{ route('category.edit', ['category' => $category->id]) }}">
                        <button class="btn btn-primary">Edit</button>
                    </a>
                </td>
                <td>
                    <form method="post" action="{{ route('category.destroy', ['category' => $category->id]) }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection