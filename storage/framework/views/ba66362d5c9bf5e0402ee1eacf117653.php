<!doctype html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Web Promosi Makanan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 text-gray-800 min-h-screen flex flex-col">

<!-- NAVBAR -->
<nav class="bg-white border-b sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

        <!-- LOGO -->
        <a href="/" class="font-extrabold text-xl text-blue-800 tracking-wide">
            🍽️ FoodPromo
        </a>

        <!-- MENU -->
        <div class="flex items-center gap-4">

            <?php if(auth()->guard()->check()): ?>
                <?php if(auth()->user()->is_admin): ?>
                    <a href="<?php echo e(route('makanan.create')); ?>"
                       class="px-4 py-2 bg-blue-700 hover:bg-blue-800
                              text-white rounded-full text-sm font-semibold transition">
                        + Tambah Makanan
                    </a>
                <?php endif; ?>

                <span class="text-sm text-gray-600 hidden sm:block">
                    <?php echo e(auth()->user()->name); ?>

                </span>

                <form method="POST" action="<?php echo e(route('logout')); ?>">
                    <?php echo csrf_field(); ?>
                    <button
                        class="text-sm text-red-500 hover:text-red-700 transition">
                        Logout
                    </button>
                </form>
            <?php else: ?>
                <a href="<?php echo e(route('login')); ?>"
                   class="text-blue-700 hover:underline font-semibold">
                    Login
                </a>
                <a href="<?php echo e(route('register')); ?>"
                   class="px-4 py-2 bg-blue-700 hover:bg-blue-800
                          text-white rounded-full text-sm transition">
                    Register
                </a>
            <?php endif; ?>

        </div>
    </div>
</nav>

<!-- CONTENT -->
<main class="flex-1 max-w-7xl mx-auto px-6 py-8 w-full">
    <?php echo $__env->yieldContent('content'); ?>
</main>

<!-- FOOTER -->
<footer class="bg-white border-t text-center py-4 text-sm text-gray-500">
    © <?php echo e(date('Y')); ?> FoodPromo — Web Promosi Makanan
</footer>

</body>
</html>

<style>
.input {
    width: 100%;
    padding: 10px 14px;
    border: 1px solid #e5e7eb;
    border-radius: 12px;
    margin-bottom: 12px;
    outline: none;
}
.input:focus {
    border-color: #2563eb;
    box-shadow: 0 0 0 1px #2563eb;
}

.btn-primary {
    background: #1e40af;
    color: white;
    padding: 10px 20px;
    border-radius: 9999px;
    font-weight: 600;
    transition: 0.2s;
}
.btn-primary:hover {
    background: #1e3a8a;
}
</style>
<?php /**PATH C:\laragon\www\web-makanan\resources\views/layout/app.blade.php ENDPATH**/ ?>