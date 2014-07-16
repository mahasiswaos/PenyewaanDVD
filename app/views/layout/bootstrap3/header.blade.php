<nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button> <a class="navbar-brand" href="/home/">
            <i class="glyphicon glyphicon-home"></i> HOME</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i><b> User Admin</b><strong class="caret"></strong></a>
                <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li>
                        <a href="/user/view/">
                            <i class="glyphicon glyphicon-list"></i> Lihat Tabel User</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="/user/add/">
                            <i class="glyphicon glyphicon-plus"></i> Tambah User</a>
                    </li>
                    <li class="divider"></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-record"></i><b> Daftar CD & DVD</b><strong class="caret"></strong></a>
                <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li>
                        <a href="/daftar/view/">
                            <i class="glyphicon glyphicon-list"></i> Lihat Daftar</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="/daftar/add/">
                            <i class="glyphicon glyphicon-plus"></i> Tambah Daftar</a>
                    </li>
                    <li class="divider"></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-list"></i><b> Pelanggan</b><strong class="caret"></strong></a>
                <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li>
                        <a href="/pelanggan/view/">
                            <i class="glyphicon glyphicon-list"></i> Lihat Tabel Pelanggan</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="/pelanggan/add/">
                            <i class="glyphicon glyphicon-plus"></i> Tambah Data Pelanggan</a>
                    </li>
                    <li class="divider"></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-check"></i><b> Transaksi</b><strong class="caret"></strong></a>
                <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <li>
                        <a href="/transaksi/view/">
                            <i class="glyphicon glyphicon-list"></i> Lihat Tabel Transaksi</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="/transaksi/add/">
                            <i class="glyphicon glyphicon-plus"></i> Tambah Data Transaksi</a>
                    </li>
                    <li class="divider"></li>
                </ul>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <form action="" class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" />
                </div>
                <button type="submit" class="btn btn-default">
                    <i class="glyphicon glyphicon-search"></i> Search</button>
            </form>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i> 
                    <?php
                    if (Auth::check()) {
                        $user = Auth::user();
                        echo $user->username;
                    }
                    ?>
                    <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo URL::to('/logout'); ?>">
                            <i class="glyphicon glyphicon-log-out"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>