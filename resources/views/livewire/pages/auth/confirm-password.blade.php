<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\{Layout, Title};
use Livewire\Volt\Component;

new #[Layout('components.layouts.guest')] class extends Component {
    #[Title('Consfirm Password')]
    public string $password = '';

    /**
     * Confirm the current user's password.
     */
    public function confirmPassword(): void
    {
        $this->validate([
            'password' => ['required', 'string'],
        ]);

        if (
            !Auth::guard('web')->validate([
                'email' => Auth::user()->email,
                'password' => $this->password,
            ])
        ) {
            throw ValidationException::withMessages([
                'password' => __('auth.password'),
            ]);
        }

        session(['auth.password_confirmed_at' => time()]);

        $this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);
    }
}; ?>

<div class="p-6 space-y-4 md:space-y-6 sm:p-8">
    <h1 class="text-xl font-bold leading-tight tracking-tight text-dark-900 md:text-2xl dark:text-white">
        Confirm Password
    </h1>

    <div class="mb-4 text-sm text-dark-600 dark:text-dark-400">
        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
    </div>

    <form wire:submit="confirmPassword">
        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Password')" />

            <x-input wire:model="password" id="password" class="block w-full mt-1" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="flex justify-end mt-4">
            <x-button>
                {{ __('Confirm') }}
            </x-button>
        </div>
    </form>
</div>
