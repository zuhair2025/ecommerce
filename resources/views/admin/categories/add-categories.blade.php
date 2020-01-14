@extends('layouts.main')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Category</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Add Category</a></li>
                        <li class="breadcrumb-item active">categories</li>
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

                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="post" action="{{route('category.store')}}">
                        @csrf
                        <div class="card-body">
                            <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                                <label for="">Category Name:</label>
                                <input type="text" class="form-control" name="name" placeholder="Add Category">
                                @if($errors->has('name'))
                                    <span class="help-block" style="color: red">
                                    <strong> {{ $errors->first('name') }} </strong>
                                </span>
                                @endif
                            </div>
                            {{-- <div class="form-group">
                                    <label>Select</label>
                                    <select class="form-control" name="category_id">
                                        <option>Select category</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                            </div> --}}
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">SAVE</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card card-primary">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>Sl</th>
                                <th>Category Name</th>
                                {{-- <th>Parent Category</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i=0;
                            @endphp
                           
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{++$i}}</td>
                                    <td>{{$category->getName()}}</td>
                                </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">

            </div>
        </div>
    </section>
@stop