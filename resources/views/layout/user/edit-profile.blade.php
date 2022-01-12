@extends('layout.app')
@section('content')

<div class="content-wrapper">
 
                        <!-- Content Header (Page header) -->
        
        <section class="content-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                <nav aria-label="breadcrumb bg-grey">
                <ol class="breadcrumb bg-grey">
                    <li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
                </ol>
                </nav>

                @if (\Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                  {!! \Session::get('success') !!}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
            @elseif(\Session::has('error'))  
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  {!! \Session::get('error') !!}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
            @endif
                </div>
           
            </div>
        </div><!-- /.container-fluid -->
        </section>

        <!-- BREAD CUMB -->
    

        <!-- END BREAND CUM -->

    <!-- Main content -->
    <form method="POST" action="{{ url('/user-profile/proses/edit/'. $userId->id) }}" enctype="multipart/form-data">
    @csrf
    <section class="content">
    <div class="container">
    <div class="row gutters">
    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
    <div class="card">
        <div class="card-body">
            <div class="account-settings">
                <div class="user-profile">
                    <div class="user-avatar">
                    @if (Auth::user()->image == NULL)
                        <div class="alert alert-danger">
                            Tidak ada foto Profil
                            Silahkan Input gambar !!!
                        </div>
                    @else
                        <img src="{{ asset('image/'. Auth::user()->image ) }}" width="40" height="40" class="rounded-circle border right-img">
                    @endif
                 
                    </div>
                    <span style="color: red;">*Kosongkan bila tidak ingin merubah gambar</span>
                    <div class="mt-2">
                    <input id="file" type="file" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" name="image">
                        </div>
                </div>
                
            </div>
        </div>
    </div>
    </div>
    <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
    <div class="card">
        <div class="card-body">
            <div class="row gutters">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <!-- <h6 class="mb-2 text-primary">Personal Details</h6> -->
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group">
                    <label for="name" col-form-label text-md-right">{{ __('Name') }}</label>
                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $userId->name }}" required autofocus>

                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group">
                    <label for="email">{{ __('E-Mail Address') }}</label>
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $userId->email }}" required>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="form-group">
                    <label for="email">{{ __('Level Role') }}</label>
                    <select name="level" class="form-control" id="exampleFormControlSelect1">
                                    <option value="0">Admin</option>
                                    <option value="1">User</option>
                                    
                                </select>

                                @if ($errors->has('level'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('level') }}</strong>
                                    </span>
                                @endif
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group">
                    <label for="password">{{ __('Password') }}</label>

                  
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                         
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group">
                    <label for="password">{{ __('Confirm Password') }}</label>

                  
                                <input iid="password-confirm" type="password" class="form-control" name="password_confirmation">

                                
                         
                    </div>
                </div>

              
            </div>
            
            <div class="row gutters">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="text-right">
                        <button type="button" id="submit" name="submit" class="btn btn-secondary">Cancel</button>
                        <button type="submit" id="submit" name="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </div>
        </div>
   
    </div>
    </div>
    </div>

    </section>
    </form>
    <!-- /.content -->
     


</div>

@endsection