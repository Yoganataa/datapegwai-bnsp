@extends('layouts.base')

@section('title')
    Jenis Pekerjaan
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
            <h3 class="page-title">Jenis Pekerjaan</h3>
        </div>
        <div class="col-auto">
            @can('worktype-create')
            <a href="{{ route('worktypes.create') }}" class="btn btn-primary">Tambah</a>
            @endcan
        </div>
    </div>
</div>

<div class="table-responsive">
    <table class="data-table table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Dibuat Pada</th>
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
            processing: false,
            serverSide: true,
            pageLength: 10,
            scrollY: false,
            scrollX: false,
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
                {data: 'name', orderable: false},
                {data: 'price', orderable: false},
                {data: 'created_at', orderable: false},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });
    });
</script>
@endsection
