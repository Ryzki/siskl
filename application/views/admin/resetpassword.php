<h2 class="intro-y text-lg font-medium mt-10">
    <?php echo $title; ?>
</h2>
<?php echo $this->session->flashdata('message') ?>
<div class="grid grid-cols-12 gap-6 mt-5">
    <div class="intro-y col-span-12 lg:col-span-6">
        <div class="intro-y box">
            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                <h2 class="font-medium text-base mr-auto">
                    Resset Password
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