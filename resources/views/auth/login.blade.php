@extends('reservations.layouts')

<!-- Session Status -->
<x-auth-session-status class="mb-4" :status="session('status')" />
<link rel="stylesheet" href="{{ asset('css/login.css') }}">

<div class="grid">
    <div class="register">
        <h2>Sign In</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form__field">
                <input id="email" type="email" name="email" :value="old('email')" placeholder="Email" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500" />
            </div>
            <div class="form__field">
                <input id="password" type="password" name="password" placeholder="Password" required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500" />
            </div>
            <div class="form__field">
                <input id="remember_me" type="checkbox" name="remember">
                <label for="remember_me">{{ __('Remember me') }}</label>
            </div>
            <div class="form__field">
                <input type="submit" value="{{ __('Log in') }}">
            </div>
            @if (Route::has('password.request'))
            <div class="form__field">
                <a class="link-styled" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            </div>
            @endif
        </form>
        @if (Route::has('register'))
        <div class="form__field">
            <a class="link-styled" href="{{ route('register') }}">
                {{ __('Register') }}
            </a>
        </div>
        @endif
    </div>
</div>