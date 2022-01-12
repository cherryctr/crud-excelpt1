@extends('layout.app')
@section('content')

<!-- Content Wrapper. Contains page content -->
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
                    <h3 class="danger">{{ $data['angkaMasjid'] }}</h3>
                    <span>MASJID</span>
                    </div>
                    <div class="align-self-center">
                    <img class="gambar-side" src="{{ asset('image/mosque.png') }}" alt="">
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card">
            <div class="card-content">
                <div class="card-body">
                <div class="media d-flex">
                    <div class="media-body text-left">
                    <h3 class="danger">{{ $data['angkaMushola'] }}</h3>
                    <span>MUSHOLA</span>
                    </div>
                    <div class="align-self-center">
                    <img class="gambar-side" src="{{ asset('image/mushola.png') }}" alt="">
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card">
            <div class="card-content">
                <div class="card-body">
                <div class="media d-flex">
                    <div class="media-body text-left">
                    <h3 class="danger">{{ $data['angkaGerejaKristen'] }}</h3>
                    <span>GEREJA KERISTEN</span>
                    </div>
                    <div class="align-self-center">
                    <img class="gambar-side" src="{{ asset('image/gerejakristen.png') }}" alt="">
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>


        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card">
            <div class="card-content">
                <div class="card-body">
                <div class="media d-flex">
                    <div class="media-body text-left">
                    <h3 class="danger">{{ $data['angkaGerejaKatolik']}}</h3>
                    <span>GEREJA KATOLIK</span>
                    </div>
                    <div class="align-self-center">
                    <img class="gambar-side" src="{{ asset('image/gerejakatolik.png') }}" alt="">
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>


        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card">
            <div class="card-content">
                <div class="card-body">
                <div class="media d-flex">
                    <div class="media-body text-left">
                    <h3 class="danger">{{ $data['angkaPureHindu']}}</h3>
                    <span>PURE HINDU</span>
                    </div>
                    <div class="align-self-center">
                    <img class="gambar-side" src="{{ asset('image/lempuyang-temple.png') }}" alt="">
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card">
            <div class="card-content">
                <div class="card-body">
                <div class="media d-flex">
                    <div class="media-body text-left">
                    <h3 class="danger">{{ $data['angkaPureBudha'] }}</h3>
                    <span>PURE BUDHA</span>
                    </div>
                    <div class="align-self-center">
                    <img class="gambar-side" src="{{ asset('image/buddha.png') }}" alt="">
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card">
            <div class="card-content">
                <div class="card-body">
                <div class="media d-flex">
                    <div class="media-body text-left">
                    <h3 class="danger">{{ $data['angkaKelenteng'] }}</h3>
                    <span>KELENTENG KONGHUCHU</span>
                    </div>
                    <div class="align-self-center">
                    <img class="gambar-side" src="{{ asset('image/pagoda.png') }}" alt="">
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
                            <a href="{{ route('createHome') }}" class="btn btn-primary">
                                <i class="fa fa-plus"></i>
                                Tambah Data
                            </a>
                        </div>
                    </div>
              
              <div class="divider"></div>
            
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
                      
                                @foreach($getAlls as $let)
                                <tr>
                                    <td>
                                       <a href="{{ url('villages/'. $let->villages_id ) }}">{{ $let->kelurahan->name }}</a>
                                    </td>
                                    
                                    <td>
                                        {{ $data['angkaMasjid'] }}
                                    </td>

                                    <td>{{ $data['musholaCount'] }}</td>
                                    <td>{{ $data['angkaGerejaKristen'] }}</td>
                                    <td>{{ $data['angkaGerejaKatolik'] }}</td>
                                    <td>{{ $data['angkaPureHindu']}}</td>
                                    <td>{{ $data['angkaPureBudha'] }}</td>
                                    <td>{{ $data['angkaKelenteng'] }}</td>
                                    <td>dfghjkl</td>
                                   
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