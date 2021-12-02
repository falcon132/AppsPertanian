<table class="table table-bordered" id="example1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Lokasi</th>
            <th>Usia</th>
            <th>Komoditas</th>
            <th>No Hp</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($berita as $berita) { ?>
            <tr>
                <td><?php echo $no ?></td>
                <td><?php echo $berita['name'] ?></td>
                <td><?php echo $berita['username'] ?></td>
                <td><?php echo $berita['lokasi'] ?></td>
                <td><?php echo $berita['usia'] ?></td>
                <td><?php echo $berita['komoditas'] ?></td>
                <td><?php echo $berita['nohp'] ?></td>
            </tr>
        <?php $no++;
        } ?>
    </tbody>
</table>