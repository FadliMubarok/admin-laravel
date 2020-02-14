<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="{{ asset('assets/adminto/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/adminto/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/adminto/js/detect.js') }}"></script>
<script src="{{ asset('assets/adminto/js/fastclick.js') }}"></script>
<script src="{{ asset('assets/adminto/js/jquery.blockUI.js') }}"></script>
<script src="{{ asset('assets/adminto/js/waves.js') }}"></script>
<script src="{{ asset('assets/adminto/js/jquery.nicescroll.js') }}"></script>
<script src="{{ asset('assets/adminto/js/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('assets/adminto/js/jquery.scrollTo.min.js') }}"></script>

@if(isset($dataTable))
	<!-- Datatables-->
	<script src="{{ asset('assets/adminto/plugins/datatables/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('assets/adminto/plugins/datatables/dataTables.bootstrap.js') }}"></script>
	<script src="{{ asset('assets/adminto/plugins/datatables/dataTables.buttons.min.js') }}"></script>
	<script src="{{ asset('assets/adminto/plugins/datatables/buttons.bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/adminto/plugins/datatables/jszip.min.js') }}"></script>
	<script src="{{ asset('assets/adminto/plugins/datatables/pdfmake.min.js') }}"></script>
	<script src="{{ asset('assets/adminto/plugins/datatables/vfs_fonts.js') }}"></script>
	<script src="{{ asset('assets/adminto/plugins/datatables/buttons.html5.min.js') }}"></script>
	<script src="{{ asset('assets/adminto/plugins/datatables/buttons.print.min.js') }}"></script>
	<script src="{{ asset('assets/adminto/plugins/datatables/dataTables.fixedHeader.min.js') }}"></script>
	<script src="{{ asset('assets/adminto/plugins/datatables/dataTables.keyTable.min.js') }}"></script>
	<script src="{{ asset('assets/adminto/plugins/datatables/dataTables.responsive.min.js') }}"></script>
	<script src="{{ asset('assets/adminto/plugins/datatables/responsive.bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/adminto/plugins/datatables/dataTables.scroller.min.js') }}"></script>

	<!-- Datatable init js -->
	<script src="{{ asset('assets/adminto/pages/datatables.init.js') }}"></script>
@else
@endif

<script type="text/javascript" src="{{ asset('assets/adminto/plugins/multiselect/js/jquery.multi-select.js') }}"></script>
<script src="{{ asset('assets/adminto/plugins/select2/dist/js/select2.min.js') }}" type="text/javascript"></script>

<!-- KNOB JS -->
<!--[if IE]>
<script type="text/javascript" src="assets/plugins/jquery-knob/excanvas.js"></script>
<![endif]-->
<script src="{{ asset('assets/adminto/plugins/jquery-knob/jquery.knob.js') }}"></script>

<!--Morris Chart-->
<script src="{{ asset('assets/adminto/plugins/morris/morris.min.js') }}"></script>
<script src="{{ asset('assets/adminto/plugins/raphael/raphael-min.js') }}"></script>

<!-- Dashboard init -->
<script src="{{ asset('assets/adminto/pages/jquery.dashboard.js') }}"></script>

<!-- App js -->
<script src="{{ asset('assets/adminto/js/jquery.core.js') }}"></script>
<script src="{{ asset('assets/adminto/js/jquery.app.js') }}"></script>