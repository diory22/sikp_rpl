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
                        <a href="{{ url ('dosen') }}"></i>Dashboard </a>
                    </li>
                    <li>
                        <a href="{{ url ('dosen/suratketerangan') }}">Verifikasi Pengajuan Surat Keterangan</a>
                    </li>
                    <li>
                        <a href="{{ url ('dosen/prakp') }}">Verifikasi Pengajuan Pra KP </a>
                    </li>
                    <li>
                        <a href="{{ url ('dosen/kp') }}">Verifikasi Pengajuan KP</a>
                    </li>
                    <li>
                        <a href="{{ url ('dosen/ujian') }}">Jadwal Ujian</a>
                    </li>
                    <li>
                        <a href="{{ url ('dosen/dafregis') }}">Daftar Registrasi </a>
                    </li>
                    <li>
                        <a href="{{ url ('dosen/batas') }}">Batas Pelaksanaan KP </a>
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
                    <a class="nav-link" aria-current="page" href="{{route('logout1')}}">Logout</a>
                        
                        </div>
                    </div>
        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Jadwal Ujian</h1>
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
                        <strong>Set Jadwal Ujian</strong>
                    </div>
                    <div class="pull-right">
                    </div>
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-4 offset-md-4">
                        <form action="{{ url('dosen/'.$kp->id) }}" method="post">
                        @method('patch')
                        @csrf
            <div class="form-group">
            <label for="exampleFormControlInput1">NIM</label>
            <input type="text" class="form-control" name="nim" id="nim" readonly value="{{ $kp->nim }}"> 
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Tahun</label>
            <input type="number" class="form-control" name="tahun" id="tahun" readonly value="{{ $kp->tahun }}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Judul KP</label>
            <input type="text" class="form-control" name="judul" id="judul" readonly value="{{ $kp->judul }}">
        </div>
        
        <div class="form-group">
                                    <label for="exampleFormControlSelect1">Dospem</label>
                                    <select class="form-control" name="dospem" id="dospem">
            <option value="Andhika Galuh">Andhika Galuh</option>
            <option value="Argo Wibowo">Argo Wibowo</option>
            </select>
        </div>
        <div class="form-group">
                                    <label for="exampleFormControlSelect1">Penguji</label>
                                    <select class="form-control" name="penguji" id="penguji">
            <option value="Umi Proboyekti">Umi Proboyekti</option>
            <option value="Budi Sutedjo">Budi Sutedjo</option>
            <option value="Yetli Oslan">Yetli Oslan</option>
            <option value="Lussy Ernawanati">Lussy Ernawanati</option>
            <option value="Gabriel Indra">Gabriel Indra</option>
            <option value="Katon Wijana">Katon Wijana</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Ruang</label>
            <input type="text" class="form-control" name="ruang" id="ruang" value="{{ $kp->ruang }}" autofocus required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Tgl Ujian</label>
            <input type="date" class="form-control" name="tgl_ujian" id="tgl_ujian" data-date-format="DD/MMM/YYYY" placeholder="dd/mm/yyyy" value="{{ $kp->tgl_ujian }}" autofocus required>
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
