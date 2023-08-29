<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Hesabı Sil') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Hesabınız bir kere silindiğinde, bütün veriler ve kaynaklar silinecektir. Hesabınızı silmeden önce, lütfen saklamak istediğiniz tüm verileri veya bilgileri indirin.') }}
        </p>
    </header>

    <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
    >{{ __('Hesabı Sil') }}</x-danger-button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900">
                {{ __('Hesabı silmek istediğinize emin misiniz?') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                {{ __('Hesabınız bir kere silindiğinde, bütün veriler ve kaynaklar silinecektir. Lütfen hesabınızı kalıcı olarak silmeye devam etmek için hesap şifrenizi giriniz.') }}
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="{{ __('Şifreniz') }}" class="sr-only" />

                <x-text-input
                    id="password_for_delete"
                    name="password_for_delete"
                    type="password"
                    class="mt-1 block w-3/4"
                    placeholder="{{ __('Şifreniz') }}"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('İptal') }}
                </x-secondary-button>

                <x-danger-button class="ml-3">
                    {{ __('Hesabı Sil') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>
