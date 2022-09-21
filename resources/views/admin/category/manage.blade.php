@extends('admin.master')

@section('title')
    Manage Category Page
@endsection

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-9 mx-auto">
                    <div class="card- card-body">
                        <table class="table table-hover table-bordered">
                            <thead>
                            <tr>
                                <th>SL NO</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$category->category_name}}</td>
                                <td>
                                    <img src="{{asset($category->image)}}" alt="Image" class="" width="100" height="90">
                                </td>
                                @if($category->status == 0)
                                <td>
                                    Unpublished
                                </td>
                                @else
                                <td>
                                    Published
                                </td>
                                @endif
                                <td>
                                    <a href="{{route('edit-category', ['id' => $category->id])}}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                                    <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
