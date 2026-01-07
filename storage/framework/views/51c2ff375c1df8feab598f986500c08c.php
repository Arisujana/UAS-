

<?php $__env->startSection('content'); ?>

<!-- BACK -->
<a href="/" class="inline-flex items-center text-blue-700 hover:underline mb-6">
    ← Kembali ke menu
</a>

<!-- CARD DETAIL -->
<div class="max-w-6xl mx-auto bg-white rounded-2xl shadow-lg overflow-hidden">

    <div class="grid grid-cols-1 md:grid-cols-2">

        <!-- FOTO -->
        <div class="relative">
            <img src="<?php echo e(asset('images/' . $makanan->foto)); ?>"
                 alt="<?php echo e($makanan->nama); ?>"
                 class="w-full h-96 object-cover">

            <!-- BADGE RATING -->
            <div class="absolute top-4 left-4 bg-white px-3 py-1 rounded-full shadow text-sm">
                ⭐ <?php echo e($makanan->rating); ?>/5
            </div>
        </div>

        <!-- INFO -->
        <div class="p-8">
            <h1 class="text-4xl font-bold mb-2">
                <?php echo e($makanan->nama); ?>

            </h1>

            <p class="text-gray-500 mb-4">
                Asal makanan:
                <span class="font-semibold"><?php echo e($makanan->asal); ?></span>
            </p>

            <p class="text-3xl font-bold text-blue-800 mb-4">
                Rp<?php echo e(number_format($makanan->harga)); ?>

            </p>

            <!-- RATING -->
            <div class="flex items-center mb-6">
                <span class="text-yellow-400 text-lg">
                    <?php echo e(str_repeat('★', $makanan->rating)); ?>

                    <?php echo e(str_repeat('☆', 5 - $makanan->rating)); ?>

                </span>
                <span class="ml-2 text-sm text-gray-400">
                    (<?php echo e($makanan->rating); ?> dari 5)
                </span>
            </div>

            <!-- RESEP -->
            <div>
                <h2 class="text-xl font-semibold mb-3">Resep</h2>
                <p class="text-gray-700 leading-relaxed">
                    <?php echo e($makanan->resep); ?>

                </p>
            </div>

            <!-- ADMIN ACTION -->
            <?php if(auth()->guard()->check()): ?>
                <?php if(auth()->user()->is_admin): ?>
                    <div class="flex gap-3 mt-8">
                        <a href="<?php echo e(route('makanan.edit', $makanan->id)); ?>"
                           class="px-5 py-2 bg-blue-700 hover:bg-blue-800 text-white rounded-full text-sm font-semibold transition">
                            ✏️ Edit
                        </a>

                        <form method="POST"
                              action="<?php echo e(route('makanan.destroy', $makanan->id)); ?>"
                              onsubmit="return confirm('Yakin hapus makanan ini?')">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button
                                class="px-5 py-2 bg-red-600 hover:bg-red-700 text-white rounded-full text-sm font-semibold transition">
                                🗑 Hapus
                            </button>
                        </form>
                    </div>
                <?php endif; ?>
            <?php endif; ?>

        </div>

    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\web-makanan\resources\views/makanan/show.blade.php ENDPATH**/ ?>