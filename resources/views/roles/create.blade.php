@extends('layouts.base')
@section('title')
Buat Pangkat
@endsection
@section('content')
@if (count($errors) > 0)
<div class="alert alert-danger mt-2">
   <strong>Waduhhh!</strong> Ada yang tidak beres.<br><br>
   <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
   </ul>
</div>
@endif
<div class="page-header">
   <div class="row align-items-center">
      <div class="col">
         <h3 class="page-title">Buat Pangkat</h3>
      </div>
      <div class="col-auto ms-auto">
         <a href="{{ route('roles.index') }}" class="btn btn-primary">Kembali</a>
      </div>
   </div>
</div>
{!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}
<div class="row">
   <div class="col-12 mb-2">
      <div class="form-group">
         <strong>Nama:</strong>
         {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
      </div>
   </div>
   <div class="col-12">
      <div class="form-group">
         <strong>Perizinan:</strong>
         <br/>
         @foreach($permission as $value)
         <div class="form-check">
            <input type="checkbox" class="form-check-input" name="permission[]" value="{{ $value->id }}" id="permission_{{ $value->id }}">
            <label class="form-check-label" for="permission_{{ $value->id }}">{{ $value->name }}</label>
         </div>
         @endforeach
      </div>
   </div>
   <div class="col-12 mt-3">
      <button type="submit" class="btn btn-primary">Kirim</button>
   </div>
</div>
{!! Form::close() !!}
@endsection
