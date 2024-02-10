@extends('template.master')

@section('title', 'Tambah Data Spp' )

@section('content')

  <!-- left column -->
<div class="col-md-12">
  <!-- general form elements -->
  <div class="card card-primary">
    <!-- /.card-header -->
      <!-- form start -->
      <form action="{{ route('spp.store') }}" method="POST">
        @csrf
        <div class="card-body">
          <div class="form-group">
            <label for="nama">Masukan Spp</label>
            <input name="tahun" type="text" class="form-control @error('tahun') {{ 'is-invalid' }} @enderror" id="tahun"  placeholder="Tahun Spp"
            value="{{@old('nama')}}">
        </div>
        <div class="card-body">
          <div class="form-group">
            <input name="nominal" type="text" class="form-control @error('nominal') {{ 'is-invalid' }} @enderror" id="nominal"  placeholder="Nominal Spp"
            value="{{@old('nama')}}">
        </div>
        @error('tahun')
        <span id="terms-error" class="error invalid-feedback" 
        style="display: inline;">{{ $message }}</span>
        @enderror
        @error('nominal')
        <span id="terms-error" class="error invalid-feedback" 
        style="display: inline;">{{ $message }}</span>
        @enderror
      </div>
      <div class="px-3 d-flex justify-content-between align-items-center">
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
  <!-- /.card -->
</div>

@endsection