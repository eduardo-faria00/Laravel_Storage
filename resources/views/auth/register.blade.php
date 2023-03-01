@extends('layouts.main')

@section('title', 'Laravel\'Storage')

@section('content')

    <x-guest-layout>
        <x-authentication-card>
            <x-slot name="logo">
                <h1
                    class="bg-clip-text text-transparent bg-gradient-to-l bg-violet-400 from-violet-500 font-bold text-4xl mt-3">
                    Crie uma conta</h1>
            </x-slot>

            <x-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div>
                    <x-label for="name" value="{{ __('Nome') }}" />
                    <x-input placeholder='digite seu nome...' id="name" class="block mt-1 w-full" type="text"
                        name="name" :value="old('name')" required autofocus autocomplete="name" />
                </div>

                <div class="mt-4">
                    <x-label for="email" value="{{ __('Email') }}" />
                    <x-input placeholder='digite seu email...' id="email" class="block mt-1 w-full" type="email"
                        name="email" :value="old('email')" required autocomplete="username" />
                </div>

                <div class="mt-4">
                    <x-label for="password" value="{{ __('Senha') }}" />
                    <x-input placeholder='digite sua senha...' id="password" class="block mt-1 w-full" type="password"
                        name="password" required autocomplete="new-password" />
                </div>

                <div class="mt-4">
                    <x-label for="password_confirmation" value="{{ __('Confirmar Senha') }}" />
                    <x-input placeholder='digite novamente sua senha...' id="password_confirmation"
                        class="block mt-1 w-full" type="password" name="password_confirmation" required
                        autocomplete="new-password" />
                </div>

                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="mt-4">
                        <x-label for="terms">
                            <div class="flex items-center">
                                <x-checkbox name="terms" id="terms" required />

                                <div class="ml-2">
                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' =>
                                            '<a target="_blank" href="' .
                                            route('terms.show') .
                                            '" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">' .
                                            __('Terms of Service') .
                                            '</a>',
                                        'privacy_policy' =>
                                            '<a target="_blank" href="' .
                                            route('policy.show') .
                                            '" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">' .
                                            __('Privacy Policy') .
                                            '</a>',
                                    ]) !!}
                                </div>
                            </div>
                        </x-label>
                    </div>
                @endif

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                        href="{{ route('login') }}">
                        {{ __('Já possui uma conta?') }}
                    </a>

                    <x-button class="ml-4">
                        {{ __('Registrar') }}
                    </x-button>
                </div>
            </form>
        </x-authentication-card>
    </x-guest-layout>
@endsection
