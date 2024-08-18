@extends('backend.main')
@section('content')

<style>
textarea {
    width: 100%; /* Full width */
    box-sizing: border-box; /* Include padding and border in width */
    border: 1px solid #ced4da; /* Border style */
    border-radius: 4px; /* Rounded corners */
    padding: 10px; /* Padding inside the textarea */
    font-size: 14px; /* Font size */
    line-height: 1.5; /* Line height for readability */
    background-color: #f8f9fa; /* Background color */
    color: #495057; /* Text color */
    resize: none; /* Disable resizing */
    overflow: hidden; /* Hide scrollbars */

 
}
</style>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Blogs DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <a href="/blogs/create"class="btn btn-success">Add Blog</a>
            </div>
            @if (session()->has('message'))
          <div class="alert alert-success">
          {{session()->get('message')}}
          </div>
          @endif

              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover  table-image">
                  <thead>
                  <tr>
                    <th>S.N</th>
                    <th>Category</th>
                    <th>Title</th>
                    <th >Image</th>
                    <th>Description</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
        @foreach ( $blog as $key => $c )
        
        <tr>
    <td>{{ ++$key }}</td>

    <td>{{ $c->category->title ?? 'No Category' }}</td>
    
    <td>{{ $c->title }}</td>
    <td width="150px"><img src="{{ asset('blog/' . $c->image) }}" alt=""  class="img-fluid img-thumbnail" width="150px" height="150px" ></td>
    <td>
        <textarea readonly id="desc-{{ $c->id }}" rows="3" style="width: 100%; box-sizing: border-box;">{{ $c->description }}</textarea>
    </td>
    <td>
        <a href="/blogs/edit/{{ $c->id }}" class="btn btn-primary btn-sm m-2">Edit</a>
        <a href="/blogs/delete/{{ $c->id }}" class="btn btn-danger btn-sm m-2">Delete</a>
    </td>
</tr>


@endforeach
</tbody>
</table>
</div>
</div>



</body>
</html>


@endsection
<script>
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('textarea').forEach(textarea => {
        textarea.style.height = 'auto'; // Reset height
        textarea.style.height = textarea.scrollHeight + 'px'; // Set new height
    });
});
</script>