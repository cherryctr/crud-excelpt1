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
                        </div>
                    </div>
                    <div class="divider"></div>

                    

                    <div class="row">
              <div class="col-md-12 float-right">

                        <form action="{{ url('filter/datakelurahan') }}" method="GET">
                          <div class="form-group">
                              <label for="email">{{ __('Pilih Kelurahan') }}</label>

                            
                              
                              <select class="test-select2 form-control" id="city" name="id">
                                  <option> --- PILIH KELURAHAN-- </option>
                                  @foreach ($datakuid as $prov)
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
                          
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <i class="fas fa-plus"></i>
                                  Export
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                  <a class="dropdown-item" href="#">Excel</a>
                                    <a class="dropdown-item" href="#">PDF</a>
                                  
                              </div>
                              
                        
                  
                        
                    </div>

                    

                    
              </div>
              
              <div class="divider"></div>
            
                <div class="table-responsive mt-5">
                    <div class="col-md-12">
                    <table class="table table-bordered" id="example1">
                    <thead>
                        <tr>
                          
                        
                            <th>Kelurahan</th>
                           
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
                                   
                              
                                    <td><a href="">{{ $lets->name }}</a></td>
                                  
                                    <td>
                                        @if($lets->masjid_count != 0)
                                        <a href="{{ url('databykelurahan?village='.$lets->id.'&kategory=1')  }}">{{ $lets->masjid_count }}</a>
                                        @else
                                        {{ $lets->masjid_count }}
                                        @endif
                                    </td>

                                    <td>
                                        @if($lets->mushola_count != 0)
                                        <a href="{{ url('databykelurahan?village='.$lets->id.'&kategory=2')  }}">{{ $lets->mushola_count }}</a>
                                        @else
                                        {{ $lets->mushola_count }}
                                        @endif
                                    </td>

                                    <td>
                                        @if($lets->gerejakeristen_count  != 0)
                                        <a href="{{ url('databykelurahan?village='.$lets->id.'&kategory=3')  }}">{{ $lets->gerejakeristen_count }}</a>
                                        @else
                                        {{ $lets->gerejakeristen_count }}
                                        @endif
                                    </td>

                                    <td>
                                        @if($lets->gerejakatolik_count  != 0)
                                        <a href="{{ url('databykelurahan?village='.$lets->id.'&kategory=4')  }}">{{ $lets->gerejakatolik_count }}</a>
                                        @else
                                        {{ $lets->gerejakatolik_count }}
                                        @endif
                                    </td>


                                   

                                    <td>
                                        @if($lets->purehindu_count  != 0)
                                        <a href="{{ url('databykelurahan?village='.$lets->id.'&kategory=5')  }}">{{ $lets->purehindu_count }}</a>
                                        @else
                                        {{ $lets->purehindu_count }}
                                        @endif
                                    </td>

                                    <td>
                                        @if($lets->purebudha_count  != 0)
                                        <a href="{{ url('databykelurahan?village='.$lets->id.'&kategory=6')  }}">{{ $lets->purebudha_count}}</a>
                                        @else
                                        {{ $lets->purebudha_count }}
                                        @endif
                                    </td>

                                    <td>
                                        @if($lets->kelenteng_count  != 0)
                                        <a href="{{ url('databykelurahan?village='.$lets->id.'&kategory=7')  }}">{{ $lets->kelenteng_count}}</a>
                                        @else
                                        {{ $lets->kelenteng_count }}
                                        @endif
                                    </td>


                                   
                                   
                                   
                                 
                                 
                                 

                                  
                               
                                    <td>{{ $lets->masjid_count + $lets->mushola_count +         $lets->gerejakeristen_count + $lets->gerejakatolik_count + $lets->purehindu_count + $lets->purebudha_count + $lets->kelenteng_count }}</td>
                                

                                    
                                   
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
   
    
    </div>
    </div>

    
</div>
@endsection