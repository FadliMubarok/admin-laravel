<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
<meta name="author" content="Coderthemes">
<meta name="csrf-token" content="{{ csrf_token() }}">

<link rel="shortcut icon" href="{{ asset('assets/adminto/images/favicon.ico') }}">

<title>{{ trans('panel.site_title') }}</title>

<!-- DataTables -->
@if(isset($dataTable))
	<link href="{{ asset('assets/adminto/plugins/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/adminto/plugins/datatables/buttons.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/adminto/plugins/datatables/fixedHeader.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/adminto/plugins/datatables/responsive.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/adminto/plugins/datatables/scroller.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

	<!--Morris Chart CSS -->
	<link rel="stylesheet" href="{{ asset('assets/adminto/plugins/morris/morris.css') }}">
@else
@endif

<link href="{{ asset('assets/adminto/plugins/multiselect/css/multi-select.css') }}"  rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/adminto/plugins/select2/dist/css/select2.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/adminto/plugins/select2/dist/css/select2-bootstrap.css') }}" rel="stylesheet" type="text/css">

<!-- App css -->
<link href="{{ asset('assets/adminto/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/adminto/css/core.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/adminto/css/components.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/adminto/css/icons.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/adminto/css/pages.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/adminto/css/menu.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/adminto/css/responsive.css') }}" rel="stylesheet" type="text/css" />

<!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->

<script src="{{ asset('assets/adminto/js/modernizr.min.js') }}"></script>
