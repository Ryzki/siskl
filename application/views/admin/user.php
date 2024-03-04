<h2 class="intro-y text-lg font-medium mt-10">
    <?php echo $title; ?>
</h2>
<?php if (validation_errors()) : ?>
    <div class="alert alert-danger text-white intro-x" role="alert">
        <?= validation_errors(); ?>
    </div>
<?php endif; ?>
<?php echo $this->session->flashdata('message') ?>
<div class="grid grid-cols-12 gap-6 mt-5">
    <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
        <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#add-user" class="btn btn-primary shadow-md mr-2">Add New User</a>
        <div class="hidden md:block mx-auto text-slate-500"> </div>
    </div>
    <!-- BEGIN: Users Layout -->

    <?php foreach ($users as $u) : ?>
        <div class="intro-y col-span-12 md:col-span-6">
            <div class="box">
                <div class="flex flex-col lg:flex-row items-center p-5">
                    <div class="lg:ml-2 lg:mr-auto text-center lg:text-left mt-3 lg:mt-0">
                        <a href="" class="font-medium"><?= $u['name'] ?></a>
                        <?php if ($u['role'] == 1) : ?>
                            <div class="text-slate-500 text-xs mt-0.5">Admin</div>
                        <?php else : ?>
                            <div class="text-slate-500 text-xs mt-0.5">Pengelola</div>
                        <?php endif ?>
                    </div>
                    <div class="flex mt-4 lg:mt-0">
                        <button class="btn btn-primary py-1 px-2 mr-2">Active</button>
                        <?php if ($u['role'] == 2) : ?>
                            <a href="<?= site_url('admin/user/deleteuser/' . $u['id']) ?>" class="btn btn-danger py-1 px-2">Delete</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<!-- BEGIN: Modal Content -->
<div id="add-user" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- BEGIN: Modal Header -->
            <div class="modal-header">
                <h2 class="font-medium text-base mr-auto">Add New User</h2>
                <div class="dropdown sm:hidden"> <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown"> <i data-lucide="more-horizontal" class="w-5 h-5 text-slate-500"></i> </a>
                </div>
            </div> <!-- END: Modal Header -->
            <!-- BEGIN: Modal Body -->
            <form method="POST" action="<?= site_url('admin/user') ?>">
                <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
                    <div class="col-span-12 sm:col">
                        <input id="name" name="name" type="text" class="form-control" placeholder="Sandi Maulidika">
                    </div>
                    <div class="col-span-12 sm:col">
                        <input id="username" name="username" type="text" class="form-control" placeholder="sandi">
                    </div>
                    <div class="col-span-12 sm:col">
                        <input id="password" name="password" type="password" class="form-control" placeholder="*****">
                    </div>
                </div> <!-- END: Modal Body -->
                <!-- BEGIN: Modal Footer -->
                <div class="modal-footer">
                    <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-20 mr-1">Cancel</button>
                    <button type="submit" class="btn btn-primary w-20">Add</button>
                </div> <!-- END: Modal Footer -->
            </form>
        </div>
    </div>
</div> <!-- END: Modal Content -->