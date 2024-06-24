@extends('layouts.base')
@section('title')
Pangkat
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
         <h3 class="page-title">Pangkat</h3>
      </div>
      <div class="col-auto ms-auto">
         @can('role-create')
         <a href="{{ route('roles.create') }}" class="btn btn-primary"> Tambah </a>
         @endcan
      </div>
   </div>
</div>
<div class="table-responsive">
   <table class="datatable table table-striped data-table mb-0">
      <thead>
         <tr>
            <th>#</th>
            <th>Nama</th>
            <th>Dibuat pada</th>
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
            destroy: true,
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
                {data: 'name', name: 'name'},
                {data: 'created_at', name: 'created_at'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ],
            ajax: "{{ route('roles.index') }}",
        });
      });
    </script>
@endsection
