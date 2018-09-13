@extends('adminlte::master')

@section('adminlte_css')

    <link rel="stylesheet" href="{{ asset('dashboard/plugins/morris/morris.css') }}">

    <style>
      .skin-blue .main-header .logo {
        background-color: #fff;
      }

      .content-page {
        overflow: initial;
      }
    </style>

    @stack('css')
    @yield('css')
@stop


@section('body')
    <div id="wrapper">

        <div class="topbar">

          <div class="topbar-left">
              <a href="/" class="logo">
                  <span>
                      <img src="{{ asset('dashboard/images/navalha-colorido.png') }}" alt="">
                  </span>
                  <i>
                      <img src="{{ asset('dashboard/images/n-colorido.png') }}" alt="">
                  </i>
              </a>
          </div>

          <nav class="navbar-custom">

              <ul class="list-unstyled topbar-right-menu float-right mb-0">

                  @php

                        $user = \Auth::user();

                  @endphp

                  <li class="dropdown notification-list">
                      <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                         aria-haspopup="false" aria-expanded="false">
                          <img src="{{ route('avatar') }}" alt="user" class="rounded-circle"> <span class="ml-1">{{ $user->name }} <i class="mdi mdi-chevron-down"></i> </span>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right profile-dropdown ">

                          <!-- item-->
                          <a href="javascript:void(0);" class="dropdown-item notify-item">
                              <i class="ti-user"></i> <span>Perfil</span>
                          </a>

                          <!-- item-->
                          <a href="javascript:void(0);" class="dropdown-item notify-item">
                              <i class="ti-settings"></i> <span>Configurações</span>
                          </a>

                          <!-- item-->
                          <a href="{{ route('lockscreen') }}" class="dropdown-item notify-item">
                              <i class="ti-lock"></i> <span>Bloquear Tela</span>
                          </a>

                          <!-- item-->
                          <a href="javascript:void(0);" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item notify-item">
                              <i class="ti-power-off"></i> <span>{{ trans('adminlte::adminlte.log_out') }}</span>
                          </a>

                          <form id="logout-form" action="{{ url(config('adminlte.logout_url', 'auth/logout')) }}" method="POST" style="display: none;">
                              @if(config('adminlte.logout_method'))
                                  {{ method_field(config('adminlte.logout_method')) }}
                              @endif
                              {{ csrf_field() }}
                          </form>

                      </div>
                  </li>

              </ul>

              <ul class="list-inline menu-left mb-0">
                  <li class="float-left">
                      <button class="button-menu-mobile open-left waves-light waves-effect">
                          <i class="mdi mdi-menu"></i>
                      </button>
                  </li>
                  <li class="hide-phone app-search">
                      <form role="search" class="">
                          <input type="text" placeholder="Search..." class="form-control">
                          <a href=""><i class="fa fa-search"></i></a>
                      </form>
                  </li>
              </ul>

          </nav>

      </div>

        <div class="left side-menu">
          <div class="user-details">
              <div class="pull-left">
                  <img src="{{ route('avatar') }}" alt="" class="thumb-md rounded-circle">
              </div>
              <div class="user-info">
                  <a href="#">{{ \Auth::user()->name }}</a>
                  <p class="text-muted m-0">{{ \Auth::user()->roles }}</p>
              </div>
          </div>

          <!--- Sidemenu -->
          <div id="sidebar-menu">
              <!-- Left Menu Start -->
              <ul class="metismenu" id="side-menu">
                  <li class="menu-title">Navegação</li>
                  <li>
                      <a href="{{ route('home') }}">
                          <i class="mdi mdi-view-dashboard"></i><span> Painel Principal </span>
                      </a>
                  </li>

                  <li>
                      <a href="{{ route('banners.index') }}">
                          <i class="ti-pie-chart"></i> <span> Banners </span>
                      </a>
                  </li>


                  <!--

                  <li>
                      <a href="ui-elements.html">
                          <i class="ti-paint-bucket"></i><span class="badge badge-custom pull-right">11</span> <span> UI Elements </span>
                      </a>
                  </li>

                  <li>
                      <a href="javascript: void(0);"><i class="ti-light-bulb"></i> <span> Components </span> <span class="menu-arrow"></span></a>
                      <ul class="nav-second-level" aria-expanded="false">
                          <li><a href="components-range-slider.html">Range Slider</a></li>
                          <li><a href="components-alerts.html">Alerts</a></li>
                          <li><a href="components-icons.html">Icons</a></li>
                          <li><a href="components-widgets.html">Widgets</a></li>
                      </ul>
                  </li>

                  <li>
                      <a href="typography.html">
                          <i class="ti-spray"></i> <span> Typography </span>
                      </a>
                  </li>

                  <li>
                      <a href="javascript: void(0);"><i class="ti-pencil-alt"></i><span> Forms </span> <span class="menu-arrow"></span></a>
                      <ul class="nav-second-level" aria-expanded="false">
                          <li><a href="forms-general.html">General Elements</a></li>
                          <li><a href="forms-advanced.html">Advanced Form</a></li>
                      </ul>
                  </li>

                  <li>
                      <a href="javascript: void(0);"><i class="ti-menu-alt"></i><span> Tables </span> <span class="menu-arrow"></span></a>
                      <ul class="nav-second-level" aria-expanded="false">
                          <li><a href="tables-basic.html">Basic tables</a></li>
                          <li><a href="tables-advanced.html">Advanced tables</a></li>
                      </ul>
                  </li>

                  <li>
                      <a href="charts.html">
                          <i class="ti-pie-chart"></i><span class="badge badge-custom pull-right">5</span> <span> Charts </span>
                      </a>
                  </li>

                  <li>
                      <a href="maps.html">
                          <i class="ti-location-pin"></i> <span> Maps </span>
                      </a>
                  </li>

                  <li>
                      <a href="javascript: void(0);"><i class="ti-files"></i><span> Pages </span> <span class="menu-arrow"></span></a>
                      <ul class="nav-second-level" aria-expanded="false">
                          <li><a href="pages-login.html">Login</a></li>
                          <li><a href="pages-register.html">Register</a></li>
                          <li><a href="pages-forget-password.html">Forget Password</a></li>
                          <li><a href="pages-lock-screen.html">Lock-screen</a></li>
                          <li><a href="pages-blank.html">Blank page</a></li>
                          <li><a href="pages-404.html">Error 404</a></li>
                          <li><a href="pages-confirm-mail.html">Confirm Mail</a></li>
                          <li><a href="pages-session-expired.html">Session Expired</a></li>
                      </ul>
                  </li>

                  <li>
                      <a href="javascript: void(0);"><i class="ti-widget"></i><span> Extra Pages </span> <span class="menu-arrow"></span></a>
                      <ul class="nav-second-level" aria-expanded="false">
                          <li><a href="extras-timeline.html">Timeline</a></li>
                          <li><a href="extras-invoice.html">Invoice</a></li>
                          <li><a href="extras-profile.html">Profile</a></li>
                          <li><a href="extras-calendar.html">Calendar</a></li>
                          <li><a href="extras-faqs.html">FAQs</a></li>
                          <li><a href="extras-pricing.html">Pricing</a></li>
                          <li><a href="extras-contacts.html">Contacts</a></li>
                      </ul>
                  </li>

                  <li>
                      <a href="javascript: void(0);"><i class="ti-share"></i> <span> Multi Level </span> <span class="menu-arrow"></span></a>
                      <ul class="nav-second-level nav" aria-expanded="false">
                          <li><a href="javascript: void(0);">Level 1.1</a></li>
                          <li><a href="javascript: void(0);" aria-expanded="false">Level 1.2 <span class="menu-arrow"></span></a>
                              <ul class="nav-third-level nav" aria-expanded="false">
                                  <li><a href="javascript: void(0);">Level 2.1</a></li>
                                  <li><a href="javascript: void(0);">Level 2.2</a></li>
                              </ul>
                          </li>
                      </ul>
                  </li>

                -->

              </ul>

          </div>
          <div class="clearfix"></div>

      </div>

        <div class="content-page">

            <div class="content">

              <div class="container-fluid">

                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="header-title m-t-0 m-b-20">@yield('title', 'Titulo') </h4>
                    </div>
                </div>

                @include('flash::message')

                @yield('content')

              </div>

              <div class="footer">
                  <div class="pull-right hide-phone">
                      {{ \Auth::user()->name }} <strong class="text-custom"></strong>
                  </div>
                  <div>
                      <strong>{{ config('app.name') }}</strong> - Copyright © {{ now()->format('Y') }}
                  </div>
              </div>

            </div>

        </div>

    </div>
@stop

@section('adminlte_js')
    <script src="{{ asset('vendor/adminlte/dist/js/adminlte.min.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

    <script>

        $('.money').mask('000.000.000.000.000,00', {reverse: true});

        $("input.inteiro").keypress(function(event) {
          return /\d/.test(String.fromCharCode(event.keyCode));
        });

    </script>

    @stack('js')
    @yield('js')
@stop
