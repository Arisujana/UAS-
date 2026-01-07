

<?php $__env->startSection('content'); ?>

<div class="max-w-5xl mx-auto px-6 py-10">

    <!-- HEADER -->
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-slate-800">
            Edit Makanan
        </h1>
        <p class="text-slate-500 mt-1">
            Perbarui informasi makanan yang sudah ada
        </p>
    </div>

    <!-- FORM CARD -->
    <form method="POST"
          action="<?php echo e(route('makanan.update', $makanan->id)); ?>"
          enctype="multipart/form-data"
          class="bg-white rounded-2xl shadow-lg p-8">

        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <!-- NAMA -->
            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-1">
                    Nama Makanan
                </label>
                <input type="text"
                       name="nama"
                       value="<?php echo e(old('nama', $makanan->nama)); ?>"
                       class="w-full rounded-lg border-slate-300 focus:border-blue-700 focus:ring-blue-700"
                       required>
            </div>

            <!-- ASAL -->
            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-1">
                    Asal Makanan
                </label>
                <input type="text"
                       name="asal"
                       value="<?php echo e(old('asal', $makanan->asal)); ?>"
                       class="w-full rounded-lg border-slate-300 focus:border-blue-700 focus:ring-blue-700"
                       required>
            </div>

            <!-- HARGA -->
            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-1">
                    Harga (Rp)
                </label>
                <input type="number"
                       name="harga"
                       value="<?php echo e(old('harga', $makanan->harga)); ?>"
                       class="w-full rounded-lg border-slate-300 focus:border-blue-700 focus:ring-blue-700"
                       required>
            </div>

            <!-- RATING -->
            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-1">
                    Rating
                </label>
                <select name="rating"
                        class="w-full rounded-lg border-slate-300 focus:border-blue-700 focus:ring-blue-700">
                    <?php for($i = 1; $i <= 5; $i++): ?>
                        <option value="<?php echo e($i); ?>" <?php if(old('rating', $makanan->rating) == $i): echo 'selected'; endif; ?>>
                            <?php echo e($i); ?> ⭐
                        </option>
                    <?php endfor; ?>
                </select>
            </div>

            <!-- FOTO LAMA -->
            <div class="md:col-span-2">
                <label class="block text-sm font-semibold text-slate-700 mb-2">
                    Foto Saat Ini
                </label>
                <div class="flex items-center gap-4">
                    <img src="<?php echo e(asset('storage/' . $makanan->foto)); ?>"
                         class="w-32 h-32 object-cover rounded-xl border">
                    <p class="text-sm text-slate-500">
                        Unggah foto baru jika ingin mengganti
                    </p>
                </div>
            </div>

            <!-- FOTO BARU -->
            <div class="md:col-span-2">
                <label class="block text-sm font-semibold text-slate-700 mb-1">
                    Ganti Foto (Opsional)
                </label>
                <input type="file"
                       name="foto"
                       class="w-full rounded-lg border-slate-300 bg-white">
            </div>

            <!-- RESEP -->
            <div class="md:col-span-2">
                <label class="block text-sm font-semibold text-slate-700 mb-1">
                    Resep
                </label>
                <textarea name="resep"
                          rows="5"
                          class="w-full rounded-lg border-slate-300 focus:border-blue-700 focus:ring-blue-700"><?php echo e(old('resep', $makanan->resep)); ?></textarea>
            </div>

        </div>

        <!-- ACTION -->
        <div class="flex justify-between items-center mt-8">

            <a href="<?php echo e(route('makanan.show', $makanan->id)); ?>"
               class="text-slate-600 hover:text-blue-700 font-medium">
                ← Batal
            </a>

            <button type="submit"
                    class="bg-blue-800 hover:bg-blue-900 text-white px-8 py-3 rounded-full font-semibold transition">
                Update Makanan
            </button>
        </div>

    </form>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\web-makanan\resources\views/makanan/edit.blade.php ENDPATH**/ ?>