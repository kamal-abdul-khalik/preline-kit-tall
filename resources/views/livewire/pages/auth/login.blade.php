<?php

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\{Layout, Title};
use Livewire\Volt\Component;

new #[Layout('components.layouts.guest')] class extends Component {
    #[Title('Login ')]
    public LoginForm $form;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        $this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);
    }
}; ?>

<div class="p-6 space-y-4 md:space-y-6 sm:p-8">
    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
        Sign in to your account
    </h1>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form wire:submit="login" novalidate>
        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-input wire:model="form.email" id="email" class="block w-full mt-1" type="email" name="email" required
                autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('form.email')" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-input wire:model="form.password" id="password" class="block w-full mt-1" type="password" name="password"
                required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('form.password')" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">

        </div>

        <div class="flex items-center justify-between mt-4">
            <label for="remember" class="inline-flex items-center">
                <input wire:model="form.remember" id="remember" type="checkbox"
                    class="border-gray-300 rounded shadow-sm text-primary-600 dark:bg-gray-900 dark:border-gray-700 focus:ring-primary-500 dark:focus:ring-primary-600 dark:focus:ring-offset-gray-800"
                    name="remember">
                <span class="text-sm text-gray-600 ms-2 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>

            @if (Route::has('password.request'))
                <a class="text-sm text-primary-600 hover:underline dark:text-primary-500"
                    href="{{ route('password.request') }}" wire:navigate>
                    {{ __('Forgot your password?') }}
                </a>
            @endif

        </div>
        <div class="mt-4 ">
            <x-button class="items-center justify-center w-full font-semibold">
                {{ __('Log in') }}
            </x-button>
        </div>
    </form>
    <p class="text-sm font-light text-gray-500 dark:text-gray-400">
        Don’t have an account yet? <x-link href="/register">Register</x-link>
    </p>
</div>
