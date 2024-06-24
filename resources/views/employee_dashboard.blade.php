@extends('layouts.base')

@section('title')
    Dashboard | Employee
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="d-flex align-items-center">
            <div class="me-3">
                <img src="{{ asset('assets/img/user.jpg') }}" alt="" class="img-fluid rounded-circle" style="width: 50px;">
            </div>
            <div>
                <h3>Selamat datang, {{ auth()->user()->name }}</h3>
                @php
                $date = date('Y-m-d');
                $day = date('l', strtotime($date));
                @endphp
                <p>{{ $day }}, {{ date('j F Y') }}</p>
            </div>
        </div>
    </div>
</div>
<div class="row mt-4">
    <div class="col-lg-8">
        <section>
            <h1 class="h5">Hari ini</h1>
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action text-danger d-flex align-items-center">
                    <div class="me-3">
                        <i class="fas fa-hourglass"></i>
                    </div>
                    <div class="flex-grow-1">
                        <p class="mb-0">Viko sakit hari ini</p>
                    </div>
                    <div class="ms-3">
                        <img src="assets/img/profiles/avatar-09.jpg" alt="" class="img-fluid rounded-circle" style="width: 30px;">
                    </div>
                </a>

                <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                    <div class="me-3">
                        <i class="fas fa-suitcase"></i>
                    </div>
                    <div class="flex-grow-1">
                        <p class="mb-0">Kamu pergi hari ini</p>
                    </div>
                    <div class="ms-3">
                        <img src="assets/img/profiles/avatar-02.jpg" alt="" class="img-fluid rounded-circle" style="width: 30px;">
                    </div>
                </a>

                <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                    <div class="me-3">
                        <i class="fas fa-building"></i>
                    </div>
                    <div class="flex-grow-1">
                        <p class="mb-0">Anda bekerja dari rumah hari ini</p>
                    </div>
                    <div class="ms-3">
                        <img src="assets/img/profiles/avatar-02.jpg" alt="" class="img-fluid rounded-circle" style="width: 30px;">
                    </div>
                </a>
            </div>
        </section>

        <section class="mt-4">
            <h1 class="h5">Besok</h1>
            <div class="list-group">
                <div class="list-group-item d-flex align-items-center">
                    <div class="me-3">
                        <i class="fas fa-suitcase"></i>
                    </div>
                    <div class="flex-grow-1">
                        <p class="mb-0">2 orang akan pergi besok</p>
                    </div>
                    <div class="ms-3">
                        <img src="assets/img/profiles/avatar-04.jpg" alt="" class="img-fluid rounded-circle" style="width: 30px;">
                        <img src="assets/img/profiles/avatar-08.jpg" alt="" class="img-fluid rounded-circle ms-2" style="width: 30px;">
                    </div>
                </div>
            </div>
        </section>

        <section class="mt-4">
            <h1 class="h5">Tujuh hari berikutnya</h1>
            <div class="list-group">
                <div class="list-group-item d-flex align-items-center">
                    <div class="me-3">
                        <i class="fas fa-suitcase"></i>
                    </div>
                    <div class="flex-grow-1">
                        <p class="mb-0">2 orang akan pergi</p>
                    </div>
                    <div class="ms-3">
                        <img src="assets/img/profiles/avatar-05.jpg" alt="" class="img-fluid rounded-circle" style="width: 30px;">
                        <img src="assets/img/profiles/avatar-07.jpg" alt="" class="img-fluid rounded-circle ms-2" style="width: 30px;">
                    </div>
                </div>

                <div class="list-group-item d-flex align-items-center">
                    <div class="me-3">
                        <i class="fas fa-user-plus"></i>
                    </div>
                    <div class="flex-grow-1">
                        <p class="mb-0">Hari pertamamu akan jatuh pada hari Kamis</p>
                    </div>
                    <div class="ms-3">
                        <img src="assets/img/profiles/avatar-02.jpg" alt="" class="img-fluid rounded-circle" style="width: 30px;">
                    </div>
                </div>

                <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                    <div class="me-3">
                        <i class="fas fa-calendar"></i>
                    </div>
                    <div class="flex-grow-1">
                        <p class="mb-0">Hari Senin adalah Hari Libur Bank Musim Semi</p>
                    </div>
                </a>
            </div>
        </section>
    </div>

    <div class="col-lg-4">
        <div>
            <section>
                <h5 class="h6">Proyek</h5>
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h4 class="mb-0">71</h4>
                                <small>Jumlah Tugas</small>
                            </div>
                            <div>
                                <h4 class="mb-0">14</h4>
                                <small>Tugas yang Tertunda</small>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between mt-3">
                            <div>
                                <h4 class="mb-0">2</h4>
                                <small>Jumlah Proyek</small>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <h5 class="h6">Cuti Anda</h5>
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h4 class="mb-0">4.5</h4>
                                <small>Tinggalkan Diambil</small>
                            </div>
                            <div>
                                <h4 class="mb-0">12</h4>
                                <small>Tersisa</small>
                            </div>
                        </div>
                        <div class="mt-3">
                            <a class="btn btn-primary w-100" href="#">Terapkan Cuti</a>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <h5 class="h6">Tunjangan waktu istirahat Anda</h5>
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h4 class="mb-0">5.0 Jam</h4>
                                <small>Disetujui</small>
                            </div>
                            <div>
                                <h4 class="mb-0">15 Jam</h4>
                                <small>Tersisa</small>
                            </div>
                        </div>
                        <div class="mt-3">
                            <a class="btn btn-primary w-100" href="#">Terapkan Waktu Istirahat</a>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <h5 class="h6">Liburan Mendatang</h5>
                <div class="card">
                    <div class="card-body text-center">
                        <h4 class="holiday-title mb-0">Sen 1 Januari 2024 - Turu</h4>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection
