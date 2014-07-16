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
            </i> Daftar CD dan DVD
    </div>
    <table class="table table-bordered">
        <tr class="alert-success" >
            <th>No</th>
            <th>ID CD / DVD</th>
            <th>Nama</th>
            <th>Kategori</th>
            <th>Status</th>
            <th>Jenis</th>
            <th>Jumlah</th>
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
                <td><?php echo $val['kategori'] ?></td>
                <td><?php echo $val['status'] ?></td>
                <td><?php echo $val['jenis'] ?></td>
                <td><?php echo $val['jumlah'] ?></td>
                <td>
                    <a href="{{ URL::to('/daftar/edit/'. $val->id) }}"class="btn btn-info" >
                        <i class="glyphicon glyphicon-edit"></i> Edit</a>
                    <a href="{{ URL::to('/daftar/delete/' . $val->id) }}"class="btn btn-danger" >
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
@stop