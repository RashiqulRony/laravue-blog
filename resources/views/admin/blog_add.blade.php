@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Blog Create</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <form action="{!! url('admin/blog/store') !!}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Select Category</label>
                                <select class="form-control" name="category_id">
                                    @foreach($categories as $category)
                                        <option value="{!! $category->id !!}">{!! $category->title !!}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="">Blog Title</label>
                                <input type="text" class="form-control" name="title" id="" placeholder="Category Title">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Blog Description</label>
                                <textarea class="form-control" id="" name="description" placeholder="Blog Description"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Blog Image</label>
                                <input type="file" class="form-control" name="image" accept="image/*">
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
