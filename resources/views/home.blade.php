@extends('app')
@section('content')
@auth
<p>Welcome <b>{{ Auth::user()->name }}</b></p>
<a class="btn btn-primary" href="{{ route('password') }}">Change Password</a>
<a class="btn btn-success" href="{{ route('tugas') }}">peta desa dakung</a>
<a class="btn btn-danger" href="{{ route('logout') }}">Logout</a>
<a class="btn btn-warning" href="{{ route('login') }}">login</a>
@endauth
@guest
<a class="btn btn-primary" href="{{ route('login') }}">Login</a>
<a class="btn btn-info" href="{{ route('register') }}">Register</a>
@endguest
@endsection