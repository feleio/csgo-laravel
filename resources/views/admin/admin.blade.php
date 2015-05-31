@extends('app')


@section('nav_left')
                <li class="dropdown active">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">@yield('title')<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="{{url('back/groups')}}">Groups</a></li>
                    <li><a href="{{url('back/weapons')}}">Weapons</a></li>
                    <li><a href="{{url('back/notifications')}}">Notifications</a></li>
<!--                     <li class="divider"></li>
                    <li><a href="{{URL::to('back/tagreview')}}">other</a></li> -->
                  </ul>
                </li>
@endsection

@section('nav_right')
				<li class="dropdown active">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{Auth::user()->name}}<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="{{url('/auth/logout')}}">Logout</a></li>
                  </ul>
                </li>
                <li><a href="javascript:window.location.reload();"><i class="fa fa-repeat fa-lg"></i> Reload</a></li>
@endsection

