@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Blogs</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Image</th>
                                    <th class="text-center" scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($blogs as $key => $blog)
                                <tr>
                                    <th scope="row">{!! ++$key !!}</th>
                                    <td>{!! substr($blog->title, 0, 30) !!}</td>
                                    <td>{!! $blog->category->title !!}</td>
                                    <td>{!! substr($blog->description, 0, 50) !!}...</td>
                                    <td><img src="{!! asset('images/blog/'. $blog->image) !!}" width="60"></td>
                                    <td>
                                        <a class="btn btn-info" href="{!! url('admin/blog/edit/'. $blog->slug) !!}">Edit</a>
                                        <a class="btn btn-danger" onclick="return confirm('Are you sure...?')" href="{!! url('admin/blog/delete/'. $blog->slug) !!}">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
