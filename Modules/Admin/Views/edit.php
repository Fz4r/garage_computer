<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<div class="max-w-2xl mx-auto">
    <h1 class="text-2xl font-bold mb-6">Edit Data Service</h1>

    <form action="/admin/update/<?= $service['id'] ?>" method="POST" class="bg-white p-8 rounded-xl shadow-sm border border-gray-100 space-y-6">
        <?= csrf_field() ?>
        
        <div>
            <label class="block text-sm font-medium mb-2">Nama Pelanggan</label>
            <input type="text" name="customer" value="<?= $service['customer'] ?>" required class="w-full px-4 py-2 rounded-lg border border-gray-200 outline-none">
        </div>

        <div>
            <label class="block text-sm font-medium mb-2">Perangkat</label>
            <input type="text" name="device" value="<?= $service['device'] ?>" required class="w-full px-4 py-2 rounded-lg border border-gray-200 outline-none">
        </div>

        <div>
            <label class="block text-sm font-medium mb-2">Status Perbaikan</label>
            <select name="status" class="w-full px-4 py-2 rounded-lg border border-gray-200 outline-none bg-white">
                <option value="Pending" <?= $service['status'] == 'Pending' ? 'selected' : '' ?>>Pending</option>
                <option value="Proses" <?= $service['status'] == 'Proses' ? 'selected' : '' ?>>Proses</option>
                <option value="Selesai" <?= $service['status'] == 'Selesai' ? 'selected' : '' ?>>Selesai</option>
            </select>
        </div>

        <div>
            <label class="block text-sm font-medium mb-2">Deskripsi Kerusakan</label>
            <textarea name="description" rows="4" required class="w-full px-4 py-2 rounded-lg border border-gray-200 outline-none"><?= $service['description'] ?></textarea>
        </div>

        <button type="submit" class="w-full bg-green-600 text-white font-bold py-3 rounded-lg hover:bg-green-700 transition">
            Update Data
        </button>
    </form>
</div>
<?= $this->endSection() ?>