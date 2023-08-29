<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Beresyus, Yusuf Sami YILDIZ, Yusuf YILDIZ">
        <meta name="description" content="Araç Takip Sistemi">
        <meta name="keywords" content="Beresyus, beresyus, yusuf, yıldız, Yusuf Yıldız, geliştirici, sistem geliştirici, web geliştirici, araç takip sistemi, ats, vts, vehicle tracking system, ana sayfa, main page">

        <title>Araç Takip Sistemi</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased">
        <div class="relative min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">

            <!-- NavBar -->
            <div class="max-w-7xl mx-auto py-6 lg:py-8 flex justify-between">
                <a href="/">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 824 654" version="1.1" class="h-20 w-auto bg-gray-100 dark:bg-gray-900">
                        <path stroke="none" fill="#ffffff" fill-rule="evenodd" d="M 435 39.674 C 432.957 40.606, 368.863 50.921, 281 64.460 L 130.500 87.649 163 88.323 C 180.875 88.694, 213.864 88.997, 236.309 88.998 C 260.118 88.999, 276.887 89.373, 276.564 89.896 C 276.259 90.390, 272.970 91.309, 269.255 91.939 C 241.301 96.681, 104.084 123.582, 103.166 124.500 C 102.892 124.775, 102.854 125.146, 103.083 125.323 C 103.943 125.991, 144.722 124.249, 228 119.988 C 277.318 117.465, 290.739 116.918, 289.500 117.481 C 288.950 117.731, 273.425 120.627, 255 123.915 C 147.586 143.086, 118.282 148.374, 107.500 150.533 L 95.500 152.935 107.500 152.459 C 118.786 152.011, 212.349 147.013, 276.331 143.440 C 292.189 142.554, 305.345 142.012, 305.568 142.235 C 305.791 142.458, 267.842 149.050, 221.237 156.883 C 92.174 178.578, 85.200 179.796, 89.519 179.902 C 93.882 180.008, 296.843 172.423, 311.359 171.611 C 316.231 171.339, 319.993 171.340, 319.718 171.615 C 319.221 172.113, 302.931 174.714, 151.500 198.477 C 107.500 205.382, 70.825 211.229, 70 211.471 C 67.350 212.248, 99.502 210.921, 190.500 206.496 C 207.550 205.666, 230.950 204.529, 242.500 203.969 C 254.050 203.408, 271.825 202.514, 282 201.981 C 292.175 201.449, 305.450 200.777, 311.500 200.487 C 317.550 200.198, 325.875 199.740, 330 199.470 C 338.979 198.881, 336.684 200.372, 327 201.418 C 320.403 202.131, 232.205 214.631, 182 221.969 C 166.875 224.180, 137.400 228.472, 116.500 231.507 C 95.600 234.542, 71.750 238.125, 63.500 239.468 C 49.571 241.735, 49.107 241.877, 57 241.458 C 61.675 241.210, 78.550 240.548, 94.500 239.988 C 134.818 238.572, 272.974 233.300, 317.037 231.496 C 352.856 230.029, 361.007 229.853, 358 230.609 C 357.175 230.817, 322.975 234.600, 282 239.016 C 241.025 243.432, 188.825 249.062, 166 251.528 C 143.175 253.993, 113.700 257.174, 100.500 258.598 C 82.984 260.488, 75.149 261.752, 71.500 263.277 C 55.417 269.998, 45.030 283.319, 45.010 297.250 L 45 304 88.067 304 C 128.619 304, 131.104 304.102, 130.605 305.750 C 127.831 314.902, 127.319 326.261, 129.330 334 C 130.231 337.465, 131.017 338.573, 132.750 338.820 C 134.791 339.109, 135 338.730, 135 334.730 C 135 328.481, 138.318 316.295, 142.010 308.980 C 145.716 301.638, 152.699 293.847, 158.751 290.300 C 164.635 286.852, 174.202 283.998, 179.839 284.009 L 184.500 284.019 176.358 287.993 C 149.586 301.058, 143.802 336.199, 165.082 356.497 C 186.985 377.389, 220.778 371.251, 233.891 344 C 237.306 336.904, 237.498 335.962, 237.472 326.500 C 237.448 318.031, 237.045 315.543, 234.838 310.250 L 232.232 304 245.978 304 L 259.724 304 260.818 309.446 C 263.289 321.751, 271.258 331.858, 282.799 337.326 C 288.877 340.205, 290.383 340.498, 299 340.482 C 307.645 340.466, 309.096 340.175, 315.123 337.242 C 326.497 331.707, 333.621 322.908, 336.643 310.663 L 338.287 304 407.217 304 L 476.147 304 481.143 298.533 C 489.477 289.415, 501.771 283.912, 513.460 284.067 L 518.500 284.134 514.286 285.451 C 503.988 288.669, 492.991 298.493, 488.210 308.747 C 485.793 313.931, 485.526 315.637, 485.514 326 C 485.501 336.498, 485.742 338.017, 488.277 343.430 C 498.210 364.639, 521.715 374.282, 543.344 366.019 C 558.294 360.307, 569.767 344.456, 570.195 328.920 L 570.358 323 605.540 323 L 640.721 323 641.305 327.932 C 642.422 337.355, 648.892 346.407, 658.196 351.562 C 663.073 354.263, 664.306 354.500, 673.500 354.500 C 682.694 354.500, 683.927 354.263, 688.804 351.562 C 697.901 346.522, 704.538 337.390, 705.869 328.080 L 706.524 323.500 740.762 323.237 L 775 322.974 775 312.955 C 775 306.447, 774.490 301.715, 773.544 299.452 C 771.619 294.844, 766.397 290.187, 761.750 288.934 L 758 287.923 757.980 253.211 C 757.959 216.451, 757.301 207.977, 753.820 199.668 C 751.720 194.653, 705.622 122.209, 699.837 114.831 C 696.130 110.103, 688.918 105.350, 682.608 103.476 C 679.745 102.626, 669.513 101.576, 658.562 101.010 C 648.078 100.467, 635.788 99.752, 631.250 99.422 L 623 98.820 623 81.378 C 623 68.909, 622.611 63.005, 621.636 60.671 C 619.877 56.462, 614.818 52.228, 610.721 51.535 C 606.774 50.869, 444.920 37.984, 441.177 38.039 C 439.705 38.061, 436.925 38.796, 435 39.674 M 440 52.163 C 440 52.802, 442.753 56.654, 446.119 60.723 C 449.739 65.099, 452.588 69.627, 453.095 71.810 C 454.244 76.755, 454.199 222.437, 453.047 227.404 C 452.392 230.225, 450.319 233.143, 445.571 237.929 C 441.957 241.571, 439 244.876, 439 245.275 C 439 245.674, 447.611 246, 458.135 246 L 477.270 246 476.885 183.250 C 476.435 109.890, 475.962 113.853, 486.411 103.421 C 497.109 92.741, 495.480 92.889, 564.829 96.317 C 589.210 97.523, 609.347 98.319, 609.579 98.088 C 609.810 97.856, 610 90.303, 610 81.302 C 610 69.098, 609.682 64.832, 608.750 64.522 C 607.333 64.051, 446.991 50.983, 442.750 50.993 C 441.238 50.997, 440 51.523, 440 52.163 M 594.198 109.631 C 590.399 111.552, 588 115.551, 588 119.966 C 588 124.033, 604.570 165.151, 608.546 170.950 C 612.884 177.278, 622.153 184.492, 629.399 187.180 C 635.364 189.393, 636.549 189.451, 682.495 189.769 C 708.343 189.947, 730.497 189.841, 731.727 189.532 C 735.028 188.704, 737.505 183.404, 736.067 180.247 C 735.447 178.886, 725.725 164.404, 714.463 148.066 C 697.654 123.681, 693.264 117.954, 689.948 116.091 C 685.672 113.688, 677.133 112.844, 629 110.071 C 618.825 109.485, 607.575 108.770, 604 108.484 C 599.107 108.091, 596.684 108.375, 594.198 109.631 M 507.097 115.082 C 498.747 120.172, 498.005 123.364, 498.281 153 C 498.491 175.495, 498.598 176.672, 500.803 180.517 C 502.070 182.727, 504.735 185.652, 506.725 187.017 C 510.260 189.442, 510.880 189.512, 533.422 190 C 555.511 190.479, 556.663 190.601, 560.308 192.867 C 562.607 194.297, 565.326 197.380, 567.172 200.651 C 571.407 208.154, 573.935 209.261, 585.874 208.840 C 596.660 208.459, 600.545 206.678, 603.691 200.671 C 607.419 193.553, 606.582 191.041, 588.977 156.500 C 580.006 138.900, 571.306 122.752, 569.643 120.616 C 564.153 113.563, 561.762 113.046, 534.500 113.026 C 511.954 113.009, 510.294 113.133, 507.097 115.082 M 554.058 119.374 C 557.115 120.073, 560.096 120.941, 560.682 121.303 C 561.268 121.666, 565.231 127.820, 569.489 134.981 C 573.746 142.141, 577.419 148, 577.649 148 C 578.888 148, 563.666 120.039, 562.208 119.636 C 561.269 119.376, 557.800 118.925, 554.500 118.633 L 548.500 118.102 554.058 119.374 M 706.188 155 C 716.484 173.403, 717.212 175.133, 715.191 176.382 C 714.746 176.657, 703.383 177.603, 689.941 178.485 C 676.498 179.366, 665.050 180.248, 664.500 180.444 C 662.903 181.014, 719.313 180.950, 721.250 180.380 C 722.212 180.097, 723 179.183, 723 178.349 C 723 177.516, 719.104 171.359, 714.342 164.667 C 704.488 150.818, 702.590 148.568, 706.188 155 M 631.153 225.847 C 629.393 227.607, 629 229.181, 629 234.461 C 629 243.003, 630.909 245, 639.078 245 C 643.209 245, 645.428 245.528, 647.139 246.917 C 649.278 248.655, 649.478 249.523, 649.268 256.167 C 648.946 266.307, 648.004 267, 634.544 267 C 625.899 267, 624.053 267.284, 622.655 268.829 C 620.495 271.216, 620.542 276.218, 622.750 278.920 L 624.500 281.061 686.339 280.781 L 748.177 280.500 750.089 278.139 C 754.539 272.642, 750.648 267, 742.408 267 C 739.535 267, 736.509 266.345, 735.223 265.443 C 733.249 264.061, 733 263.013, 733 256.098 C 733 247.209, 734.368 245, 739.874 245 C 745.058 245, 748 241.278, 748 234.720 C 748 230.441, 747.542 228.920, 745.750 227.239 C 743.538 225.165, 742.578 225.118, 688.403 224.412 L 633.305 223.695 631.153 225.847 M 656.667 246.667 C 656.300 247.033, 656 248.383, 656 249.667 L 656 252 690.893 252 C 720.987 252, 725.865 251.794, 726.362 250.500 C 726.678 249.675, 726.678 248.325, 726.362 247.500 C 725.865 246.207, 721.061 246, 691.560 246 C 672.735 246, 657.033 246.300, 656.667 246.667 M 659.190 259.716 C 656.272 260.086, 655.917 260.453, 656.190 262.818 L 656.500 265.500 690.891 265.500 C 722.993 265.500, 725.356 265.380, 726.391 263.691 C 727.275 262.250, 727.121 261.601, 725.632 260.495 C 724.127 259.376, 717.811 259.125, 693.132 259.201 C 676.284 259.253, 661.011 259.485, 659.190 259.716 M 621.427 298.329 C 621.147 299.060, 621.048 303.673, 621.209 308.579 L 621.500 317.500 634.862 317.780 C 643.861 317.968, 648.677 317.683, 649.612 316.907 C 650.545 316.133, 651 313.545, 651 309.012 C 651 303.705, 650.559 301.709, 648.927 299.635 C 646.887 297.040, 646.664 297, 634.396 297 C 624.956 297, 621.814 297.322, 621.427 298.329 M 722.427 298.329 C 722.147 299.060, 722.048 303.673, 722.209 308.579 L 722.500 317.500 737 317.500 L 751.500 317.500 751.792 309.126 C 752.213 297.097, 752.085 297, 735.814 297 C 726.026 297, 722.815 297.319, 722.427 298.329 M 174.500 304.353 C 168.597 307.107, 162.735 313.244, 161.008 318.475 C 157.686 328.541, 162.253 340.789, 171.448 346.474 C 175.781 349.152, 177.223 349.500, 184 349.500 C 190.777 349.500, 192.219 349.152, 196.552 346.474 C 212.837 336.405, 211.140 312.562, 193.556 304.374 C 187.062 301.350, 180.949 301.343, 174.500 304.353 M 508.759 303.362 C 503.216 305.431, 500.295 307.610, 497.035 312.110 C 490.249 321.478, 491.099 333.812, 499.129 342.524 C 504.398 348.240, 509.977 350.362, 518.340 349.829 C 541.455 348.357, 548.562 317.204, 528.468 305.429 C 523.011 302.231, 514.252 301.312, 508.759 303.362 M 180.212 316.185 C 172.716 318.218, 170.814 328.763, 176.954 334.250 C 180.307 337.246, 185 337.975, 185 335.500 C 185 334.675, 184.185 334, 183.189 334 C 181.018 334, 177.393 330.812, 176.553 328.166 C 175.523 324.920, 177.738 321.008, 181.494 319.438 C 187.003 317.136, 186.009 314.613, 180.212 316.185 M 512.326 316.505 C 508.075 318.293, 506 321.669, 506 326.799 C 506 330.279, 506.587 331.741, 508.923 334.077 C 512.166 337.320, 518 338.235, 518 335.500 C 518 334.656, 517.106 334, 515.955 334 C 512.940 334, 509 329.592, 509 326.220"/>
                    </svg>
                </a>

                @if (Route::has('login'))
                    <div class="p-6 text-right z-10">
                        @auth
                            <a href="{{ Auth::user()->isSA ? route('admin.home') : route('company.home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Giriş Yap</a>

                            {{-- @if (Route::has('register')) --}}
                            {{--     <a href="{{ route('register') }}" --}}
                            {{--        class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>--}}
                            {{-- @endif --}}
                        @endauth
                    </div>
                @endif
            </div>

            <div class="max-w-7xl mx-auto py-6 lg:py-8">
                <div class="mt-16">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                        <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="flex" style="justify-content: space-between !important;">
                                    <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                            <path stroke-linecap="round" stroke-linejoin="round" fill-rule="evenodd" clip-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" />
                                        </svg>
                                    </div>

                                    <h2 class="mt-6 text-xs lg:text-xl font-semibold text-gray-900 dark:text-white">Süreç nasıl ilerliyor?</h2>
                                </div>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Gerekli anlaşmalar yapıldıktan sonra ivedi şekilde araç sayısı kadar cihazların siparişini sağlıyorum.
                                    Cihazlarınız elime geldikten sonra, içerisine gerekli yazılımları atmam ile süreç başlıyor.
                                    Bu süreç içerisinde şirkete sık sık git gel yaparak, cihazları araçlara yerleştiriyorum.
                                </p>
                            </div>
                        </div>

                        <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="flex" style="justify-content: space-between !important;">
                                    <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                            <path stroke-linecap="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z"/>
                                        </svg>
                                    </div>

                                    <h2 class="mt-6 text-xs lg:text-xl font-semibold text-gray-900 dark:text-white">Bu sistemi neden tercih edeyim?</h2>
                                </div>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Bu takip sistemini diğerlerinden ayıran şey, canlı konum izleme özelliğinin olmasıdır.
                                    Araba motoru çalıştığı andan itibaren süreç başlar. İster telefondan, ister bilgisayardan;
                                    dilediğiniz yerde araçlarınızı takip edebilirsiniz.
                                </p>
                            </div>
                        </div>

                        <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="flex" style="justify-content: space-between !important;">
                                    <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z"/>
                                        </svg>
                                    </div>

                                    <h2 class="mt-6 text-xs lg:text-xl font-semibold text-gray-900 dark:text-white">Tahsis sözleşmesi kolaylığı nedir?</h2>
                                </div>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Panelde araçlarınızı eklerken, hangi aracın, hangi personeliniz tarafından tahsis edildiğine dair bir formu zorunlu şekilde dolduruyorsunuz.
                                    Bu işlemden sonra, PDF formatında tahsis sözleşmenizi indirebiliyorsunuz.
                                    <br><br>
                                    <b>NOT</b> : Sözleşme sadece hizmeti alan personelin ve hizmeti veren firmanın kolaylığı esas alındığı için vardır. Sözleşme hakkındaki herhangi bir veri,
                                    tüzel kişiliğim veya şahsım tarafından tutulmaz. Sağlıklı olan yöntem, döküman PDF şeklinde oluşturulduktan sonra çıktı alınıp, nüshaların taraflara
                                    dağıtılmasıdır. Tarafımca hiçbir sorumluluk beyan etmediğimi belirtmek isterim.
                                </p>
                            </div>
                        </div>

                        <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="flex" style="justify-content: space-between !important;">
                                    <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64"/>
                                        </svg>
                                    </div>

                                    <h2 class="mt-6 text-xs lg:text-xl font-semibold text-gray-900 dark:text-white">Aracımı nerelerde izleyebilirim?</h2>
                                </div>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Proje iki boyutuyla değerlendirilmelidir. Birinci boyutu lokasyonun alınması, ikinci boyutu verinin iletilmesidir.
                                    Birinci boyut, internet ihtiyacı gerektirmez. Dünya yörüngesindeki sayılı uyduya radyo sinyalleri gönderilerek,
                                    cihazın derece bazında konumunu bulması hedeflenir. Ardından, cihaz verileri göndermelidir. İnternetin olmadığı durumlarda,
                                    cihaz veriyi gönderemeyeceği için konum hizmetinin aksaması söz konusu olabilir.
                                    <br><br>
                                    <b>NOT</b>  : Eğer sürekli olarak cihazın çalışmadığı tespit edilirse, tarafıma dönüş yapılması gerekmektedir. Aksi takdirde doğacak,
                                    kesinti ve kopukluklardan şirketim ve şahsım sorumlu değildir.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-left">
                        <div class="flex items-center gap-4">
                            <a href="mailto:contact@beresyus.com" class="group inline-flex items-center hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 1 20 20" stroke-width="1.5" class="-mt-px mr-1 w-5 h-5 stroke-gray-400 dark:stroke-gray-600 group-hover:stroke-gray-600 dark:group-hover:stroke-gray-400">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                                </svg>
                                İletişim
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                        {{-- Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }}) & --}}
                        <a href="https://beresyus.com">Beresyus</a> 2023, Tüm Hakları Gizlidir
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
{{--<style>--}}
{{--    /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */--}}
{{--    *, ::after, ::before {--}}
{{--        box-sizing: border-box;--}}
{{--        border-width: 0;--}}
{{--        border-style: solid;--}}
{{--        border-color: #e5e7eb--}}
{{--    }--}}

{{--    ::after, ::before {--}}
{{--        --tw-content: ''--}}
{{--    }--}}

{{--    html {--}}
{{--        line-height: 1.5;--}}
{{--        -webkit-text-size-adjust: 100%;--}}
{{--        -moz-tab-size: 4;--}}
{{--        tab-size: 4;--}}
{{--        font-family: Figtree, sans-serif;--}}
{{--        font-feature-settings: normal--}}
{{--    }--}}

{{--    body {--}}
{{--        margin: 0;--}}
{{--        line-height: inherit--}}
{{--    }--}}

{{--    hr {--}}
{{--        height: 0;--}}
{{--        color: inherit;--}}
{{--        border-top-width: 1px--}}
{{--    }--}}

{{--    abbr:where([title]) {--}}
{{--        -webkit-text-decoration: underline dotted;--}}
{{--        text-decoration: underline dotted--}}
{{--    }--}}

{{--    h1, h2, h3, h4, h5, h6 {--}}
{{--        font-size: inherit;--}}
{{--        font-weight: inherit--}}
{{--    }--}}

{{--    a {--}}
{{--        color: inherit;--}}
{{--        text-decoration: inherit--}}
{{--    }--}}

{{--    b, strong {--}}
{{--        font-weight: bolder--}}
{{--    }--}}

{{--    code, kbd, pre, samp {--}}
{{--        font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;--}}
{{--        font-size: 1em--}}
{{--    }--}}

{{--    small {--}}
{{--        font-size: 80%--}}
{{--    }--}}

{{--    sub, sup {--}}
{{--        font-size: 75%;--}}
{{--        line-height: 0;--}}
{{--        position: relative;--}}
{{--        vertical-align: baseline--}}
{{--    }--}}

{{--    sub {--}}
{{--        bottom: -.25em--}}
{{--    }--}}

{{--    sup {--}}
{{--        top: -.5em--}}
{{--    }--}}

{{--    table {--}}
{{--        text-indent: 0;--}}
{{--        border-color: inherit;--}}
{{--        border-collapse: collapse--}}
{{--    }--}}

{{--    button, input, optgroup, select, textarea {--}}
{{--        font-family: inherit;--}}
{{--        font-size: 100%;--}}
{{--        font-weight: inherit;--}}
{{--        line-height: inherit;--}}
{{--        color: inherit;--}}
{{--        margin: 0;--}}
{{--        padding: 0--}}
{{--    }--}}

{{--    button, select {--}}
{{--        text-transform: none--}}
{{--    }--}}

{{--    [type=button], [type=reset], [type=submit], button {--}}
{{--        -webkit-appearance: button;--}}
{{--        background-color: transparent;--}}
{{--        background-image: none--}}
{{--    }--}}

{{--    :-moz-focusring {--}}
{{--        outline: auto--}}
{{--    }--}}

{{--    :-moz-ui-invalid {--}}
{{--        box-shadow: none--}}
{{--    }--}}

{{--    progress {--}}
{{--        vertical-align: baseline--}}
{{--    }--}}

{{--    ::-webkit-inner-spin-button, ::-webkit-outer-spin-button {--}}
{{--        height: auto--}}
{{--    }--}}

{{--    [type=search] {--}}
{{--        -webkit-appearance: textfield;--}}
{{--        outline-offset: -2px--}}
{{--    }--}}

{{--    ::-webkit-search-decoration {--}}
{{--        -webkit-appearance: none--}}
{{--    }--}}

{{--    ::-webkit-file-upload-button {--}}
{{--        -webkit-appearance: button;--}}
{{--        font: inherit--}}
{{--    }--}}

{{--    summary {--}}
{{--        display: list-item--}}
{{--    }--}}

{{--    blockquote, dd, dl, figure, h1, h2, h3, h4, h5, h6, hr, p, pre {--}}
{{--        margin: 0--}}
{{--    }--}}

{{--    fieldset {--}}
{{--        margin: 0;--}}
{{--        padding: 0--}}
{{--    }--}}

{{--    legend {--}}
{{--        padding: 0--}}
{{--    }--}}

{{--    menu, ol, ul {--}}
{{--        list-style: none;--}}
{{--        margin: 0;--}}
{{--        padding: 0--}}
{{--    }--}}

{{--    textarea {--}}
{{--        resize: vertical--}}
{{--    }--}}

{{--    input::placeholder, textarea::placeholder {--}}
{{--        opacity: 1;--}}
{{--        color: #9ca3af--}}
{{--    }--}}

{{--    [role=button], button {--}}
{{--        cursor: pointer--}}
{{--    }--}}

{{--    :disabled {--}}
{{--        cursor: default--}}
{{--    }--}}

{{--    audio, canvas, embed, iframe, img, object, svg, video {--}}
{{--        display: block;--}}
{{--        vertical-align: middle--}}
{{--    }--}}

{{--    img, video {--}}
{{--        max-width: 100%;--}}
{{--        height: auto--}}
{{--    }--}}

{{--    [hidden] {--}}
{{--        display: none--}}
{{--    }--}}

{{--    *, ::before, ::after {--}}
{{--        --tw-border-spacing-x: 0;--}}
{{--        --tw-border-spacing-y: 0;--}}
{{--        --tw-translate-x: 0;--}}
{{--        --tw-translate-y: 0;--}}
{{--        --tw-rotate: 0;--}}
{{--        --tw-skew-x: 0;--}}
{{--        --tw-skew-y: 0;--}}
{{--        --tw-scale-x: 1;--}}
{{--        --tw-scale-y: 1;--}}
{{--        --tw-pan-x: ;--}}
{{--        --tw-pan-y: ;--}}
{{--        --tw-pinch-zoom: ;--}}
{{--        --tw-scroll-snap-strictness: proximity;--}}
{{--        --tw-ordinal: ;--}}
{{--        --tw-slashed-zero: ;--}}
{{--        --tw-numeric-figure: ;--}}
{{--        --tw-numeric-spacing: ;--}}
{{--        --tw-numeric-fraction: ;--}}
{{--        --tw-ring-inset: ;--}}
{{--        --tw-ring-offset-width: 0px;--}}
{{--        --tw-ring-offset-color: #fff;--}}
{{--        --tw-ring-color: rgb(59 130 246 / 0.5);--}}
{{--        --tw-ring-offset-shadow: 0 0 #0000;--}}
{{--        --tw-ring-shadow: 0 0 #0000;--}}
{{--        --tw-shadow: 0 0 #0000;--}}
{{--        --tw-shadow-colored: 0 0 #0000;--}}
{{--        --tw-blur: ;--}}
{{--        --tw-brightness: ;--}}
{{--        --tw-contrast: ;--}}
{{--        --tw-grayscale: ;--}}
{{--        --tw-hue-rotate: ;--}}
{{--        --tw-invert: ;--}}
{{--        --tw-saturate: ;--}}
{{--        --tw-sepia: ;--}}
{{--        --tw-drop-shadow: ;--}}
{{--        --tw-backdrop-blur: ;--}}
{{--        --tw-backdrop-brightness: ;--}}
{{--        --tw-backdrop-contrast: ;--}}
{{--        --tw-backdrop-grayscale: ;--}}
{{--        --tw-backdrop-hue-rotate: ;--}}
{{--        --tw-backdrop-invert: ;--}}
{{--        --tw-backdrop-opacity: ;--}}
{{--        --tw-backdrop-saturate: ;--}}
{{--        --tw-backdrop-sepia:--}}
{{--    }--}}

{{--    ::-webkit-backdrop {--}}
{{--        --tw-border-spacing-x: 0;--}}
{{--        --tw-border-spacing-y: 0;--}}
{{--        --tw-translate-x: 0;--}}
{{--        --tw-translate-y: 0;--}}
{{--        --tw-rotate: 0;--}}
{{--        --tw-skew-x: 0;--}}
{{--        --tw-skew-y: 0;--}}
{{--        --tw-scale-x: 1;--}}
{{--        --tw-scale-y: 1;--}}
{{--        --tw-pan-x: ;--}}
{{--        --tw-pan-y: ;--}}
{{--        --tw-pinch-zoom: ;--}}
{{--        --tw-scroll-snap-strictness: proximity;--}}
{{--        --tw-ordinal: ;--}}
{{--        --tw-slashed-zero: ;--}}
{{--        --tw-numeric-figure: ;--}}
{{--        --tw-numeric-spacing: ;--}}
{{--        --tw-numeric-fraction: ;--}}
{{--        --tw-ring-inset: ;--}}
{{--        --tw-ring-offset-width: 0px;--}}
{{--        --tw-ring-offset-color: #fff;--}}
{{--        --tw-ring-color: rgb(59 130 246 / 0.5);--}}
{{--        --tw-ring-offset-shadow: 0 0 #0000;--}}
{{--        --tw-ring-shadow: 0 0 #0000;--}}
{{--        --tw-shadow: 0 0 #0000;--}}
{{--        --tw-shadow-colored: 0 0 #0000;--}}
{{--        --tw-blur: ;--}}
{{--        --tw-brightness: ;--}}
{{--        --tw-contrast: ;--}}
{{--        --tw-grayscale: ;--}}
{{--        --tw-hue-rotate: ;--}}
{{--        --tw-invert: ;--}}
{{--        --tw-saturate: ;--}}
{{--        --tw-sepia: ;--}}
{{--        --tw-drop-shadow: ;--}}
{{--        --tw-backdrop-blur: ;--}}
{{--        --tw-backdrop-brightness: ;--}}
{{--        --tw-backdrop-contrast: ;--}}
{{--        --tw-backdrop-grayscale: ;--}}
{{--        --tw-backdrop-hue-rotate: ;--}}
{{--        --tw-backdrop-invert: ;--}}
{{--        --tw-backdrop-opacity: ;--}}
{{--        --tw-backdrop-saturate: ;--}}
{{--        --tw-backdrop-sepia:--}}
{{--    }--}}

{{--    ::backdrop {--}}
{{--        --tw-border-spacing-x: 0;--}}
{{--        --tw-border-spacing-y: 0;--}}
{{--        --tw-translate-x: 0;--}}
{{--        --tw-translate-y: 0;--}}
{{--        --tw-rotate: 0;--}}
{{--        --tw-skew-x: 0;--}}
{{--        --tw-skew-y: 0;--}}
{{--        --tw-scale-x: 1;--}}
{{--        --tw-scale-y: 1;--}}
{{--        --tw-pan-x: ;--}}
{{--        --tw-pan-y: ;--}}
{{--        --tw-pinch-zoom: ;--}}
{{--        --tw-scroll-snap-strictness: proximity;--}}
{{--        --tw-ordinal: ;--}}
{{--        --tw-slashed-zero: ;--}}
{{--        --tw-numeric-figure: ;--}}
{{--        --tw-numeric-spacing: ;--}}
{{--        --tw-numeric-fraction: ;--}}
{{--        --tw-ring-inset: ;--}}
{{--        --tw-ring-offset-width: 0px;--}}
{{--        --tw-ring-offset-color: #fff;--}}
{{--        --tw-ring-color: rgb(59 130 246 / 0.5);--}}
{{--        --tw-ring-offset-shadow: 0 0 #0000;--}}
{{--        --tw-ring-shadow: 0 0 #0000;--}}
{{--        --tw-shadow: 0 0 #0000;--}}
{{--        --tw-shadow-colored: 0 0 #0000;--}}
{{--        --tw-blur: ;--}}
{{--        --tw-brightness: ;--}}
{{--        --tw-contrast: ;--}}
{{--        --tw-grayscale: ;--}}
{{--        --tw-hue-rotate: ;--}}
{{--        --tw-invert: ;--}}
{{--        --tw-saturate: ;--}}
{{--        --tw-sepia: ;--}}
{{--        --tw-drop-shadow: ;--}}
{{--        --tw-backdrop-blur: ;--}}
{{--        --tw-backdrop-brightness: ;--}}
{{--        --tw-backdrop-contrast: ;--}}
{{--        --tw-backdrop-grayscale: ;--}}
{{--        --tw-backdrop-hue-rotate: ;--}}
{{--        --tw-backdrop-invert: ;--}}
{{--        --tw-backdrop-opacity: ;--}}
{{--        --tw-backdrop-saturate: ;--}}
{{--        --tw-backdrop-sepia:--}}
{{--    }--}}

{{--    .relative {--}}
{{--        position: relative--}}
{{--    }--}}

{{--    .mx-auto {--}}
{{--        margin-left: auto;--}}
{{--        margin-right: auto--}}
{{--    }--}}

{{--    .mx-6 {--}}
{{--        margin-left: 1.5rem;--}}
{{--        margin-right: 1.5rem--}}
{{--    }--}}

{{--    .ml-4 {--}}
{{--        margin-left: 1rem--}}
{{--    }--}}

{{--    .mt-16 {--}}
{{--        margin-top: 4rem--}}
{{--    }--}}

{{--    .mt-6 {--}}
{{--        margin-top: 1.5rem--}}
{{--    }--}}

{{--    .mt-4 {--}}
{{--        margin-top: 1rem--}}
{{--    }--}}

{{--    .-mt-px {--}}
{{--        margin-top: -1px--}}
{{--    }--}}

{{--    .mr-1 {--}}
{{--        margin-right: 0.25rem--}}
{{--    }--}}

{{--    .flex {--}}
{{--        display: flex--}}
{{--    }--}}

{{--    .inline-flex {--}}
{{--        display: inline-flex--}}
{{--    }--}}

{{--    .grid {--}}
{{--        display: grid--}}
{{--    }--}}

{{--    .h-16 {--}}
{{--        height: 4rem--}}
{{--    }--}}

{{--    .h-7 {--}}
{{--        height: 1.75rem--}}
{{--    }--}}

{{--    .h-6 {--}}
{{--        height: 1.5rem--}}
{{--    }--}}

{{--    .h-5 {--}}
{{--        height: 1.25rem--}}
{{--    }--}}

{{--    .min-h-screen {--}}
{{--        min-height: 100vh--}}
{{--    }--}}

{{--    .w-auto {--}}
{{--        width: auto--}}
{{--    }--}}

{{--    .w-16 {--}}
{{--        width: 4rem--}}
{{--    }--}}

{{--    .w-7 {--}}
{{--        width: 1.75rem--}}
{{--    }--}}

{{--    .w-6 {--}}
{{--        width: 1.5rem--}}
{{--    }--}}

{{--    .w-5 {--}}
{{--        width: 1.25rem--}}
{{--    }--}}

{{--    .max-w-7xl {--}}
{{--        max-width: 80rem--}}
{{--    }--}}

{{--    .shrink-0 {--}}
{{--        flex-shrink: 0--}}
{{--    }--}}

{{--    .scale-100 {--}}
{{--        --tw-scale-x: 1;--}}
{{--        --tw-scale-y: 1;--}}
{{--        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))--}}
{{--    }--}}

{{--    .grid-cols-1 {--}}
{{--        grid-template-columns:repeat(1, minmax(0, 1fr))--}}
{{--    }--}}

{{--    .items-center {--}}
{{--        align-items: center--}}
{{--    }--}}

{{--    .justify-center {--}}
{{--        justify-content: center--}}
{{--    }--}}

{{--    .gap-6 {--}}
{{--        gap: 1.5rem--}}
{{--    }--}}

{{--    .gap-4 {--}}
{{--        gap: 1rem--}}
{{--    }--}}

{{--    .self-center {--}}
{{--        align-self: center--}}
{{--    }--}}

{{--    .rounded-lg {--}}
{{--        border-radius: 0.5rem--}}
{{--    }--}}

{{--    .rounded-full {--}}
{{--        border-radius: 9999px--}}
{{--    }--}}

{{--    .bg-gray-100 {--}}
{{--        --tw-bg-opacity: 1;--}}
{{--        background-color: rgb(243 244 246 / var(--tw-bg-opacity))--}}
{{--    }--}}

{{--    .bg-white {--}}
{{--        --tw-bg-opacity: 1;--}}
{{--        background-color: rgb(255 255 255 / var(--tw-bg-opacity))--}}
{{--    }--}}

{{--    .bg-red-50 {--}}
{{--        --tw-bg-opacity: 1;--}}
{{--        background-color: rgb(254 242 242 / var(--tw-bg-opacity))--}}
{{--    }--}}

{{--    .bg-dots-darker {--}}
{{--        background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")--}}
{{--    }--}}

{{--    .from-gray-700\/50 {--}}
{{--        --tw-gradient-from: rgb(55 65 81 / 0.5);--}}
{{--        --tw-gradient-to: rgb(55 65 81 / 0);--}}
{{--        --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)--}}
{{--    }--}}

{{--    .via-transparent {--}}
{{--        --tw-gradient-to: rgb(0 0 0 / 0);--}}
{{--        --tw-gradient-stops: var(--tw-gradient-from), transparent, var(--tw-gradient-to)--}}
{{--    }--}}

{{--    .bg-center {--}}
{{--        background-position: center--}}
{{--    }--}}

{{--    .stroke-red-500 {--}}
{{--        stroke: #ef4444--}}
{{--    }--}}

{{--    .stroke-gray-400 {--}}
{{--        stroke: #9ca3af--}}
{{--    }--}}

{{--    .p-6 {--}}
{{--        padding: 1.5rem--}}
{{--    }--}}

{{--    .px-6 {--}}
{{--        padding-left: 1.5rem;--}}
{{--        padding-right: 1.5rem--}}
{{--    }--}}

{{--    .text-center {--}}
{{--        text-align: center--}}
{{--    }--}}

{{--    .text-right {--}}
{{--        text-align: right--}}
{{--    }--}}

{{--    .text-xl {--}}
{{--        font-size: 1.25rem;--}}
{{--        line-height: 1.75rem--}}
{{--    }--}}

{{--    .text-sm {--}}
{{--        font-size: 0.875rem;--}}
{{--        line-height: 1.25rem--}}
{{--    }--}}

{{--    .font-semibold {--}}
{{--        font-weight: 600--}}
{{--    }--}}

{{--    .leading-relaxed {--}}
{{--        line-height: 1.625--}}
{{--    }--}}

{{--    .text-gray-600 {--}}
{{--        --tw-text-opacity: 1;--}}
{{--        color: rgb(75 85 99 / var(--tw-text-opacity))--}}
{{--    }--}}

{{--    .text-gray-900 {--}}
{{--        --tw-text-opacity: 1;--}}
{{--        color: rgb(17 24 39 / var(--tw-text-opacity))--}}
{{--    }--}}

{{--    .text-gray-500 {--}}
{{--        --tw-text-opacity: 1;--}}
{{--        color: rgb(107 114 128 / var(--tw-text-opacity))--}}
{{--    }--}}

{{--    .underline {--}}
{{--        -webkit-text-decoration-line: underline;--}}
{{--        text-decoration-line: underline--}}
{{--    }--}}

{{--    .antialiased {--}}
{{--        -webkit-font-smoothing: antialiased;--}}
{{--        -moz-osx-font-smoothing: grayscale--}}
{{--    }--}}

{{--    .shadow-2xl {--}}
{{--        --tw-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.25);--}}
{{--        --tw-shadow-colored: 0 25px 50px -12px var(--tw-shadow-color);--}}
{{--        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)--}}
{{--    }--}}

{{--    .shadow-gray-500\/20 {--}}
{{--        --tw-shadow-color: rgb(107 114 128 / 0.2);--}}
{{--        --tw-shadow: var(--tw-shadow-colored)--}}
{{--    }--}}

{{--    .transition-all {--}}
{{--        transition-property: all;--}}
{{--        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);--}}
{{--        transition-duration: 150ms--}}
{{--    }--}}

{{--    .selection\:bg-red-500 *::selection {--}}
{{--        --tw-bg-opacity: 1;--}}
{{--        background-color: rgb(239 68 68 / var(--tw-bg-opacity))--}}
{{--    }--}}

{{--    .selection\:text-white *::selection {--}}
{{--        --tw-text-opacity: 1;--}}
{{--        color: rgb(255 255 255 / var(--tw-text-opacity))--}}
{{--    }--}}

{{--    .selection\:bg-red-500::selection {--}}
{{--        --tw-bg-opacity: 1;--}}
{{--        background-color: rgb(239 68 68 / var(--tw-bg-opacity))--}}
{{--    }--}}

{{--    .selection\:text-white::selection {--}}
{{--        --tw-text-opacity: 1;--}}
{{--        color: rgb(255 255 255 / var(--tw-text-opacity))--}}
{{--    }--}}

{{--    .hover\:text-gray-900:hover {--}}
{{--        --tw-text-opacity: 1;--}}
{{--        color: rgb(17 24 39 / var(--tw-text-opacity))--}}
{{--    }--}}

{{--    .hover\:text-gray-700:hover {--}}
{{--        --tw-text-opacity: 1;--}}
{{--        color: rgb(55 65 81 / var(--tw-text-opacity))--}}
{{--    }--}}

{{--    .focus\:rounded-sm:focus {--}}
{{--        border-radius: 0.125rem--}}
{{--    }--}}

{{--    .focus\:outline:focus {--}}
{{--        outline-style: solid--}}
{{--    }--}}

{{--    .focus\:outline-2:focus {--}}
{{--        outline-width: 2px--}}
{{--    }--}}

{{--    .focus\:outline-red-500:focus {--}}
{{--        outline-color: #ef4444--}}
{{--    }--}}

{{--    .group:hover .group-hover\:stroke-gray-600 {--}}
{{--        stroke: #4b5563--}}
{{--    }--}}

{{--    .z-10 {--}}
{{--        z-index: 10--}}
{{--    }--}}

{{--    @media (prefers-reduced-motion: no-preference) {--}}
{{--        .motion-safe\:hover\:scale-\[1\.01\]:hover {--}}
{{--            --tw-scale-x: 1.01;--}}
{{--            --tw-scale-y: 1.01;--}}
{{--            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))--}}
{{--        }--}}
{{--    }--}}

{{--    @media (prefers-color-scheme: dark) {--}}
{{--        .dark\:bg-gray-900 {--}}
{{--            --tw-bg-opacity: 1;--}}
{{--            background-color: rgb(17 24 39 / var(--tw-bg-opacity))--}}
{{--        }--}}

{{--        .dark\:bg-gray-800\/50 {--}}
{{--            background-color: rgb(31 41 55 / 0.5)--}}
{{--        }--}}

{{--        .dark\:bg-red-800\/20 {--}}
{{--            background-color: rgb(153 27 27 / 0.2)--}}
{{--        }--}}

{{--        .dark\:bg-dots-lighter {--}}
{{--            background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")--}}
{{--        }--}}

{{--        .dark\:bg-gradient-to-bl {--}}
{{--            background-image: linear-gradient(to bottom left, var(--tw-gradient-stops))--}}
{{--        }--}}

{{--        .dark\:stroke-gray-600 {--}}
{{--            stroke: #4b5563--}}
{{--        }--}}

{{--        .dark\:text-gray-400 {--}}
{{--            --tw-text-opacity: 1;--}}
{{--            color: rgb(156 163 175 / var(--tw-text-opacity))--}}
{{--        }--}}

{{--        .dark\:text-white {--}}
{{--            --tw-text-opacity: 1;--}}
{{--            color: rgb(255 255 255 / var(--tw-text-opacity))--}}
{{--        }--}}

{{--        .dark\:shadow-none {--}}
{{--            --tw-shadow: 0 0 #0000;--}}
{{--            --tw-shadow-colored: 0 0 #0000;--}}
{{--            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)--}}
{{--        }--}}

{{--        .dark\:ring-1 {--}}
{{--            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--}}
{{--            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);--}}
{{--            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)--}}
{{--        }--}}

{{--        .dark\:ring-inset {--}}
{{--            --tw-ring-inset: inset--}}
{{--        }--}}

{{--        .dark\:ring-white\/5 {--}}
{{--            --tw-ring-color: rgb(255 255 255 / 0.05)--}}
{{--        }--}}

{{--        .dark\:hover\:text-white:hover {--}}
{{--            --tw-text-opacity: 1;--}}
{{--            color: rgb(255 255 255 / var(--tw-text-opacity))--}}
{{--        }--}}

{{--        .group:hover .dark\:group-hover\:stroke-gray-400 {--}}
{{--            stroke: #9ca3af--}}
{{--        }--}}
{{--    }--}}

{{--    @media (min-width: 640px) {--}}
{{--        .sm\:fixed {--}}
{{--            position: fixed--}}
{{--        }--}}

{{--        .sm\:top-0 {--}}
{{--            top: 0px--}}
{{--        }--}}

{{--        .sm\:right-0 {--}}
{{--            right: 0px--}}
{{--        }--}}

{{--        .sm\:ml-0 {--}}
{{--            margin-left: 0px--}}
{{--        }--}}

{{--        .sm\:flex {--}}
{{--            display: flex--}}
{{--        }--}}

{{--        .sm\:items-center {--}}
{{--            align-items: center--}}
{{--        }--}}

{{--        .sm\:justify-center {--}}
{{--            justify-content: center--}}
{{--        }--}}

{{--        .sm\:justify-between {--}}
{{--            justify-content: space-between--}}
{{--        }--}}

{{--        .sm\:text-left {--}}
{{--            text-align: left--}}
{{--        }--}}

{{--        .sm\:text-right {--}}
{{--            text-align: right--}}
{{--        }--}}
{{--    }--}}

{{--    @media (min-width: 768px) {--}}
{{--        .md\:grid-cols-2 {--}}
{{--            grid-template-columns:repeat(2, minmax(0, 1fr))--}}
{{--        }--}}
{{--    }--}}

{{--    @media (min-width: 1024px) {--}}
{{--        .lg\:gap-8 {--}}
{{--            gap: 2rem--}}
{{--        }--}}

{{--        .lg\:p-8 {--}}
{{--            padding: 2rem--}}
{{--        }--}}
{{--    }--}}
{{--</style>--}}
