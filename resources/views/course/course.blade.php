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
      <div class="container-fluid">
       <div class="row">
        <div class="col-md-12 col-lg-12">
            
        <div class="card">

            <div class="card-header">
                <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Tambah Data <i class="fas fa-plus"></i>
            </button>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Title</th>
                        <th scope="col">Materi</th>
                        <th scope="col">Duration</th>
                        <th scope="col">Action</th>
                      </tr>
                  </thead>
                  <tbody>
                    @php
                    $no = 1
                @endphp
                @foreach ($data as $item)
                    <tr>
                        <th>{{$no++}}</th>
                        <td>{{$item->title}}</td>
                        <td>
                            @if ($item->materials->isNotEmpty())
                                
                            <ul>
                                @foreach ($item->materials as $item1)
                                    <li>{{$item1->title}} <a href="/material/show/{{$item1->id}}" class=""><i class="fas fa-eye"></i></a></li>
                                @endforeach
                            </ul>
                            @else
                                <p class="text-danger">Belum ada materi yang ditambahkan untuk course ini.</p>
                            @endif
                        </td>
                        <td>{{$item->duration}} Jam</td>
                        <td>
                            <a href="#" onclick="confirmDelete('{{ $item->id }}')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                            <a href="/course/edit/{{$item->id}}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                            <a href="/course/show/{{$item->id}}" class="btn btn-success btn-sm"><i class="fas fa-eye"></i></a>

                        </td>
                    </tr>
                @endforeach
                   
                  
                 
                </tbody>
              </table>
        </div>

       
          <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="/course/store" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                              <label for="title" class="form-label">Ttile</label>
                              <input type="text" name="title" class="form-control" id="title">
                            </div>
                            <div class="mb-3">
                              <label for="description"  class="form-label">Descriptions</label>
                              <input type="text" name="description" class="form-control" id="description">
                            </div>
                            <div class="mb-3">
                              <label for="duration" class="form-label">Duration</label>
                              <input type="number" name="duration" class="form-control" id="duration">
                            </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                        </form>
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