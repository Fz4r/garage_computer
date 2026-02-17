<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-bold text-gray-800">Daftar Service Komputer</h1>
    <a href="/admin/add" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
        + Tambah Service Baru
    </a>
</div>

<div class="bg-white rounded-xl shadow-sm overflow-hidden border border-gray-100">
    <table class="w-full text-left border-collapse">
        <thead>
            <tr class="bg-gray-50 border-b border-gray-100 text-gray-600 uppercase text-xs font-semibold">
                <th class="p-4">Pelanggan</th>
                <th class="p-4">Perangkat</th>
                <th class="p-4">Kerusakan</th>
                <th class="p-4">Status</th>
                <th class="p-4 text-center">Aksi</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-50">
            <?php foreach($services as $s): ?>
            <tr class="hover:bg-gray-50 transition">
                <td class="p-4 font-medium text-gray-800"><?= $s['customer'] ?></td>
                <td class="p-4 text-gray-600"><?= $s['device'] ?></td>
                <td class="p-4 text-gray-600"><?= $s['description'] ?></td>
                <td class="p-4 text-sm">
                    <span class="px-3 py-1 rounded-full font-semibold 
                        <?= $s['status'] == 'Pending' ? 'bg-yellow-100 text-yellow-700' : '' ?>
                        <?= $s['status'] == 'Proses' ? 'bg-blue-100 text-blue-700' : '' ?>
                        <?= $s['status'] == 'Selesai' ? 'bg-green-100 text-green-700' : '' ?>">
                        <?= $s['status'] ?>
                    </span>
                </td>
                <td class="p-4 text-center space-x-2">
                <a href="/admin/edit/<?= $s['id'] ?>" class="text-blue-500 hover:text-blue-700 font-medium">Edit</a>
                    <a href="/admin/delete/<?= $s['id'] ?>" 
                    onclick="return confirm('Apakah kamu yakin ingin menghapus data ini?')" 
                    class="text-red-500 hover:text-red-700 font-medium">
                    Hapus
                    </a>
                </td>
            </tr>
            <?php endforeach; ?>

            <?php if(empty($services)): ?>
            <tr>
                <td colspan="5" class="p-10 text-center text-gray-500">Belum ada data service.</td>
            </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>