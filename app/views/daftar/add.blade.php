@extends('layout.bootstrap3.index')

@section('content')

<div class="col-sm-8">
    <div class="panel panel-primary">
        <div class="panel-heading"><i class="glyphicon glyphicon-plus"></i> Form Add Daftar CD dan DVD</div>
        <div class="panel-body">
            <form class="form-horizontal" action="<?php echo URL::to("/daftar/prosesAdd"); ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">User</label>
                    <div class="col-sm-4">
                        <select class="form-control" name="id">
                            <option value="" disabled="" selected="">Pilih Username...!</option>
                            <?php foreach ($isi as $value) {?>
                            <option name="id"value="<?php echo $value->id ?>"><?php echo $value->username ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Nama</label>
                    <div class="col-sm-4">
                        <input type="text" name="nama" class="form-control " placeholder="Nama">
                        <p style="color: red"> {{ $errors->first('nama') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Kategori</label>
                    <div class="col-sm-4">
                        <input type="text" name="kategori" class="form-control " placeholder="Kategori">
                        <p style="color: red"> {{ $errors->first('kategori') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Status</label>
                    <div class="col-sm-4">
                        <select class="form-control" name="status">
                            <option value="" disabled="" selected="">Pilih Status...!</option>
                            <option value="Ada">Ada</option>
                            <option value="Tidak Ada">Tidak Ada</option>
                        </select>
                        <p style="color: red"> {{ $errors->first('Satus') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Jenis</label>
                    <div class="col-sm-4">
                        <select class="form-control" name="jenis">
                            <option value="" disabled="" selected="">Pilih Jenis...!</option>
                            <option value="CD">CD</option>
                            <option value="DVD">DVD</option>
                        </select>
                        <p style="color: red"> {{ $errors->first('Jenis') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Jumlah</label>
                    <div class="col-sm-5">
                        <input type="text" name="jumlah" class="form-control" placeholder="Jumlah">
                        <p style="color: red"> {{ $errors->first('Jumlah') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-10">
                        <button type="submit" class="btn btn-info">
                            <i class="glyphicon glyphicon-saved"></i> Simpan</button>
                            
                        <button type="reset" class="btn btn-danger">
                            <i class="glyphicon glyphicon-warning-sign"></i> Batal</button>
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
                    <td>Isi dengan lengkap biodata CD & DVD pada form di samping.</td>
                </tr>
                <tr><td>2.</td>
                    <td>Periksa kembali isi data yang akan anda simpan.</td>
                </tr>
                <tr><td>3.</td>
                    <td>KlIik tombol simpan untuk menyimpan data.</td>
                </tr>
            </table>
        </div>
    </div>
</div>
@stop