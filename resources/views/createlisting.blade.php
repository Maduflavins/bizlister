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
                <div class="card-header">Create Business Listing<a href="/dashboard" class="float-right btn btn-default btn-sm">Go back</a></div>

                <div class="card-body">
                  {!!Form::open(['action' => 'ListingsController@store','method' => 'POST'])!!}
                    {{Form::bsText('name', '', ['placeholder'=> 'Business Name'])}}
                    {{Form::bsText('CAC', '', ['placeholder'=> 'Business CAC number_format'])}}
                    {{Form::bsText('email', '', ['placeholder'=> 'Business Email'])}}
                    {{Form::bsText('website', '', ['placeholder'=> 'Company website'])}}
                    {{Form::bsText('address', '', ['placeholder'=> 'Company address'])}}
                    {{Form::bsText('phone', '', ['placeholder'=> 'Business phone No'])}}
                    {{Form::bsTextArea('bio', '', ['placeholder'=> 'Business Brief Story'])}}
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