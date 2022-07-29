@extends('layouts.admin')

@section('title', 'Input Data User')

@section('content')
<div class="container-fluid">

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <div class="row">
        <div class="col-6">
          <h6 class="mt-2 font-weight-bold text-primary">Input User</h6>
        </div>
      </div>
     
    </div>
    
        <form action="{{route('user.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
              

              <div class="form-group">
                <label for="name">Nama</label>
                <input
                  type="text"
                  class="form-control @error('nama') is-invalid @enderror"
                  placeholder="Masukkan nama"
                  value="{{ old('nama') }}"
                  name="name"
                  autocomplete="name"
                  required
                />
                  @error('nama')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>

              <div class="form-group">
                <label for="username">Username</label>
                <input
                  type="text"
                  class="form-control @error('username') is-invalid @enderror"
                  placeholder="Masukkan nama username"
                  value="{{ old('username') }}"
                  name="username"
                  autocomplete="username"
                  required
                />
                  @error('username')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>

              <div class="form-group">
                <label for="email">Email</label>
                <input
                  type="email"
                  class="form-control @error('email') is-invalid @enderror"
                  value="{{old('email')}}"
                  autocomplete="email"
                  name="email"
                  placeholder="Masukkan email"
                  required
                />
                @error('no_rek')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>

              <div class="form-group">
                <label for="password">{{ __('Password') }}</label>

                
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
               
              </div>

              <div class="form-group">
                <button type="submit" class="btn btn-primary">
                  Submit
                </button>
              </div>
            </div>
            <!-- /.card-body -->
          </form>
    
  </div>


  </div>


 
@endsection