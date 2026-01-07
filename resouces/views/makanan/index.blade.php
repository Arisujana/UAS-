@extends('layout.app')

@section('content')

<!-- HERO -->
<section class="relative bg-blue-900">
    <div class="max-w-7xl mx-auto px-6 py-14 text-center text-white">
        <h1 class="text-3xl md:text-4xl font-bold mb-2">
            Mau makan apa hari ini?
        </h1>
        <p class="text-base opacity-90 mb-8 text-blue-100">
            Temukan makanan favoritmu dengan cepat
        </p>

        <!-- BOX SEARCH -->
        <form class="bg-white rounded-2xl shadow-lg p-5 max-w-xl mx-auto flex gap-4 items-center">
            <div class="flex items-center gap-2 border border-blue-200 rounded-full px-4 py-2 w-full">
                <span class="text-blue-700">🔍</span>
                <input
                    type="text"
                    name="Menu"
                    placeholder="Ketik menu yang kamu cari..."
                    class="w-full outline-none text-gray-700 placeholder-gray-400"
                >
            </div>

            <button
                type="submit"
                class="flex items-center gap-2 bg-blue-700 hover:bg-blue-800 text-white px-6 py-2 rounded-full font-semibold transition">
                Eksplor
            </button>
        </form>
    </div>

    <!-- CURVE BAWAH -->
    <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none">
        <svg class="relative block w-full h-12" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39 56.44C180.66 81.27 52.87 92.48 0 96V0h1200v96c-49.67-2.36-170.23-14.74-278.61-39.56C789.2 25.68 600.24 6.36 321.39 56.44z"
                  fill="#ffffff"></path>
        </svg>
    </div>
</section>

<!-- SECTION MAKANAN -->
<section class="max-w-7xl mx-auto px-6 py-14">

    <h2 class="text-3xl font-bold mb-2 text-gray-800">
        Apa aja nih yang enak di sekitarmu?
    </h2>
    <p class="text-gray-500 mb-8">
        Pilihan makanan populer dan favorit pelanggan
    </p>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
        @foreach ($makanans as $m)
        <a href="/makanan/{{ $m->id }}"
           class="group bg-white rounded-2xl shadow hover:shadow-xl transition overflow-hidden">

            @php
                $img = file_exists(public_path('images/' . $m->foto)) ? asset('images/' . $m->foto) : asset('storage/' . $m->foto);
            @endphp
            <img src="{{ $img }}"
                 class="w-full h-44 object-cover group-hover:scale-110 transition duration-300">

            <div class="p-4">
                <h3 class="font-semibold text-lg truncate text-gray-800">
                    {{ $m->nama }}
                </h3>

                <p class="text-blue-800 font-bold mt-1">
                    Rp{{ number_format($m->harga) }}
                </p>

                <div class="flex items-center text-sm mt-2">
                    <span class="text-yellow-400">
                        {{ str_repeat('★', $m->rating) }}
                        {{ str_repeat('☆', 5 - $m->rating) }}
                    </span>
                    <span class="ml-2 text-gray-400">
                        {{ $m->rating }}/5
                    </span>
                </div>
            </div>
        </a>
        @endforeach
    </div>

</section>

@endsection
