@extends('layouts.master')

@section('title')
    Confirming Deletion
@endsection

@section('content')

    <div class="uk-card uk-card uk-card-default uk-text-center">
    <a href="/" class="uk-alert-close" uk-close></a>
    <form method='POST' action='/defects/delete'>
    {{ csrf_field() }}

        <input type='hidden' name='id' value='{{ $defect->id }}'?>
        <h3 class="uk-card-title">
            Are you sure you want to delete<br>
            record <span class="uk-text-warning"># {{ $defect->id }} <span>?
        </h3>

        <button class="uk-button uk-button-primary">Yes, delete</button><br><br>
    </form>
    </div>

@endsection
