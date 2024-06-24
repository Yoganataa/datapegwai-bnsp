@extends('layouts.base')

@section('title')
Tambahkan Uang Muka
@endsection

@section('content')
@if ($errors->any())
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
          <h3 class="page-title">Tambahkan Uang Muka</h3>
        </div>
        <div class="col-auto">
          <a href="{{ route('cash.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>
{!! Form::open(['route' => 'cash.store', 'method' => 'POST']) !!}
<div class="row">
      <div class="col-12 col-md-4 mb-3">
        <div class="form-group">
            <strong>Pengguna:</strong>
            <select name="user" id="user_id" class="form-control select selectsearch">
                <option value="">--select--</option>
                @foreach ($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
      </div>
      <div class="col-12 col-md-4 mb-3">
        <div class="form-group">
            <strong>Tanggal:</strong>
            <input type="date" class="form-control" name="date_advance" max="{{ date('Y-m-d') }}" id="date_advance">
        </div>
      </div>
      <div class="col-12 col-md-4 mb-3">
        <div class="form-group">
            <strong>Jumlah:</strong>
            <div class="input-group">
                <span class="input-group-text">Rp</span>
                <input type="number" name="amount" step="0.01" class="form-control">
                <span class="input-group-text">.00</span>
            </div>
        </div>
      </div>
      <div class="col-12 mb-3">
        <div class="form-group">
            <strong>Catatan:</strong>
            <textarea class="form-control" name="notes" id="notes"></textarea>
        </div>
      </div>
      <div class="col-12 mt-3">
        <button type="submit" class="btn btn-primary">Kirim</button>
      </div>
</div>
{!! Form::close() !!}
@endsection
