@extends('template.master')
@push('css')
  <link rel="stylesheet" href="{{ asset('aadminsb/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('adminsb/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('adminsb/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush
@section('title', 'Data Spp')
@section('content')
@if ($message = Session::get('success'))
  <div class="alert alert-success alert-block">
  <button type="button" class="close" data-dismiss="alert">×</button>	
    <strong>{{ $message }}</strong> 
  </div>
@endif
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <a href="{{ route('spp.create') }}" class="btn btn-sm btn-outline-primary">
          <i class="fa fa-plus"> Spp</i>
        </a>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="table" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>No</th>
              <th>Id Spp</th>
              <th>tahun</th>
              <th>nominal</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($spps as $key => $value)
              <tr>
                <td>
                  {{ $key + 1 }}
                </td>
                <td>
                  {{ $value->id_spps }}
                </td>
                <td>
                    {{ $value->tahun }}
                  </td>
                  <td>
                    {{ $value->nominal }}
                  </td>
                <td>
                  <form action="{{ route('spp.destroy', $value->id_spps) }}" method="post">
                    <a href="{{ route('spp.show', $value->id_spps) }}" class="btn btn-sm btn-info">
                        Detail
                      </a>
                  <a href="{{ route('spp.edit', $value->id_spps) }}" class="btn btn-sm btn-warning">
                    Edit
                  </a>
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-sm btn-danger my-1" value="Delete">
                  </form>
                </td>              
              </tr>
            @empty
              <tr>
                <td>Data Masih Kosong</td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.col -->
@endsection
@push('js')
  <script src="{{ asset('adminsb/plugins/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('adminsb/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('adminsb/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
  <script src="{{ asset('adminsb/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('adminsb/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
  <script src="{{ asset('adminsb/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('adminsb/plugins/jszip/jszip.min.js') }}"></script>
  <script src="{{ asset('adminsb/plugins/pdfmake/pdfmake.min.js') }}"></script>
  <script src="{{ asset('adminsb/plugins/pdfmake/vfs_fonts.js') }}"></script>
  <script src="{{ asset('adminsb/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
  <script src="{{ asset('adminsb/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
  <script src="{{ asset('adminsb/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
  <script>
    $(function () {
      $("#table").DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
@endpush