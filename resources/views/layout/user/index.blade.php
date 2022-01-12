
@extends('layout.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
@if (Auth::user()->level == 0) 


<div class="content-wrapper">
    <div class="container">
    <div class="grey-bg container-fluid">
    <section id="minimal-statistics">
        <div class="row">
        <div class="col-12 mt-3 mb-1">
            <div class="alert alert-success bg-cyan">
            WELCOME , {{ Auth::user()->name }}
            </div>
            
           
        </div>
        </div>
       
    
        <div class="row">
        

        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card">
            <div class="card-content">
                <div class="card-body">
                <div class="media d-flex">
                    <div class="media-body text-left">
                    <h3 class="danger">{{ $hitungUser }}</h3>
                    <span>DAFTAR USER</span>
                    </div>
                    <div class="align-self-center">
                    <img class="gambar-side" src="{{ asset('image/man.png') }}" alt="">
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
     
        </div>
    
       
    </section>


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
           
            <!-- /.card -->
            @if (\Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                  {!! \Session::get('success') !!}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                    
            @endif
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DAFTAR USER</h3>
                
              </div>

             
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
               

                  
                    
                
                 
                     
                      <div class="col-md-12">
                      <div class="row">
                      <a href="{{ route('postuser') }}" type="button" class="btn btn-primary" >
                  <i class="fa fa-plus" aria-hidden="true"></i>
                  Tambah Data</a>&nbsp;  

                  <!-- <a href="{{ route('postuser') }}" type="button" class="btn btn-primary" > -->
                  <i class="fa fa-plus" aria-hidden="true"></i>
                  Tambah Data</a>&nbsp;  
                      <div class="dropdown">
                                  <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <i class="fas fa-download"></i>
                                    Export
                                  </button>
                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="{{ route('user.export') }}">Excel</a>
                                      <a class="dropdown-item" href="#">PDF</a>
                                    
                                  </div>
                              </div>
                      </div>
                  </div>

                 

                
                  
               
                <br><br>
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                @if( $getUsers->count() > 0 )
                <?php $i=1; ?>
                @foreach($getUsers as $post)
                  <tr>
                    <td>{{ $i }}</td>
                    <td>
                        {{ $post->name }}
                    </td>
                    <td> {{ $post->email }} </td>

                    @if ($post->level  == 0)
                    <td> <a href="#" class="badge badge-success">Admin</a> </td>
                    @elseif($post->level  == 1)
                    <td> <a href="#" class="badge badge-info">User</a></td>
                    @endif
                    <td> <a href="{{ url('/user/hapus/' . $post->id) }}" type="button" class="btn btn-danger"> <i class="fa fa-trash"></i> Delete</a>
                    <a href="{{ url('/user/edit/' . $post->id) }}" type="button" class="btn btn-warning text-white">
                    <i class="fa fa-edit"></i>Edit</a></td>
                    
                  </tr>
                  <?php $i++; ?>
                  
                  @endforeach

                  @else 
                  <tr>
                    <td colspan="4">BELUM ADA DATA USERS</td>
                  </tr>
                  @endif
                  
                  </tbody>
                 
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    @include('layout.modal.modal-users')
      
    </div>
    </div>

    
</div>

@else 
    @include('layout.404.index')

@endif
@endsection