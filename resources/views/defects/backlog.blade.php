<!DOCTYPE html>
<html>
    <head>
        <title></title>
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
                <br />
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
                            name="title">
                    </div>

                    <div class="uk-width-1-1">
                        <label for="description">DESCRIPTION
                            <span>*</span>
                        </label>
                        <textarea class="uk-textarea uk-card-hover" rows="5"
                        placeholder=
                        "Enter step-by-step instructions to reproduce the issue."
                            name="description"></textarea>
                    </div>

                    <div class="uk-grid-small uk-flex" uk-grid >

                        <div class="uk-width-1-2">
                            <label for="assignment">ASSIGNMENT
                                <span>*</span>
                            </label>
                            <select class="uk-select uk-card-hover"
                                name="assignment">
                                <option>- Select an assignment -</option>
                                <option value="a1">A1: System Setup</option>
                                <option value="a2">A2: PHP</option>
                                <option value="a3">
                                    A3: Framework (Laravel)</option>
                                <option value="a4">
                                    A4: Framework + Database</option>
                            </select>
                        </div>

                        <div class="uk-width-1-2">
                            <label for="found_in_version">
                                FOUND IN VERSION<span>*</span></label>
                            <span class="uk-form-icon uk-form-icon-flip"
                                uk-icon="icon: lock"></span>
                            <input class="uk-input uk-card-hover" type="text"
                                value="17.05.11.00" name="found_in_version"
                                disabled >
                        </div>
                    </div>

                    <div class="uk-grid-small uk-flex" uk-grid >
                        <div class="uk-width-1-2">
                            <label for="submitter">SUBMITTED BY
                                <span>*</span>
                            </label>
                            <select class="uk-select uk-card-hover"
                                name="submitter">
                                <option>- Who reported the issue? -</option>
                                <option value="Bryon Justice">
                                    Bryon Justice</option>
                                <option value="Jenni Whitman">
                                    Jenni Whitman</option>
                                <option value="Guest Peer">
                                    Guest / Peer Review</option>
                                <option value="Susan Buck">
                                    Susan Buck</option>
                            </select>
                        </div>

                        <div class="uk-width-1-2">
                            <label for="environment">ENVIRONMENT
                                <span>*</span>
                            </label><br/ >
                            <input class="uk-radio" type="radio"
                                name="environment" checked><span>Local</span>
                            <input class="uk-radio" type="radio"
                                name="environment"> <span>Production</span>

                        </div>
                    </div>
                </fieldset>
                <br /><br />
                <fieldset class="uk-fieldset">
                    <legend class="uk-legend">
                        INCIDENT MANAGEMENT / REMEDIATION
                    </legend>

                    <div class="uk-grid-small uk-flex" uk-grid >
                        <div class="uk-width-1-2">
                            <label for="state">STATE
                                <span>*</span>
                            </label>
                            <select class="uk-select uk-card-hover" name="state">
                                <option value="submitted" selected>
                                    Submitted</option>
                                <option value="open">Open</option>
                                <option value="fixed">Fixed</option>
                                <option value="closed">Closed</option>
                            </select>
                        </div>

                        <div class="uk-width-1-2">
                            <label for="priority">PRIORITY</label>
                            <select class="uk-select uk-card-hover"
                                name="priority">
                                <option>- select a priority -</option>
                                <option value="1">
                                    critical</option>
                                <option value="2">
                                    important</option>
                                <option value="3">
                                    normal</option>
                                <option value="4">
                                    low</option>
                            </select>
                        </div>
                    </div>

                    <div class="uk-grid-small uk-flex" uk-grid >
                        <div class="uk-width-1-2">
                            <label for="project">Component</label>
                            <select class="uk-select uk-card-hover"
                                name="component">
                                <option value="">- select a component -</option>
                                <option value="presentation">
                                    Client-side (HTML,CSS,JS)</option>
                                <option value="controllers">Controllers</option>
                                <option value="database">Database</option>
                                <option value="forms">Forms</option>
                                <option value="packages">Packages</option>
                                <option value="performance">Performance</option>
                                <option value="routes">Routes</option>
                                <option value="views">Views / Blade</option>
                            </select>
                        </div>

                        <div class="uk-width-1-2">
                            <label for="cause">CAUSE</label>
                            <select class="uk-select uk-card-hover" name="cause">
                                <option>- select a cause -</option>
                                <option value="code">code</option>
                                <option value="configuration">
                                    configuration</option>
                                <option value="database">database</option>
                                <option value="deployment">deployment</option>
                                <option value="environment">environment</option>
                                <option value="requirement">
                                    missed requirement</option>
                                <option value="third party software">
                                    third party software</option>
                                <option value="not a defect">
                                    works as expected</option>
                            </select>
                        </div>
                  </div>
                  <div class="uk-width-1-1">
                      <label for="note">NOTE</label>
                      <textarea class="uk-textarea uk-card-hover" rows="5"
                      name="note" disabled>Creating a defect</textarea>
                  </div>

                  <br/>
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
