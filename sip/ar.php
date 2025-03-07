<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel Kesehatan</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
body {
    height: 200vh; /* Membuat body dua kali tinggi viewport */
    margin: 0; /* Menghapus margin default */
    background-color: #e0f7fa; /* Warna dasar */
    background-image: 
        radial-gradient(circle, rgba(0, 255, 0, 0.2) 0%, rgba(0, 255, 0, 0) 70%),
        radial-gradient(circle, rgba(0, 204, 0, 0.2) 0%, rgba(0, 204, 0, 0) 70%),
        radial-gradient(circle, rgba(0, 153, 0, 0.2) 0%, rgba(0, 153, 0, 0) 70%),
        radial-gradient(circle, rgba(0, 102, 0, 0.2) 0%, rgba(0, 102, 0, 0) 70%),
        radial-gradient(circle, rgba(0, 255, 0, 0.2) 0%, rgba(0, 255, 0, 0) 70%),
        radial-gradient(circle, rgba(0, 204, 0, 0.2) 0%, rgba(0, 204, 0, 0) 70%),
        radial-gradient(circle, rgba(0, 153, 0, 0.2) 0%, rgba(0, 153, 0, 0) 70%),
        radial-gradient(circle, rgba(0, 102, 0, 0.2) 0%, rgba(0, 102, 0, 0) 70%),
        radial-gradient(circle, rgba(0, 255, 0, 0.2) 0%, rgba(0, 255, 0, 0) 70%),
        radial-gradient(circle, rgba(0, 204, 0, 0.2) 0%, rgba(0, 204, 0, 0) 70%),
        radial-gradient(circle, rgba(0, 153, 0, 0.2) 0%, rgba(0, 153, 0, 0) 70%),
        radial-gradient(circle, rgba(0, 102, 0, 0.2) 0%, rgba(0, 102, 0, 0) 70%),
        radial-gradient(circle, rgba(0, 255, 0, 0.2) 0%, rgba(0, 255, 0, 0) 70%),
        radial-gradient(circle, rgba(0, 204, 0, 0.2) 0%, rgba(0, 204, 0, 0) 70%),
        radial-gradient(circle, rgba(0, 153, 0, 0.2) 0%, rgba(0, 153, 0, 0) 70%),
        radial-gradient(circle, rgba(0, 102, 0, 0.2) 0%, rgba(0, 102, 0, 0) 70%);

    background-position: 
        50% 50%, 70% 30%, 
        30% 70%, 90% 10%, 
        20% 80%, 60% 20%, 
        80% 60%, 10% 10%, 
        40% 40%, 90% 90%, 
        70% 70%, 10% 20%, 
        30% 40%, 50% 60%, 
        80% 10%, 90% 30%; /* Posisi gradien yang lebih banyak */
        
    background-repeat: no-repeat; /* Tidak mengulang */
    background-size: 250px 250px; /* Ukuran gradien yang lebih besar */
    animation: waves 15s ease-in-out infinite; /* Animasi lebih halus dan cepat */
}

@keyframes waves {
    0% {
        background-position: 
            50% 50%, 70% 30%, 
            30% 70%, 90% 10%, 
            20% 80%, 60% 20%, 
            80% 60%, 10% 10%, 
            40% 40%, 90% 90%, 
            70% 70%, 10% 20%, 
            30% 40%, 50% 60%, 
            80% 10%, 90% 30%; /* Posisi awal */
    }
    50% {
        background-position: 
            60% 40%, 80% 20%, 
            40% 80%, 100% 0%, 
            30% 50%, 70% 30%, 
            20% 70%, 10% 60%, 
            50% 20%, 90% 90%, 
            60% 80%, 40% 50%, 
            80% 30%, 90% 70%; /* Pertengahan dengan posisi lebih teratur */
    }
    100% {
        background-position: 
            50% 50%, 70% 30%, 
            30% 70%, 90% 10%, 
            20% 80%, 60% 20%, 
            80% 60%, 10% 10%, 
            40% 40%, 90% 90%, 
            70% 70%, 10% 20%, 
            30% 40%, 50% 60%, 
            80% 10%, 90% 30%; /* Kembali ke posisi awal */
    }
}




        .container-ar {
            padding: 20px;
        }
        
        .card {
            background-color: #f8f9fa;
            border: 1px solid #ddd;
            border-radius: 5px;
            max-width: 300px; 
            margin: auto; /* Pusatkan kartu */
        }

        .card-img-top {
            height: 200px;
            object-fit: cover; /* Agar gambar tetap proporsional */
        }

        .card:active {
            transform: translateY(-5px); /* Geser kartu ke atas */
            transition: transform 0.1s ease; /* Animasi geser */
        }

        .card:hover {
            transform: scale(1.05); /* Memperbesar kartu saat hover */
            transition: transform 0.2s ease; /* halus */
        }
       


footer {
    position: relative;
    overflow: hidden;
    padding: 20px;
    text-align: center;
    margin-top: 20px;
    background-color: #2c3e50; /* Latar belakang gelap */
    color: #ecf0f1; /* Warna teks cerah */
}

.footer-wave {
    position: absolute;
    top: 0;
    left: 50%;
    width: 300%; /* Lebar lebih besar untuk ombak lebih lebar */
    height: 100%; /* Tinggi sama dengan footer */
    background-image: radial-gradient(circle, rgba(0, 255, 128, 0.3) 0%, rgba(0, 128, 0, 0) 80%); /* Mengubah opasitas */
    animation: wave-animation 10s linear infinite; /* Animasi gelombang lebih halus */
    transform: translateX(-50%); /* Pusatkan gelombang */
    filter: blur(10px); /* Blur untuk efek halus */
    opacity: 0.8; /* Opasitas untuk efek lebih lembut */
    z-index: 0; /* Agar berada di belakang konten */
}

@keyframes wave-animation {
    0% {
        background-position: 0 0; /* Posisi awal */
    }
    100% {
        background-position: 200% 200%; /* Posisi akhir, lebih jauh untuk gerakan halus */
    }
}

.whatsapp-button {
    display: inline-block;
    margin-top: 10px;
    padding: 10px 20px; /* Mengurangi padding */
    font-size: 14px; /* Mengurangi ukuran font */
    background-color: #25D366; /* Warna tombol WA */
    color: white;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s, transform 0.2s; /* Efek transisi */
    position: relative; /* Agar tombol tetap di atas */
    z-index: 1; /* Agar tombol berada di atas efek */
}

.whatsapp-button:hover {
    background-color: #128C7E; /* Warna saat hover */
    transform: scale(1.05); /* Memperbesar sedikit saat hover */
    text-decoration: none;
    color: white;
}

.whatsapp-button:active {
    animation: pulse-animation 0.5s; /* Animasi saat diklik */
    text-decoration: none;
    color: white;
}

@keyframes pulse-animation {
    0% {
        transform: scale(1); /* Ukuran normal */
    }
    50% {
        transform: scale(1.1); /* Membesar sedikit */
    }
    100% {
        transform: scale(1); /* Kembali ke ukuran normal */
    }
}

.footer-content {
    display: flex; /* Menggunakan flexbox untuk tata letak */
    align-items: center; /* Memastikan konten vertikal tengah */
    color: #ecf0f1; /* Warna teks cerah */
}


.footer-image {
    width: 100px; /* Atur lebar gambar sesuai kebutuhan */
    height: auto; /* Biarkan tinggi otomatis untuk menjaga proporsi */
    margin-right: 20px; /* Jarak antara gambar dan konten */
    animation: glow 1.5s infinite alternate; /* Efek nyala */
}

@keyframes glow {
    0% {
        filter: drop-shadow(0 0 5px rgba(255, 255, 255, 0.5));
    }
    100% {
        filter: drop-shadow(0 0 15px rgba(0, 255, 0, 1));
    }
}

.contact-us p {
    text-align: left; /* Mengatur teks menjadi rata kiri */
    margin: 5px 0; /* Mengatur margin agar lebih rapi */
}

.contact-us h3 {
    text-align: left; /* Mengatur h3 menjadi rata kiri */
    margin: 10px 0; /* Mengatur margin agar lebih rapi */
}
    </style>
<body>
<section class="container-fluid" id="ak">
  <br>  <h2 class="text-center mb-4"><img src="aset/yy.png" alt="Logo" class="logo-image">Artikel Kesehatan</h2>
    <div class="container-ar">
        <div class="row">
            <!-- Kartu yang sudah ada -->
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="aset/y.jpg" class="card-img-top" alt="Artikel">
                    <div class="card-body">
                        <h5 class="card-title">Pola Hidup Sehat di Zaman yang Sehat dan Modern</h5>
                        <p class="card-text">Mengetahui pola hidup sehat yang benar.</p>
                        <p><span>19000 views</span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="aset/y.jpg" class="card-img-top" alt="Artikel">
                    <div class="card-body">
                        <h5 class="card-title">Tidak bisa berhenti memikirkan organ tubuh? Kelainan Berpikir</h5>
                        <p class="card-text">Terjadi karena over fokus??</p>
                        <p><span>15000 views</span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="aset/y.jpg" class="card-img-top" alt="Artikel">
                    <div class="card-body">
                        <h5 class="card-title">Penyebab Mual Saat Berjalan</h5>
                        <p class="card-text">Teknik mengendalikan Pikiran yang kacau</p>
                        <p><span>20000 views</span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="aset/y.jpg" class="card-img-top" alt="Artikel">
                    <div class="card-body">
                        <h5 class="card-title">Apa Cek Kesehatan itu Penting?</h5>
                        <p class="card-text">Dilnsir dari berbagai sumber menegenai tindakan</p>
                        <p><span>18000 views</span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="aset/y.jpg" class="card-img-top" alt="Artikel">
                    <div class="card-body">
                        <h5 class="card-title">Cara Merawat Hewan Peliharaan agar Terjaga kesehatan dan Kebersihannya</h5>
                        <p class="card-text">Disajikan tata cara tindak kesehatan</p>
                        <p><span>21000 views</span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="aset/y.jpg" class="card-img-top" alt="Artikel">
                    <div class="card-body">
                        <h5 class="card-title">Pusing Saat Melihat Sesuatu</h5>
                        <p class="card-text">Artikel ini Membahas Hal-hal Mengenai Syaraf dan Jaringan Otak Manusia</p>
                        <p><span>22000 views</span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="aset/y.jpg" class="card-img-top" alt="Artikel">
                    <div class="card-body">
                        <h5 class="card-title">Kapan Tubuh Kita Merasa Lelah? Apa yang Menyebabkan Lelah?</h5>
                        <p class="card-text">Semua sesuatu mengenai batas kekuatan tubuh</p>
                        <p><span>23000 views</span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="aset/y.jpg" class="card-img-top" alt="Artikel">
                    <div class="card-body">
                        <h5 class="card-title">Kenapa Rabun bisa Menurun? Rabun Adalah Penyakit Keturunan!</h5>
                        <p class="card-text">Disajikan fakta menarik terkait rabun </p>
                        <p><span>24000 views</span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="aset/y.jpg" class="card-img-top" alt="Artikel">
                    <div class="card-body">
                        <h5 class="card-title">Kenapa Rasa Malas Bisa Tercipta? Hormon apa Pemicunya? Simak selengkanya</h5>
                        <p class="card-text">Deskripsi singkat artikel kesehatan 9.</p>
                        <p><span>25000 views</span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="aset/y.jpg" class="card-img-top" alt="Artikel">
                    <div class="card-body">
                        <h5 class="card-title">Kekurangan Cairan Tubuh Bisa Menyebabkan Kematian, disertai Penanggulangannya</h5>
                        <p class="card-text">Deskripsi singkat artikel kesehatan 10.</p>
                        <p><span>26000 views</span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="aset/y.jpg" class="card-img-top" alt="Artikel">
                    <div class="card-body">
                        <h5 class="card-title">Apa jadinya Jika Dunia Tanpa Medis, dan Seperti apa Gambarannya? Masikah kita Hidup?</h5>
                        <p class="card-text">Deskripsi singkat artikel kesehatan 11.</p>
                        <p><span>27000 views</span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="aset/y.jpg" class="card-img-top" alt="Artikel">
                    <div class="card-body">
                        <h5 class="card-title">Medis Menolong Kehidupan yang ada di Dunia dan Menolong Keanusiaan yang ada</h5>
                        <p class="card-text">Deskripsi singkat artikel kesehatan 12.</p>
                        <p><span>28000 views</span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="aset/y.jpg" class="card-img-top" alt="Artikel">
                    <div class="card-body">
                        <h5 class="card-title">Artikel Kesehatan Palsu dan Cara Membedakannya</h5>
                        <p class="card-text">Deskripsi singkat artikel kesehatan 13.</p>
                        <p><span>29000 views</span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="aset/y.jpg" class="card-img-top" alt="Artikel">
                    <div class="card-body">
                        <h5 class="card-title">Kelebihan Darah Putih(Leukimia)</h5>
                        <p class="card-text">Deskripsi singkat artikel kesehatan 14.</p>
                        <p><span>30000 views</span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="aset/y.jpg" class="card-img-top" alt="Artikel">
                    <div class="card-body">
                        <h5 class="card-title">Faktor Rusaknya Pembulu Darah</h5>
                        <p class="card-text">Deskripsi singkat artikel kesehatan 15.</p>
                        <p><span>31000 views</span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="aset/y.jpg" class="card-img-top" alt="Artikel">
                    <div class="card-body">
                        <h5 class="card-title">Bahaya Obesitas Usia Dini, Termasuk Ciri-cirinya</h5>
                        <p class="card-text">Deskripsi singkat artikel kesehatan 16.</p>
                        <p><span>32000 views</span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="aset/y.jpg" class="card-img-top" alt="Artikel">
                    <div class="card-body">
                        <h5 class="card-title">Kebiasaan Buruk yang Perlu Hilangkan</h5>
                        <p class="card-text">Deskripsi singkat artikel kesehatan 17.</p>
                        <p><span>33000 views</span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="aset/y.jpg" class="card-img-top" alt="Artikel">
                    <div class="card-body">
                        <h5 class="card-title">Jangan Tidur Lewat jam 10 Malam</h5>
                        <p class="card-text">Deskripsi singkat artikel kesehatan 17.</p>
                        <p><span>33000 views</span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="aset/y.jpg" class="card-img-top" alt="Artikel">
                    <div class="card-body">
                        <h5 class="card-title">Makan Makanan Bergisi itu Penting</h5>
                        <p class="card-text">Deskripsi singkat artikel kesehatan 17.</p>
                        <p><span>33000 views</span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="aset/y.jpg" class="card-img-top" alt="Artikel">
                    <div class="card-body">
                        <h5 class="card-title">Radiasi Alat Elektronik pada Otak, terutama Wifi</h5>
                        <p class="card-text">Deskripsi singkat artikel kesehatan 17.</p>
                        <p><span>33000 views</span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="aset/y.jpg" class="card-img-top" alt="Artikel">
                    <div class="card-body">
                        <h5 class="card-title">Olahraga Adalah Kunci Hidup Lama</h5>
                        <p class="card-text">Deskripsi singkat artikel kesehatan 17.</p>
                        <p><span>33000 views</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="footer-wave"></div>
    <div class="footer-content">
        <img src="aset/logo.png" alt="Gambar" class="footer-image">
        <div class="text-content">
            <div class="contact-us">
                <h3>Kontak Kami</h3>
                <p>Alamat: JL....... Wonosobo</p>
                <p>Nomor: 021-001-098-12</p>
                <p>Email: Medismedia@gmail.com</p>
                <a href="https://wa.me/088220283974" class="whatsapp-button">Hubungi kami via WA</a>
            </div>
        </div>
        <b><p>"Artikel terbaru akan segera ditambahkan! Dapatkan informasi terbaru dan terpercaya tentang kesehatan dari kami. Untuk kebutuhan pelayanan kesehatan yang optimal, percayakan pada Rumah Sakit Islam Universe, di mana kami berkomitmen untuk menyediakan konten berkualitas demi kesehatan Anda."</p></b>

        </div>

</footer>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    const wave = document.querySelector('.footer-wave');

    function animateWaves() {
        let waveHeight = Math.random() * 10; // Tinggi gelombang acak
        wave.style.transform = `translate(-50%, ${waveHeight}px)`;
    }

    setInterval(animateWaves, 1000); // Ubah posisi gelombang setiap detik
</script>


</body>
</html>
