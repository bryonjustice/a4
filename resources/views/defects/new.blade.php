@extends('layouts.master')

@section('title')
    Create a New Defect Record
@endsection

@section('content')
    <!-- content: form -->
    <form method='POST' action='/defects/create'>
    {{ csrf_field() }}
    <fieldset class="uk-fieldset">
        <legend class="uk-legend">SUMMARY</legend>
        <span>* Required fields</span>
        <div class="uk-width-1-1">
            <label for="title">TITLE<span>*</span></label>
            <input class="uk-input uk-card-hover" type="text"
                placeholder=
                "Enter a brief title that best describes the issue."
                name="title" id="title">
        </div>

        <div class="uk-width-1-1">
            <label for="description">DESCRIPTION
                <span>*</span>
            </label>
            <textarea class="uk-textarea uk-card-hover" rows="5"
            placeholder=
            "Enter step-by-step instructions to reproduce the issue."
                name="description" id="description"></textarea>
        </div>

        <div class="uk-grid-small uk-flex" uk-grid >

            <div class="uk-width-1-2">
                <label for="assignment">ASSIGNMENT
                    <span>*</span>
                </label>
                <select class="uk-select uk-card-hover"
                    name="assignment" id="assignment">
                    <option>- Select an assignment -</option>

                    @foreach($assignmentsForDropdown as
                        $assignment_id => $assignment_long_name)
                        <option value="{{ $assignment_id }}">
                           {{ $assignment_long_name }}
                        </option>
                    @endforeach

                </select>
            </div>

            <div class="uk-width-1-2">
                <label for="found_in_version">
                    FOUND IN VERSION<span>*</span></label>
                <input class="uk-input uk-card-hover" type="text"
                    value="17.05.11.00" name="found_in_version"
                    id="found_in_version" disabled >
            </div>
        </div>

        <div class="uk-grid-small uk-flex" uk-grid >
            <div class="uk-width-1-2">
                <label for="submitter">SUBMITTED BY
                    <span>*</span>
                </label>
                <select class="uk-select uk-card-hover"
                    name="submitter" id="submitter">
                    <option value="">
                        - Who reported the issue? -
                    </option>
                    @foreach($submittersForDropdown as
                        $submitter_id => $submitterName)
                        <option value="{{ $submitter_id }}">
                           {{ $submitterName }}
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
                        name="environment"
                        value="{{ $environment_id }}">
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
                <label for="state">STATE
                    <span>*</span>
                </label>
                <select class="uk-select uk-card-hover"
                    name="state" id="state">
                    @foreach($statesForDropdown as
                        $state_id => $state_long_name)
                        <option value="{{ $state_id }}">
                           {{ $state_long_name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="uk-width-1-2">
                <label for="priority">PRIORITY
                    <span>*</span>
                </label>
                <select class="uk-select uk-card-hover"
                    name="priority" id="priority">
                    <option value="">- select a priority -</option>
                    @foreach($prioritiesForDropdown as
                        $priority_id => $priority_long_name)
                        <option value="{{ $priority_id }}">
                           {{ $priority_long_name }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="uk-grid-small uk-flex" uk-grid >
            <div class="uk-width-1-2">
                <label for="component">COMPONENT
                    <span>*</span>
                </label>
                <select class="uk-select uk-card-hover"
                    name="component" id="component">
                    <option value="">- select a component -</option>
                    @foreach($componentsForDropdown as
                        $component_id => $component_long_name)
                        <option value="{{ $component_id }}">
                           {{ $component_long_name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="uk-width-1-2">
                <label for="cause">CAUSE
                    <span>*</span>
                </label>
                <select class="uk-select uk-card-hover"
                    name="cause" id="cause">
                    <option value="">- select a cause -</option>
                    @foreach($causesForDropdown as
                        $cause_id => $cause_long_name)
                        <option value="{{ $cause_id }}">
                           {{ $cause_long_name }}
                        </option>
                    @endforeach
                </select>
            </div>
      </div>
      <div class="uk-width-1-1">
          <label for="note">NOTE</label>
          <textarea class="uk-textarea uk-card-hover" rows="5"
          name="note" id="note" disabled>
          Creating a defect
          </textarea>
      </div>

      <br>
      <div>
          <button class="uk-button uk-button-primary">Submit</button>
          <br><br><br>
      </div>
    </fieldset>
    </form>
@endsection