<?php

use App\Controllers\Auth;
?>
<!DOCTYPE html>
<html>

<head>
    <title>Muhammad Nur Ashiddiqi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <!-- mengambil CSS Eksternal -->
    <link rel="shortcut icon" href="/asset/images/logo.png">
    <link href="/asset/css/style.css" rel="stylesheet">
</head>

<body>
    <section>
        <nav>
            <div class="toggle">
                <button onclick="menu_open()" class="tombol tombol-navigasi">Menu</button>
            </div>
            <ul style="padding-top:20px;" id="menu-list">
                <li><a href="#home">Home</a></li>
                <li><a href="#aboutme">About Me</a></li>
                <li><a href="#education">Education</a></li>
                <li><a href="#experience">Experience</a></li>
                <li><a href="<?= base_url('auth/login') ?>">Login</a></li>
            </ul>
        </nav>
        <div class="sosmed">
            <div class="isi-sosmed">
                <a href="https://github.com/Tnembull/" target="_blank"><img src="/asset/images/github.png"> </a>
                <a href="https://api.whatsapp.com/send?phone=62881377886296&text=Assalamualaikum kak" target="_blank"><img src="/asset/images/wa2.png"></a>
                <a href="https://www.instagram.com/diqidiqiii/" target="_blank"><img src="/asset/images/ig.png"> </a>
                <a href="mailto:mnashiddiqi01@gmail.com" target="_blank"><img src="/asset/images/gmail.png"></a>
                <a href="https://www.facebook.com/Ilovespandawa" target="_blank"><img style="width:38px;" src="/asset/images/fb.png"></a>
            </div>
        </div>
        </div>
        <div id="home">
        </div>
        <div class="banner">
            <center>
                <div id="circle3"></div>
                <div id="circle2"></div>
                <div id="circle"></div>
                <div class="title">
                    <h1 class="name">~Hi I'm Bulin!</h1>
                    <p> I'm Newbie </p>
                    <!-- <div class="circle-small">
									<br/>
									<b>V</b>
								</div> -->

                </div>
            </center>
        </div>
        <div id="aboutme">
        </div>
        <!-- Start SVG Curve -->
        <svg id="curve" viewBox="0 0 1400 214.953" xml:space="preserve">
            <path style="opacity:1;fill:;" d="M0,139.29C207.803,40.048,277.683-60.968,472.864,45.364
					c195.181,106.331,346.987,163.042,481.928,77.975c134.939-85.065,337.348-34.515,437.348,41.225c100,75.743,7.861,6.627,7.861,6.627
					v73.387H0V139.29z" />
        </svg>
        <!-- End SVG Curve -->
    </section>
    <div id="wrapper">
        <section class="sec2">
            <div class="content">
                <div>
                    <h1 class="title-content">About Me</h1>
                    <div class="left-menu">
                        <div class="circle-avatar"></div>

                    </div>
                    <div class="right-menu">
                        <p>
                            Hai Perkenalkan Nama Saya Bulin:) <br />Saya adalah seorang <i class="english">Newbie Front-End Developer</i>, <i class="english">Pada Pelatihan Dicoding</i>, dan
                            Saya Sedang Mempelajari<i class="english"> Bahasa Pemrograman web dasar</i>.
                        </p>
                        <p>
                            Lahir pada bulan <b class="important">April</b> tanggal <b class="important">5</b> dan
                            tahun <b class="important">****</b>, bertempat di <b class="important">Bandar Lampung</b>,Lampung, Indonesia.
                        </p>
                        <p>
                            Tinggal dan Lahir di Kota <b class="important">Bandar Lampung</b>, membuat saya begitu menyukai <b class="important">Tantangan & Belajar Hal-hal Baru</b> terlebih lagi dalam <b class="important">Perkembangan Teknologi</b> yang begitu <b class="important">Pesat</b>.
                    </div>
                </div>
            </div>

        </section>

        <section class="sec3" id="education">
            <div class="content content-float">
                <h1 class="title-content">Education</h1>
                <div class="area-card">
                    <div class="card">
                        <div class="card-header" style="background:url('/asset/images/tk.jpeg') ;background-size : cover;">
                        </div>
                        <div class="card-body">
                            <p style="color:#fff">
                                <b>TK Al-Kautsar Bandar Lampung</b>
                                <br />
                                <i>2004-2005</i>
                            </p>
                            <a href="#modal-tk" class="tombol tombol-link">Detail</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" style="background:url('/asset/images/sd.jpg') ;background-size : cover;">
                        </div>
                        <div class="card-body">
                            <p style="color:#fff">
                                <b>SD Al-Kautsar Bandar Lampung</b>
                                <br />
                                <i>2005-2011</i>
                            </p>
                            <a href="#modal-sd" class="tombol tombol-link">Detail</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" style="background:url('/asset/images/smp.jpg') ;background-size : cover;">
                        </div>
                        <div class="card-body">
                            <p style="color:#fff">
                                <b>SMP Negeri 22 Bandar Lampung</b>
                                <br />
                                <i>2011-2014</i>
                            </p>
                            <a href="#modal-smp" class="tombol tombol-link">Detail</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" style="background:url('/asset/images/smk.jpg') ;background-size : cover;">
                        </div>
                        <div class="card-body">
                            <p style="color:#fff">
                                <b>SMK YADIKA Bandar Lampung</b>
                                <br />
                                <i>2014-2017</i>
                            </p>
                            <a href="#modal-smk" class="tombol tombol-link">Detail</a>
                        </div>
                    </div>
                </div>
            </div>

            <svg id="curve2" viewBox="0 0 1400 214.953" xml:space="preserve">
                <path style="opacity:1;fill:;" d="M0,139.29C207.803,40.048,277.683-60.968,472.864,45.364
					c195.181,106.331,346.987,163.042,481.928,77.975c134.939-85.065,337.348-34.515,437.348,41.225c100,75.743,7.861,6.627,7.861,6.627
					v73.387H0V139.29z" />
            </svg>
        </section>

        <section class="sec4" id="experience">

            <div class="content">
                <h1 class="title-content" style="padding-bottom:15px;">Experience</h1>
                <p>
                    <ul class="text-experience">
                        <li>
                            <h3> Diens Technology <label class="label label-utama">2019 - Sekarang</label></h3>
                            <div class="text">
                                Co-Founder dari <i>Diens Tech</i>. Diens Adalah Jasa pembuatan Design Official Event dan
                                Servis
                                Device di Bandar Lampung dan sekitarnya.
                            </div>
                        </li>
                        <li>
                            <h3>Newbie Data Science Programming <label class="label label-info">2019 - Sekarang</label>
                            </h3>
                            <div class="text">
                                Anggota dari Gradien. Saya Mulai Menjadi Anggota Gradien (Gerakan Digital Ekosistem
                                Nusantara)
                                Pada Batch 3 Pembuatan Website Ecommers, Website Official , dan Web Company Profile.
                            </div>
                        </li>
                        <li>
                            <h3>Newbie Freelancer Web Development & Apps Development <label class="label label-info">2019 -
                                    Sekarang</label></h3>
                            <div class="text">
                                Menjadi <i>freelancer</i> dalam pembuatan beberapa projek aplikasi berbasis Website dan
                                Aplikasi Mobile.
                            </div>
                        </li>
                    </ul>
                    <div>
                        <p><b>&copy; 2020 - Muhammad Nur Ashiddiqi.</b></p>
                    </div>
                </p>
            </div>
        </section>

    </div>
    <div class="detail" id="modal-tk">
        <div class="detail-sekolah">
            <div class="header-detail">
                <h3>TK Al-kautsar Bandar Lampung</h3>
                <a class="tombol tombol-close" href="#close">Close</a>
            </div>
            <div class="body-detail">
                <p>
                    Saya TK di Al-Kautsar Bandar Lampung dari tahun 2005 hingga tahun 2011.
                </p>
            </div>
        </div>
    </div>

    <div class="detail" id="modal-sd">
        <div class="detail-sekolah">
            <div class="header-detail">
                <h3>SD Al-Kautsar Bandar Lampung</h3>
                <a class="tombol tombol-close" href="#close">Close</a>
            </div>
            <div class="body-detail">
                <p>
                    Saya bersekolah di SD Al-Kautsar Bandar Lampung dari tahun 2005 hingga tahun 2011.
                </p>
            </div>
        </div>
    </div>

    <div class="detail" id="modal-smp">
        <div class="detail-sekolah">
            <div class="header-detail">
                <h3>SMP Negeri 22 Bandar Lampung</h3>
                <a class="tombol tombol-close" href="#close">Close</a>
            </div>
            <div class="body-detail">
                <p>
                    Saya bersekolah di SMP Negeri 22 Bandar Lampung dari tahun 2011 hingga tahun 2014.
                </p>
            </div>
        </div>
    </div>

    <div class="detail" id="modal-smk">
        <div class="detail-sekolah">
            <div class="header-detail">
                <h3>SMK Yadika Bandar Lampung</h3>
                <a class="tombol tombol-close" href="#close">Close</a>
            </div>
            <div class="body-detail">
                <p>
                    Saya bersekolah di SMK Yadika Bandar Lampung dari tahun 2014 hingga tahun 2017
                    Saya Mengambil Jurusan Otomotif (Mobil Dan Motor).
                </p>
            </div>
        </div>
    </div>


    <script src="/asset/js/style.js"></script>
</body>

</html>