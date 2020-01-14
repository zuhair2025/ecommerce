@extends('layouts.main')
@section('content')

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add Post</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Add Post</a></li>
                            <li class="breadcrumb-item active">posts</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
    <section class="content">

            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Create New Post</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="post" action="{{ route('posts.store') }}">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Add Title">
                    @error('title')
                    <div class="invalid-feedback">
                        <span>{{ $message }}</span>
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Post</label>
                    <textarea name="body" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
                </div>
            </div>
        </section>
    @stop