<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>layaan kesehatan</title>
    <link rel="stylesheet" href="gaya.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="icon" href="aset/f.png" type="image/png">
</head>
<body>
    <!-- Bg Particles !-->
    <div id="particles-js"></div>

    <!-- Navbar !-->
    <header>
        <nav class="navbar">
        <div class="logo">
   <img src="aset/yy.png" alt="Logo" class="logo-image"> MEDIS MEDIA
</div>
           <!--  <div class="logo">MEDIS MEDIA</div>!!-->
            <ul class="nav-links">
                <li class="dropdown">
                    <a href="#">Layanan</a>
                    <ul class="dropdown-menu">
                        <li><a href="#pk">Pendaftaran Virtual</a></li>
                        <li><a href="#k">Konsultasi</a></li>
                    </ul>
                </li>
                <li><a href="#ttg">Tentang Kami</a></li>
                <li><a href="#pa">Ahli</a></li>
                <li class="dropdown">
                    <a href="#">Informasi</a>
                    <ul class="dropdown-menu">
                        <li><a href="#ak">Artikel Kesehatan</a></li>
                        <li><a href="#s">Spesialisasi</a></li>
                        <li><a href="#facility">Fasilitas</a></li>
                        <li><a href="#jk">Jam Kerja</a></li>
                    </ul>
                </li>
                <li class="dropdown p-d">
    <img src="aset/e.png" alt="Profile" class="profile-icon" onclick="toggleDropdown()">
    <ul class="dropdown-menu1" id="profileDropdown">
        <li><a href="login/login.php">Profil</a></li>
        <li><a href="#">Setting</a></li>
        <li><a href="#">Logout</a></li>
    </ul>
</li>
            </ul>
        </nav>
    </header>

    <div class="hero-section">
  <img src="aset/logo.png" alt="Logo" width="300" height="300" class="d-inline-block align-top">
</div>
<h3 class="text-center">Biografi Rumah Sakit</h3>
<!-- Section Gambar 2 kae -->
<div class="section-images" id="ttg">
    <div class="image-a"> 
        <img src="aset/rs.png" alt="Gambar a" width="350" height="350">
    </div>
    <div class="biografi">
        <p>Rumah Sakit Islam Universe (RSIU) didirikan pada tahun 2005 sebagai komitmen untuk menyediakan layanan kesehatan berkualitas berbasis nilai-nilai Islam. Awalnya dimulai dari klinik kecil oleh sekelompok dokter muslim Indonesia, rumah sakit ini kini berkembang dengan berbagai spesialisasi dan teknologi modern.

<br> Visi utama rumah sakit ini adalah menyebarluaskan kesehatan ke seluruh Indonesia, menjadikan layanan kesehatan terjangkau bagi semua. Misinya adalah memberikan pelayanan yang mengutamakan aspek medis dan spiritual, serta melakukan program sosial untuk meningkatkan kesehatan masyarakat.</p>
    </div>
    <div class="image-b">
    <img src="aset/ii.png" alt="Gambar b"> 
</div>
</div>
<br><br><br>

<div class=" my-5 bg3 container-fluid" id="pa">
  <h3 class="text-center">Para ahli</h3>
  <div class="scrolling-wrapper">
  <div class="card card-expert">
      <div class="card-body">
        <img src="aset/d2.png" alt="Bedah" class="img-fluid">
        <h5 class="card-title text-center">Dokter Spesialis Bedah Umum</h5>
        <p class="card-subtitle text-center">dr. Enny Utaya Sp. B</p>
      </div>
    </div>
    <div class="card card-expert">
      <div class="card-body">
        <img src="aset/d1.png" alt="Gigi" class="img-fluid">
        <h5 class="card-title text-center">Dokter Spesialis Gigi</h5>
        <p class="card-subtitle text-center">drg. Hery Gunadi Sp. BM</p>
      </div>
    </div>
    <div class="card card-expert">
      <div class="card-body">
        <img src="aset/d3.png" alt="Syaraf" class="img-fluid">
        <h5 class="card-title text-center">Dokter Spesialis Syaraf</h5>
        <p class="card-subtitle text-center">dr. Nilamsari Sp.S </p>
      </div>
    </div>
  </div>
</div>
<br>
<section class="spesialisasi" id="s">
<h3 class="text-center">Spesialisasi</h3>
  <p>Ini adalah macam-macam spesialisasi yang kami sediakan</p>
  <div class="slider-container">
      <button class="prev" onclick="moveLeft()">&#10094;</button>
      <div class="slider">
          <div class="slides">
              <div class="slide"><img src="aset/baby.png" alt="Bayi"><p>Bayi</p></div>
              <div class="slide"><img src="aset/gigi.jpg" alt="Gigi"><p>Gigi</p></div>
              <div class="slide"><img src="aset/jantung.jpg" alt="Jantung"><p>Jantung</p></div>
              <div class="slide"><img src="aset/bedah.jpg" alt="Bedah"><p>Bedah</p></div>
              <div class="slide"><img src="aset/telinga.jpg" alt="Telinga"><p>Telinga</p></div>
              <div class="slide"><img src="aset/virus.jpg"alt="Viral"><p>Viral</p></div>
              <div class="slide"><img src="aset/vaksin.png" alt="Vaksin"><p>Vaksin</p></div>
          </div>
      </div>
      <button class="next" onclick="moveRight()">&#10095;</button>
  </div>
</section>
<br><br>
<section class="container-fluid facility-section" id="facility">
    <h3 class="text-center">Fasilitas</h3>
    <p class="text-center">
Rumah Sakit Islam Universe menawarkan fasilitas modern dan lengkap untuk memastikan kenyamanan serta keselamatan pasien. 
Dengan bangunan yang dirancang secara arsitektural modern dan ramah lingkungan, ruang tunggu nyaman, 
serta aksesibilitas yang baik, rumah sakit ini memiliki berbagai kelas ruang rawat inap yang dilengkapi dengan fasilitas terkini. 
Unit Gawat Darurat (UGD) beroperasi 24 jam dengan peralatan medis canggih,
sementara laboratorium menggunakan teknologi otomatisasi tinggi untuk hasil tes cepat dan akurat. 
Fasilitas radiologi kami mencakup mesin MRI, CT Scan, dan X-ray digital untuk diagnosis yang tepat, 
sedangkan ruang operasi memenuhi standar internasional dengan sistem pemantauan canggih. 
Klinik spesialis yang ada meliputi berbagai bidang, ditangani oleh dokter berpengalaman, 
serta layanan rehabilitasi medis dan fisioterapi yang dilengkapi alat modern untuk pemulihan pasien. 
Kami juga menawarkan layanan kesehatan mental dengan pendekatan holistik dan aktif dalam program edukasi kesehatan masyarakat, 
menjadikan Rumah Sakit Islam Universe sebagai tempat di mana kesehatan dan kesejahteraan setiap individu menjadi prioritas utama.
    </p>
</section>

<?php
require_once('../sip/konek.php');
$sql = "SELECT * FROM jadwal"; 
$result = $konek->query($sql);
?>
<br>
<div class="t-section" id="jk">
<h3 class="text-center">Jam Kerja</h3>
        <table>
            <tr>
                <th>Spesialisasi Umum</th>
                <th>Spesialisasi Khusus</th>
                
            </tr></div>
            
            <?php
            if ($result->num_rows > 0) {
                // Output data dari setiap baris
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["Spesialisasi Umum"]. "</td><td>" . $row["Spesialisasi Khusus"]. "</td></tr>";
                }
            } else {
                echo "<tr><td colspan='3'>Tidak ada data</td></tr>";
            }
            $konek->close(); // Tutup konek
            ?>
 </table> 
</div> 

<div class="container-k"id="k">
    <!-- Form Keluhan -->
    <div class="form-box form-k">
        <h2>Tulis keluhan Anda</h2>
        <form>
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama">

            <label for="nik">NIK</label>
            <input type="text" id="nik" name="nik">

            <label for="keluhan">Keluhan</label>
            <textarea id="keluhan" name="keluhan"></textarea>

            <button type="submit" class="submit-btn">Kirim</button>
        </form>
    </div>

    <!-- Separator -->
    <div class="separator"></div>

    <!-- Form Pendaftaran Virtual -->
    <div class="form-box form-d" id="pk">
        <h2>Pendaftaran Virtual</h2>
        <form>
            <label for="nama-daftar">Nama</label>
            <input type="text" id="nama-daftar" name="nama">

            <label for="nik-daftar">NIK</label>
            <input type="text" id="nik-daftar" name="nik">

            <label for="jenis">Jenis Pelayanan</label>
            <select id="jenis" name="jenis">
                <option value="rawat-inap">Pelayanan Rawat Inap</option>
                <option value="rawat-jalan">Pelayanan Rawat Jalan</option>
                <option value="rawat-jalan">Pelayanan Gawat Darurat</option>
                <option value="rawat-jalan">Pelayanan Kanker Terpadu</option>
                <option value="rawat-jalan">Pelayanan Kedokteran Nuklir</option>
                <option value="rawat-jalan">Pelayanan Ibu dan Anak Terpadu</option>
            </select>

            <label for="bpjs">Upload BPJS/KIS</label>
            <input type="file" id="bpjs" name="bpjs">

        <button type="submit" class="submit-btn">Kirim</button>
   
        </form>
    </div>
</div>
<br><br>

<section class="container-fluid" id="ak">
    <h3 class="text-center mb-4">Artikel Kesehatan</h3> <br>
    <div class="container-ar">
        <div class="row">
            <div class="col-md-3 mb-4" onclick="window.location.href='bacaar.html'";>
                <div class="card card-article">
                    <img src="aset/y.jpg" class="card-img-top" alt="Artikel">
                    <div class="card-body">
                        <h5 class="card-title">Pola Hidup Sehat</h5>
                        <p class="card-text">Mengetahui pola hidup sehat yang benar.</p>
                        <p><span>19000 views</span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card card-article">
                    <img src="aset/y.jpg" class="card-img-top" alt="Artikel">
                    <div class="card-body">
                        <h5 class="card-title">Nutrisi Seimbang untuk Anak Sehat</h5>
                        <p class="card-text">Kebiasaan makan yang baik pada anak sangat penting untuk pertumbuhan dan perkembangan mereka.</p>
                        <p><span>15000 views</span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card card-article">
                    <img src="aset/y.jpg" class="card-img-top" alt="Artikel">
                    <div class="card-body">
                        <h5 class="card-title">Manfaat Pare Untuk Penderita Kanker</h5>
                        <p class="card-text">Pare termasuk kedalam golongan sayur yang kaya akan vitamin C unuk kekebalan dan kesehatan kulit</p>
                        <p><span>20000 views</span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card card-article">
                    <img src="aset/y.jpg" class="card-img-top" alt="Artikel">
                    <div class="card-body">
                        <h5 class="card-title">Bahaya Mengkonsumsi NARKOBA</h5>
                        <p class="card-text">Seringkali banyak kedai yang menjual obat keras tanpa resep dokter sama sekali.</p>
                        <p><span>18000 views</span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card card-article">
                    <img src="aset/y.jpg" class="card-img-top" alt="Artikel">
                    <div class="card-body">
                        <h5 class="card-title">Cara Mengelola Stres di Kehidupan Sehari-hari</h5>
                        <p class="card-text">Artikel ini menjelaskan berbagai teknik manajemen stres.</p>
                        <p><span>21000 views</span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card card-article">
                    <img src="aset/y.jpg" class="card-img-top" alt="Artikel">
                    <div class="card-body">
                        <h5 class="card-title">Pola Hidup Sehat untuk Kesejahteraan Optimal</h5>
                        <p class="card-text">Dalam artikel ini, kita akan membahas pentingnya pola hidup sehat dan cara-cara sederhana untuk mencapainya.</p>
                        <p><span>22000 views</span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card card-article">
                    <img src="aset/y.jpg" class="card-img-top" alt="Artikel">
                    <div class="card-body">
                        <h5 class="card-title">Pentingnya Tidur yang Cukup</h5>
                        <p class="card-text">Tidur yang berkualitas sangat penting untuk kesehatan fisik dan mental.</p>
                        <p><span>23000 views</span></p>
                    </div>
                    </div>
                    </div>
            <div class="col-md-3 mb-4">
                <div class="card card-article text-center" style="background-color: #f8f9fa;"> 
                    <img src="aset/app.png" class="card-img-top" alt="See More" style="height: 150px; object-fit: contain;"> 
                    <div class="card-body">
                        <h5 class="card-title">Lihat Artikel Lebih Banyak</h5>
                       <!--<p class="card-text">Lihat semua</p>!-->
                       <a href="ar.php" class="btn btn-primary">Lihat Semua</a>
                       <!--btn liat banyak !-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<footer>
                      <div class="footer-content">
                          <!-- Navigasi Footer !-->
                          <div class="footer-nav">
                              <div class="footer-column">
                                  <h3>Layanan</h3>
                                  <ul>
                                      <li><a href="#k">Konsultasi Virtual</a></li>
                                      <li><a href="#pk">Pendaftaran Virtual</a></li>
                                  </ul>
                              </div>
                              <div class="footer-column">
                                  <h3>Informasi</h3>
                                  <ul>
                                      <li><a href="#ak">Artikel Kesehatan</a></li>
                                      <li><a href="#s">Spesialisasi</a></li>
                                      <li><a href="#facility">Fasilitas</a></li>
                                      <li><a href="#jk">Jam Kerja</a></li>
                                  </ul>
                              </div>
                              <div class="footer-column">
                              <ul>
                              <li><a href="#ttg"><h3>Tentang Kami</h3></a></li>
                              </ul>
                                  <ul>
                                      <li><a href="#pa"><h3>Ahli</h3></a></li>
                                  </ul>
                              </div>
                          </div>
                          
              
                          <!-- Kontak Kami -->
                          <div class="contact-us">
                              <h3>KONTAK KAMI</h3>
                              <p>Alamat : JL....... Wonosobo</p>
                              <p>Nomor : 021-001-098-12</p>
                              <p>Email : Medismedia@gmail.com</p>
                              <a href="https://wa.me/088220283974" class="whatsapp-button">Hubungi kami via WA</a>
                          </div>
                      </div>
                  </footer>

    <script src="main.js"></script>
</body>
</html>
