@extends('layout')

@section('content')


        <fieldset-builder fieldset-title="{{ $fieldset->title() }}"
                          save-url="{{ route('fieldset.update', $fieldset->name()) }}">
        </fieldset-builder>


@endsection