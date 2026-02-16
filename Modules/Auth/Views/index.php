<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<div class="flex flex-col items-center justify-center py-12">
    <div class="w-full max-w-md bg-white rounded-2xl shadow-lg p-8">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Login Garage</h2>
        
        <!-- Notifikasi error user login -->
        <?php if(session()->getFlashdata('msg')): ?>
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
                <?= session()->getFlashdata('msg') ?>
            </div>
        <?php endif; ?>

        <form action="<?= base_url('login/process') ?>" method="POST" class="space-y-6">
            <?= csrf_field() ?> <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Username</label>
                <input type="text" name="username" required 
                    class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                <input type="password" name="password" required 
                    class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all">
            </div>

            <button type="submit" 
                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 rounded-xl transition-colors shadow-lg shadow-blue-200">
                Login
            </button>
        </form>
        
        <p class="text-center text-gray-500 mt-6 text-sm">
            Forget Passowrd? Hubungi Admin IT.
        </p>
    </div>
</div>
<?= $this->endSection() ?>