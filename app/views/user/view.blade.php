@extends('layout.bootstrap3.index')

@section('content')
@if (Session::has('message'))
<div class="alert alert-info alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    {{ Session::get('message') }}
</div>
@endif

<div class="panel panel-info">
    <div class="panel-heading">
        <h4> <i class="glyphicon glyphicon-list">
            </i> Tabel User Admin</h4>
    </div>
    <table class="table table-bordered">
        <tr class="alert-success" >
            <th>ID User</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>
        <?php
        foreach ($user as $val) {
            ?>
            <tr>
                <td><?php echo $val['id'] ?></td>
                <td><?php echo $val['username'] ?></td>
                <td><?php echo $val['email'] ?></td>
                <td>
                    <a href="{{ URL::to('/user/edit/'. $val->id) }}"class="btn btn-info" >
                        <i class="glyphicon glyphicon-edit"></i> Edit</a>
                    <a href="{{ URL::to('/user/delete/' . $val->id) }}"class="btn btn-danger" >
                        <i class="glyphicon glyphicon-trash"></i> Hapus</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
    <div style="text-align: center">
        <?php echo $user->links(); ?>
    </div>
</div>
@stop