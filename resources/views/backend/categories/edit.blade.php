@extends('backend.layout.app')

@section('header')

<h3 class="tx-gray-800 mg-b-5">create category</h3>

@endsection

@section('content')

<form method="post" action="{{ route('category.update', ['category' => $category->id]) }}" data-parsley-validate>
    @csrf
    @method('PUT')
    <input type="hidden" name="category_id" value="{{ $category->id }}">
    <div class="mg-b-30">
        <div class="form-group">
            <label class="tx-18 tx-spacing-2 tx-gray-800"> Category: <span class="tx-danger">*</span></label>
            <input type="text" name="name" class="form-control" placeholder="Enter category name" value="{{ old('name') ?? $category->name }}">
            @if(!empty($errors->has('name')))
                <span class="message-validate">{{ $errors->first('name') }}</span>
            @endif
        </div>
    </div>
    <button type="reset" class="btn btn-warning tx-11 tx-uppercase tx-spacing-4 float-right">Reset</button>
    <button type="submit" class="btn btn-primary tx-11 tx-uppercase tx-spacing-4 float-right">Update</button>

</form>

@endsection