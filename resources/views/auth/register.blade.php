<style>
    .full-screen-bg {
        background-image: url('{{ asset('storage/images/bkg1.jpg') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 100vh;
        width: 100vw;
        position: absolute;
        top: 0;
        left: 0;
    }

    /* If you have a fixed navbar, add this to push the content down */
    body {
        padding-top: 200px; /* Adjust this value to match your navbar height */
    }
</style>

@extends('mainLayout')

@section('page-title', 'Account Registration')

@section('auth-content')
<div class="full-screen-bg d-flex align-items-center justify-content-center">
    <div class="row justify-content-center w-100">
        <div class="col-md-6 col-lg-5">
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white text-center py-3">
                    <h3 class="mb-0">Register New User</h3>
                </div>
                <div class="card-body p-3">
                    <div class="text-center mb-4">
                        <img src="{{ asset('storage/images/shaun.jpg') }}" alt="Logo" class="img-fluid" style="max-width: 100px;">
                    </div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="firstname" class="form-label">First Name</label>
                                <input type="text" id="firstname" name="firstname" value="{{ old('firstname') }}" required class="form-control @error('firstname') is-invalid @enderror">
                                @error('firstname')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lastname" class="form-label">Last Name</label>
                                <input type="text" id="lastname" name="lastname" value="{{ old('lastname') }}" required class="form-control @error('lastname') is-invalid @enderror">
                                @error('lastname')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Username</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" required class="form-control @error('name') is-invalid @enderror">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror">
                            <div class="form-check mt-2">
                                <input type="checkbox" name="generate_email" id="generate_email" class="form-check-input">
                                <label for="generate_email" class="form-check-label">Generate Email Address</label>
                            </div>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" id="password" name="password" required class="form-control @error('password') is-invalid @enderror">
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="password_confirmation" class="form-label">Confirm Password</label>
                            <input type="password" id="password_confirmation" name="password_confirmation" required class="form-control">
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Register</button>
                            <button type="reset" class="btn btn-outline-secondary">Clear</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center py-3">
                    <a href="{{ route('home') }}" class="text-primary">Return to Landing Page</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection