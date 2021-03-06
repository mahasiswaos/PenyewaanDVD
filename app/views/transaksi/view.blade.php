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
        <i class="glyphicon glyphicon-list">
        </i> Tabel Transaksi
    </div>
    <div class="table-bordered">
        <table class="table table-bordered">
            <tr class="alert-success" >
                <th>No</th>
                <th>ID Transaksi</th>
                <th>ID Pelanggan</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th>Tanggal Pengembalain</th>
                <th>aksi</th>

            </tr>
            <?php
            $i = 1;
            foreach ($isi as $val) {
                ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $val['id'] ?></td>
                    <td><?php echo $val['id_pelanggan'] ?></td>
                    <td><?php echo $val['tgl_pinjam'] ?></td>
                    <td><?php echo $val['tgl_kembali'] ?></td>
                    <td><?php echo $val['tgl_pengembalian'] ?></td>

                    <td>
                        <a href="{{ URL::to('/transaksi/edit/'. $val->id) }}"class="btn btn-info" >
                            <i class="glyphicon glyphicon-edit"></i> Edit</a>
                        <a href="{{ URL::to('/transaksi/delete/'. $val->id) }}"class="btn btn-danger" >
                            <i class="glyphicon glyphicon-delete"></i> Delete</a>


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