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
                <div class="card-header">Edit Business Listing<a href="/dashboard" class="float-right btn btn-default btn-sm">Go back</a></div>

                <div class="card-body">
                  {!!Form::open(['action' => ['ListingsController@store', $listing->id],'method' => 'POST'])!!}
                    {{Form::bsText('name', $listing->name, ['placeholder'=> 'Business Name'])}}
                    {{Form::bsText('CAC', $listing->CAC, ['placeholder'=> 'Business CAC number_format'])}}
                    {{Form::bsText('email', $listing->email, ['placeholder'=> 'Business Email'])}}
                    {{Form::bsText('website', $listing->website, ['placeholder'=> 'Company website'])}}
                    {{Form::bsText('address', $listing->address, ['placeholder'=> 'Address'])}}
                    {{Form::bsText('phone', $listing->phone, ['placeholder'=> 'Business phone No'])}}
                    {{Form::bsTextArea('bio', $listing->bio, ['placeholder'=> 'Business Brief Story'])}}
                    {{Form::hidden('_method' 'PUT')}}
                    {{Form::bsSubmit('submit')}}
                  {!!Form::close()!!}

                </div>
            </div>
        </div>
    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection