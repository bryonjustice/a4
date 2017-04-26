<!DOCTYPE html>
<html>
    <head>
        <title>Add a New Record</title>
        <link rel="stylesheet" href="css/uikit.min.css" />
        <link rel="stylesheet" href="css/a4.css" />
        <script src="js/jquery.js"></script>
        <script src="js/uikit.min.js"></script>
        <script src="js/uikit-icons.min.js"></script>
    </head>
    <body>
        <!-- top banner -->
        <div class="uk-flex" uk-grid>
            <div class="uk-width-1-6"></div>
            <div class="uk-width-4-6">
                <h1>defect backlog</h1>
            </div>
            <div class="uk-width-1-6"></div>
        </div>

        <!-- page content -->
        <div class="uk-flex" uk-grid>

            <!-- left gutter -->
            <div class="uk-width-1-6"></div>

            <!-- content: title -->
            <div class="uk-width-4-6">
                <!-- content: title -->
                <div class="opacity80 uk-card uk-card-default uk-card-body
                uk-width-1-1@m uk-card-hover">
                    <div class="uk-card-badge uk-label">Defect</div>
                    <h3 class="uk-card-title">Enter a New Record</h3>
                </div>
                <br>
                <!-- content: form -->
                <form>
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

                                @foreach($assignments as $assignment)
                                    <option value="{{ $assignment->id}}">
                                        {{ $assignment->long_name }}
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
                                @foreach($submitters as $submitter)
                                    <option value="{{ $submitter->id }}">
                                        {{ $submitter->first_name }}
                                        {{ $submitter->last_name }}
                                    </option>
                                @endforeach

                            </select>
                        </div>

                        <div class="uk-width-1-2">
                            <label>ENVIRONMENT
                                <span>*</span>
                            </label><br>

                            @foreach($environments as $environment)
                                <input class="uk-radio" type="radio"
                                    name="environment"
                                    value="{{ $environment->id }}">
                                    <span>{{ $environment->long_name }}</span>
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
                                @foreach($states as $state)
                                    <option value="{{ $state->id }}">
                                        {{ $state->long_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="uk-width-1-2">
                            <label for="priority">PRIORITY</label>
                            <select class="uk-select uk-card-hover"
                                name="priority" id="priority">
                                <option value="">- select a priority -</option>
                                @foreach($priorities as $priority)
                                    <option value="{{ $priority->id }}">
                                        {{ $priority->long_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="uk-grid-small uk-flex" uk-grid >
                        <div class="uk-width-1-2">
                            <label for="component">Component</label>
                            <select class="uk-select uk-card-hover"
                                name="component" id="component">
                                <option value="">- select a component -</option>
                                @foreach($components as $component)
                                    <option value="{{ $component->id }}">
                                        {{ $component->long_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="uk-width-1-2">
                            <label for="cause">CAUSE</label>
                            <select class="uk-select uk-card-hover"
                                name="cause" id="cause">
                                <option value="">- select a cause -</option>
                                @foreach($causes as $cause)
                                    <option value="{{ $cause->id }}">
                                        {{ $cause->long_name }}
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
                  </div>
                </fieldset>
                </form>
            </div>
            <!-- right gutter -->
            <div class="uk-width-1-6"></div>
        </div>
    </body>
</html>
