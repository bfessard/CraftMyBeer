@extends('layouts.app')
@section('content')
    <div class="container py-5">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{$marchandise -> name}}</h5>
                <p class="card-text">quantité : {{$marchandise -> quantity}} Kg</p>
            </div>
        </div>
    </div>






@endsection