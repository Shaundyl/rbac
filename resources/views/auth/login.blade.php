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

@section('page-title', 'Account Login')

@section('auth-content')
<div class="full-screen-bg d-flex align-items-center justify-content-center">
        <div class="col-md-4 col-lg-4">
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white text-center py-1">
                    <h3 class="mb-1">User Login</h3>
                </div>
                <div class="card-body p-4">
                    <div class="text-center mb-4">
                        <img src="{{ asset('storage/images/shaun.jpg') }}" alt="Logo" class="img-fluid" style="max-width: 100px;" >
                    </div>
                    <form method="POST" action="{{ route('login') }}" class="form">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Username</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-user"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                                </svg></i></span>
                                <input type="text" id="name" name="name" value="{{ old('name') }}" required class="form-control">
                            </div>
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-lock"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-key" viewBox="0 0 16 16">
                                <path d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8m4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5"/>
                                <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                                </svg></i></span>
                                <input type="password" id="password" name="password" required class="form-control">
                            </div>
                            @error('password')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Login</button>
                            <button type="reset" class="btn btn-outline-secondary">Clear</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center py-3">
                    <p class="mb-0">Not a user? <a href="{{ route('register') }}" class="text-primary">Register here</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection