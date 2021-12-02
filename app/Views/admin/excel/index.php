<table class="table table-bordered" id="example1">
    <thead>
        <tr class="table-success">
            <td>NO</td>
            <td>Nama</td>
            <td>Lokasi</td>
            <td>Luas Lahan</td>
            <td>download</td>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($excel as $excel) { ?>
            <tr>
                <td><?php echo $no ?></td>
                <td><?php echo $excel['nama'] ?></td>
                <td><?php echo $excel['lokasi'] ?></td>
                <td><?php echo $excel['luas'] ?></td>
                <td><a href="<?php echo base_url('../assets/upload/kalkulator/' . $excel['created_at'] . $excel['luas'] . '.xlsx') ?>" class="btn btn-success btn-sm btn-block"><i class="fa fa-download"></i></a></td>
            </tr>
        <?php $no++;
        } ?>
    </tbody>
</table>