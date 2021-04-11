@extends('auth.register-base')

@section('user_type')
    <input type="hidden" name="user_type" value="{{ constant('App\Models\User::ROLE_MEMBER') }}" />
@stop
