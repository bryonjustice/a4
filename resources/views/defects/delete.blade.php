@extends('layouts.master')

@section('title')
    Confirming Deletion
@endsection

@section('content')

    <div class="uk-card uk-card-default">
    <h1>Confirm deletion</h1>
    <form method='POST' action='/defects/delete'>
    {{ csrf_field() }}

        <input type='hidden' name='id' value='{{ $defect->id }}'?>
        <h3 class="uk-card-title">
            Are you sure you want to delete {{ $defect->id }}?
        </h3>

        <button class="uk-button uk-button-default">Yes, delete</button>
    </form>
    </div>

@endsection
