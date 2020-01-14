@extends('layouts.main')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Product</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Add Product</a></li>
                        <li class="breadcrumb-item active">products</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">

        <div class="row">
            <!-- left column -->
            <div class="col-md-5">
                <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Add Product</h3>
                    </div>
                    
                    <!-- /.card-header -->
                    <!-- form start -->
                  <form method="post" role="form" action="{{route('product.store')}}">
                        @csrf
                      <div class="card-body">
                        <div class="form-group">
                            <label>Category</label>
                            <select class="form-control" name="category_id">
                                <option>Select category</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->getId()}}">{{$category->getName()}}</option>
                                @endforeach
                            </select>
                          </div>
                        <div class="form-group">
                            <label>Product</label>
                            <input type="text" class="form-control" name="name" placeholder="Product">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputFile">Image</label>
                          <div class="input-group">
                            <div class="custom-file">
                              <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                              <label class="custom-file-label" for="exampleInputFile">Choose Image</label>
                            </div>
                            <div class="input-group-append">
                              <span class="input-group-text" id="">Upload</span>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input type="text" name="price" class="form-control" placeholder="Price">
                        </div>
                        <div class="form-group">
                            <label>Discount</label>
                            <input type="text" name="discount" class="form-control" placeholder="Disount">
                        </div>
                        {{-- <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div> --}}
                      </div>
                      <!-- /.card-body -->
      
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                      </div>
                    </form>
                  </div>
            </div>
       
            
            <div class="col-md-7">
                <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">All Products</h3>
      
                      <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                          <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
      
                          <div class="input-group-append">
                            <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Product </th>
                            <th>Price</th>
                            <th>Category</th>
                            <th>Image</th>
                          </tr>
                        </thead>
                        <tbody>
                          @php
                          $i=0;
                          @endphp
                          @foreach($product as $prod)
                          <tr>
                            <td>{{++$i}}</td>
                            <td>{{$prod->getName()}}</td>
                            <td>{{$prod->getPrice()}}</td>
                            <td>{{$prod->getCategory()->name}}</td>
                            <td><img src="#" alt="image"></a></td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                    <!-- /.card-body -->
                  </div>
            </div>
        </div>
    </section>
@stop