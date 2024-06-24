@extends('layouts.base')

@section('title')
    Uang Muka
@endsection

@section('content')
<div class="page-header">
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ $message }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="row align-items-center">
      <div class="col">
        <h3 class="page-title">Daftar Uang Muka</h3>
      </div>
      <div class="col-auto">
        @can('worktype-create')
        <a href="{{ route('cash.create') }}" class="btn btn-primary">Tambah</a>
        @endcan
      </div>
    </div>
  </div>

  <div class="table-responsive">
    <table class="data-table table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Karyawan</th>
                <th>Tanggal Pembayaran di Muka</th>
                <th>Jumlah</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
  </div>
@endsection

@section('scripts')
<script>
     $(function () {
      var table = $('.data-table').DataTable({
          processing: true,
          serverSide: true,
          pageLength: 10,
          scrollY: false,
          scrollX: false,
          ajax: "{{ route('cash.index') }}",
          columns: [
              {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
              {data: 'user_name', name: 'user_name', orderable: false},
              {data: 'date_advance', name: 'date_advance', searchable: true},
              {data: 'amount', name: 'amount', orderable: false},
              {data: 'action', name: 'action', orderable: false, searchable: false},
          ]
      });
    });
</script>
@endsection
