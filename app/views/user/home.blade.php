@extends('layout.bootstrap3.index')

@section('content')
@if (Session::has('message'))
<div class="alert alert-info alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    {{ Session::get('message') }}
</div>
@endif
<div class="jumbotron">
    <h2>Selamat Datang...!</h2>
    <div class="panel panel-info">
        <div class="panel-heading">
            <i class="glyphicon glyphicon-list"></i>
            Biodata Kelompok 11
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Alamat</th>
                    <th>Hoby</th>
                </tr>
            </thead>
            <tr class="alert-info">
                <td>1.</td>
                <td>Sopyan Sarajuni Azmi</td>
                <td>1010510113</td>
                <td>Praya, Lombok Tengah</td>
                <td>Belajar</td>
            </tr>
            <tr class="danger">
                <td>2.</td>
                <td>Budi Warman</td>
                <td>1010510110</td>
                <td>Chuang Raidar, Lombok Timur</td>
                <td>Belajar</td>
            </tr>
            <tr class="warning">
                <td>3.</td>
                <td>Denny Tirta Wijaya</td>
                <td>1010510074</td>
                <td>Ampenan, Mataram</td>
                <td>Stylis</td>
            </tr>
        </table>
    </div>
</div>
@stop
