<!-- Backend Bundle JavaScript -->
<script src="{{ asset('js/libs.min.js') }}"></script>
<script src="{{ asset('js/core/external.min.js') }}"></script>
@if (in_array('data-table', $assets ?? []))
    <script src="{{ asset('vendor/datatables/buttons.server-side.js') }}"></script>
@endif
{{-- nfew --}}
<!-- Library Bundle Script -->
{{-- <script src="{{asset('js/libs.min.js')}}"></script>
<script src="{{asset('js/core/external.min.js')}}"></script> --}}
<!-- Chart Custom JavaScript -->
<script src="{{ asset('js/customizer.js') }}"></script>

<script src="{{ asset('js/sidebar.js') }}"></script>

<!-- Flextree Javascript-->
<script src="{{ asset('js/flex-tree.min.js') }}"></script>
<script src="{{ asset('js/tree.js') }}"></script>

<!-- Table Treeview JavaScript -->
<script src="{{ asset('js/table-treeview.js') }}"></script>

<!-- SweetAlert JavaScript -->
<script src="{{ asset('js/sweetalert.js') }}"></script>


<!-- Vectoe Map JavaScript -->
<script src="{{ asset('js/vector-map-custom.js') }}"></script>
<script src="{{ asset('js/charts/progressbar.js') }}"></script>
<script src="{{ asset('vendor/quill/quill.min.js') }}" async></script>
<!-- Chart Custom JavaScript -->



<!-- slider JavaScript -->
<script src="{{ asset('js/slider.js') }}"></script>

<!-- Emoji picker -->
<script src="{{ asset('vendor/emoji-picker-element/index.js') }}" type="module"></script>
{{-- countdown --}}
@if (isset($isCountdown) && $isCountdown)
<script src="{{ asset('js/countdown.js') }}"></script>
@endif
<script src="{{asset('vendor/vanillajs-datepicker/dist/js/datepicker-full.js')}}"></script>
<script src="{{ asset('vendor/moment.min.js') }}"></script>
<script src="{{ asset('vendor/fullcalendar/core/main.js') }}"></script>
<script src="{{ asset('vendor/fullcalendar/daygrid/main.js') }}"></script>
<script src="{{ asset('vendor/fullcalendar/timegrid/main.js') }}"></script>
<script src="{{ asset('vendor/fullcalendar/list/main.js') }}"></script>
<script src="{{ asset('vendor/fullcalendar/interaction/main.js') }}"></script>

<script src="{{ asset('vendor/choiceJS/script/choices.min.js') }}"></script>

<!-- app JavaScript -->
<script src="{{ asset('js/chart-custom.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>

@if (isset($isMasonry) && $isMasonry)
    <!-- Masonry plugin Start -->
    <script src="{{ asset('vendor/masonry/masonry.pkgd.min.js') }}"></script>
@endif
<script src="{{ asset('vendor/Leaflet/leaflet.js') }} "></script>
<script src="{{ asset('js/charts/01.js') }}"></script>
