<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Kelola Buku</h1>
    <a href="<?= site_url('buku/create') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Buku</a>
</div>

<div class="card card-body">
    <div class="table-responsive-sm">
        <table class="table table-bordered">
            <thead class="thead-primary">
                <tr>
                    <th>No.</th>
                    <th>Judul</th>
                    <th>Kategori</th>
                    <th>Pengarang</th>
                    <th>Penerbit</th>
                    <th>Tahun Terbit</th>
                    <th>ISBN</th>
                    <th>Stok</th>
                    <th>Dipinjam</th>
                    <th>Dibooking</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $count = 0; ?>
                <?php foreach ($buku as $item) : ?>
                    <tr>
                        <td><?= ++$count ?></td>
                        <td><?= $item['judul_buku'] ?></td>
                        <td><span class="badge badge-primary"><?= $item['nama_kategori'] ?></span></td>
                        <td><?= $item['pengarang'] ?></td>
                        <td><?= $item['penerbit'] ?></td>
                        <td><?= $item['tahun_terbit'] ?></td>
                        <td><?= $item['isbn'] ?></td>
                        <td><?= $item['stok'] ?></td>
                        <td><?= $item['dipinjam'] ?></td>
                        <td><?= $item['dibooking'] ?></td>
                        <td>
                            <div>
                                <a href="<?= site_url('buku/edit/' . $item['id']) ?>" class="btn btn-sm btn-primary">
                                    <i class="fas fa-fw fa-pencil-alt"></i>
                                    Edit
                                </a>
                                <a onclick="return confirm('Yakin ingin dihapus?')" href="<?= site_url('buku/destroy/' . $item['id']) ?>" class="btn btn-sm btn-danger">
                                    <i class="fas fa-fw fa-trash"></i>
                                    Hapus
                                </a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach ?>

                <?php if($count == 0): ?>
                    <tr>
                        <td colspan="9" class="text-center">
                        Belum ada data
                        </td>
                    </tr>
                <?php endif ?>
            </tbody>
        </table>
    </div>
</div>