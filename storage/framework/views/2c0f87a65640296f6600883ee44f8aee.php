<?php $__env->startSection('content'); ?>

<div class="max-w-7xl mx-auto px-6 py-10">

    <!-- HEADER -->
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-slate-800">
            Dashboard Admin
        </h1>
        <p class="text-slate-500 mt-1">
            Selamat datang, <span class="font-semibold"><?php echo e(auth()->user()->name); ?></span>
        </p>
    </div>

    <!-- QUICK ACTION -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">

        <!-- TAMBAH MAKANAN -->
        <a href="<?php echo e(route('makanan.create')); ?>"
           class="bg-white rounded-2xl shadow hover:shadow-lg transition p-6 border-l-4 border-blue-800">
            <h3 class="text-lg font-semibold text-slate-800 mb-2">
                ➕ Tambah Makanan
            </h3>
            <p class="text-sm text-slate-500">
                Tambahkan menu makanan baru ke website
            </p>
        </a>

        <!-- KELOLA MAKANAN -->
        <a href="<?php echo e(route('makanan.index')); ?>"
           class="bg-white rounded-2xl shadow hover:shadow-lg transition p-6 border-l-4 border-indigo-700">
            <h3 class="text-lg font-semibold text-slate-800 mb-2">
                🍽️ Kelola Makanan
            </h3>
            <p class="text-sm text-slate-500">
                Edit & hapus data makanan
            </p>
        </a>

        <!-- LIHAT WEBSITE -->
        <a href="/"
           class="bg-white rounded-2xl shadow hover:shadow-lg transition p-6 border-l-4 border-slate-600">
            <h3 class="text-lg font-semibold text-slate-800 mb-2">
                🌍 Lihat Website
            </h3>
            <p class="text-sm text-slate-500">
                Tampilan publik website makanan
            </p>
        </a>

    </div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\web-makanan\resources\views/dashboard.blade.php ENDPATH**/ ?>