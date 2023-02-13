@extends('layouts.template')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Plan Details</h2>
            </div>
        </div>
    </div>
   
    
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Plan Name:</strong>
                {{ $plan->title }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Start Date:</strong>
                {{ $plan->start }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>End Date:</strong>
                {{ $plan->end }}
            </div>
        </div>
        
        
    
        <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('plan.index') }}"> Back</a>
        </div>
    </div>
@endsection