@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! as <strong>{{ strtoupper(Auth::user()->type) }}</strong>
                    Admin Page: <a href="{{ url('/') }}/adminOnlyPage">{{ url('/'') }}/adminOnlyPage</a>
                    Member Page: <a href="{{ url('/') }}/memberOnlyPage">{{ url('/'') }}/memberOnlyPage</a>
                </div>

                <div class="title m-b-md">
                    {{ strtoupper($message)}} only page!
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
