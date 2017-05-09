@extends('layouts.master')

@push('scripts')
    <script src="/js/loader.min.js"></script>
    <script src="/js/metrics.js"></script>
@endpush

@section('title')
    Basic Reports :: Defect Metrics
@endsection

@section('content')

    <div class="uk-card uk-card-default uk-text-center
        uk-margin-small-left uk-margin-small-right uk-card-hover" uk-grid>
        <div id="chart_priority" class="uk-width-1-2"></div>
        <div id="chart_state" class="uk-width-1-2"></div>
    </div>

    <div class="uk-card uk-card-default uk-text-center
        uk-margin-small-left uk-margin-small-right uk-card-hover" uk-grid>
        <div id="chart_submitter" class="uk-width-1-1"></div>
    </div>

@endsection
