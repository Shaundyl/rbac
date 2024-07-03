@extends('mainLayout')

@section('page-content')
<div class="container-fluid py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0">
                <div class="card-body p-5">
                    <h1 class="text-center mb-4 font-serif">Accounting Dashboard</h1>
                    <blockquote class="blockquote text-center mb-5">
                        <p class="mb-0 font-serif">"Simplicity is the ultimate sophistication."</p>
                        <footer class="blockquote-footer mt-2 font-serif">Leonardo da Vinci</footer>
                    </blockquote>
                    <div class="d-grid gap-3">
                        @can('create')
                            <a href="{{ url('acctg/new') }}" class="btn btn-primary btn-lg font-serif">Add New Ledger Entry</a>
                        @elsecan('viewAll')
                            <a href="{{ url('acctg/view/all') }}" class="btn btn-primary btn-lg font-serif">View All Ledgers</a>
                        @endcan
                        @include('slugs.homeLink')
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


