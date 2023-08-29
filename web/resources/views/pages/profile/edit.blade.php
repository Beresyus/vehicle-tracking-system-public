<x-app-layout>
    <x-slot name="title">Profilim</x-slot>
    <x-slot name="description">Beresyus, beresyus, yusuf, yıldız, Yusuf Yıldız, geliştirici, sistem geliştirici, web geliştirici, araç takip sistemi, ats, vts, vehicle tracking system, profilim, profile</x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profilim') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('pages.profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('pages.profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('pages.profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
