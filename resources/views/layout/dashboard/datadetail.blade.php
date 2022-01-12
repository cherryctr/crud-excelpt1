@extends('layout.app')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container">
    <div class="grey-bg container-fluid">
    @include('layout.dataicon.data')


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
          @if (\Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                  {!! \Session::get('success') !!}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                    
            @endif
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DAFTAR DATA RUMAH IBADAH - Wilayah Kabupaten Tangerang</h3>
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row mb-4">
                        <div class="col-md-12">
                           

                          
                      
                            <a href="{{ route('home') }}" class="btn btn-primary">
                            <i class="fas fa-arrow-left"></i>
                                BACK
                            </a>
                      
                            
                            
                        
                   
                            <a href="{{ route('createHome') }}" class="btn btn-primary">
                                <i class="fa fa-plus"></i>
                                Tambah Data
                            </a>

                            
                   
                        </div>
                    </div>
              
              <div class="divider"></div>
              <div class="col-md-12">
           
		           
                <div class="row">
                <div class="dropdown">
                                  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-download"></i>
                                    Export
                                  </button>
                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="{{ route('rumah.export',['villages_id'=> request()->get('village')]) }}">Excel</a>
                                      <a class="dropdown-item" href="#">PDF</a>
                                    
                                  </div>
                              </div>
                            
                        &nbsp;  

                       
                        <!-- <button style="margin-bottom: 10px" class="btn btn-primary delete_all" data-url="{{ url('deleted-all') }}">Delete All Selected</button> -->


                        </div>
                      </div>
                      <div class="table-responsive mt-5">
                          <div class="col-md-12">
                          <button style="margin-bottom: 10px" class="btn btn-primary delete_all" data-url="{{ url('myproductsDeleteAll') }}">Delete All Selected</button>
    <table class="table table-bordered">
        <tr>
            <th width="50px"><input type="checkbox" id="master"></th>
            <th>Kelurahan</th>
            <th>Nama Tempat Ibadah</th>
            <th>Alamat</th>
            <th>Action</th>
        </tr>
        @if($getDataByKelurahan->count())
            @foreach($getDataByKelurahan as $key => $dat)
                <tr id="tr_{{$dat->id_rumah}}">
                    <td><input type="checkbox" class="sub_chk" data-id="{{$dat->id_rumah}}"></td>
                    <td>{{ $dat->kelurahan->name}}</td>
                                        <td>{{ $dat->nama }}</td>
                                        
                                        <td>{{ $dat->alamat }}</td>
                    <td>
                         <a href="{{ url('myproducts',$dat->id_rumah) }}" class="btn btn-danger btn-sm"
                           data-tr="tr_{{$dat->id_rumah}}"
                           data-toggle="confirmation"
                           data-btn-ok-label="Delete" data-btn-ok-icon="fa fa-remove"
                           data-btn-ok-class="btn btn-sm btn-danger"
                           data-btn-cancel-label="Cancel"
                           data-btn-cancel-icon="fa fa-chevron-circle-left"
                           data-btn-cancel-class="btn btn-sm btn-default"
                           data-title="Are you sure you want to delete ?"
                           data-placement="left" data-singleton="true">
                            Delete
                        </a>
                    </td>
                </tr>
            @endforeach
        @endif
    </table>
                          </div>
                     </div>
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
 
    
    </div>
    </div>

    
</div>
@endsection