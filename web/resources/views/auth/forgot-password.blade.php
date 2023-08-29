<x-guest-layout>
    <x-slot name="title">Şifremi Unuttum</x-slot>
    <x-slot name="description">Beresyus, beresyus, yusuf, yıldız, Yusuf Yıldız, geliştirici, sistem geliştirici, web geliştirici, araç takip sistemi, ats, vts, vehicle tracking system, ats şifremi unuttum sayfası, şifremi unuttum sayfası, vts forgot password page, forgot password page</x-slot>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Parolanızı mı unuttunuz? Sorun değil. Sadece e-posta adresinizi bize bildirin ve size yeni bir tane seçmenize izin verecek bir şifre sıfırlama bağlantısını e-posta ile gönderelim.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Şifre Sıfırlama Bağlantısını Maille') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
