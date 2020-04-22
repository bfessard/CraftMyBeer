<?php

switch($course_id){
    case'malt':
        $test = array('Grain','Extrait en poudre','Extrait liquide');
        $poids = 'kg';
        $scale ='EBC';
        break;
    case'houblon':
        $test = array();
        $poids = 'g';
        $scale ='% acide alpha';
        break;
}


?>
@extends('layouts.form')

@section('card')

    @component('components.card')

        @slot('title')
            @lang('Ajouter un '.$course_id)
        @endslot

        <form method="POST" action="{{ route('marchandise.store') }}" enctype="multipart/form-data">
            {{ csrf_field() }}

            @include('partials.form-group', [
    'title'=>__(''),
    'type'=>'hidden',
    'name'=>'type',
    'value'=>$course_id,
    'required'=>true,
])

            @include('partials.form-group', [
    'title'=>__('Nom'),
    'type'=>'texte',
    'name'=>'name',
    'placeholder'=>'Nom',
    'required'=>true,
])
            @include('partials.form-group', [
'title'=>__('Quantité'),
'type'=>'texte',
'name'=>'quantity',

'required'=>true,
])
            @include('partials.form-group', [
'title'=>__('Malterie'),
'type'=>'texte',
'name'=>'place',
'required'=>true,
])

            @include('partials.form-list', [
'title'=>__('Type'),
'type'=>'texte',
'name'=>'form',
'option'=>$test,
'required'=>true,
])
            @include('partials.form-group', [
'title'=>__(''),
'type'=>'texte',
'name'=>'property',
'required'=>true,
])

            @include('partials.form-group', [
'title'=>__('Note'),
'type'=>'textarea',
'name'=>'note',
'required'=>false,
])


            @component('components.button')
                @lang('Envoyer')
            @endcomponent

        </form>

    @endcomponent

@endsection

@section('script')


@endsection