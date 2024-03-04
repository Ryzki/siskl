<div class="col gap-6">
    <div class="col-span-12 2xl:col-span-9">
        <div class="grid grid-cols-12 gap-6">
            <!-- BEGIN: General Report -->
            <div class="col-span-12 mt-8">
                <div class="intro-y flex items-center h-10">
                    <h2 class="text-2xl font-medium truncate mr-5">
                        Selamat Datang, <?= $user['name'] ?>
                    </h2>
                </div>
                <div class="grid grid-cols-12 gap-6 mt-5">
                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i data-lucide="flag" class="report-box__icon text-danger"></i>
                                    <div class="ml-auto">
                                        <div class="report-box__indicator bg-danger tooltip cursor-pointer" title="33% Higher than last month"> </div>
                                    </div>
                                </div>
                                <div class="text-3xl font-medium leading-8 mt-6"><?= $total_tidak; ?></div>
                                <div class="text-base text-slate-500 mt-1">Tidak Lulus</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i data-lucide="award" class="report-box__icon text-success"></i>
                                    <div class="ml-auto">
                                        <div class="report-box__indicator bg-success tooltip cursor-pointer" title="2% Lower than last month"> </div>
                                    </div>
                                </div>
                                <div class="text-3xl font-medium leading-8 mt-6"><?= $total_lulus; ?></div>
                                <div class="text-base text-slate-500 mt-1">Total Lulus</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i data-lucide="users" class="report-box__icon text-warning"></i>
                                    <div class="ml-auto">
                                        <div class="report-box__indicator bg-warning tooltip cursor-pointer" title="12% Higher than last month"> </div>
                                    </div>
                                </div>
                                <div class="text-3xl font-medium leading-8 mt-6"><?= $total_siswa; ?></div>
                                <div class="text-base text-slate-500 mt-1">Total Siswa</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i data-lucide="user" class="report-box__icon text-primary"></i>
                                    <div class="ml-auto">
                                        <div class="report-box__indicator bg-primary tooltip cursor-pointer" title="22% Higher than last month"> </div>
                                    </div>
                                </div>
                                <div class="text-3xl font-medium leading-8 mt-6"><?= $total_user; ?></div>
                                <div class="text-base text-slate-500 mt-1">Total User</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: General Report -->
        </div>
    </div>
</div>