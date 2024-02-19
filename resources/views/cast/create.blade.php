@extends('template.master');

@section('title', 'Tambah Data Cast')

@section('content')
<div class="row">
  <!-- left column -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <!-- /.card-header -->
      <!-- form start -->
      <form action="{{ route('cast.store') }}" method="POST">
        @csrf
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="nama">Nama Pemeran</label>
                <input name="nama" type="text" class="form-control @error('nama') {{ 'is-invalid' }} @enderror" id="nama"  placeholder="Nama Pemeran" value="{{ @old('nama') }}">
              </div>
              @error('nama')
                <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
              @enderror
              <div class="form-group">
                <label for="nama">Umur</label>
                <input name="umur" type="number" class="form-control @error('nama') {{ 'is-invalid' }} @enderror" id="nama"  placeholder="Umur Pemeran" value="{{ @old('umur')}}">
              </div>
              @error('umur')
                <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
              @enderror
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="nama">Biografi Pemeran</label>
                <textarea name="bio" id="bio" class="form-control @error('bio') {{ 'is-invalid' }} @enderror" cols="30" rows="5" placeholder="Biografi Pemeran">{{ @old('bio') }}</textarea>
              </div>
              @error('bio')
                <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
        <div class="px-3 d-flex justify-content-between align-items-center">
          <button type="reset" class="btn btn-warning">Reset</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
    <!-- /.card -->
  </div>
</div>
@endsection