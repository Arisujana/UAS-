

<?php $__env->startSection('content'); ?>

<div class="max-w-4xl mx-auto px-6 py-8">

    <!-- HEADER -->
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-slate-800">
            Tambah Makanan
        </h1>
        <p class="text-slate-500 mt-1">
            Masukkan data menu makanan baru
        </p>
    </div>

    <!-- FORM CARD -->
    <form method="POST"
          action="<?php echo e(route('makanan.store')); ?>"
          enctype="multipart/form-data"
          class="bg-white rounded-2xl shadow-lg p-8 space-y-6">

        <?php echo csrf_field(); ?>

        <!-- NAMA -->
        <div>
            <label class="block text-sm font-semibold text-slate-700 mb-1">
                Nama Makanan
            </label>
            <input type="text"
                   name="nama"
                   required
                   placeholder="Contoh: Nasi Goreng"
                   class="w-full rounded-lg border-gray-300 focus:border-blue-700 focus:ring-blue-700">
        </div>

        <!-- ASAL -->
        <div>
            <label class="block text-sm font-semibold text-slate-700 mb-1">
                Asal Makanan
            </label>
            <input type="text"
                   name="asal"
                   required
                   placeholder="Contoh: Indonesia"
                   class="w-full rounded-lg border-gray-300 focus:border-blue-700 focus:ring-blue-700">
        </div>

        <!-- HARGA -->
        <div>
            <label class="block text-sm font-semibold text-slate-700 mb-1">
                Harga (Rp)
            </label>
            <input type="number"
                   name="harga"
                   required
                   placeholder="15000"
                   class="w-full rounded-lg border-gray-300 focus:border-blue-700 focus:ring-blue-700">
        </div>

        <!-- RATING -->
        <div>
            <label class="block text-sm font-semibold text-slate-700 mb-1">
                Rating
            </label>
            <select name="rating"
                    class="w-full rounded-lg border-gray-300 focus:border-blue-700 focus:ring-blue-700">
                <?php for($i = 1; $i <= 5; $i++): ?>
                    <option value="<?php echo e($i); ?>"><?php echo e($i); ?> ⭐</option>
                <?php endfor; ?>
            </select>
        </div>

        <!-- RESEP -->
        <div>
            <label class="block text-sm font-semibold text-slate-700 mb-1">
                Resep
            </label>
            <textarea name="resep"
                      rows="4"
                      placeholder="Tuliskan resep makanan..."
                      class="w-full rounded-lg border-gray-300 focus:border-blue-700 focus:ring-blue-700"></textarea>
        </div>

        <!-- FOTO -->
        <div>
            <label class="block text-sm font-semibold text-slate-700 mb-1">
                Foto Makanan
            </label>
            <input type="file"
                   name="foto"
                   required
                   class="w-full text-sm text-slate-500
                          file:mr-4 file:py-2 file:px-4
                          file:rounded-full file:border-0
                          file:text-sm file:font-semibold
                          file:bg-blue-50 file:text-blue-700
                          hover:file:bg-blue-100">
        </div>

        <!-- ACTION -->
        <div class="flex justify-end gap-4 pt-4">
            <a href="/dashboard"
               class="px-6 py-2 rounded-lg border border-gray-300 text-gray-600 hover:bg-gray-50">
                Batal
            </a>

            <button type="submit"
                    class="px-6 py-2 rounded-lg bg-blue-800 text-white font-semibold hover:bg-blue-900 transition">
                Simpan Makanan
            </button>
        </div>

    </form>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\web-makanan\resources\views/makanan/create.blade.php ENDPATH**/ ?>