@extends('mainLayout')

@section('page-title', 'Book Entries')

@section('page-content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Book Entries</h2>
                    <table class="table table-striped table-hover">
                        <thead class="thead-light">
                            <tr>
                                <th>#</th>
                                <th>Entry</th>
                                <th>Entry Amount</th>
                                <th>Encoded By</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($allBooks as $book)
                            <tr>
                                <td>{{ $book->id }}</td>
                                <td>{{ $book->entry }}</td>
                                <td class="text-end">{{ number_format($book->amount,2) }}</td>
                                <td>{{ $book->user_id }}</td>
                                <td>
                                    <a href="{{ route('ledger',$book->id) }}" class="btn btn-primary btn-sm">View Details</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center">
                        {{ $allBooks->links() }}
                    </div>
                    <a href="{{ route('acctg') }}" class="btn btn-secondary mt-3">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
