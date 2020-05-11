<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="{{ asset('assets/adminto-hor/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/adminto-hor/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/adminto-hor/js/detect.js') }}"></script>
<script src="{{ asset('assets/adminto-hor/js/fastclick.js') }}"></script>
<script src="{{ asset('assets/adminto-hor/js/jquery.blockUI.js') }}"></script>
<script src="{{ asset('assets/adminto-hor/js/waves.js') }}"></script>
<script src="{{ asset('assets/adminto-hor/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/adminto-hor/js/jquery.nicescroll.js') }}"></script>
<script src="{{ asset('assets/adminto-hor/js/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('assets/adminto-hor/js/jquery.scrollTo.min.js') }}"></script>

@if(isset($dataTable))
	<!-- Datatables-->
	<script src="{{ asset('assets/adminto-hor/plugins/datatables/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('assets/adminto-hor/plugins/datatables/dataTables.bootstrap.js') }}"></script>
	<script src="{{ asset('assets/adminto-hor/plugins/datatables/dataTables.buttons.min.js') }}"></script>
	<script src="{{ asset('assets/adminto-hor/plugins/datatables/buttons.bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/adminto-hor/plugins/datatables/jszip.min.js') }}"></script>
	<script src="{{ asset('assets/adminto-hor/plugins/datatables/pdfmake.min.js') }}"></script>
	<script src="{{ asset('assets/adminto-hor/plugins/datatables/vfs_fonts.js') }}"></script>
	<script src="{{ asset('assets/adminto-hor/plugins/datatables/buttons.html5.min.js') }}"></script>
	<script src="{{ asset('assets/adminto-hor/plugins/datatables/buttons.print.min.js') }}"></script>
	<script src="{{ asset('assets/adminto-hor/plugins/datatables/dataTables.fixedHeader.min.js') }}"></script>
	<script src="{{ asset('assets/adminto-hor/plugins/datatables/dataTables.keyTable.min.js') }}"></script>
	<script src="{{ asset('assets/adminto-hor/plugins/datatables/dataTables.responsive.min.js') }}"></script>
	<script src="{{ asset('assets/adminto-hor/plugins/datatables/responsive.bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/adminto-hor/plugins/datatables/dataTables.scroller.min.js') }}"></script>

	<!-- Datatable init js -->
	<script src="{{ asset('assets/adminto-hor/pages/datatables.init.js') }}"></script>
@else
@endif

<script src="{{ asset('assets/adminto-hor/plugins/multiselect/js/jquery.multi-select.js') }}"></script>
<script src="{{ asset('assets/adminto-hor/plugins/select2/dist/js/select2.min.js') }}" type="text/javascript"></script>

<script src="{{ asset('assets/adminto-hor/plugins/toastr/toastr.min.js')}}"></script>

<!-- KNOB JS -->
<!--[if IE]>
<script type="text/javascript" src="assets/plugins/jquery-knob/excanvas.js"></script>
<![endif]-->
<script src="{{ asset('assets/adminto-hor/plugins/jquery-knob/jquery.knob.js') }}"></script>

<!--Morris Chart-->
<script src="{{ asset('assets/adminto-hor/plugins/morris/morris.min.js') }}"></script>
<script src="{{ asset('assets/adminto-hor/plugins/raphael/raphael-min.js') }}"></script>

<!-- Dashboard init -->
<script src="{{ asset('assets/adminto-hor/pages/jquery.dashboard.js') }}"></script>

<!-- App js -->
<script src="{{ asset('assets/adminto-hor/js/jquery.core.js') }}"></script>
<script src="{{ asset('assets/adminto-hor/js/jquery.app.js') }}"></script>

<script src="{{ asset('assets/adminto-hor/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('assets/adminto-hor/plugins/moment/moment.js') }}"></script>
<script src="{{ asset('assets/adminto-hor/plugins/moment/min/moment-with-locales.min.js') }}"></script>
<script src="{{ asset('assets/adminto-hor/plugins/hopscotch/js/hopscotch.min.js') }}"></script>
<script src="{{ asset('js/typeahead.bundle.js') }}"></script>
<script src="{{ asset('js/jquery-ui.min.js') }}"></script>
{{-- <script src="{{ asset('js/jquery.mask.min.js') }}"></script> --}}
<script src="{{ asset('js/terbilang.js') }}"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$('[data-hover="tooltip"]').tooltip();
	});
</script>