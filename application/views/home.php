<form action="<?= site_url('cek') ?>" novalidate>
    <header class="masthead">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end">
                    <h1 class="text-white font-weight-bold">PENGUMUMAN KELULUSAN</h1>
                    <h2 class="text-white font-weight-bold"> <?= $identitas['nama_sekolah'] ?> </h2>
                    <h2 class="text-white font-weight-bold">Tahun Ajaran <?= $jadwal['tahun_ajaran'] ?></h2>
                    <hr class="divider" />
                </div>
                <div id="timerWraper" class="col-lg-6 align-self-baseline visually-hidden">
                    <div class="alert alert-dismissable alert-danger">
                        <h4>Pengumuman dibuka dalam</h4>
                        <h6 id="timer"></h6>
                    </div>
                </div>
                <div id="formWraper" class="col-lg-6 align-self-baseline visually-hidden">
                    <form action="<?= site_url('cek') ?>" novalidate>
                        <input class="form-control mb-0" id="noujian" name="nisn" type="text" placeholder="Masukan Nomor Induk Siswa Nasional (NISN)" data-sb-validations="required" required />
                        <p class="text-white-75 mb-3">Masukan Nomor NISN Contoh: 1234509876</p>
                        <button type="submit" id="cek-lulus" class="cek-lulus btn btn-primary btn-xl">Cek Kelulusan</button>
                    </form>
                </div>
            </div>
        </div>
    </header>
</form>
<!-- About-->
<section class="page-section bg-primary" id="about">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="text-white mt-0">Tentang aplikasi Lulus Bareng!</h2>
                <hr class="divider divider-light" />
                <p class="text-white-75 mb-4">Lulus Bareng adalah aplikasi sistem informasi pengumuman kelulusan ujian nasional online yang memudahkan para murid tidak perlu datang ke sekolah lagi. Dan menghemat anggaran sekolah.</p>
                <a class="btn btn-primary btn-xl" href="#contact">Hubungi Kami!</a>
            </div>
        </div>
    </div>
</section>
<!-- Services-->
<section class="page-section" id="contact">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-8 col-xl-6 text-center">
                <h2 class="mt-0">Mari Berkomunikasi!</h2>
                <hr class="divider" />
                <p class="text-muted mb-5">Silahkan Isi Form Kontak di Bawah Ini</p>
            </div>
        </div>
        <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
            <div class="col-lg-6">
                <!-- <form id="contactForm" data-sb-form-api-token="API_TOKEN"> -->
                <form id="kontakPesan" method="post" action="<?= base_url('pesan') ?>">
                    <!-- Name input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" name="name" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                        <label for="name">Nama Lengkap</label>
                        <div class="invalid-feedback" data-sb-feedback="name:required">Diperlukan sebuah nama.</div>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" name="whatsapp" id="whatsapp" type="text" placeholder="Enter your whatsapp..." data-sb-validations="required" />
                        <label for="whatsapp">No WhatsApp</label>
                        <div class="invalid-feedback" data-sb-feedback="name:required">Diperlukan whatsapp.</div>
                    </div>
                    <!-- Email address input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="email" name="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                        <label for="email">Alamat Email</label>
                        <div class="invalid-feedback" data-sb-feedback="email:required">Diperlukan email.</div>
                        <div class="invalid-feedback" data-sb-feedback="email:email">Email tidak benar.</div>
                    </div>
                    <!-- Message input-->
                    <div class="form-floating mb-3">
                        <textarea class="form-control" name="message" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                        <label for="message">Pesan</label>
                        <div class="invalid-feedback" data-sb-feedback="message:required">Diperlukan pesan.</div>
                    </div>
                    <!-- Submit success message-->
                    <div class="d-none" id="SuccessMessage">
                        <div class="text-center mb-3">
                            <div class="fw-bolder" id="successMessageText"></div>
                            Thank you!
                        </div>
                    </div>
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage">
                        <div class="text-center text-danger mb-3" id="errorMessageText"></div>
                    </div>
                    <!-- Submit Button-->
                    <div class="d-grid">
                        <button class="btn btn-primary btn-xl" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-4 text-center mb-5 mb-lg-0">
                <i class="bi-phone fs-2 mb-3 text-muted"></i>
                <div><?= $identitas['telpon'] ?></div>
            </div>
        </div>
    </div>
</section>
</body>

</html>