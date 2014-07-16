@extends('layout.bootstrap3.index')
@section('content')
@if (Session::has('message'))
<div class="alert alert-info alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    {{ Session::get('message') }}
</div>
@endif

<div class="panel panel-primary">
    <div class="panel-heading">
        <strong><i class="glyphicon glyphicon-list">
            </i> Data Pelanggan</strong>
    </div>
    <div class="table-bordered">
        <table class="table table-bordered">
            <tr class="alert-success" >
                <th>No</th>
                <th>ID</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Pekerjaan</th>
                <th>No Identitas</th>
                <th>No Tlfn / HP</th>
                <th>Aksi</th>
            </tr>
            <?php
            $i = 1;
            foreach ($isi as $val) {
                ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $val['id'] ?></td>
                    <td><?php echo $val['nama'] ?></td>
                    <td><?php echo $val['jk'] ?></td>
                    <td><?php echo $val['alamat'] ?></td>
                    <td><?php echo $val['pekerjaan'] ?></td>
                    <td><?php echo $val['no_id'] ?></td>
                    <td><?php echo $val['no_hp'] ?></td>
                    <td>
                        <a href="{{ URL::to('/pelanggan/edit/'. $val->id) }}"class="btn btn-info" >
                            <i class="glyphicon glyphicon-edit"></i> Edit</a>

                        <a href="{{ URL::to('/pelanggan/delete/' . $val->id) }}"class="btn btn-danger" >
                            <i class="glyphicon glyphicon-trash"></i> Hapus</a>
                    </td>
                </tr>
                <?php
                $i++;
            }
            ?>
        </table>
        <div style="text-align: center">
            <?php echo $isi->links(); ?>
        </div>
    </div>
</div>
@stop