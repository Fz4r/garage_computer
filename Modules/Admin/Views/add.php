<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<div class="max-w-2xl mx-auto">
    <div class="mb-6">
        <a href="/admin" class="text-blue-600 hover:underline">← Kembali ke Daftar</a>
        <h1 class="text-2xl font-bold mt-2">Tambah Service Baru</h1>
    </div>

    <form action="/admin/save" method="POST" class="bg-white p-8 rounded-xl shadow-sm border border-gray-100 space-y-6">
        <?= csrf_field() ?>
        
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Nama Pelanggan</label>
            <input type="text" name="customer" required class="w-full px-4 py-2 rounded-lg border border-gray-200 focus:ring-2 focus:ring-blue-500 outline-none">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Perangkat (Laptop/PC)</label>
            <input type="text" name="device" required class="w-full px-4 py-2 rounded-lg border border-gray-200 focus:ring-2 focus:ring-blue-500 outline-none">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Deskripsi Kerusakan</label>
            <textarea name="description" rows="4" required class="w-full px-4 py-2 rounded-lg border border-gray-200 focus:ring-2 focus:ring-blue-500 outline-none"></textarea>
        </div>

        <button type="submit" class="w-full bg-blue-600 text-white font-bold py-3 rounded-lg hover:bg-blue-700 transition">
            Simpan Data Service
        </button>
    </form>
</div>
<?= $this->endSection() ?>