@extends('layouts.app')

@section('content')

@if($errors->any())
<div class="alert alert-danger" role="alert">
    {{$errors->first()}}
  </div>
@endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Kezdőlap') }}</div>

                <div class="card-body">
                    Üdvözöljük, {{ Auth::user()->name ?? 'Vendég' }}!
                </div>
            </div>
        </div>
    </div>
</div>




@endsection
