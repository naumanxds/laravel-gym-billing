@extends('auth.register-base')

@section('user_type')
    <input type="hidden" name="user_type" value="{{ constant('App\Models\User::ROLE_ADMIN') }}" />
@stop

@section('password_field')
    <!-- Password -->
    <div class="mt-4">
        <x-label for="password" :value="__('Password')" />

        <x-input id="password" class="block mt-1 w-full"
                        type="password"
                        name="password"
                        required autocomplete="new-password" />
    </div>

    <!-- Confirm Password -->
    <div class="mt-4">
        <x-label for="password_confirmation" :value="__('Confirm Password')" />

        <x-input id="password_confirmation" class="block mt-1 w-full"
                        type="password"
                        name="password_confirmation" required />
    </div>
@stop
