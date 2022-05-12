<!--begin::Container-->
<div class="flex-column-fluid align-items-start container-xxl">
    <div class="card mb-5 mb-xl-8">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bolder fs-3 mb-1">Sekolah</span>
                <!-- <span class="text-muted mt-1 fw-bold fs-7">Over 500 new products</span> -->
            </h3>
            <div class="card-toolbar">
                <a href="#" class="btn btn-sm btn-light-primary" data-bs-toggle="modal" data-bs-target="#modalTahunAjaran">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                    <span class="svg-icon svg-icon-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black" autocomplete="off" />
                            <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" autocomplete="off" />
                        </svg>
                    </span>
                    Sekolah
                </a>
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body py-3">
            <!--begin::Table container-->
            <div class="table-responsive">
                <!--begin::Table-->
                <table class="table align-middle gs-0 gy-4">
                    <!--begin::Table head-->
                    <thead>
                        <tr class="fw-bolder text-muted bg-light">
                            <th class="ps-4 min-w-50px rounded-start">No</th>
                            <th class="text-center">Kode</th>
                            <th class="text-center">NPSN</th>
                            <th class="text-center" width="400px">Sekolah</th>
                            <th class="text-center">Status</th>
                            <th class="text-center rounded-end"> Aksi</th>

                        </tr>
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody>
                        <?php $no = 1;
                        foreach ($result as $row) : ?>
                            <tr>
                                <td class="ps-6 fw-bolder">
                                    <?= $no++; ?>
                                </td>
                                <td class="fw-bolder text-center">
                                    <?= $row->kode_sekolah; ?>
                                </td>
                                <td class="fw-bolder text-center">
                                    <?= $row->npsm; ?>
                                </td>
                                <td class="fw-bolder" style="display : flex; justify-content: center;">
                                    <div style="width : 20%; display : flex; justify-content : center;">
                                        <?php if ($row->logo) : ?>
                                            <img src="<?= base_url('linker/logo_sekolah/' . base64url_encode($row->id_sekolah) . '/' . base64url_encode($row->logo)) ?>" alt="" width="50px" height="50px" style="border-radius : 100%;">
                                        <?php else : ?>
                                            <img src="<?= base_url('linker/img_default/' . base64url_encode('vector-default-1.png')) ?>" alt="" width="50px" height="50px" style="bprder-radius : 100%;">
                                        <?php endif; ?>
                                    </div>
                                    <div style="width : 80%; display : flex; justify-content : flex-start;align-items:left;flex-direction : column;">
                                        <h5 class="mt-2"><?= $row->nama_sekolah ?></h5>
                                        <p class="text-muted"><?= $row->username ?></p>
                                    </div>

                                </td>
                                <td class="fw-bolder text-center" id="load-<?= $row->id_sekolah; ?>">
                                    <?php if ($row->status == 'Y') : ?>
                                        <p class="alert-success rounded">AKTIF</p>
                                    <?php else : ?>
                                        <p class="alert-danger rounded">NONAKTIF</p>
                                    <?php endif; ?>
                                </td>
                                <td class="text-center">

                                    <button type="button" class="btn btn-icon btn-light-twitter btn-sm fs-7" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" data-kt-menu-flip="top-start">

                                        <i class="fa fa-bars fs-4"></i>

                                    </button>


                                    <div class="menu menu-sub menu-sub-dropdown manual-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-150px py-4" data-kt-menu="true">

                                        <div class="menu-item px-3 my-2">

                                            <a href="#" class="menu-link px-3">Edit</a>

                                        </div>

                                        <div class="menu-item px-3 my-2">

                                            <a href="#" class="menu-link px-3">Hapus</a>

                                        </div>

                                        <hr>

                                        <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                            <input id="onoff-<?= $row->id_sekolah; ?>" class="form-check-input swith-on-off" type="checkbox" data-id="<?= $row->id_sekolah; ?>" name="notifications" <?php if ($row->status == 'Y') {
                                                                                                                                                                                                            echo "checked";
                                                                                                                                                                                                        } ?> autocomplete="off" />
                                        </div>

                                    </div>

                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <!--end::Table body-->
                </table>
                <!--end::Table-->
            </div>
            <!--end::Table container-->
        </div>
        <!--begin::Body-->
    </div>
</div>

<div class="modal fade" id="modalTahunAjaran" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2 class="fw-bolder">Tambah Sekolah</h2>
                <!--end::Modal title-->
                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal" data-kt-users-modal-action="close" type="button">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" autocomplete="off" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" autocomplete="off" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 mx-xl-8 mb-7">
                <!--begin::Form-->
                <form class="form" id="form_tambah_sekolah" action="<?= base_url('function/tambah_sekolah'); ?>" method="POST">
                    <div class="fv-row mb-10 d-flex justify-content-center align-items-center flex-column">
                        <!--begin::Label-->
                        <label class="fs-6 fw-bold form-label mb-3">Logo</label>
                        <!--end::Label-->
                        <div class="position-relative d-flex align-items-center">
                            <div class="image-input image-input-outline " data-kt-image-input="true" style="background-image: url(<?= site_url('assets/img/no-image.jpg') ?>)">
                                <!--begin::Image preview wrapper-->
                                <div class="image-input-wrapper w-125px h-125px" style="background-image: url(<?= site_url('assets/img/no-image.jpg') ?>)"></div>
                                <!--end::Image preview wrapper-->

                                <!--begin::Edit button-->
                                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click" title="" data-bs-original-title="Tambah Gambar">
                                    <i class="bi bi-pencil-fill fs-7"></i>
                                    <!--begin::Inputs-->
                                    <input type="file" name="gambar" accept=".png, .jpg, .jpeg">
                                    <input type="hidden" name="foto_remove">
                                    <!--end::Inputs-->
                                </label>
                                <!--end::Edit button-->

                                <!--begin::Cancel button-->
                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" data-bs-dismiss="click" title="" data-bs-original-title="Batal">
                                    <i class="bi bi-x fs-2"></i>
                                </span>
                                <!--end::Cancel button-->

                                <!--begin::Remove button-->
                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" data-bs-dismiss="click" title="" data-bs-original-title="Hapus foto">
                                    <i class="bi bi-x fs-2"></i>
                                </span>
                                <!--end::Remove button-->
                            </div>

                        </div>
                    </div>
                    <!--begin::Input group-->
                    <div class="fv-row mb-10" id="req_kode">
                        <!--begin::Label-->
                        <label class="fs-6 fw-bold form-label mb-2">Kode</label>
                        <!--end::Label-->
                        <div class="position-relative d-flex align-items-center">
                            <input class="form-control form-control-solid" name="kode" id="kode" placeholder="Masukkan kode" autocomplete="off" />
                        </div>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-10" id="req_nama">
                        <!--begin::Label-->
                        <label class="fs-6 fw-bold form-label mb-2">Nama</label>
                        <!--end::Label-->
                        <div class="position-relative d-flex align-items-center">
                            <input class="form-control form-control-solid" name="nama" id="nama" placeholder="Masukkan nama" autocomplete="off" />
                        </div>
                    </div>
                    <!--begin::Input group-->
                    <div class="fv-row mb-10" id="req_npsm">
                        <!--begin::Label-->
                        <label class="fs-6 fw-bold form-label mb-2">NPSN</label>
                        <!--end::Label-->
                        <div class="position-relative d-flex align-items-center">
                            <input class="form-control form-control-solid" name="npsm" id="npsm" placeholder="Masukkan npsn" autocomplete="off" />
                        </div>
                    </div>
                    <div class="fv-row mb-10" id="req_alamat">
                        <!--begin::Label-->
                        <label class="fs-6 fw-bold form-label mb-2">Alamat</label>
                        <!--end::Label-->
                        <div class="position-relative d-flex align-items-center">
                            <input class="form-control form-control-solid" name="alamat" id="alamat" placeholder="Masukkan alamat" autocomplete="off" />
                        </div>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-10" id="req_telpon">
                        <!--begin::Label-->
                        <label class="fs-6 fw-bold form-label mb-2">Telpon</label>
                        <!--end::Label-->
                        <div class="position-relative d-flex align-items-center">
                            <input class="form-control form-control-solid" name="telpon" id="telpon" placeholder="Masukkan telpon" autocomplete="off" />
                        </div>
                    </div>

                    <div class="fv-row mb-10" id="req_telpon_admin">
                        <!--begin::Label-->
                        <label class="fs-6 fw-bold form-label mb-2">Telpon Admin</label>
                        <!--end::Label-->
                        <div class="position-relative d-flex align-items-center">
                            <input class="form-control form-control-solid" name="telpon_admin" id="telpon_admin" placeholder="Masukkan telpon admin" autocomplete="off" />
                        </div>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-10" id="req_telpon_keuangan">
                        <!--begin::Label-->
                        <label class="fs-6 fw-bold form-label mb-2">Telpon Keuangan</label>
                        <!--end::Label-->
                        <div class="position-relative d-flex align-items-center">
                            <input class="form-control form-control-solid" name="telpon_keuangan" id="telpon_keuangan" placeholder="Masukkan telpon keuangan" autocomplete="off" />
                        </div>
                    </div>

                    <div class="fv-row mb-10" id="req_email">
                        <!--begin::Label-->
                        <label class="fs-6 fw-bold form-label mb-2">Email</label>
                        <!--end::Label-->
                        <div class="position-relative d-flex align-items-center">
                            <input class="form-control form-control-solid" name="email" id="email" placeholder="Masukkan email" autocomplete="off" />
                        </div>
                    </div>
                    <!--end::Input group-->

                    <div class="fv-row mb-10" id="req_hari_libur_global">
                        <!--begin::Label-->
                        <label class="fs-6 fw-bold form-label mb-2">Hari Libur</label>
                        <!--end::Label-->
                        <div class="d-flex align-items-center">
                            <select name="hari_libur_global[]" id="hari_libur_global" class="form-select form-select-solid" data-allow-clear="true" data-placeholder="Pilih hari libur" multiple="multiple" data-control="select2">
                                <option value="0">Minggu</option>
                                <option value="1">Senin</option>
                                <option value="2">Selasa</option>
                                <option value="3">Rabu</option>
                                <option value="4">Kamis</option>
                                <option value="5">Jumat</option>
                                <option value="6">Sabtu</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-12 d-flex justify-content-between">
                        <div class="fv-row mb-10 col-5" id="req_lat">
                            <!--begin::Label-->
                            <label class="fs-6 fw-bold form-label mb-2">Latitude</label>
                            <!--end::Label-->
                            <div class="position-relative d-flex align-items-center">
                                <input class="form-control form-control-solid" name="lat" id="lat" placeholder="Masukkan latitude" autocomplete="off" />
                            </div>
                        </div>

                        <div class="fv-row mb-10 col-5" id="req_long">
                            <!--begin::Label-->
                            <label class="fs-6 fw-bold form-label mb-2">Longitude</label>
                            <!--end::Label-->
                            <div class="position-relative d-flex align-items-center">
                                <input class="form-control form-control-solid" name="long" id="long" placeholder="Masukkan longitude" autocomplete="off" />
                            </div>
                        </div>
                    </div>
                    <div class="fv-row mb-10" id="req_server">
                        <!--begin::Label-->
                        <label class="fs-6 fw-bold form-label mb-2">Server</label>
                        <!--end::Label-->
                        <div class="position-relative d-flex align-items-center">
                            <input class="form-control form-control-solid" name="server" id="server" placeholder="Masukkan server" autocomplete="off" />
                        </div>
                    </div>
                    <div class="fv-row mb-10" id="req_username">
                        <!--begin::Label-->
                        <label class="fs-6 fw-bold form-label mb-2">Username</label>
                        <!--end::Label-->
                        <div class="position-relative d-flex align-items-center">
                            <input class="form-control form-control-solid" name="username" id="username" placeholder="Masukkan username" autocomplete="off" />
                        </div>
                    </div>
                    <div class="fv-row mb-10" id="req_password">
                        <!--begin::Label-->
                        <label class="fs-6 fw-bold form-label mb-2">Password</label>
                        <!--end::Label-->
                        <div class="position-relative d-flex align-items-center">
                            <input class="form-control form-control-solid" name="password" id="password" placeholder="Masukkan password" autocomplete="off" />
                        </div>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Actions-->
                    <div class="row mb-4">
                        <div class="d-flex justify-content-end">
                            <button type="button" id="simpan_sekolah" onclick="submit_form(this,'#form_tambah_sekolah')" class="btn btn-primary">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                <!--end::Svg Icon-->Simpan
                            </button>
                            <!--end::Add user-->
                        </div>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>