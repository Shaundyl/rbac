@extends('mainLayout')

@section('page-title','Main Landing Page')

@section('page-content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title">Welcome to the Site</h1>
                    <br>
                    <div class="list-group">
                        <a href="{{ route('acctg') }}" class="list-group-item list-group-item-action @unless(Auth::user()->hasRole('admin') || Auth::user()->hasRole('bookeeper') || Auth::user()->hasRole('auditor') || Auth::user()->hasRole('audasst')) disabled @endunless">Accounting</a>
                        
                        <a href="{{ route('prod') }}" class="list-group-item list-group-item-action @unless(Auth::user()->hasRole('admin') || Auth::user()->hasRole('assembler')) disabled @endunless">Production</a>
                        
                        @if(Auth::user()->hasRole('admin'))
                            <a href="{{ route('dash') }}" class="list-group-item list-group-item-action">Dashboard</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
