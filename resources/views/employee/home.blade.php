<!-- taken from home.blade.php, after logging in you are taken here -->

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

                    You are logged in as a Empoylee!
                    
                    <a href ="{{ route('employee.businesses.index')}}"> View all XXXX businesses</a> 
                    <!-- links to the index page for employees. less permissions for them -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
