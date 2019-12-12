@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="panel panel-primary">
        <div class="panel-heading">Order Uplode</div>
            <div class="container">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                {{-- @foreach($errors->all() as $error)
                    <div class="alert alert-danger">
                        <p >{{$error}}</p>   
                    </div>
                @endforeach   --}}
                @endif


                @if ($message = Session::get('warning '))
                    <div class="alert alert-warning ">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <form method="POST" action="{{ route('UplodeCsv') }}" enctype="multipart/form-data">
                    @csrf
                    <br>
                    <div class="form-group row">
                        <div class="col-md-6">
                                <label for="sel1">Sender name:</label>
                        </div>
                        <div class="col-md-6">
                            <select class="form-control" id="KokyakuName" name="KokyakuName"  style="width: 80%" required>
                                @foreach ($Kokyaku1 as $key => $value)
                                <option value="{{$value->bango}}">{{$value->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                                <label for="sel1">Warehouse name:</label>
                        </div>
                        <div class="col-md-6">
                            <select class="form-control" id="soukoName" name="soukoName" style="width: 80%">
                                
                                @foreach ($soukos as $souko)
                                <option value="{{$souko}}">{{$souko}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                                <input type="file" class="form-control-file" id="csv_file" name="csv_file">
                        </div>
                        <div class="col-md-6">
                                <input type="submit" class="btn btn-success" id="" value="File upload">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>    
</div>
@endsection
