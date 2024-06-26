@extends('layouts.base')
@section('title')
Mengubah Pengguna
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
         <h3 class="page-title">Mengubah Pengguna</h3>
      </div>
      <div class="col-auto float-right ml-auto">
         <a href="{{ route('users.index') }}" class="btn btn-primary">Kembali</a>
      </div>
   </div>
</div>
{!! Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id]]) !!}
<div class="row">
   <div class="col-xs-12 col-sm-12 col-md-6 mb-2">
      <div class="form-group">
         <strong>Nama:</strong>
         {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
      </div>
   </div>
   <div class="col-xs-12 col-sm-12 col-md-6 mb-2">
      <div class="form-group">
         <strong>Email:</strong>
         {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
      </div>
   </div>
   <div class="col-xs-12 col-sm-12 col-md-6 mb-2">
      <div class="form-group">
         <strong>Kata Sandi:</strong>
         {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
      </div>
   </div>
   <div class="col-xs-12 col-sm-12 col-md-6 mb-2">
      <div class="form-group">
         <strong>Konfirmasi Sandi:</strong>
         {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
      </div>
   </div>
   <div class="col-xs-12 col-sm-12 col-md-6 mb-2">
      <div class="form-group">
         <strong>Jenis Pekerjaan:</strong>
         <select name="work_type" class="form-select">
         @foreach ($worktypes as $worktype)
         <option value="{{ $worktype->id }}" {{ $worktype->id == $user->work_type ? 'selected' : '' }}>{{ $worktype->name }}</option>
         @endforeach
         </select>
      </div>
   </div>
   <div class="col-xs-12 col-sm-12 col-md-6 mb-2">
      <div class="form-group">
         <strong>Pangkat:</strong>
         {!! Form::select('roles[]', $roles, $userRole, array('class' => 'form-select')) !!}
      </div>
   </div>
   <div class="col-xs-12 col-sm-12 col-md-6 mt-3">
      <button type="submit" class="btn btn-primary">Kirim</button>
   </div>
</div>
{!! Form::close() !!}
@endsection
