@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-header">
                item:  {{ $inventory->name }}
                </div>
                <div class="card-body">
                <table id="table-inventories" class="table table-hover">
                    <tbody>
                        <tr>
                            <td>Name</td>
                            <td>{{ $inventory->name }}</td>
                        </tr>
                        <tr>
                            <td>Location</td>
                            <td>{{ $inventory->location }}</td>
                        </tr>
                        <tr>
                            <td>Office Number</td>
                            <td>{{ $inventory->quantity }}</td>
                        </tr>
                    </tbody>
                </table>
                <!-- Business displayed by name chosen on index page -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection