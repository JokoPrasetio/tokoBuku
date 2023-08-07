@extends('layouts.main_auth')
@section('body')
    <div class="bg-gradient-primary-to-secondary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container-xl px-4">
                        <div class="row justify-content-center">
                            <div class="col-xl-5 col-lg-6 col-md-8 col-sm-11">
                                <div class="card my-5">
                                    <div class="card-body p-3 text-center">
                                        <div class="fw-folder">Sign In</div>
                                    </div>
                                    <hr class="my-0">
                                    <div class="card-body p-5">
                                        @if (session()->has('loginError'))
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                {{ session('loginError') }}
                                                <button class="btn-close" data-bs-dismiss="alert" aria-label="Close"
                                                    type="button"></button>
                                            </div>
                                        @endif
                                        <form action="/login" method="post">
                                            @csrf
                                            {{-- form email --}}
                                            <div class="mb-3">
                                                <label for="email" class="text-gray-600 small">Email Address</label>
                                                <input type="text"
                                                    class="form-control form-control-solid @error('email') is-invalid @enderror"
                                                    id="email" placeholder="email" aria-label="Email Address"
                                                    aria-describedby="email validationEmail" name="email" required
                                                    value="{{ old('email') }}" autofocus>
                                                @error('email')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="password" class="text-gray-600 small">Password</label>
                                                <input type="password"
                                                    class="form-control form-control-solid @error('password') is-invalid @enderror"
                                                    id="password" type="password" placeholder="password" name="password"
                                                    aria-label="password" aria-describedby="password validationPassword"
                                                    required>
                                                @error('password')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="mb-0 mt-4">
                                                <button type="submit" class="btn btn-success w-100">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
@endsection
