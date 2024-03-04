    </div>
    <!-- END: Content -->
    </div>
    <!-- BEGIN: JS Assets-->
    <script src="<?= base_url('assets') ?>/dist/js/app.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#table-data').DataTable();
        });

        // Mendapatkan alamat IP pengguna
        const userIP = '<?= $this->input->ip_address(); ?>';

        // Menyimpan alamat IP ke dalam session storage
        sessionStorage.setItem('user_ip', userIP);
    </script>
    <!-- END: JS Assets-->
    </body>

    </html>