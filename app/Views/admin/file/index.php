<table class="table table-bordered" id="example1">
    <thead>
        <tr class="table-success">
            <td>NO</td>
            <td>Nama</td>
            <td>Komoditas</td>
            <td>Jenis Bibit</td>
            <td>Luas Lahan</td>
            <td>download</td>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($excel as $excel) { ?>
            <tr>
                <td><?php echo $no ?></td>
                <td><?php echo $excel['name_user'] ?></td>
                <td><?php echo $excel['jenis_tanaman'] ?></td>
                <td><?php echo $excel['jenis_bibit'] ?></td>
                <td><?php echo $excel['luas_lahan'] ?></td>
                <td><a href="<?php echo base_url('../assets/upload/kalkulator/' . $excel['jenis_tanaman'] . '-' . $excel['jenis_bibit'] . '-' . $excel['luas_lahan'] . '-' . $excel['name_user'] . '.xlsx') ?>" class="btn btn-success btn-sm btn-block"><i class="fa fa-download"></i></a></td>
            </tr>
        <?php $no++;
        } ?>
    </tbody>
</table>