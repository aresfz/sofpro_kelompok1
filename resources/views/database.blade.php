<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <!-- Meta Tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="Site keywords here">
		<meta name="description" content="">
		<meta name='copyright' content=''>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Title -->
        <title>Roadmap</title>
		
		<!-- Favicon -->
        <link rel="icon" href="img/favicon.png">
		
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{asset('roadmap')}}/css/bootstrap.min.css">
		<!-- Nice Select CSS -->
		<link rel="stylesheet" href="{{asset('roadmap')}}/css/nice-select.css">
		<!-- Font Awesome CSS -->
        <link rel="stylesheet" href="{{asset('roadmap')}}/css/font-awesome.min.css">
		<!-- icofont CSS -->
        <link rel="stylesheet" href="{{asset('roadmap')}}/css/icofont.css">
		<!-- Slicknav -->
		<link rel="stylesheet" href="{{asset('roadmap')}}/css/slicknav.min.css">
		<!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="{{asset('roadmap')}}/css/owl-carousel.css">
		<!-- Datepicker CSS -->
		<link rel="stylesheet" href="{{asset('roadmap')}}/css/datepicker.css">
		<!-- Animate CSS -->
        <link rel="stylesheet" href="{{asset('roadmap')}}/css/animate.min.css">
		<!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="{{asset('roadmap')}}/css/magnific-popup.css">
		
		<!-- Medipro CSS -->
        <link rel="stylesheet" href="{{asset('roadmap')}}/css/normalize.css">
        <link rel="stylesheet" href="{{asset('roadmap')}}/css/style.css">
        <link rel="stylesheet" href="{{asset('roadmap')}}/css/responsive.css">
		
    </head>
    <body>
	
		<!-- Preloader -->
        <div class="preloader">
            <div class="loader">
                <div class="loader-outter"></div>
                <div class="loader-inner"></div>

                <div class="indicator"> 
                    <svg width="16px" height="12px">
                        <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                        <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                    </svg>
                </div>
            </div>
        </div>
        <!-- End Preloader -->
		

	
		<!-- Header Area -->
		<header class="header" >
			
			<!-- Header Inner -->
			<div class="header-inner">
				<div class="container">
					<div class="inner">
						<div class="row">
							<div class="col-lg-3 col-md-3 col-12">
								
								<!-- Mobile Nav -->
								<div class="mobile-nav"></div>
								<!-- End Mobile Nav -->
							</div>
							<div class="col-lg-7 col-md-9 col-12">
                                <!-- Main Menu -->
                                <div class="main-menu">
                                    <nav class="navigation">
                                    <ul class="nav menu">
                                        <li class="menu-item">
                                            <a href="{{ route('web') }}" class="menu-link">Web Developer</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{ route('ui')}}" class="menu-link">UI / UX Designer</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{ route('database')}}" class="menu-link">Database Administrator</a>
                                        </li>
                                    </ul>
                                    </nav>
                                </div>
                                <!--/ End Main Menu -->
                            </div>
							
						</div>
					</div>
				</div>
			</div>
			<!--/ End Header Inner -->
		</header>
		<!-- End Header Area -->
		
		
		
		<!-- Start Why choose -->
		<section class="why-choose section" >
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Roadmap Jurusan RPL</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-12">
						<!-- Start Choose Left -->
						<div class="choose-left">
							<div class="d-flex align-items-center">
                                <h3>Database Administrator</h3>
                            </div>
                            <ul>
                                <h2>1. Pemahaman Dasar Database</h2>
                                <ul>
                                    <li><strong>Apa itu Database?</strong>
                                        <ul>
                                            <li><strong>Database:</strong> Kumpulan data yang disusun secara terstruktur dan dapat diakses, dikelola, dan diperbarui.</li>
                                            <li><strong>DBMS (Database Management System):</strong> Perangkat lunak yang mengelola, mengatur, dan memanipulasi database, seperti MySQL, PostgreSQL, atau Oracle.</li>
                                        </ul>
                                    </li>
                                    <li><strong>Jenis-Jenis Database:</strong>
                                        <ul>
                                            <li>Relasional (RDBMS): Contoh: MySQL, PostgreSQL, Oracle DB.</li>
                                            <li>NoSQL: Contoh: MongoDB, Cassandra.</li>
                                        </ul>
                                    </li>
                                </ul>

                                <h2>2. Riset dan Desain Database</h2>
                                <ul>
                                    <li><strong>Analisis Kebutuhan:</strong>
                                        <ul>
                                            <li>Menilai kebutuhan pengguna dan aplikasi untuk menentukan struktur database yang sesuai.</li>
                                            <li>Mengidentifikasi entitas, atribut, dan hubungan antar data.</li>
                                        </ul>
                                    </li>
                                    <li><strong>Desain Skema:</strong> Mendesain tabel dan relasi dalam database menggunakan ERD (Entity Relationship Diagram) atau diagram lainnya.</li>
                                    <li><strong>Normalisasi:</strong> Proses menyusun data untuk menghindari duplikasi dan inkonsistensi.</li>
                                </ul>

                                <h2>3. Pembuatan dan Pemeliharaan Database</h2>
                                <ul>
                                    <li><strong>Pembuatan Database:</strong> Membuat database baru, mendefinisikan tabel, relasi, dan indeks.</li>
                                    <li><strong>Pengelolaan Data:</strong>
                                        <ul>
                                            <li>Menambah, mengubah, atau menghapus data menggunakan SQL.</li>
                                            <li>Melakukan backup dan restore database secara rutin.</li>
                                        </ul>
                                    </li>
                                </ul>

                                <h2>4. Pengelolaan Keamanan dan Akses</h2>
                                <ul>
                                    <li><strong>Manajemen Pengguna:</strong> Membuat dan mengelola akun pengguna, memberikan hak akses yang sesuai (read, write, update, delete).</li>
                                    <li><strong>Keamanan Database:</strong> Enkripsi data sensitif, menerapkan firewall dan protokol keamanan lainnya.</li>
                                    <li><strong>Audit dan Logging:</strong> Memantau aktivitas database untuk mendeteksi potensi masalah atau ancaman keamanan.</li>
                                </ul>

                                <h2>5. Optimasi Kinerja Database</h2>
                                <ul>
                                    <li><strong>Indeksasi:</strong> Mengoptimalkan kueri dengan membuat indeks pada kolom yang sering digunakan dalam pencarian.</li>
                                    <li><strong>Query Optimization:</strong> Menyusun ulang kueri untuk meningkatkan kinerja eksekusi.</li>
                                    <li><strong>Monitoring:</strong> Menggunakan alat monitoring untuk memantau penggunaan sumber daya dan kinerja database.</li>
                                </ul>

                                <h2>6. Pengujian dan Backup</h2>
                                <ul>
                                    <li><strong>Backup Database:</strong> Menyiapkan strategi cadangan untuk mencegah kehilangan data.</li>
                                    <li><strong>Pengujian Keandalan:</strong> Melakukan pengujian pada kecepatan pemulihan data dan konsistensi database.</li>
                                    <li><strong>High Availability:</strong> Menyiapkan replikasi atau cluster untuk meningkatkan ketersediaan database.</li>
                                </ul>

                                <h2>7. Pembelajaran dan Sertifikasi</h2>
                                <ul>
                                    <li><strong>Belajar Alat Pengelola Database:</strong> Menguasai alat-alat seperti phpMyAdmin, Oracle SQL Developer, dan pgAdmin.</li>
                                    <li><strong>Ikuti Kursus dan Sertifikasi:</strong> Sertifikasi seperti Oracle DBA, Microsoft SQL Server Certification, atau MongoDB Certified DBA.</li>
                                    <li><strong>Praktek Mandiri:</strong> Membuat dan mengelola database untuk proyek-proyek pribadi atau open-source.</li>
                                </ul>

                                <h2>8. Karir di Database Administrator</h2>
                                <ul>
                                    <li><strong>Posisi Karir:</strong>
                                        <ul>
                                            <li>Database Administrator</li>
                                            <li>Database Architect</li>
                                            <li>Database Analyst</li>
                                            <li>Data Engineer</li>
                                        </ul>
                                    </li>
                                    <li><strong>Persiapan Portofolio:</strong> Sertakan studi kasus mengenai manajemen database, optimasi, dan pemulihan bencana dalam portofolio Anda.</li>
                                </ul>

                                                
						</div>
						<!-- End Choose Left -->
					</div>
						<!-- Start Choose Rights -->
						<div class="col-md-6">
							<div><img src="img/database-administrator-dba-slide3.png" style="width:max-content;" ></div>
                            <div><img src="img/database-administrator-dba-slide4.png" style="width:max-content;" ></div>

							<div>
								<img src="img/w3schools-logo-icon.png" style="width:100px;" class="mt-5 mr-4" >
								<img src="img/freecode.png" style="width:100px;" class="mt-5 mr-4" >
								<img src="img/codeacademy.png" style="width:100px;" class="mt-5 mr-4" >
							</div>	

						 </div>

						<!-- End Choose Rights -->
				</div>
			</div>
		</section>
		<!--/ End Why choose -->
		
		
	
		
		<!-- jquery Min JS -->
        <script src="{{asset('roadmap')}}/js/jquery.min.js"></script>
		<!-- jquery Migrate JS -->
		<script src="{{asset('roadmap')}}/js/jquery-migrate-3.0.0.js"></script>
		<!-- jquery Ui JS -->
		<script src="{{asset('roadmap')}}/js/jquery-ui.min.js"></script>
		<!-- Easing JS -->
        <script src="{{asset('roadmap')}}/js/easing.js"></script>
		<!-- Color JS -->
		<script src="{{asset('roadmap')}}/js/colors.js"></script>
		<!-- Popper JS -->
		<script src="{{asset('roadmap')}}/js/popper.min.js"></script>
		<!-- Bootstrap Datepicker JS -->
		<script src="{{asset('roadmap')}}/js/bootstrap-datepicker.js"></script>
		<!-- Jquery Nav JS -->
        <script src="{{asset('roadmap')}}/js/jquery.nav.js"></script>
		<!-- Slicknav JS -->
		<script src="{{asset('roadmap')}}/js/slicknav.min.js"></script>
		<!-- ScrollUp JS -->
        <script src="{{asset('roadmap')}}/js/jquery.scrollUp.min.js"></script>
		<!-- Niceselect JS -->
		<script src="{{asset('roadmap')}}/js/niceselect.js"></script>
		<!-- Tilt Jquery JS -->
		<script src="{{asset('roadmap')}}/js/tilt.jquery.min.js"></script>
		<!-- Owl Carousel JS -->
        <script src="{{asset('roadmap')}}/js/owl-carousel.js"></script>
		<!-- counterup JS -->
		<script src="{{asset('roadmap')}}/js/jquery.counterup.min.js"></script>
		<!-- Steller JS -->
		<script src="{{asset('roadmap')}}/js/steller.js"></script>
		<!-- Wow JS -->
		<script src="{{asset('roadmap')}}/js/wow.min.js"></script>
		<!-- Magnific Popup JS -->
		<script src="{{asset('roadmap')}}/js/jquery.magnific-popup.min.js"></script>
		<!-- Counter Up CDN JS -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="{{asset('roadmap')}}/js/bootstrap.min.js"></script>
		<!-- Main JS -->
		<script src="{{asset('roadmap')}}/js/main.js"></script>
        <script>
            // JavaScript to add 'active' class to the clicked menu
            document.addEventListener("DOMContentLoaded", function() {
                const menuLinks = document.querySelectorAll('.menu-link');
                
                menuLinks.forEach(link => {
                    link.addEventListener('click', function() {
                        menuLinks.forEach(link => link.classList.remove('active'));
                        this.classList.add('active');
                    });
                });
            });
        </script>
    </body>
</html>