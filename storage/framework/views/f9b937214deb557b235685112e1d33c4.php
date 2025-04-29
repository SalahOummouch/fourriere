<!-- Backend Bundle JavaScript -->
<script src="<?php echo e(asset('js/libs.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/core/external.min.js')); ?>"></script>
<?php if(in_array('data-table', $assets ?? [])): ?>
    <script src="<?php echo e(asset('vendor/datatables/buttons.server-side.js')); ?>"></script>
<?php endif; ?>

<!-- Library Bundle Script -->

<!-- Chart Custom JavaScript -->
<script src="<?php echo e(asset('js/customizer.js')); ?>"></script>

<script src="<?php echo e(asset('js/sidebar.js')); ?>"></script>

<!-- Flextree Javascript-->
<script src="<?php echo e(asset('js/flex-tree.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/tree.js')); ?>"></script>

<!-- Table Treeview JavaScript -->
<script src="<?php echo e(asset('js/table-treeview.js')); ?>"></script>

<!-- SweetAlert JavaScript -->
<script src="<?php echo e(asset('js/sweetalert.js')); ?>"></script>


<!-- Vectoe Map JavaScript -->
<script src="<?php echo e(asset('js/vector-map-custom.js')); ?>"></script>
<script src="<?php echo e(asset('js/charts/progressbar.js')); ?>"></script>
<script src="<?php echo e(asset('vendor/quill/quill.min.js')); ?>" async></script>
<!-- Chart Custom JavaScript -->



<!-- slider JavaScript -->
<script src="<?php echo e(asset('js/slider.js')); ?>"></script>

<!-- Emoji picker -->
<script src="<?php echo e(asset('vendor/emoji-picker-element/index.js')); ?>" type="module"></script>

<?php if(isset($isCountdown) && $isCountdown): ?>
<script src="<?php echo e(asset('js/countdown.js')); ?>"></script>
<?php endif; ?>
<script src="<?php echo e(asset('vendor/vanillajs-datepicker/dist/js/datepicker-full.js')); ?>"></script>
<script src="<?php echo e(asset('vendor/moment.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendor/fullcalendar/core/main.js')); ?>"></script>
<script src="<?php echo e(asset('vendor/fullcalendar/daygrid/main.js')); ?>"></script>
<script src="<?php echo e(asset('vendor/fullcalendar/timegrid/main.js')); ?>"></script>
<script src="<?php echo e(asset('vendor/fullcalendar/list/main.js')); ?>"></script>
<script src="<?php echo e(asset('vendor/fullcalendar/interaction/main.js')); ?>"></script>

<script src="<?php echo e(asset('vendor/choiceJS/script/choices.min.js')); ?>"></script>

<!-- app JavaScript -->
<script src="<?php echo e(asset('js/chart-custom.js')); ?>"></script>
<script src="<?php echo e(asset('js/app.js')); ?>"></script>

<?php if(isset($isMasonry) && $isMasonry): ?>
    <!-- Masonry plugin Start -->
    <script src="<?php echo e(asset('vendor/masonry/masonry.pkgd.min.js')); ?>"></script>
<?php endif; ?>
<script src="<?php echo e(asset('vendor/Leaflet/leaflet.js')); ?> "></script>
<script src="<?php echo e(asset('js/charts/01.js')); ?>"></script>
<?php /**PATH C:\Users\TOSHIBA\Desktop\developement with Salah\fourriere\fourriere\resources\views/partials/_scripts.blade.php ENDPATH**/ ?>