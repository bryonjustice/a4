<!DOCTYPE html>
<html>
    <head>
        <title>
            @yield('title','defect log')
        </title>
        <link rel="stylesheet" href="/css/uikit.min.css" />
        <link rel="stylesheet" href="/css/a4.css" />
        <script src="/js/jquery-3.2.1.min.js"></script>
        <script src="/js/uikit.min.js"></script>
        <script src="/js/uikit-icons.min.js"></script>
    </head>
    <body>
        <!-- top banner -->
        <div uk-grid>
            <div class="uk-width-1-1 uk-margin-large-left">
                <div class="uk-offcanvas-content">
                    <h1><a href="#menu" uk-icon="icon: menu; ratio: 2"
                    uk-toggle class="logo" title="Menu"></a>
                    <span class="logo">
                        D</span><span class="super">WA</span>efect tracker
                    </h1>

                    <!-- sliding navigation / help -->
                    <div id="menu" uk-offcanvas>
                        <div class="uk-offcanvas-bar">
                            <button class="uk-offcanvas-close" type="button"
                                uk-close></button>
                            <h4>Navigation</h4>
                                <a href="/" class="uk-icon-button"
                                    uk-icon="icon: home"
                                    title="Home / See all the records"></a>
                                <a href="/defects/new" class="uk-icon-button"
                                    uk-icon="icon: plus"
                                    title="Enter a new defect"></a>
                            <h4>Helpful Hints</h4>
                                <h5 class="uk-heading-line">
                                    <span>Create</span></h5>
                                    <p class='uk-text-small'>To create a new
                                    record simply click the
                                    <span uk-icon="icon: plus"></span>
                                    symbol above under NAVIGATION and fill
                                    out the form.</p>

                                <h5 class="uk-heading-line">
                                    <span>Read</span></h5>
                                    <p class='uk-text-small'>To read all of the
                                    defect records navigate HOME
                                    by clicking the <span uk-icon="icon: home">
                                    </span> icon.</p>
                                    <p class='uk-text-small'>To read an individual
                                    record navigate HOME. Find the record you
                                    would like to view and click the
                                    <span uk-icon="icon: search"></span> icon
                                    under the ACTIONS column.</p>

                                <h5 class="uk-heading-line">
                                    <span>Update</span></h5>
                                    <p class='uk-text-small'>Navigate
                                    <span uk-icon="icon: home"></span>.
                                    Updating any record is easy. Find the record
                                    you would like to update and click the
                                    <span uk-icon="icon: file-edit"></span>
                                    icon under the ACTIONS column.</p>

                                <h5 class="uk-heading-line">
                                    <span>Delete</span></h5>
                                    <p class='uk-text-small'>Navigate
                                    <span uk-icon="icon: home"></span>.
                                    Find the record you would like to delete and
                                    click the <span uk-icon="icon: delete"></span>
                                    icon under the ACTIONS column.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <!-- page content -->
        <div class="uk-flex" uk-grid>

            <div class="uk-width-1-1 uk-margin-large-left uk-margin-large-right">
                <!-- content: title -->
                <div class="opacity80 uk-card uk-card-default uk-card-body
                uk-width-1-1@m uk-card-hover">
                    <div class="uk-card-badge uk-label">Defect</div>
                    <h3 class="uk-card-title">
                        @yield('title')</h3>
                </div>
                <br>

                @if(Session::get('message') != null)
                    <!-- content: alert -->
                    <div class="uk-position-top-center uk-alert-success uk-light
                        uk-background-secondary uk-animation-fade" uk-alert>
                        <a class="uk-alert-close" uk-close></a>
                        <dl class="uk-description-list">
                            <dt>Information</dt>
                            <dd><span class="uk-icon-button"
                                uk-icon="icon: info; ratio: 3.5"></span>
                                {{ Session::get('message') }}
                            </dd>
                        </dl>
                    </div>
                @endif

                <!-- content: main -->
                @yield('content')

            </div>

        </div>
    </body>
</html>
