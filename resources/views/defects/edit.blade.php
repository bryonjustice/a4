@extends('layouts.master')

@section('title')
    {{ ($view)?'View this Defect Record':'Edit this Defect Record' }}
@endsection

@if(count($errors) > 0)
    <!-- content: form correction -->
    <div class="uk-alert-danger uk-animation-scale-up" uk-alert>
        <a class="uk-alert-close" uk-close></a>
        <dl class="uk-description-list">
            <dt class="uk-text-danger">
                <span class="uk-icon-button uk-text-danger"
                    uk-icon="icon: warning; ratio: 3.5"></span>
                Oops! Unfortunately, your request could not be processed.
            </dt>
            <dd>Please correct the following and then give it another try:
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}
                @endforeach
                </ul>
            </dd>
        </dl>
    </div>

@endif

@section('content')
    <!-- content: form -->
    <form method='POST' action='/defects/edit'>
    {{ csrf_field() }}
    <input type='hidden' name='id' value='{{$defect->id}}'>
    <fieldset class="uk-fieldset">
        <legend class="uk-legend">SUMMARY</legend>
        <span>* Required fields</span>
        <div class="uk-width-1-1">
            <label for="title">TITLE<span>*</span></label>
            <input class="uk-input uk-card-hover" type="text"
                placeholder=
                "Enter a brief title that best describes the issue."
                name="title" id="title"
                value="{{ old('title', $defect->title) }}"
                {{ ($view)?'DISABLED':'' }}>
        </div>

        <div class="uk-width-1-1">
            <label for="description">DESCRIPTION
                <span>*</span>
            </label>
            <textarea class="uk-textarea uk-card-hover" rows="5"
            placeholder=
            "Enter step-by-step instructions to reproduce the issue."
                name="description"
                id="description" {{ ($view)?'DISABLED':'' }}
                >{{ old('description',
                $defect->description) }}</textarea>
        </div>

        <div class="uk-grid-small uk-flex" uk-grid >

            <div class="uk-width-1-2">
                <label for="assignment_id">ASSIGNMENT
                    <span>*</span>
                </label>
                <select class="uk-select uk-card-hover"
                    name="assignment_id" id="assignment_id"
                    {{ ($view)?'DISABLED':'' }}>
                    <option>- Select an assignment -</option>

                    @foreach($assignmentsForDropdown as
                        $assignment_id => $assignment_long_name)
                        <option value="{{ $assignment_id }}"
                        {{ (old('assignment_id') == $assignment_id ||
                        $defect->assignment_id == $assignment_id)
                            ? 'SELECTED' : '' }}>{{ $assignment_long_name }}
                        </option>
                    @endforeach

                </select>
            </div>

            <div class="uk-width-1-2">
                <label for="found_in_version">
                    FOUND IN VERSION<span>*</span></label>
                <input class="uk-input uk-card-hover" type="text"
                    value="{{ old('found_in_version',
                    $defect->found_in_version) }}"
                    name="found_in_version" id="found_in_version"
                    {{ ($view)?'DISABLED':'' }}>
            </div>
        </div>

        <div class="uk-grid-small uk-flex" uk-grid >
            <div class="uk-width-1-2">
                <label for="submitter_id">SUBMITTED BY
                    <span>*</span>
                </label>
                <select class="uk-select uk-card-hover"
                    name="submitter_id" id="submitter_id"
                    {{ ($view)?'DISABLED':'edit' }}>
                    <option value="">
                        - Who reported the issue? -
                    </option>
                    @foreach($submittersForDropdown as
                        $submitter_id => $submitterName)
                        <option value="{{ $submitter_id }}"
                        {{ (old('submitter_id') == $submitter_id ||
                        $defect->submitter_id == $submitter_id)
                            ? 'SELECTED' : '' }}>{{ $submitterName }}
                        </option>
                    @endforeach

                </select>
            </div>

            <div class="uk-width-1-2">
                <label>ENVIRONMENT
                    <span>*</span>
                </label><br>

                @foreach($environmentsForRadio as
                    $environment_id => $environment_long_name)
                    <input class="uk-radio" type="radio"
                        name="environment_id"
                        value="{{ $environment_id }}"
                        {{ (old('environment_id') == $environment_id ||
                        $defect->environment_id == $environment_id) ?
                        'CHECKED' : '' }}
                        {{ ($view)?'DISABLED':'edit' }}>
                        <span>{{ $environment_long_name }}</span>
                        <br>
                @endforeach

            </div>
        </div>
    </fieldset>
    <br><br>
    <fieldset class="uk-fieldset">
        <legend class="uk-legend">
            INCIDENT MANAGEMENT / REMEDIATION
        </legend>

        <div class="uk-grid-small uk-flex" uk-grid >
            <div class="uk-width-1-2">
                <label for="state_id">STATE
                    <span>*</span>
                </label>
                <select class="uk-select uk-card-hover"
                    name="state_id" id="state_id"
                    {{ ($view)?'DISABLED':'' }}>
                    @foreach($statesForDropdown as
                        $state_id => $state_long_name)
                        <option value="{{ $state_id }}"
                        {{ (old('state_id') == $state_id ||
                        $defect->state_id == $state_id)
                            ? 'SELECTED' : '' }}>
                            {{ $state_long_name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="uk-width-1-2">
                <label for="priority_id">PRIORITY
                    <span>*</span>
                </label>
                <select class="uk-select uk-card-hover"
                    name="priority_id" id="priority_id"
                    {{ ($view)?'DISABLED':'' }}>
                    <option value="">- select a priority -</option>
                    @foreach($prioritiesForDropdown as
                        $priority_id => $priority_long_name)
                        <option value="{{ $priority_id }}"
                        {{ (old('priority_id') == $priority_id ||
                        $defect->priority_id == $priority_id)
                            ? 'SELECTED' : '' }}>
                            {{ $priority_long_name }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="uk-grid-small uk-flex" uk-grid >
            <div class="uk-width-1-2">
                <label for="component_id">COMPONENT
                    <span>*</span>
                </label>
                <select class="uk-select uk-card-hover"
                    name="component_id" id="component_id"
                    {{ ($view)?'DISABLED':'' }}>
                    <option value="">- select a component -</option>
                    @foreach($componentsForDropdown as
                        $component_id => $component_long_name)
                        <option value="{{ $component_id }}"
                        {{ (old('component_id') == $component_id ||
                        $defect->component_id == $component_id)
                            ? 'SELECTED' : '' }}>
                           {{ $component_long_name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="uk-width-1-2">
                <label for="cause_id">CAUSE
                    <span>*</span>
                </label>
                <select class="uk-select uk-card-hover"
                    name="cause_id" id="cause_id"
                    {{ ($view)?'DISABLED':'' }}>
                    <option value="">- select a cause -</option>
                    @foreach($causesForDropdown as
                        $cause_id => $cause_long_name)
                        <option value="{{ $cause_id }}"
                        {{ (old('cause_id') == $cause_id ||
                        $defect->cause_id == $cause_id)? 'SELECTED' : '' }}>
                            {{ $cause_long_name }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
    @if(!$view)
        <div class="uk-width-1-1">
            <label for="note">NOTE</label>
            <textarea class="uk-textarea uk-card-hover" rows="5"
            name="note" id="note">{{ old('note', '') }}</textarea>
        </div><br>
        <div>
            <button class="uk-button uk-button-primary">Submit</button>
            <br><br>
        </div>
    @endif
        <br>
        <span class="uk-margin-small-right" uk-icon="icon: history;">
        </span>HISTORY
        <div class="uk-card uk-card-secondary uk-card-body uk-width-1-1@m
        uk-card-hover text-small">
            @foreach($notesForHistory as $note_id => $post)
            <h5 class="uk-heading-line">
                <span uk-icon="icon: quote-right;"></span> Note </h5>
            <span uk-icon="icon: triangle-right;"></span>
                {{ $post }}<br>
            @endforeach
        </div>
        <br>
      </fieldset>
    </form>

@endsection
