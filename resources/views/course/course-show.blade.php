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
        <div class="col-md-12 col-lg-12 d-flex justify-content-center">
            <div class="card mb-3" >
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="https://i1.wp.com/asysyariah.com/wp-content/uploads/2016/07/tumpukan-buku.jpg?fit=1536%2C1121&ssl=1" class="img-thumbnail rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">{{$data->title}}</h5>
                      <p class="card-text pt-2">{{$data->description}}</p>
                      <h5 class="card-title">Materi yang dapa dipelajari :</h5> 
                    </div>
                    <div class="card-footer">
                        @if ($data->materials->isNotEmpty() )
  
                          <ul class="list-group list-group-flush">
                              @foreach ($data->materials as $item)
                                  
                                  <li class="list-group-item">{{$item->title}}</li>
                              @endforeach
                          </ul>
                        @else
                          <p class="text-danger">Belum ada materi yang ditambahkan untuk course ini.</p>
                        @endif
                    </div>
                  </div>
                </div>
              </div>
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
