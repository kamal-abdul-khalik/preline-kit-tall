<?php

use App\Livewire\Actions\Logout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\{Layout, Title};
use Livewire\Volt\Component;

new #[Layout('components.layouts.guest')] class extends Component {
    /**
     * Send an email verification notification to the user.
     */
    #[Title('Register')]
    public function sendVerification(): void
    {
        if (Auth::user()->hasVerifiedEmail()) {
            $this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);

            return;
        }

        Auth::user()->sendEmailVerificationNotification();

        Session::flash('status', 'verification-link-sent');
    }

    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}; ?>

<div class="p-6 space-y-4 md:space-y-6 sm:p-8">
    <h1 class="text-xl font-bold leading-tight tracking-tight text-dark-900 md:text-2xl dark:text-white">
        Verify your email
    </h1>
    <div class="mb-4 text-sm text-dark-600 dark:text-dark-400">
        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 text-sm font-medium text-green-600 dark:text-green-400">
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </div>
    @endif

    <div class="flex items-center justify-between mt-4">
        <x-button wire:click="sendVerification">
            {{ __('Resend Verification Email') }}
        </x-button>

        <button wire:click="logout" type="submit"
            class="text-sm text-dark-600 underline rounded-md dark:text-dark-400 hover:text-dark-900 dark:hover:text-dark-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 dark:focus:ring-offset-dark-800">
            {{ __('Log Out') }}
        </button>
    </div>
</div>
