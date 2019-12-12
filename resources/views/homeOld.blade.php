@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center jumbotron">
        <div class="panel panel-info">
            <div class="panel-heading">Calling</div>
            <div class="panel-body">
                <div class="btn-group btn-group-justified">
                    <a href="{{ route('order') }}" class="btn btn-primary">Order</a>
                    <a href="{{ route('delivery') }}" class="btn btn-info">Delivery</a>
                    {{-- <a href="#" class="btn btn-primary">Sony</a> --}}
                </div>
                <br>
                <div class="btn-group btn-group-justified">
                    <a href="{{ route('showStoreInformation') }}" class="btn btn-warning">StoreInformation</a>
                    {{-- <a href="{{ route('delivery') }}" class="btn btn-info">Delivery</a> --}}
                    {{-- <a href="#" class="btn btn-primary">Sony</a> --}}
                </div>
            </div>

        </div>
    </div>
</div>
@endsection