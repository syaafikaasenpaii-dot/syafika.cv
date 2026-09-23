<?php
$pesan_status = "";
if ($_SERVER["REQUEST_METHOD"] == "POST"  && isset($_POST['btn_kirim'])) {
    $nama = htmlspecialchars($_POST['txt_nama']);
    $email = htmlspecialchars($POST['txt_email']);
    $pesan = htmlspecialchars($POST['txt_pesan']);

    if (!empty($nama) && !empty($email) && !empty($pesan)) {
        $pesan_status = "<div class='alert-success'>Terimakasih
        <strong>$nama</strong>, Pesan Anda Telah Berhasil Dikirim ke Server SMKN 5 BATAM!
        </div>";
    } else {
        $pesan_status = "<div class='alert-error'>Semua field harus diisi!</div>";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Nursyafika - SMKN 5 BATAM</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <header>
            <div class="profile-info">
                <div class="avatar">👤</div>
            </div>
            <h1 style="margin:0;">Nursyafika</h1>
            <p style="margin:5px 0 0 0; color: pink;">Siswa Teknik Komputer dan Jaringan SMKN 5 BATAM</P>
</div>
</div>
<nav>
    <a href="#profile">Home</a>
    <a href="#skills">skills</a>
    <a href="#kontak">kontak</a>
    <button id="btn-theme" onclick="toggleTheme()">🌙 Dark Mode</button>
</nav>
</header>

<div class="main-content">
    <div class="left-column">
        <div class="card" id="profile">
            <h2>PROFIL</h2>
            <h3>👩‍🔬 BIODATA</h3>
            <p>Siswa aktif dan praktisi di bidang teknik komputer dan jaringan dengan fokus pada administrasi server dan jaringan.</p>

            <h3>🎓 PENDIDIKAN</h3>
            <ul>
                <li>LULUSAN SD HIDAYATULLAH BATAM </li>
                <li>LULUSAN SMPN 36 BATAM</li>
</ul>
             <h3>🏨 PENGALAMAN BELAJAR</h3>
             <ul>
                <li>praktik crimping kabel</li>
                <li>praktik pc</li>
</ul>
</div>
</div>
            <div class="right-column">
                <div class="card" id="skills">
                <h2>NETWORK SKILLS</h2>

                <div class="skill-item">
                    <span class="skill-name">WEB DEVELOPER</span>
                    <div class="progress-bar">
                        <div class="progress-fill" style="width" 90%></div>
                    </div>
                </div>
                 <div class="skill-item">
                    <span class="skill-name">MIKROTIK</span>
                    <div class="progress-bar">
                        <div class="progress-fill" style="width" 85%></div>
            </div>
            </div>
                   <div class="skill-item">
                    <span class="skill-name">CRIMPING CABEL</span>
                    <div class="progress-bar">
                        <div class="progress-fill" style="width" 80%></div>
                          </div>
                       </div>
                    </div>

                    <div class="card" id="kontak">
                    <h2>FORM KONTAK</h2>

                    <?php echo $pesan_status; ?>

                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                        <div class="form-group">
                            <label for="nama">Nama Lengkap:</label>
                            <input type="text" id="nama" name="txt_nama" placeholder="Masukkan nama..." required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="txt_nama" placeholder="Masukkan email..." required>
                        </div>

                        <div class="form-group">
                            <label for="pesan">Pesan:</label>
                            <textarea id="pesan" id="pesan" name="txt_nama" placeholder="Masukkan pesan..." rows="4" required></textarea>
                        </div>

                        <button type="submit" name="btn_kirim" class="btn">KIRIM PESAN</button>
</form>
</div>
</div>
</div>
</div>
                          <script src="script.js"></script>


    
</body>
</html>