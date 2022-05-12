<!DOCTYPE html>
<html lang="en">

<head>
    <base href="">
    <title>
        <?php
        if (isset($title)) {
            echo 'KlasQ | ' . $title;
        } else {
            echo 'KlasQ';
        }
        ?>
    </title>
    <meta charset="utf-8" />
    <meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendor Stylesheets(used by this page)-->
    <link href="<?= base_url(); ?>assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Page Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="<?= base_url(); ?>assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>assets/css/style.bundle.css" rel="stylesheet" type="text/css" />

    <!-- DateRangePicker Stylesheet -->
    <!-- <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/plugins/daterangepicker/css/daterangepicker.css"> -->

    <!--end::Global Stylesheets Bundle-->
    <script src="https://kit.fontawesome.com/3e89801c3a.js" crossorigin="anonymous"></script>

</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled">
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <!--begin::Header-->
                <div id="kt_header" class="header" data-kt-sticky="true" data-kt-sticky-name="header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
                    <!--begin::Container-->
                    <div class="container-xxl d-flex flex-grow-1 flex-stack">
                        <!--begin::Header Logo-->
                        <div class="d-flex align-items-center me-5">
                            <!--begin::Heaeder menu toggle-->
                            <div class="d-lg-none btn btn-icon btn-active-color-primary w-30px h-30px ms-n2 me-3" id="kt_header_menu_toggle">
                                <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
                                        <path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Heaeder menu toggle-->
                            <a href="../../demo11/dist/index.html">
                                <img alt="Logo" src="<?= base_url(); ?>assets/media/logos/logo-demo11.svg" class="h-20px h-lg-30px" />
                            </a>
                        </div>
                        <!--end::Header Logo-->
                    </div>
                    <!--end::Container-->
                    <!--begin::Separator-->
                    <div class="separator"></div>
                    <!--end::Separator-->
                </div>
                <!--end::Header-->
                <!--begin::Container-->
                <div class="d-flex flex-column-fluid align-items-start container-xxl">
                    <!--begin::Post-->
                    <div class="content flex-row-fluid" id="kt_content">
                        <!--begin::Row-->
                        <div class="row gy-0 gx-12">
                            <!--begin::Col-->
                            <div class="col-xl-12">
                                <!--begin::General Widget 1-->
                                <div class="mb-10">
                                    <!--begin::Tabs-->
                                    <ul class="nav row mb-10">
                                        <li class="nav-item col-12 col-lg mb-5 mb-lg-0">
                                            <a class="nav-link btn btn-flex btn-color-gray-400 btn-outline btn-outline-default btn-active-primary d-flex flex-grow-1 flex-column flex-center py-5 h-1250px h-lg-175px <?= (set_active($this->uri->segment(1), 'pembayaran', $this->uri->segment(2), array())) ?>" href="<?= base_url('pembayaran') ?>">
                                                <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                                <span class="svg-icon svg-icon-3x mb-5 mx-0">
                                                    <i class="fa-duotone fa-money-check-pen mt-7 mb-5" style="font-size: 32px;"></i>
                                                </span>
                                                <!--end::Svg Icon-->
                                                <span class="fs-6 fw-bold">Metode Bayar</span>
                                            </a>
                                        </li>
                                        <li class="nav-item col-12 col-lg mb-5 mb-lg-0">
                                            <a class="nav-link btn btn-flex btn-color-gray-400 btn-outline btn-outline-default btn-active-primary d-flex flex-grow-1 flex-column flex-center py-5 h-1250px h-lg-175px <?= (set_active($this->uri->segment(1), 'user', $this->uri->segment(2), array())) ?>" href="<?= base_url('user') ?>">
                                                <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                                <span class="svg-icon svg-icon-3x mb-5 mx-0">
                                                    <i class="fa-duotone fa-users mt-7 mb-5" style="font-size: 32px;"></i>
                                                </span>
                                                <!--end::Svg Icon-->
                                                <span class="fs-6 fw-bold">Pengguna</span>
                                            </a>
                                        </li>

                                        <li class="nav-item col-12 col-lg mb-5 mb-lg-0">
                                            <a class="nav-link btn btn-flex btn-color-gray-400 btn-outline btn-outline-default btn-active-primary d-flex flex-grow-1 flex-column flex-center py-5 h-1250px h-lg-175px  <?= (set_active($this->uri->segment(1), 'tahun_ajaran', $this->uri->segment(2), array())) ?>" href="<?= base_url('tahun_ajaran') ?>">
                                                <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
                                                <span class="svg-icon svg-icon-3x mb-5 mx-0">
                                                    <i class="fa-duotone fa-calendar-circle-user mt-7 mb-5" style="font-size: 32px;"></i>
                                                </span>
                                                <!--end::Svg Icon-->
                                                <span class="fs-6 fw-bold">Tahun Ajaran</span>
                                            </a>
                                        </li>
                                        <li class="nav-item col-12 col-lg mb-5 mb-lg-0">
                                            <a class="nav-link btn btn-flex btn-color-gray-400 btn-outline btn-outline-default btn-active-primary d-flex flex-grow-1 flex-column flex-center py-5 h-1250px h-lg-175px  <?= (set_active($this->uri->segment(1), 'dashboard', $this->uri->segment(2), array('dashboard', 'sekolah'))) ?> <?= (set_active($this->uri->segment(1), 'sekolah', $this->uri->segment(2), array('dashboard', 'sekolah'))) ?>" href="<?= base_url('sekolah') ?>">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen008.svg-->
                                                <span class="svg-icon svg-icon-3x mb-5 mx-0">
                                                    <i class="fa-duotone fa-school mt-7 mb-5" style="font-size: 32px;"></i>
                                                </span>
                                                <!--end::Svg Icon-->
                                                <span class="fs-6 fw-bold">Sekolah</span>
                                            </a>
                                        </li>
                                        <li class="nav-item col-12 col-lg mb-5 mb-lg-0">
                                            <a class="nav-link btn btn-flex btn-color-gray-400 btn-outline btn-outline-default btn-active-primary d-flex flex-grow-1 flex-column flex-center py-5 h-1250px h-lg-175px  <?= (set_active($this->uri->segment(1), 'staf', $this->uri->segment(2), array())) ?>" href="<?= base_url('staf') ?>">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
                                                <span class="svg-icon svg-icon-3x mb-5 mx-0">
                                                    <i class="fa-duotone fa-chalkboard-user mt-7 mb-5" style="font-size: 32px;"></i>
                                                </span>
                                                <!--end::Svg Icon-->
                                                <span class="fs-6 fw-bold">Staf Sekolah</span>
                                            </a>
                                        </li>
                                        <li class="nav-item col-12 col-lg mb-5 mb-lg-0">
                                            <a class="nav-link btn btn-flex btn-color-gray-400 btn-outline btn-outline-default btn-active-primary d-flex flex-grow-1 flex-column flex-center py-5 h-1250px h-lg-175px  <?= (set_active($this->uri->segment(1), 'bantuan', $this->uri->segment(2), array('bantuan', 'kategori_bantuan'))) ?>" href="<?= base_url('bantuan') ?>">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen048.svg-->
                                                <span class="svg-icon svg-icon-3x mb-5 mx-0">
                                                    <i class="fa-duotone fa-circle-question mt-7 mb-5" style="font-size: 32px;"></i>
                                                </span>
                                                <!--end::Svg Icon-->
                                                <span class="fs-6 fw-bold">Bantuan</span>
                                            </a>
                                        </li>
                                        <li class="nav-item col-12 col-lg mb-5 mb-lg-0">
                                            <a class="nav-link btn btn-flex btn-color-gray-400 btn-outline btn-outline-default btn-active-primary d-flex flex-grow-1 flex-column flex-center py-5 h-1250px h-lg-175px  <?= (set_active($this->uri->segment(1), 'setting', $this->uri->segment(2), array())) ?>" href="<?= base_url('setting') ?>">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen048.svg-->
                                                <span class="svg-icon svg-icon-3x mb-5 mx-0">
                                                    <i class="fa-duotone fa-gear  mt-7 mb-5" style="font-size: 32px;"></i>
                                                </span>
                                                <!--end::Svg Icon-->
                                                <span class="fs-6 fw-bold">Pengaturan</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!--end::General Widget 1-->

                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Post-->
                </div>