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
                <h1><span class="logo">
                    D</span><span class="super">WA</span>efect backlog
                </h1>
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
                        @yield('title')
                    </h3>
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
                                uk-icon="icon: check; ratio: 3.5"></span>
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
