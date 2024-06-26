<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Eployee</title>
    <link rel="shortcut icon" href="./assets/compiled/svg/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="./assets/compiled/css/app.css">
    <link rel="stylesheet" href="./assets/compiled/css/app-dark.css">
    <link rel="stylesheet" href="./assets/compiled/css/auth.css">
    <style>
        #auth-right img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: relative;
            top: 0;
            left: 0;
        }
    </style>
</head>

<body>
    <script src="assets/static/js/initTheme.js"></script>
    <div id="auth">
        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <div class="auth-logo">
                        <a href="/">Employee</a>
                    </div>
                    <h1 class="auth-title">Selamat Datang</h1>
                    <p class="auth-subtitle mb-5">di Laman Penggajian Employee</p>

                    <!-- Integrated Form from Target Modifikasi -->
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input id="email" type="email"
                                   class="form-control form-control-xl @error('email') is-invalid @enderror" 
                                   name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Alamat Email">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input id="password" type="password"
                                   class="form-control form-control-xl @error('password') is-invalid @enderror" 
                                   name="password" required autocomplete="current-password" placeholder="Kata Sandi">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-check form-check-lg d-flex align-items-end">
                            <input class="form-check-input me-2" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label text-gray-600" for="remember">
                                Ingat Saya
                            </label>
                        </div>
                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5" type="submit">Masuk</button>
                        <div class="text-center mt-5 text-lg fs-4">
                            <p class="text-gray-600">Apakah belum punya akun? <a href="/register" class="font-bold">Daftar</a>.</p>
                            {{-- <p><a class="font-bold" href="/password/reset">Forgot password?</a>.</p> --}}
                        </div>
                    </form>
                    <!-- End Integrated Form -->
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">
                    <img src="https://www.virtualofficeku.co.id/wp-content/uploads/2020/05/gapura-11.jpg" alt="Background Image">
                </div>
            </div>
        </div>
    </div>
</body>

</html>
