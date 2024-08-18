@extends('backend.main')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Blog</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blog</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Blog</h3>
              </div>

                <!-- Error Message-->
              @if ($errors->any())
              @foreach ($errors->all() as $error)
              <div class="ml-3">
                <p style="color:red;">{{$error}}</p>
              </div>
              @endforeach
              @endif
            <!-- Error Message-->

           
              <!-- Success Message -->
              @if (session()->has('message'))
              <div class="alert alert-success">
              {{session()->get('message')}}
              </div>
              @endif
               <!-- success Message -->
              <!-- /.card-header -->

              <!-- form start -->
              <form method="POST" action="/blogs/store" enctype="multipart/form-data">
                @csrf 
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Title:</label>
                    <input type="text" name="title" class="form-control" id="exampleInputEmail1">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">image:</label>
                    <input type="file" name="image" class="form-control" id="exampleInputPassword1">
                  </div>
                  <div class="form-group">
                    <label for="descripton">Description:</label>
                    <textarea name="description" class="form-control" id="description" rows="3"></textarea>
                  </div>

                  <div class="form-group">
                    
                <label for="exampleInputEmail1">Category</label>
                <label>Select</label>
                <select class="form-control" name="category_id">
                    <option disabled>Select your Category</option>
                    @foreach ($category as $item)
                        <option value="{{ $item->id }}">{{ $item->title }}</option>
                    @endforeach
                </select>
            </div>

                       
                  </div>






                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>

          </div>
          <!--/.col (left) -->
          <!-- right column -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection