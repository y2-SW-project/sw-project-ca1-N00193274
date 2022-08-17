@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in as a manager!
                    
                    <a href ="{{ route('manager.businesses.index')}}"> View all XXXX businesses</a>
                    <!-- Same as  employee side, difference is permissions whiich is why different routes are used -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection