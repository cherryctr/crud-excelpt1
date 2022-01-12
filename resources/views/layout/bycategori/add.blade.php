@extends('layout.app')
@section('content')

<div class="content-wrapper">
 
                        <!-- Content Header (Page header) -->
        <section class="content-header">
        <div class="container">
            <div class="row">
            <div class="col-sm-12">
                <h1>Tambah Data</h1>
            </div>
           
            </div>
        </div><!-- /.container-fluid -->
        </section>

    <!-- Main content -->
    <section class="content">
      <div class="container">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <form method="POST" action="{{ url('/post/add/rumahibadah') }}">
                        @csrf
                        <div class="card-body">
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="nama" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Pilih Kategori') }}</label>

                            <div class="col-md-6">
                            <select class="form-control" name="kategori_id">
                                <option> --- PILIH KATEGORI--- </option>
                                @foreach ($kategori as $kat)
                                    <option value="{{ $kat->id }}">{{ $kat->nama_kategori }}</option>
                                @endforeach 
                                
                            </select>
                            </div>
                        </div>
                        

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Pilih Kabupaten') }}</label>

                            <div class="col-md-6">
                            <select class="form-control" id="city" name="id">
                                <option> --- PILIH KABUPATEN--- </option>
                                @foreach ($city as $prov)
                                    <option value="{{ $prov->id }}">{{ $prov->name }}</option>
                                @endforeach 
                                
                            </select>
                            </div>
                        </div>

                       

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Pilih Kecamatan') }}</label>

                            <div class="col-md-6">
                              
                                    <!-- <input type="text" name="province_id" id="city"> -->
                                    
                                    <select name="district_id" class="form-control" id="district">
                                    <option value="0">-- PILIH --</option>

                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Pilih Kelurahan</label>

                            <div class="col-md-6">
                       
                        
                        <select name="villages_id" class="form-control" id="villages">
                        <option value="0">-- PILIH --</option>

                        </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="exampleFormControlTextarea1" class="col-md-4 col-form-label text-md-right">Alamat : </label>
                                <div class="col-md-6">
                                <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
                                </div>
                        </div>

                      

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                                <a href="#" type="submit" class="btn btn-primary">
                                    {{ __('Back') }}
                                </a>
                            </div>
                        </div>

                        </div>
                    </form>
            
            </div>
            <!-- /.card -->

            <!-- general form elements -->
           
            <!-- /.card -->

            <!-- Input addon -->
            
            <!-- /.card -->
            <!-- Horizontal Form -->
            
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          <!-- right column -->
         
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
     


</div>

@endsection