<!--begin::Footer-->
<div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
    <!--begin::Container-->
    <div class="container-xxl d-flex flex-column flex-md-row align-items-center justify-content-between">
        <!--begin::Copyright-->
        <div class="text-dark order-2 order-md-1">
            <span class="text-muted fw-bold me-1">2021©</span>
            <a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
        </div>
        <!--end::Copyright-->
        <!--begin::Menu-->
        <ul class="menu menu-gray-600 menu-hover-primary fw-bold order-1">
            <li class="menu-item">
                <a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
            </li>
            <li class="menu-item">
                <a href="https://keenthemes.com/support" target="_blank" class="menu-link px-2">Support</a>
            </li>
            <li class="menu-item">
                <a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a>
            </li>
        </ul>
        <!--end::Menu-->
    </div>
    <!--end::Container-->
</div>
<!--end::Footer-->
<!--begin::Javascript-->
<script>
    var hostUrl = "<?= base_url(); ?>assets/";
    var BASE_URL = "<?= base_url() ?>";
</script>
<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="<?= base_url(); ?>assets/plugins/global/plugins.bundle.js"></script>
<script src="<?= base_url(); ?>assets/js/scripts.bundle.js"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Page Vendors Javascript(used by this page)-->
<script src="<?= base_url(); ?>assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
<script src="<?= base_url(); ?>assets/plugins/custom/datatables/datatables.bundle.js"></script>
<!--end::Page Vendors Javascript-->
<!--begin::Page Custom Javascript(used by this page)-->
<script src="<?= base_url(); ?>assets/js/custom/widgets.js"></script>
<script src="<?= base_url(); ?>assets/js/custom/apps/chat/chat.js"></script>
<script src="<?= base_url(); ?>assets/js/custom/modals/create-campaign.js"></script>
<script src="<?= base_url(); ?>assets/js/custom/modals/users-search.js"></script>

<!--end::Page Custom Javascript-->

<!-- Daterangepicker -->
<!-- <script type="text/javascript" src="<?= base_url(); ?>assets/plugins/daterangepicker/js/moment.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets/plugins/daterangepicker/js/daterangepicker.js"></script> -->

<!--end::Javascript-->
<script src="<?= base_url(); ?>assets/js/page/function.js"></script>
<?php

if (isset($js_add) && is_array($js_add)) {
    foreach ($js_add as $js) {
        echo $js;
    }
} else {
    echo (isset($js_add) && ($js_add != "") ? $js_add : "");
}

?>
</body>
<!--end::Body-->

</html>