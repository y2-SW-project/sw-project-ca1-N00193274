@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"> 
                    Inventory 
                </div>
                <div class="card-body">
                    @if (count($inventories)=== 0)
                        <p> There is no Inventory </p>
                    @else 
                    <table id="table-inventories" class="table table-hover">
                        <thead>
                            <th>Name</th>
                            <th>description</th>
                            <th>Quantity</th>
                            <th></th>
                            </thead>
                            <tbody>
                              @foreach ($inventories as $inventory)
                                <tr data-id="{{ $inventory->id}}">
                                   <td>{{ $inventory->name }} </td>
                                   <td>{{ $inventory->description }}</td>
                                   <td>{{ $inventory->quantity}}</td>

                                   <td>
                                        <a href="{{ route('manager.businesses.show', $inventory->id) }}" class="btn btn-primary">View</a>
                                        <a href="{{ route('manager.businesses.edit', $inventory->id) }}" class="btn btn-warning">Edit</a>
                                        </form>
                                        <!-- Table allows view of businesses separately, show route is for individual businesses -->
                                    </td>
                                </tr>
                               @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>                
            </div>
        </div>
    </div>
</div>

@endsection