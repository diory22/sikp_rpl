<!doctype html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SIKP</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="{{ asset('style/assets/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/cs-skin-elastic.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/scss/style.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

    <script src="{{ asset('style/assets/js/vendor/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('style/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('style/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('style/assets/js/main.js') }}"></script>
    
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="images/logosikp.png" alt="SIKP"></a>
                <a class="navbar-brand hidden" href="./"><img src="images/logosikp.png" alt="SIKP"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="{{ url ('home') }}"></i>Dashboard </a>
                    </li>
                    <li>
                        <a href="{{ url ('suratketerangan') }}">Pengajuan Surat Keterangan</a>
                    </li>
                    <li>
                        <a href="{{ url ('prakp') }}">Pengajuan Pra KP </a>
                    </li>
                    <li>
                        <a href="{{ url ('kp') }}">Pengajuan KP </a>
                    </li>
                    <li>
                        <a href="{{ url ('ujian') }}">Jadwal Ujian </a>
                    </li>
                    </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <div id="right-panel" class="right-panel">
        <header id="header" class="header">
            <div class="header-menu">
                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <div class="form-inline">
                        </div>
                        <div class="dropdown for-message">
                          <div class="dropdown-menu" aria-labelledby="message">
                            <p class="red">You have 4 Mails</p>
                            <a class="dropdown-item media bg-flat-color-1" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jonathan Smith</span>
                                    <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                            <a class="dropdown-item media bg-flat-color-4" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jack Sanders</span>
                                    <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                            <a class="dropdown-item media bg-flat-color-5" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Cheryl Wheeler</span>
                                    <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                            <a class="dropdown-item media bg-flat-color-3" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Rachel Santos</span>
                                    <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                          </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                    <a class="nav-link" aria-current="page" href="{{route('logout')}}">Logout</a>
                        </div>
                    </div>
        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Pengajuan KP</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
            
            <div class="card">
                <div class="card-header">
                    <div class="pull-left">
                        <strong>Tambah Pengajuan KP</strong>
                    </div>
                    <div class="pull-right">
                    </div>
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-4 offset-md-4">
                        <form action="{{ url('kp') }}" method="post">
                        @csrf
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Semester</label>
                                    <select class="form-control" name="semester" id="semester">
            <option value="Gasal">Gasal</option>
            <option value="Genap">Genap</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Tahun</label>
            <input type="number" class="form-control" name="tahun" id="tahun" autofocus required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">NIM</label>
            <input type="text" class="form-control" name="nim" id="nim" autofocus required>
        </div>
        <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Judul KP</label>
  <textarea name ="judul" class="form-control" id="exampleFormControlTextarea1" rows="3" autofocus required></textarea>
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Tools</label>
  <textarea name ="tools" class="form-control" id="exampleFormControlTextarea1" rows="3" autofocus required></textarea>
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Spesifikasi</label>
  <textarea name ="spesifikasi" class="form-control" id="exampleFormControlTextarea1" rows="3" autofocus required></textarea>
</div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Lembaga</label>
            <input type="text" class="form-control" name="lembaga" id="lembaga" autofocus required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Pimpinan</label>
            <input type="text" class="form-control" name="pimpinan" id="pimpinan" autofocus required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">No. Telp</label>
            <input type="text" class="form-control" name="no_telp" id="no_telp" autofocus required>
        </div>
        <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
  <textarea name ="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3" autofocus required></textarea>
</div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Fax</label>
            <input type="text" class="form-control" name="fax" id="fax" autofocus required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Dokumen</label>
            <input type="file" class="form-control" name="dokumen" id="dokumen" autofocus required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        </form>
            </div>
            </div>
            </div>
        </div>
            </div><!-- .animated -->
        </div><!-- .content -->
    </div><!-- /#right-panel -->
    <!-- Right Panel -->
</body>
</html>