<!-- Takvim Modal -->
<div x-show="isModalOpen" @click.away="closeModal" class="fixed inset-0 z-10 flex items-center justify-center">
    <div class="bg-white w-4/5 p-6 rounded shadow-lg">
        <h2 class="text-xl font-semibold mb-4">Yıllık Takvim</h2>
        <div class="grid grid-cols-4 gap-2">
            <!-- Yıllık Takvim Günleri Buraya Eklenecek -->
            <!-- Bu örnekte sadece statik içerik ekliyorum -->
            @foreach (
                [
                    'Ocak' => range(1, 31),
                    'Şubat' => range(1, 28),
                    'Mart' => range(1, 31),
                    'Nisan' => range(1, 30),
                    'Mayıs' => range(1, 31),
                    'Haziran' => range(1, 30),
                    'Temmuz' => range(1, 31),
                    'Ağustos' => range(1, 31),
                    'Eylül' => range(1, 30),
                    'Ekim' => range(1, 31),
                    'Kasım' => range(1, 30),
                    'Aralık' => range(1, 31)
                ] as $monthName => $days
            )
                <div class="border p-2">
                    <h3 class="font-semibold mb-2">{{ $monthName }}</h3>
                    @foreach ($days as $day)
                        <div class="text-center p-2 border">{{ $day }}</div>
                    @endforeach
                </div>
            @endforeach
            <!-- Günler Burada Bitiyor -->
        </div>
        <div class="mt-4 text-right">
            <button @click="closeModal" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold px-4 py-2 rounded">Kapat</button>
        </div>
    </div>
</div>
