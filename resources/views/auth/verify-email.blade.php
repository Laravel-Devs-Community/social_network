<x-main-layout>
    <x-authentication-card>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Before continuing, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('A new verification link has been sent to the email address you provided in your profile settings.') }}
            </div>
        @endif

        <div class="mt-4 flex  justify-between align-top">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf
                <x-button type="submit">
                    {{ __('Resend Verification Email') }}
                </x-button>
            </form>

            <a href="{{ route('profile.show') }}" class="ml-2 text-sm">
                <x-button>
                    {{ __('Edit Profile') }}
                </x-button>
            </a>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <x-button type="submit" class="ml-2 text-sm">
                    {{ __('Log Out') }}
                </x-button>
            </form>
        </div>
    </x-authentication-card>
</x-main-layout>
