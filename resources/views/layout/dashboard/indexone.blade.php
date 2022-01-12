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
               
              <!-- FILTER ON DEVELOP -->
            <div class="row">
              <div class="col-md-12 float-right">

                        <form action="{{ url('filter/datakecamatan') }}" method="GET">
                          <div class="form-group">
                              <label for="email">{{ __('Pilih Kecamatan') }}</label>

                            
                              
                              <select class="test-select2 form-control" id="city" name="id">
                                  <option> --- PILIH KECAMATAN--- </option>
                                  @foreach ($kecamatan as $prov)
                                      <option value="{{ $prov->id }}">{{ $prov->name }}</option>
                                  @endforeach 
                                  
                              </select>
                            
                              
                          </div>
                          <button type="submit" class="btn btn-primary" value="Submit">Submit</button>

                        </form>
                    </div>
                    <div class="divider"></div>

                    </div>
                    
              <div class="row">
                 
                        &nbsp; &nbsp;
                        <button class="btn btn-success" type="button" data-toggle="modal" data-target="#exampleModal1">
                          <i class="fas fa-download" style="color:white;"></i>
                          Import
                        </button>
                    <div class="col-md-6">
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-plus"></i>
                          Export
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" data-toggle="modal" data-target="#exampleModal">Excel</a>
                            <a class="dropdown-item" href="#">PDF</a>
                          
                        </div>
                      </div>
                    </div>


                    
                    


                    

                    
              </div>
              
       
            
                <div class="table-responsive mt-5">
                    <div class="col-md-12">
                    <table class="table table-bordered" id="example1">
                    <thead>
                        <tr>
                          
                        
                            <th>Kecamatan</th>
                           
                            <th>Masjid</th>
                            <th>Mushola</th>
                            <th>Gereja Kristen</th>
                            
                            <th>Gereja Katolik</th>
                            <th>Pure Hindu</th> 
                            <th>Pure Budha</th>
                            <th>Kelenteng</th>
                            <th>total</th>
                            
                         
                            
                        </tr>
                    </thead>

                    <tbody>
                      
                                @foreach($datakuid as $lets)
                                <tr>
                                   
                                 
                                    <td><a href="{{ url('/data/' . $lets->id .'/kelurahan' ) }}">{{ $lets->name }}</a></td>
                                    <td>{{ $lets->masjid_count }}</td>
                                    <td>{{ $lets->mushola_count }}</td>
                                    <td>{{ $lets->gerejakeristen_count }}</td>
                                    <td>{{ $lets->gerejakatolik_count }}</td>
                                    <td>{{ $lets->purehindu_count }}</td>

                                    <td>{{ $lets->purebudha_count }}</td>
                                    <td>{{ $lets->kelenteng_count }}</td>
                                    <td>{{
                                        $lets->masjid_count +
                                        $lets->mushola_count +  $lets->gerejakeristen_count + $lets->gerejakatolik_count + $lets->purehindu_count +
                                        $lets->purebudha_count +
                                        $lets->kelenteng_count
                                    }}</td>
                                

                                    
                                   
                                </tr>  
                                @endforeach
                             
                    </tbody>
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
   
    @include('layout.modal.modal-export')
   
    </div>

    </div>
    @include('layout.modal.modal-import')
    
</div>
@endsection