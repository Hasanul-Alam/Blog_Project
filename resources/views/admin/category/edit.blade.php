@extends('admin.master')

@section('title')
    Edit Category Page
@endsection

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="text-center">Edit Category...</h2>
                        </div>
                        <div class="card-body">
                            <h4 class="text-success text-center">{{Session::get('message')}}</h4>
                            <form action="" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="" class="col-md-3 fs-5">Category Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" required name="category_name" value="{{$category->category_name}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3 fs-5">Description</label>
                                    <div class="col-md-9">
                                        <textarea name="description" id="" class="form-control">{{$category->description}}</textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3 fs-5">Image</label>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control" name="image">
                                        <img src="{{asset($category->image)}}" alt="" width="100" height="100">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3 fs-5">Publication Status</label>
                                    <div class="col-md-9">
                                        <label><input type="radio" value="1" name="status"> Published</label>
                                        <label><input type="radio" value="0" name="status" checked> Unpublished</label>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3 fs-5"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-success px-5" value="Update Blog">
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
