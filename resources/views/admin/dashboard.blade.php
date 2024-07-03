@extends('mainLayout')

@section('page-content')
<div class="container-fluid py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0">
                <div class="card-body p-5">
                    <h1 class="text-center mb-4 font-serif">Admin Dashboard</h1>
                    <blockquote class="blockquote text-center mb-5">
                        <p class="mb-0 font-serif">"People find pleasure in different ways. I find it in keeping my mind clear."</p>
                        <footer class="blockquote-footer mt-2 font-serif">Marcus Aurelius</footer>
                    </blockquote>
                    <div class="d-grid gap-3">
                        <a href="{{ route('usertool') }}" class="btn btn-primary btn-lg font-serif">Manage User Roles and Permissions</a>
                        <a href="{{ route('home') }}" class="btn btn-outline-secondary font-serif">Back to Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .font-serif {
        font-family: "Times New Roman", Times, serif;
    }
    .btn {
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    .card {
        background-color: #f8f9fa;
    }
    blockquote {
        font-style: italic;
    }
</style>
@endpush