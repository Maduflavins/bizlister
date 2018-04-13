@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Creat Listing</div>

                <div class="card-body">
                    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$listing->name}}<a href="/listings" class="btn btn-default btn-sm float-right">Go Back</a></div>

                <div class="card-body">
                  <ul class="list-group">
                    <li class="list-group-item"><strong>CAC:</strong><em>{{$listing->cac}}</em></li>
                    <li class="list-group-item"><strong>Address:</strong><em>{{$listing->address}}</em></li>
                    <li class="list-group-item"><strong>Business Type:</strong><em>{{$listing->type}}</em></li>
                    <li class="list-group-item"><strong>Website:</strong><em><a href="{{$listing->website}}" target="_blank">{{$listing->website}}</a></em></li>
                    <li class="list-group-item"><strong>Email:</strong><em>{{$listing->email}}</em></li>
                    <li class="list-group-item"><strong>Phone No:</strong><em>{{$listing->phone}}</em></li>
                  </ul>
                  <hr>
                  <div class="well">
                    {{$listing->bio}}
                  </div>
                </div>
            </div>
        </div>
    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection