@extends('layout.bootstrap3.index')

@section('content')

<div class="col-sm-8">
    <div class="panel panel-primary">
        <div class="panel-heading"><i class="glyphicon glyphicon-plus"></i> Form Edit Daftar CD dan DVD</div>
        <div class="panel-body">
            <form class="form-horizontal" action="<?php echo URL::to("/daftar/update/". $isi->id); ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">User</label>
                    <div class="col-sm-4">
                        <input type="text" value="<?php echo $isi->users_id; ?>" readonly="" 
                               name="id" class="form-control ">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Nama</label>
                    <div class="col-sm-4">
                        <input type="text" value="<?php echo $isi->nama; ?>" name="nama" class="form-control " placeholder="Nama">
                        <p style="color: red"> {{ $errors->first('nama') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Kategori</label>
                    <div class="col-sm-4">
                        <input type="text" value="<?php echo $isi->kategori; ?>" name="kategori" class="form-control " placeholder="Kategori">
                        <p style="color: red"> {{ $errors->first('kategori') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Status</label>
                    <div class="col-sm-4">
                        <select class="form-control" name="status">
                            <option value="" disabled="" selected="">Pilih Status..!</option>
                            <?php if ($isi->status == "Ada") { ?>
                                <option value="Ada" selected="seleted">Ada</option>
                                <option value="Tidak Ada">Tidak Ada</option>
                            <?php } else { ?>
                                <option value="Ada">Ada</option>
                                <option value="Tidak Ada" selected="seleted">Tidak Ada</option>
                            <?php }; ?>
                        </select>
                        <p style="color: red"> {{ $errors->first('Satus') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Jenis</label>
                    <div class="col-sm-4">
                        <select class="form-control" name="jenis">
                            <option value="" disabled="" selected="">Pilih Jenis..!</option>
                            <?php if ($isi->jenis == "CD") { ?>
                                <option value="CD" selected="seleted">CD</option>
                                <option value="DVD">DVD</option>
                            <?php } else { ?>
                                <option value="CD">CD</option>
                                <option value="DVD" selected="seleted">DVD</option>
                            <?php }; ?>
                        </select>
                        <p style="color: red"> {{ $errors->first('Jenis') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Jumlah</label>
                    <div class="col-sm-5">
                        <input type="text" value="<?php echo $isi->jumlah; ?>" name="jumlah" class="form-control" placeholder="Jumlah">
                        <p style="color: red"> {{ $errors->first('Jumlah') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-10">
                        <button type="submit" class="btn btn-info">
                            <i class="glyphicon glyphicon-saved"></i> Update</button>
                        <button type="reset" class="btn btn-danger">
                            <i class="glyphicon glyphicon-warning-sign"></i> Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="col-sm-4">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <i class="glyphicon glyphicon-info-sign"></i> Just Info</div>

        <div class="jumbotron">
            <table class="table">
                <tr><td>1.</td>
                    <td>Edit biodata CD & DVD pada form di samping.</td>
                </tr>
                <tr><td>2.</td>
                    <td>Periksa kembali isi data yang akan di edit.</td>
                </tr>
                <tr><td>3.</td>
                    <td>KlIik tombol Update untuk menyimpan hasil edit.</td>
                </tr>
            </table>
        </div>
    </div>
</div>
@stop