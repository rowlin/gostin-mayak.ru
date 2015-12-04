<nav class="navbar navbar-default" style="margin-bottom: 0px;">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">{{ trans('nomer.home') }}</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav" >
                <li>
                    <a href='http://new/#nomer' id="top-nav">{{ trans('nomer.nomer') }}</a>
                </li>
                <li>
                    <a href="{{ url('/feed/') }}"></a>
                </li>
                <li>
                    <a href="{{ url('/contakt') }}">{{ trans('nomer.contakt') }} </a>
                </li>
            </ul>


            <ul class="nav navbar-nav navbar-right">

               <li>
                    <a href="#">{{ trans('nomer.login')}}</a>
                </li>
                @if (Auth::check() == true)
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-cog"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href=" route('dashboard.home') }}">Dashboard <span class="glyphicon glyphicon-stats pull-right"></span></a></li>
                                <li><a href=" route('logout') }}">{{ trans('nomer.logout')}} <span class="glyphicon glyphicon-log-out pull-right"></span></a></li>
                            </ul>
                        </li>
                    </ul>
                @endif
            <li><a href="http://new/setlocale/en ">Eng</a></li>
                <li><a href="http://new/setlocale/ru ">RU</a></li>
            </ul>
        </div>
    </div>
</nav>