@extends('layout.admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Kursus</h1>
          </div><!-- /.col -->
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container">
       <div class="row">
        <div class="col-md-12">
            <form action="/course/update/{{$data->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" name="title" class="form-control" id="title" value="{{$data->title}}">
                </div>
                <div class="mb-3">
                  <label for="description"  class="form-label">Descriptions</label>
                  <input type="text" name="description" class="form-control" id="description" value="{{$data->description}}">
                </div>
                <div class="mb-3">
                  <label for="duration" class="form-label">Duration</label>
                  <input type="number" name="duration" class="form-control" id="duration" value="{{$data->duration}}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
       </div>

        
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
    <script>
        function confirmDelete(id) {
            if (confirm('Apakah Anda yakin ingin menghapus item ini?')) {
                window.location.href = '/course/destroy/'+id;
            }
        }
    </script>   

   
@endsection