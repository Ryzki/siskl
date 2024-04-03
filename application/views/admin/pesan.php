<?php echo $this->session->flashdata('message') ?>
<div class="intro-y flex flex-col sm:flex-row items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        <?= $title; ?>
    </h2>
</div>
<!-- BEGIN: HTML Table Data -->
<div class="intro-y box p-5 mt-5">
    <table id="table-data" class="table table-report -mt-2">
        <thead>
            <tr>
                <th class="whitespace-nowrap">No</th>
                <th class="whitespace-nowrap">Nama</th>
                <th class="whitespace-nowrap">WhatsApp</th>
                <th class="whitespace-nowrap">Email</th>
                <th class="whitespace-nowrap">Pesan</th>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($pesan as $value) : ?>
                <tr class="intro-x">
                    <td><?= $no++; ?></td>
                    <td><?= $value['name'] ?></td>
                    <td><?= $value['whatsapp'] ?></td>
                    <td><?= $value['email'] ?></td>
                    <td><?= $value['message'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>