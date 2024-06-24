@extends('layouts.base')
@section('title')
Lihat Pangkat
@endsection
@section('content')
<div class="page-header">
   <div class="row align-items-center">
      <div class="col">
         <h3 class="page-title">Lihat Pangkat</h3>
      </div>
      <div class="col-auto ms-auto">
         <a href="{{ route('roles.index') }}" class="btn btn-primary">Back</a>
      </div>
   </div>
</div>
<div class="row p-4" style="border: 1px solid;">
   <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
         <strong>Name: </strong>
         {{ $role->name }}
      </div>
   </div>
   <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
         <strong>Perizinan: </strong>
         @if(count($rolePermissions) > 0)
         @foreach($rolePermissions as $v)
         <label class="badge bg-success">{{ $v->name }}</label>
         @endforeach
         @else
         <label class="badge bg-secondary">Tidak ada izin yang ditetapkan untuk pangkat ini.</label>
         @endif
      </div>
   </div>
</div>
@endsection
