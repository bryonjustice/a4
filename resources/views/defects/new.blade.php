@extends('layouts.master')

@section('title')
    Create a New Defect Record
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
    <form method='POST' action='/defects/create'>
    {{ csrf_field() }}
    <fieldset class="uk-fieldset">
        <legend class="uk-legend">SUMMARY</legend>
        <!-- content: form :: title [input] -->        
        <span>* Required fields</span>
        <div class="uk-width-1-1">
            <label for="title">TITLE<span>*</span></label>
            <input class="uk-input uk-card-hover" type="text"
                placeholder=
                "Enter a brief title that best describes the issue."
                name="title" id="title"
                value="{{ old('title', '') }}">
        </div>
        <!-- content: form :: description [select] -->
        <div class="uk-width-1-1">
            <label for="description">DESCRIPTION
                <span>*</span>
            </label>
            <textarea class="uk-textarea uk-card-hover" rows="5"
            placeholder=
            "Enter step-by-step instructions to reproduce the issue."
                name="description"
                id="description">{{ old('description', '') }}</textarea>
        </div>

        <div class="uk-grid-small uk-flex" uk-grid >
            <!-- content: form :: assignment [select] -->
            <div class="uk-width-1-2">
                <label for="assignment_id">ASSIGNMENT
                    <span>*</span>
                </label>
                <select class="uk-select uk-card-hover"
                    name="assignment_id" id="assignment_id">
                    <option>- Select an assignment -</option>

                    @foreach($assignmentsForDropdown as
                        $assignment_id => $assignment_long_name)
                        <option value="{{ $assignment_id }}"
                        {{ (old('assignment_id') == $assignment_id)
                            ? 'SELECTED' : '' }}>{{ $assignment_long_name }}
                        </option>
                    @endforeach

                </select>
            </div>
            <!-- content: form :: found_in_version [input] -->
            <div class="uk-width-1-2">
                <label for="found_in_version">
                    FOUND IN VERSION<span>*</span></label>
                <input class="uk-input uk-card-hover" type="text"
                    value="{{ old('found_in_version', '17.05.11.00') }}"
                    name="found_in_version" id="found_in_version" >
            </div>
        </div>

        <div class="uk-grid-small uk-flex" uk-grid >
            <!-- content: form :: submitter [select] -->
            <div class="uk-width-1-2">
                <label for="submitter_id">SUBMITTED BY
                    <span>*</span>
                </label>
                <select class="uk-select uk-card-hover"
                    name="submitter_id" id="submitter_id">
                    <option value="">
                        - Who reported the issue? -
                    </option>
                    @foreach($submittersForDropdown as
                        $submitter_id => $submitterName)
                        <option value="{{ $submitter_id }}"
                        {{ (old('submitter_id') == $submitter_id)
                            ? 'SELECTED' : '' }}>{{ $submitterName }}
                        </option>
                    @endforeach

                </select>
            </div>
            <!-- content: form :: environment [radio] -->
            <div class="uk-width-1-2">
                <label>ENVIRONMENT
                    <span>*</span>
                </label><br>

                @foreach($environmentsForRadio as
                    $environment_id => $environment_long_name)
                    <input class="uk-radio" type="radio"
                        name="environment_id"
                        value="{{ $environment_id }}"
                        {{ (old('environment_id') == $environment_id) ?
                        'CHECKED' : '' }}>
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
            <!-- content: form :: state [select] -->
            <div class="uk-width-1-2">
                <label for="state_id">STATE
                    <span>*</span>
                </label>
                <select class="uk-select uk-card-hover"
                    name="state_id" id="state_id">
                    @foreach($statesForDropdown as
                        $state_id => $state_long_name)
                        <option value="{{ $state_id }}"
                        {{ (old('state_id') == $state_id)
                            ? 'SELECTED' : '' }}>
                            {{ $state_long_name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <!-- content: form :: priority [select] -->
            <div class="uk-width-1-2">
                <label for="priority_id">PRIORITY
                    <span>*</span>
                </label>
                <select class="uk-select uk-card-hover"
                    name="priority_id" id="priority_id">
                    <option value="">- select a priority -</option>
                    @foreach($prioritiesForDropdown as
                        $priority_id => $priority_long_name)
                        <option value="{{ $priority_id }}"
                        {{ (old('priority_id') == $priority_id)
                            ? 'SELECTED' : '' }}>
                            {{ $priority_long_name }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="uk-grid-small uk-flex" uk-grid >
            <!-- content: form :: component [select] -->
            <div class="uk-width-1-2">
                <label for="component_id">COMPONENT
                    <span>*</span>
                </label>
                <select class="uk-select uk-card-hover"
                    name="component_id" id="component_id">
                    <option value="">- select a component -</option>
                    @foreach($componentsForDropdown as
                        $component_id => $component_long_name)
                        <option value="{{ $component_id }}"
                        {{ (old('component_id') == $component_id)
                            ? 'SELECTED' : '' }}>
                           {{ $component_long_name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <!-- content: form :: cause [select] -->
            <div class="uk-width-1-2">
                <label for="cause_id">CAUSE
                    <span>*</span>
                </label>
                <select class="uk-select uk-card-hover"
                    name="cause_id" id="cause_id">
                    <option value="">- select a cause -</option>
                    @foreach($causesForDropdown as
                        $cause_id => $cause_long_name)
                        <option value="{{ $cause_id }}"
                        {{ (old('cause_id') == $cause_id)? 'SELECTED' : '' }}>
                            {{ $cause_long_name }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div><br>
        <!-- content: form :: toggle Tags on/off -->
        <label for="cause_id"><span uk-icon="icon: tag"></span>TAGS</label><br>
        <button href="#toggle-animation"
            class="uk-button uk-button-secondary uk-button-small" type="button"
            uk-toggle="target: .toggleTags;
            animation: uk-animation-fade; queued: true; ">
            <span class="toggleTags"
                uk-icon="icon: chevron-down"> SHOW</span>
            <span class="toggleTags"
                uk-icon="icon: chevron-up" hidden> HIDE</span>
        </button><br><br>
        <div class="uk-margin-large-left">

            <div class="toggleTags uk-card uk-card-default
                uk-card-body uk-child-width-expand" uk-grid hidden>
                @foreach($tagsForCheckboxes as $id => $long_name)
                    <div class="uk-width-1-4">
                        <label class="uk-text-small"><input class="uk-checkbox"
                            type="checkbox" value='{{ $id }}' name='tags[]'>
                        {{ $long_name }}</label>
                    </div>
                @endforeach
            </div>
        </div><br>
        <!-- content: form :: note [textarea] -->
        <div class="uk-width-1-1">
            <label for="note">NOTE</label>
            <textarea class="uk-textarea uk-card-hover" rows="5"
            name="note" id="note">{{ old('note', '') }}</textarea>
        </div>
        <!-- content: form :: submit -->
        <br>
        <div>
            <button class="uk-button uk-button-primary">Submit</button>
            <br><br><br>
        </div>
    </fieldset>
    </form>
@endsection
