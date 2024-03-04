<!-- INI BAGIAN PENGUMUMANNNYA -->
<header class="masthead">
    <div class="container px-4 px-lg-5 h-100">
        <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center">
            <div class="col-lg-6 align-items-center justify-content-center">
                <?php if ($hasil->ket == "lulus") : ?>
                    <table class="table table-bordered">
                        <tr class="bg-white">
                            <td><b>Nama</td>
                            <td>: <?= $hasil->name ?></td>
                        </tr>
                        <tr class="bg-white">
                            <td><b>NISN</td>
                            <td>: <?= $hasil->nisn ?></td>
                        </tr>
                        <tr class="bg-white">
                            <td><b>Kelas</td>
                            <td>: <?= $hasil->jurusan ?></td>
                        </tr>
                        <tfoot class="text-center">
                            <tr class="text-3xl mt-5 text-white bg-success">
                                <td colspan="2">
                                    Selamat! Anda dinyatakan <br>
                                    <b class="text-warning">LULUS</b>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                    <div class="text-center">
                        <a href="<?= site_url('cetak?noujian=' . $_GET['noujian']) ?>" target="_blank" class="btn btn-primary">Cetak Surat Keterangan Kelulusan</a>
                    </div>
                <?php else : ?>
                    <table class="table table-bordered">
                        <tr class="bg-white">
                            <td><b>Nama</td>
                            <td>: <?= $hasil->name ?></td>
                        </tr>
                        <tr class="bg-white">
                            <td><b>NISN</td>
                            <td>: <?= $hasil->nisn ?></td>
                        </tr>
                        <tr class="bg-white">
                            <td><b>Kelas</td>
                            <td>: <?= $hasil->jurusan ?></td>
                        </tr>
                        <tfoot class="text-center">
                            <tr class="text-3xl mt-5 text-white bg-danger">
                                <td colspan="2">
                                    Maaf! Anda dinyatakan <br>
                                    <b class="text-warning">TIDAK LULUS</b>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                    <div class="text-center">
                        <a href="<?= site_url('./') ?>" class="btn btn-primary">Kembali ke Home</a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
</header>
<!-- ./ INI BAGIAN PENGUMUMANNNYA -->

<!-- About-->
<section class="page-section bg-primary" id="about">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="text-white mt-0">Tentang aplikasi Lulus Bareng!</h2>
                <hr class="divider divider-light" />
                <p class="text-white-75 mb-4">Lulus Bareng adalah aplikasi sistem informasi pengumuman kelulusan ujian nasional online yang memudahkan para murid tidak perlu datang ke sekolah lagi. Dan menghemat anggaran sekolah.</p>
                <a class="btn btn-light btn-xl" href="#contact">Hubungi Kami!</a>
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
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <!-- Name input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                        <label for="name">Full name</label>
                        <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                    </div>
                    <!-- Email address input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                        <label for="email">Email address</label>
                        <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                        <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                    </div>
                    <!-- Message input-->
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                        <label for="message">Message</label>
                        <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage">
                        <div class="text-center text-danger mb-3">Error sending message!</div>
                    </div>
                    <!-- Submit Button-->
                    <div class="d-grid">
                        <button class="btn btn-primary btn-xl" id="submitButton" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-4 text-center mb-5 mb-lg-0">
                <i class="bi-phone fs-2 mb-3 text-muted"></i>
                <div>+62 (878) 0175-1656</div>
            </div>
        </div>
    </div>
</section>