<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        My Profile
    </h2>
</div>

<!-- form validation -->
<?php echo $this->session->flashdata('message') ?>
<!-- end form validation -->


<div class="grid grid-cols-12 gap-6 mt-5">
    <div class="intro-y col-span-12 lg:col-span-6">
        <!-- BEGIN: Input -->
        <div class="intro-y box">
            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                <h2 class="font-medium text-base mr-auto">
                    Display Information
                </h2>
            </div>
            <div id="input" class="p-5">
                <div class="preview">
                    <form action="<?= site_url('admin/user/profile') ?>" method="POST" enctype="multipart/form-data">
                        <div class="preview">
                            <div class="mt-3">
                                <label for="vertical-form-1" class="form-label">Username</label>
                                <input type="text" name="username" class="form-control form-control-rounded" data-single-mode="true" value="<?= $user['username']; ?>" readonly>
                            </div>
                            <div class="mt-3">
                                <label for="vertical-form-1" class="form-label">Nama</label>
                                <input type="text" id="name" name="name" class="form-control form-control-rounded" data-single-mode="true" value="<?= $user['name']; ?>">
                                <?= form_error('name', '<small class="text-danger" pl-3>', '</small>'); ?>
                            </div>
                            <div class="mt-3">
                                <label for="vertical-form-1" class="form-label">Email</label>
                                <input type="text" id="email" name="email" class="form-control form-control-rounded" data-single-mode="true" value="<?= $user['email']; ?>">
                                <?= form_error('email', '<small class="text-danger" pl-3>', '</small>'); ?>
                            </div>
                            <div class="mt-3">
                                <label for="vertical-form-1" class="form-label">NO HP</label>
                                <input type="text" id="nohp" name="nohp" class="form-control form-control-rounded" data-single-mode="true" value="<?= $user['nohp']; ?>">
                                <?= form_error('nohp', '<small class="text-danger" pl-3>', '</small>'); ?>
                            </div>
                            <div class="mt-3">
                                <label for="vertical-form-1" class="form-label">Upload Foto Profile</label>
                                <input class="form-control" type="file" name="image" id="image">
                            </div>
                            <button class="btn btn-primary mt-5">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- END: Input -->

        <!-- END: Select Options -->
    </div>
    <div class="intro-y col-span-12 lg:col-span-6">
        <!-- BEGIN: Vertical Form -->
        <div class="intro-y box">
            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                <h2 class="font-medium text-base mr-auto">
                    Change Password
                </h2>
            </div>
            <div id="vertical-form" class="p-5">
                <form method="POST" action="<?= site_url('admin/user/resetpassword') ?>">
                    <div class="preview">
                        <div class="">
                            <label for="vertical-form-2" class="form-label">Current Password</label>
                            <input id="current_password" name="current_password" type="password" class="form-control" placeholder="*****">
                            <?= form_error('current_password', '<small class="text-danger" pl-3>', '</small>'); ?>
                        </div>
                        <div class="mt-3">
                            <label for="vertical-form-2" class="form-label">New Password</label>
                            <input id="new_password1" name="new_password1" type="password" class="form-control" placeholder="*****">
                            <?= form_error('new_password1', '<small class="text-danger" pl-3>', '</small>'); ?>
                        </div>
                        <div class="mt-3">
                            <label for="vertical-form-2" class="form-label">Confirm Password</label>
                            <input id="new_password2" name="new_password2" type="password" class="form-control" placeholder="*****">
                            <?= form_error('new_password2', '<small class="text-danger" pl-3>', '</small>'); ?>
                        </div>
                        <button class="btn btn-primary mt-5">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- foto -->
<!-- <div class="w-52 mx-auto xl:mr-0 xl:ml-6">
    <div class="border-2 border-dashed shadow-sm border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
        <div class="h-40 relative image-fit cursor-pointer zoom-in mx-auto">
            <img class="rounded-md" alt="Midone - HTML Admin Template" src="<?= base_url('assets/img/profile/') . $user['image'] ?>">
            <input type="file" id="image" name="image" class="w-full h-full top-0 left-0 absolute opacity-0">
            <a href="<?= site_url('admin/user/deleteimage') ?>">
                <div title="Remove this profile photo?" class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-danger right-0 top-0 -mr-2 -mt-2"> <i data-lucide="x" class="w-4 h-4"></i> </div>
            </a>
        </div>
        <div class="mx-auto cursor-pointer relative mt-5">
            <button class="btn btn-primary w-full">Change Photo</button>
        </div>
    </div>
</div> -->