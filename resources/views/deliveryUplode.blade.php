@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="panel panel-info">
            <div class="panel-heading">Delivery upload</div>
            <div class="container">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                @if(Session::has('errorsData'))
                    <div class="alert alert-danger">
                        <ul>
                            @foreach (Session::get('errorsData') as $errorData)
                                <li>{{ $errorData }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if(Session::has('invalideFile'))
                    <div class="alert alert-warning">
                        <ul>
                            <li>{{ Session::get('invalideFile') }}</li>
                        </ul>
                    </div>
                @endif

                {{-- @if ($message = Session::get('warning '))
                    <div class="alert alert-warning ">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif --}}

                <form method="POST" action="{{ route('delivery.UplodeCsv') }}" enctype="multipart/form-data">
                    @csrf
                    <br>
                    
                    <div class="form-group row">
                        <div class="col-md-6">
                                <label for="sel1">Select File:</label>
                        </div>
                        <div class="col-md-6">
                                <input type="file" class="form-control-file" id="csv_file" name="csv_file">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                                <label>With Header: <input type="checkbox" value="1" id="csvHeader" name="csvHeader"></label> 
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
