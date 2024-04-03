<!-- Footer-->
<footer class="bg-light py-5">
    <div class="container px-4 px-lg-5">
        <div class="small text-center text-muted">Copyright &copy; <?= date('Y') . ' - ' . $identitas['nama_sekolah'] ?></div>
    </div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
<script src="https://use.fontawesome.com/a0e094e156.js"></script>
<script src="<?= base_url('assets/frontend/') ?>js/scripts.js"></script>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
<script src="<?= base_url('assets/frontend') ?>/js/bootstrap.min.js"></script>

<script>
    var tgl = new Date('<?= $jadwal['waktu'] ?>').getTime();
    var now = new Date().getTime()
    var distance = tgl - now
    if (distance > 0) {
        document.getElementById("timerWraper").classList.remove('visually-hidden');
    }
    let x = setInterval(() => {
        var now = new Date().getTime()
        var distance = tgl - now
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        document.getElementById("timer").innerHTML = days + " Hari " + hours + " Jam " + minutes + " Menit " + seconds + " Detik ";
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("timerWraper").classList.add('visually-hidden');
            document.getElementById("formWraper").classList.remove('visually-hidden');
        }
    }, 1000)
</script>

</script>
</div> <!-- END: Modal Content -->
</body>

</html>