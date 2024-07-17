<?php include_once ('../Connections/conn.php');

$currentPage = $_SERVER["PHP_SELF"];

$maxRows_rs_contract = 6;
$pageNum_rs_contract = 0;
if (isset($_GET['pageNum_rs_contract'])) {
  $pageNum_rs_contract = $_GET['pageNum_rs_contract'];
}
$startRow_rs_contract = $pageNum_rs_contract * $maxRows_rs_contract;

mysqli_select_db($conn, $database_conn);
$query_rs_contract = "SELECT * FROM contract ORDER BY id ASC";
$query_limit_rs_contract = sprintf("%s LIMIT %d, %d", $query_rs_contract, $startRow_rs_contract, $maxRows_rs_contract);
$rs_contract = mysqli_query($conn, $query_limit_rs_contract) or die(mysqli_connect_error());
$row_rs_contract = mysqli_fetch_assoc($rs_contract);

if (isset($_GET['totalRows_rs_contract'])) {
  $totalRows_rs_contract = $_GET['totalRows_rs_contract'];
} else {
  $all_rs_contract = mysqli_query($conn, $query_rs_contract);
  $totalRows_rs_contract = mysqli_num_rows($all_rs_contract);
}
$totalPages_rs_contract = ceil($totalRows_rs_contract/$maxRows_rs_contract)-1;

$queryString_rs_contract = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_rs_contract") == false && 
        stristr($param, "totalRows_rs_contract") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_rs_contract = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_rs_contract = sprintf("&totalRows_rs_contract=%d%s", $totalRows_rs_contract, $queryString_rs_contract);

/*////////////////*/
$currentPage = $_SERVER["PHP_SELF"];

$maxRows_rs_hcontacts = 6;
$pageNum_rs_hcontacts = 0;
if (isset($_GET['pageNum_rs_hcontacts'])) {
  $pageNum_rs_hcontacts = $_GET['pageNum_rs_hcontacts'];
}
$startRow_rs_hcontacts = $pageNum_rs_hcontacts * $maxRows_rs_hcontacts;

mysqli_select_db($conn, $database_conn);
$query_rs_hcontacts = "SELECT * FROM hcontacts ORDER BY id ASC";
$query_limit_rs_hcontacts = sprintf("%s LIMIT %d, %d", $query_rs_hcontacts, $startRow_rs_hcontacts, $maxRows_rs_hcontacts);
$rs_hcontacts = mysqli_query($conn, $query_limit_rs_hcontacts) or die(mysqli_connect_error());
$row_rs_hcontacts = mysqli_fetch_assoc($rs_hcontacts);

if (isset($_GET['totalRows_rs_hcontacts'])) {
  $totalRows_rs_hcontacts = $_GET['totalRows_rs_hcontacts'];
} else {
  $all_rs_hcontacts = mysqli_query($conn, $query_rs_hcontacts);
  $totalRows_rs_hcontacts = mysqli_num_rows($all_rs_hcontacts);
}
$totalPages_rs_hcontacts = ceil($totalRows_rs_hcontacts/$maxRows_rs_hcontacts)-1;

$queryString_rs_hcontacts = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_rs_hcontacts") == false && 
        stristr($param, "totalRows_rs_hcontacts") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_rs_hcontacts = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_rs_hcontacts = sprintf("&totalRows_rs_hcontacts=%d%s", $totalRows_rs_hcontacts, $queryString_rs_hcontacts);

/*////////*/

$currentPage = $_SERVER["PHP_SELF"];

$maxRows_rs_hdepartment = 6;
$pageNum_rs_hdepartment = 0;
if (isset($_GET['pageNum_rs_hdepartment'])) {
  $pageNum_rs_hdepartment = $_GET['pageNum_rs_hdepartment'];
}
$startRow_rs_hdepartment = $pageNum_rs_hdepartment * $maxRows_rs_hdepartment;

mysqli_select_db($conn, $database_conn);
$query_rs_hdepartment = "SELECT * FROM hdepartment ORDER BY id ASC";
$query_limit_rs_hdepartment = sprintf("%s LIMIT %d, %d", $query_rs_hdepartment, $startRow_rs_hdepartment, $maxRows_rs_hdepartment);
$rs_hdepartment = mysqli_query($conn, $query_limit_rs_hdepartment) or die(mysqli_connect_error());
$row_rs_hdepartment = mysqli_fetch_assoc($rs_hdepartment);

if (isset($_GET['totalRows_rs_hdepartment'])) {
  $totalRows_rs_hdepartment = $_GET['totalRows_rs_hdepartment'];
} else {
  $all_rs_hdepartment = mysqli_query($conn, $query_rs_hdepartment);
  $totalRows_rs_hdepartment = mysqli_num_rows($all_rs_hdepartment);
}
$totalPages_rs_hdepartment = ceil($totalRows_rs_hdepartment/$maxRows_rs_hdepartment)-1;

$queryString_rs_hdepartment = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_rs_hdepartment") == false && 
        stristr($param, "totalRows_rs_hdepartment") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_rs_hdepartment = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_rs_hdepartment = sprintf("&totalRows_rs_hdepartment=%d%s", $totalRows_rs_hdepartment, $queryString_rs_hdepartment);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../assets/img/logo-fav.png">
    <title>Company | Admin</title>
	  <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="../assetss/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assetss/font-awesome/4.6.3/css/font-awesome.min.css"> 

    <!-- page specific plugin styles -->
    <link rel="stylesheet" href="../assetss/css/jquery-ui.min.css">
    <link rel="stylesheet" href="../assetss/css/ui.jqgrid.min.css">
    <link rel="stylesheet" type="text/css" href="../assetss/css/dataTables.bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../assetss/css/dataTables.responsive.css">
    <link rel="stylesheet" type="text/css" href="../assetss/css/bootstrap-multiselect.min.css">
    <link rel="stylesheet" type="text/css" href="../assetss/css/jquery.jspanel.min.css">
    <link rel="stylesheet" href="../assetss/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="../assetss/css/query-builder.default.min.css">

    <!-- text fonts -->
    <link rel="stylesheet" href="../assetss/fonts/fonts.googleapis.com.css">

    <!-- ace styles -->
    <link rel="stylesheet" href="../assetss/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style">

    <!--[if lte IE 9]>
        <link rel="stylesheet" href="assetss/css/ace-part2.min.css" class="ace-main-stylesheet" />
    <![endif]-->

    <!--[if lte IE 9]>
      <link rel="stylesheet" href="assetss/css/ace-ie.min.css" />
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->
    <script src="../assetss/js/ace-extra.min.js"></script>

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
    <script src="assetss/js/html5shiv.min.js"></script>
    <script src="assetss/js/respond.min.js"></script>
    <![endif]-->
    
    <link rel="stylesheet" type="text/css" href="../assetss/css/custom.css">
         <style>
      @font-face {
         font-family: consolaFont;
         src: url(../assetss/fonts/consola.ttf);
       }
     </style>
	  
    <!--<link rel="stylesheet" type="text/css" href="assets/lib/perfect-scrollbar/css/perfect-scrollbar.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/lib/material-design-icons/css/material-design-iconic-font.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/lib/jquery.vectormap/jquery-jvectormap-1.2.2.css"/>
    <link rel="stylesheet" type="text/css" href="assets/lib/jqvmap/jqvmap.min.css"/>
    <link rel="stylesheet" href="assets/css/style.css" type="text/css"/>-->
	  <script type="text/javascript">
function confirmDeletion() {
    return confirm('Are you sure you want to delete?');
}
</script>
  </head>
	 <body class="no-skin" data-new-gr-c-s-check-loaded="14.1176.0" data-gr-ext-installed="">
    <div id="navbar" class="navbar navbar-default">
        <script type="text/javascript">
            try{ace.settings.check('navbar' , 'fixed')}catch(e){}
        </script>

        <div class="navbar-container" id="navbar-container">
            <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
                <span class="sr-only">Toggle sidebar</span>

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>
            </button>

            <div class="navbar-header pull-left">
                <a href="index.php" class="navbar-brand">
                    <small>
                    
                          <i class="fa fa-stethoscope"></i> 
                    
                  <!-- <i     <i class="fa fa-connectdevelop"></i>  -->
                    
                        Medical Equipment Management System
                    </small>
                </a>
            </div>
			
            <div style="min-width: 345px" class="navbar-buttons navbar-header pull-right" role="navigation">
				<div style="float:left;" class="navbar-header navbar-brand"><h6><?php echo gmdate("D, d / M / Y"); ?>&nbsp;&nbsp;&nbsp;&nbsp;</h6></div>
                <ul class="nav ace-nav" style="">
                    <li class="light-blue">
                        <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                            <img class="nav-user-photo" src="../assetss/avatars/avatar2.png" alt="Jason's Photo">
                            <span class="user-info"><small>Welcome,</small> eng mohsen minia</span>
                            <i class="ace-icon fa fa-caret-down"></i>
                        </a>
                        <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                            <li class="divider"></li>
                      		<li><a href="../logout.php"><i class="ace-icon fa fa-power-off"></i>Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div><!-- /.navbar-container -->
    </div>

    <div class="main-container" id="main-container">
        <script type="text/javascript">
            try{ace.settings.check('main-container' , 'fixed')}catch(e){}
        </script>

        <div id="sidebar" class="sidebar responsive" data-sidebar="true" data-sidebar-scroll="true" data-sidebar-hover="true">
            <script type="text/javascript">
                try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
            </script>

            <ul class="nav nav-list" style="top: 0px;">

                        <li class="active">
                    <a href="../index.php" id="mnuDashboard">
                        <i class="menu-icon fa fa-tachometer"></i>
                        <span class="menu-text"> Dashboard </span>
                    </a>
                    <b class="arrow"></b>
                </li>
                <li>
                    <a href="#" id="mnuSurvey">
                        <i class="menu-icon fa fa-list"></i>
                        <span class="menu-text"> Survey </span>
                    </a>
                    <b class="arrow"></b>
                </li>    
         		   <li>
                    <a href="#" id="mnuESU">
                        <i class="menu-icon fa fa-refresh"></i>
                        <span class="menu-text"> ESU </span>
                    </a>
                    <b class="arrow"></b>
                </li>
          		  <li>
                    <a href="#" id="mnustatus">
                        <i class="menu-icon fa fa-cubes "></i>
                        <span class="menu-text"> report_status </span>
                    </a>
                    <b class="arrow"></b>
                </li>
                     <li class="">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon fa fa-pencil-square-o"></i>
                        <span class="menu-text"> Editing </span>
                        <b class="arrow fa fa-angle-down"></b>
                    </a>
                    <b class="arrow"></b>
                    <ul class="submenu">
                         <li class="">
                            <a href="../hospital/main.php" id="mnuEditHospital">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Hospital
                            </a>
                            <b class="arrow"></b>
                        </li>
                                                    
                                <li class="">
                            <a href="../equipment/main.php" id="mnuEditEquipment">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Equipment
                            </a>

                            <b class="arrow"></b>
                        </li>
                                                    
                                                    <li class="">
                            <a href="main.php" id="mnuEditContract">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Contract
                            </a>

                            <b class="arrow"></b>
                        </li>
                                                    
                                                    <li class="">
                            <a href="#" id="mnuEditCompany">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Company
                            </a>

                            <b class="arrow"></b>
                        </li>
                                                    
                                                    
                                                    
                              <li class="">
                            <a href="#" id="mnuEditEquipmentName">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Equipment Name
                            </a>

                            <b class="arrow"></b>
                        </li>
                                                    
                                                    <li class="">
                            <a href="#" id="mnuEditDepartmentType">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Department Type
                            </a>

                            <b class="arrow"></b>
                        </li>
                                                    
                                                    <li class="">
                            <a href="#" id="mnuEditProject">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Project
                            </a>

                            <b class="arrow"></b>
                        </li>
                       
                              <li class="">
                            <a href="#" id="mnuReportSurvey">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Reports
                            </a>

                            <b class="arrow"></b>
                        </li>
               
                    </ul>
                </li>
                
                
            </ul><!-- /.nav-list -->

            <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
                <i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
            </div>

            <script type="text/javascript">
                try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
            </script>
        </div>
		<!-- /.main-content -->
		
		<div id="main-content" class="main-content">				<div class="main-content-inner">
                <div class="breadcrumbs" id="breadcrumbs">
                    <script type="text/javascript">
                        try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
                    </script>

                    <ul class="breadcrumb">
                        <li>
                            <i class="ace-icon fa fa-home home-icon"></i>
                            <a href="#">Home</a>
                        </li>
                        <li><a href="#">Edit</a></li>
                        <li class="active">Contracts</li>
                    </ul><!-- /.breadcrumb -->
                    
                </div>

                <div class="page-content">
                    

                    <div class="page-header">
                        <h1>
                            Contracts
                            <small>
                                <i class="ace-icon fa fa-angle-double-right"></i>
                                Contracts List
                            </small>
                        </h1>
                    </div><!-- /.page-header -->

                    <div class="row">
                        <div class="col-xs-12">
                            <!-- PAGE CONTENT BEGINS -->
                            
                                                        
<div class="ui-widget ui-widget-content ui-corner-all ui-jqgrid" id="gbox_contract" dir="ltr" style="width: 100%;">
	<div class="ui-widget-overlay jqgrid-overlay" id="lui_contract"></div>
	<div class="ui-state-default ui-state-active loading" id="load_contract" style="display: none;">Loading...</div>
	<div class="ui-jqgrid-view" role="grid" aria-multiselectable="false" id="gview_contract" style="width: 100%;">
		<div class="ui-widget-header ui-corner-top ui-jqgrid-titlebar ui-jqgrid-caption"><span class="ui-jqgrid-title">contract</span><a role="link" class="ui-corner-all ui-jqgrid-titlebar-close" title="Toggle Expand Collapse Grid"><span class="ui-icon ui-icon-circle-triangle-n"></span></a></div>
		<div class="ui-state-default ui-corner-top ui-jqgrid-hdiv" style="width: 100%;">
			<div style="display:flex;width: 25%" class="input-group mb-3" >
                              <input id="myInput" onkeyup="contractSearch()" type="text" name="search" required value="" class="form-control" placeholder="Search data">
                       </div>
			<div class="ui-jqgrid-hbox" style="padding-right: 26px;">
				<table class="ui-jqgrid-htable" style="width:1px" role="presentation" aria-labelledby="gbox_contract">
					<thead><tr class="ui-jqgrid-labels" role="row">
						<th id="hcontacts_rn" class="ui-state-default ui-th-column ui-th-ltr jqgh_rn" style="width: 60px;">
								   <div id="jqgh_hcontacts_rn" class="ui-jqgrid-sortable">Action<span class="s-ico" style="display:none"><span class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-jqgrid-disablePointerEvents ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-jqgrid-disablePointerEvents ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th>
							   <th id="hcontacts_rn" class="ui-state-default ui-th-column ui-th-ltr jqgh_rn" style="width: 30px;">
								   <div id="jqgh_hcontacts_rn" class="ui-jqgrid-sortable">Id<span class="s-ico" style="display:none"><span class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-jqgrid-disablePointerEvents ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-jqgrid-disablePointerEvents ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th>
						<th id="contract_company" class="ui-state-default ui-th-column ui-th-ltr" style="width: 119px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr">&nbsp;</span><div id="jqgh_contract_company" class="ui-jqgrid-sortable">Company<span class="s-ico" style=""><span class="ui-grid-ico-sort ui-icon-asc ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-jqgrid-disablePointerEvents ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th>
						<th id="contract_price" class="ui-state-default ui-th-column ui-th-ltr" style="width: 119px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr">&nbsp;</span><div id="jqgh_contract_price" class="ui-jqgrid-sortable">Price<span class="s-ico" style="display:none"><span class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-jqgrid-disablePointerEvents ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-jqgrid-disablePointerEvents ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th>
						<th id="contract_currentprice" class="ui-state-default ui-th-column ui-th-ltr" style="width: 119px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr">&nbsp;</span><div id="jqgh_contract_currentprice" class="ui-jqgrid-sortable">Current Price<span class="s-ico" style="display:none"><span class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-jqgrid-disablePointerEvents ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-jqgrid-disablePointerEvents ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th>
						<th id="contract_type" class="ui-state-default ui-th-column ui-th-ltr" style="width: 119px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr">&nbsp;</span><div id="jqgh_contract_type" class="ui-jqgrid-sortable">Type<span class="s-ico" style="display:none"><span class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-jqgrid-disablePointerEvents ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-jqgrid-disablePointerEvents ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th>
						<th id="contract_visits" class="ui-state-default ui-th-column ui-th-ltr" style="width: 95px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr">&nbsp;</span><div id="jqgh_contract_visits" class="ui-jqgrid-sortable">Regular Visits #<span class="s-ico" style="display:none"><span class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-jqgrid-disablePointerEvents ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-jqgrid-disablePointerEvents ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th>
						<th id="contract_emergencyvisits" class="ui-state-default ui-th-column ui-th-ltr" style="width: 119px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr">&nbsp;</span><div id="jqgh_contract_emergencyvisits" class="ui-jqgrid-sortable">Emergency Visits #<span class="s-ico" style="display:none"><span class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-jqgrid-disablePointerEvents ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-jqgrid-disablePointerEvents ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th>
						<th id="contract_emergencyresponsetime" class="ui-state-default ui-th-column ui-th-ltr" style="width: 119px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr">&nbsp;</span><div id="jqgh_contract_emergencyresponsetime" class="ui-jqgrid-sortable">Emergency Response Time<span class="s-ico" style="display:none"><span class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-jqgrid-disablePointerEvents ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-jqgrid-disablePointerEvents ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th>
						<th id="contract_latepenalty" class="ui-state-default ui-th-column ui-th-ltr" style="width: 119px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr">&nbsp;</span><div id="jqgh_contract_latepenalty" class="ui-jqgrid-sortable">Late Penalty<span class="s-ico" style="display:none"><span class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-jqgrid-disablePointerEvents ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-jqgrid-disablePointerEvents ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th>
						<th id="contract_startdate" class="ui-state-default ui-th-column ui-th-ltr" style="width: 95px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr">&nbsp;</span><div id="jqgh_contract_startdate" class="ui-jqgrid-sortable">Start Date<span class="s-ico" style="display:none"><span class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-jqgrid-disablePointerEvents ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-jqgrid-disablePointerEvents ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th>
						<th id="contract_enddate" class="ui-state-default ui-th-column ui-th-ltr" style="width: 119px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr">&nbsp;</span><div id="jqgh_contract_enddate" class="ui-jqgrid-sortable">End Date<span class="s-ico" style="display:none"><span class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-jqgrid-disablePointerEvents ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-jqgrid-disablePointerEvents ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th>
						<th id="contract_filename" class="ui-state-default ui-th-column ui-th-ltr" style="width: 40px; display: none;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr">&nbsp;</span><div id="jqgh_contract_filename" class="ui-jqgrid-sortable">Contract File<span class="s-ico" style="display:none"><span class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-jqgrid-disablePointerEvents ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-jqgrid-disablePointerEvents ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th>
						<th id="contract_filepath" class="ui-state-default ui-th-column ui-th-ltr" style="width: 95px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr">&nbsp;</span><div id="jqgh_contract_filepath" class="ui-jqgrid-sortable">File<span class="s-ico" style="display:none"><span class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-jqgrid-disablePointerEvents ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-jqgrid-disablePointerEvents ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th></tr>
						</thead></table></div></div>
		<div class="ui-state-error ui-jqgrid-errorbar ui-jqgrid-errorbar-ltr" style="display:none;"><span class="ui-jqgrid-error"></span></div>
		<div class="ui-jqgrid-bdiv" style="height: 200px; width: 100%;">
			<div style="position:relative;">
				<table id="contract" tabindex="0" role="presentation" aria-labelledby="gbox_contract" class="ui-jqgrid-btable" style="width: 1px;">
					<tbody>
						<?php do { ?>
						<tr class="jqgfirstrow" role="row" style="height:auto">
						<td style="text-align:center;width: 60px;" class="actions"><a href="edit.php?id=<?php echo $row_rs_contract['id']; ?>" class="icon"><i class="ui-icon ace-icon fa fa-pencil blue"></i></a> - <a href="delete.php?id=<?php echo $row_rs_contract['id']; ?>" class="icon" onclick="return confirmDeletion();"><i class="ui-icon ace-icon fa fa-trash-o red"></i></a></td>
						<td role="gridcell" style="height:0;width:30px;"><?php echo $row_rs_contract['id'] ; ?></td>
						<td role="gridcell" style="height:0;width:119px;"><?php echo $row_rs_contract['company'] ; ?></td>
						<td role="gridcell" style="height:0;width:119px;"><?php echo $row_rs_contract['price'] ; ?></td>
						<td role="gridcell" style="height:0;width:119px;"><?php echo $row_rs_contract['cprice'] ; ?></td>
						<td role="gridcell" style="height:0;width:119px;"><?php echo $row_rs_contract['type'] ; ?></td>
						<td role="gridcell" style="height:0;width:95px;"><?php echo $row_rs_contract['visits'] ; ?></td>
						<td role="gridcell" style="height:0;width:119px;"><?php echo $row_rs_contract['evisits'] ; ?></td>
						<td role="gridcell" style="height:0;width:119px;"><?php echo $row_rs_contract['emergencyrt'] ; ?></td>
						<td role="gridcell" style="height:0;width:119px;"><?php echo $row_rs_contract['latepenalty'] ; ?></td>
						<td role="gridcell" style="height:0;width:95px;"><?php echo $row_rs_contract['startdate'] ; ?></td>
						<td role="gridcell" style="height:0;width:119px;"><?php echo $row_rs_contract['enddate'] ; ?></td>
						<td role="gridcell" style="height:0;width:95px;"><a href="../<?php echo $row_rs_contract['file']; ?>" target="_blank" title="View"><span>View</span></a></td>
						</tr>
						<?php } while ($row_rs_contract = mysqli_fetch_assoc($rs_contract)); ?>
						</tbody></table></div></div></div>
	<div class="ui-widget-header ui-jqgrid-resize-mark" id="rs_mcontract">&nbsp;</div>
	<div id="pagercontract" class="ui-state-default ui-jqgrid-pager ui-corner-bottom" dir="ltr" style="width: 100%;">
		<div id="pg_pagercontract" class="ui-pager-control" role="group">
			<table class="ui-pg-table" style="width:100%;table-layout:fixed;height:100%;">
				<tbody><tr>
					<td id="pagercontract_left" style="text-align:left;"><div class="ui-pg-table navtable" role="toolbar" style="float:left;table-layout:auto;">
				 	 <a href="form.php" role="button" class="ui-pg-button ui-corner-all" title="Add">
						<div class="ui-pg-div"><span class="ui-icon ace-icon fa fa-plus-circle purple"></span></div></a>
				 </div></td>
					<td id="pagerhospital_center" style="text-align: center; white-space: pre; width: 332px;display: flex;">
		<table style="table-layout:auto;white-space: pre;margin-left:auto;margin-right:auto;" class="ui-pg-table">
			<tbody>
				<tr><a aria-label="Previous" href="<?php printf("%s?pageNum_rs_contract=%d%s", $currentPage, max(0, $pageNum_rs_contract - 1), $queryString_rs_contract); ?>"><span class="ui-icon ace-icon fa fa-angle-left bigger-140"></span>  Previous</a>
					&nbsp;
        <a aria-label="Next" href="<?php printf("%s?pageNum_rs_contract=%d%s", $currentPage, $totalPages_rs_contract, $queryString_rs_contract); ?>">Next   <span class="ui-icon ace-icon fa fa-angle-right bigger-140"></span> </a>
   
					</tr></tbody></table></td>
					</tr></tbody></table></div></div></div>
                            
                            
                            <br><br>
                            
                            <ul class="nav nav-tabs" id="myTab1">
                                <li class="active">
                                    <a data-toggle="tab" href="#equipment" aria-expanded="true">Equipment</a>
                                </li>

                                <li class="">
                                    <a data-toggle="tab" href="#evaluation" aria-expanded="false">Evaluation</a>
                                </li>
                                
                            </ul>
                            
                            <div class="tab-content padding-4">
                                <div id="equipment" class="tab-pane active">
                                    
<div class="ui-widget ui-widget-content ui-corner-all ui-jqgrid" id="gbox_cequipment" dir="ltr" style="width: 1276px;">
	<div class="ui-widget-overlay jqgrid-overlay" id="lui_cequipment"></div>
	<div class="ui-state-default ui-state-active loading" id="load_cequipment" style="display: none;">Loading...</div>
	<div class="ui-jqgrid-view" role="grid" aria-multiselectable="false" id="gview_cequipment" style="width: 1276px;">
		<div class="ui-widget-header ui-corner-top ui-jqgrid-titlebar ui-jqgrid-caption">
			<span class="ui-jqgrid-title">Contacts</span><a role="link" class="ui-corner-all ui-jqgrid-titlebar-close" title="Toggle Expand Collapse Grid"><span class="ui-icon ui-icon-circle-triangle-n"></span></a></div>
		<div class="ui-state-default ui-corner-top ui-jqgrid-hdiv" style="width: 1276px;">
			<div class="ui-jqgrid-hbox" style="padding-right: 0px;">
				<table class="ui-jqgrid-htable" style="width:1px" role="presentation" aria-labelledby="gbox_cequipment">
					<thead><tr class="ui-jqgrid-labels" role="row">
						<th id="cequipment_rn" class="ui-state-default ui-th-column ui-th-ltr jqgh_rn" style="width: 30px;"><div id="jqgh_cequipment_rn"><span class="s-ico" style="display:none"><span class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-jqgrid-disablePointerEvents ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-jqgrid-disablePointerEvents ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th>
						<th id="cequipment_hospital" class="ui-state-default ui-th-column ui-th-ltr" style="width: 205px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr">&nbsp;</span><div id="jqgh_cequipment_hospital" class="ui-jqgrid-sortable">Hospital<span class="s-ico" style=""><span class="ui-grid-ico-sort ui-icon-asc ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-jqgrid-disablePointerEvents ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th>
						<th id="cequipment_department" class="ui-state-default ui-th-column ui-th-ltr" style="width: 205px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr">&nbsp;</span><div id="jqgh_cequipment_department" class="ui-jqgrid-sortable">Department<span class="s-ico" style="display:none"><span class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-jqgrid-disablePointerEvents ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-jqgrid-disablePointerEvents ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th>
						<th id="cequipment_type" class="ui-state-default ui-th-column ui-th-ltr" style="width: 205px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr">&nbsp;</span><div id="jqgh_cequipment_type" class="ui-jqgrid-sortable">Type<span class="s-ico" style="display:none"><span class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-jqgrid-disablePointerEvents ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-jqgrid-disablePointerEvents ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th>
						<th id="cequipment_manufacturer" class="ui-state-default ui-th-column ui-th-ltr" style="width: 205px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr">&nbsp;</span><div id="jqgh_cequipment_manufacturer" class="ui-jqgrid-sortable">Manufacturer<span class="s-ico" style="display:none"><span class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-jqgrid-disablePointerEvents ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-jqgrid-disablePointerEvents ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th>
						<th id="cequipment_model" class="ui-state-default ui-th-column ui-th-ltr" style="width: 205px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr">&nbsp;</span><div id="jqgh_cequipment_model" class="ui-jqgrid-sortable">Model<span class="s-ico" style="display:none"><span class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-jqgrid-disablePointerEvents ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-jqgrid-disablePointerEvents ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th>
						<th id="cequipment_serial" class="ui-state-default ui-th-column ui-th-ltr" style="width: 203px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr">&nbsp;</span><div id="jqgh_cequipment_serial" class="ui-jqgrid-sortable">Serial<span class="s-ico" style="display:none"><span class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-jqgrid-disablePointerEvents ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-jqgrid-disablePointerEvents ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th></tr>
						</thead></table></div></div>
		<div class="ui-state-error ui-jqgrid-errorbar ui-jqgrid-errorbar-ltr" style="display:none;">
			<span class="ui-jqgrid-error"></span></div>
		<div class="ui-jqgrid-bdiv" style="height: 200px; width: 1276px;">
			<div style="position:relative;">
				<table id="cequipment" tabindex="0" role="presentation" aria-labelledby="gbox_cequipment" class="ui-jqgrid-btable" style="width: 1px;">
					<tbody><tr class="jqgfirstrow" role="row" style="height:auto">
						<td role="gridcell" style="height:0;width:30px;"></td>
						<td role="gridcell" style="height:0;width:205px;"></td>
						<td role="gridcell" style="height:0;width:205px;"></td>
						<td role="gridcell" style="height:0;width:205px;"></td>
						<td role="gridcell" style="height:0;width:205px;"></td>
						<td role="gridcell" style="height:0;width:205px;"></td>
						<td role="gridcell" style="height:0;width:203px;"></td>
						</tr>
					</tbody></table></div></div></div>
	<div class="ui-widget-header ui-jqgrid-resize-mark" id="rs_mcequipment">&nbsp;</div>
	<div id="pagercequipment" class="ui-state-default ui-jqgrid-pager ui-corner-bottom" dir="ltr" style="width: 1276px;">
		<div id="pg_pagercequipment" class="ui-pager-control" role="group">
			<table class="ui-pg-table" style="width:100%;table-layout:fixed;height:100%;">
				<tbody><tr>
					<td id="pagercontract_left" style="text-align:left;"><div class="ui-pg-table navtable" role="toolbar" style="float:left;table-layout:auto;">
				 	 <a href="form.php" role="button" class="ui-pg-button ui-corner-all" title="Add">
						<div class="ui-pg-div"><span class="ui-icon ace-icon fa fa-plus-circle purple"></span></div></a>
				 </div></td>
					<td id="pagerhospital_center" style="text-align: center; white-space: pre; width: 332px;display: flex;">
		<table style="table-layout:auto;white-space: pre;margin-left:auto;margin-right:auto;" class="ui-pg-table">
			<tbody>
				<tr><a aria-label="Previous" href="<?php printf("%s?pageNum_rs_contract=%d%s", $currentPage, max(0, $pageNum_rs_contract - 1), $queryString_rs_contract); ?>"><span class="ui-icon ace-icon fa fa-angle-left bigger-140"></span>  Previous</a>
					&nbsp;
        <a aria-label="Next" href="<?php printf("%s?pageNum_rs_contract=%d%s", $currentPage, $totalPages_rs_contract, $queryString_rs_contract); ?>">Next   <span class="ui-icon ace-icon fa fa-angle-right bigger-140"></span> </a>
   
					</tr></tbody></table></td>
					</tr></tbody></table></div></div></div></div>

                                <div id="evaluation" class="tab-pane">
                                    
<div class="ui-widget ui-widget-content ui-corner-all ui-jqgrid" id="gbox_cevaluation" dir="ltr" style="width: 1251px;">
	<div class="ui-widget-overlay jqgrid-overlay" id="lui_cevaluation"></div>
	<div class="ui-state-default ui-state-active loading" id="load_cevaluation" style="display: none;">Loading...</div>
	<div class="ui-jqgrid-view" role="grid" aria-multiselectable="false" id="gview_cevaluation" style="width: 1251px;">
		<div class="ui-widget-header ui-corner-top ui-jqgrid-titlebar ui-jqgrid-caption">
			<span class="ui-jqgrid-title">Evaluation</span><a role="link" class="ui-corner-all ui-jqgrid-titlebar-close" title="Toggle Expand Collapse Grid"><span class="ui-icon ui-icon-circle-triangle-n"></span></a></div>
		<div class="ui-state-default ui-corner-top ui-jqgrid-hdiv" style="width: 1251px;">
			<div class="ui-jqgrid-hbox" style="padding-right: 0px;">
				<table class="ui-jqgrid-htable" style="width:1px" role="presentation" aria-labelledby="gbox_cevaluation">
					<thead><tr class="ui-jqgrid-labels" role="row">
						<th id="cevaluation_rn" class="ui-state-default ui-th-column ui-th-ltr jqgh_rn" style="width: 30px;"><div id="jqgh_cevaluation_rn"><span class="s-ico" style="display:none"><span class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-jqgrid-disablePointerEvents ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-jqgrid-disablePointerEvents ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th>
						<th id="cevaluation_evaldate" class="ui-state-default ui-th-column ui-th-ltr" style="width: 241px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr">&nbsp;</span><div id="jqgh_cevaluation_evaldate" class="ui-jqgrid-sortable">Date<span class="s-ico" style=""><span class="ui-grid-ico-sort ui-icon-asc ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-jqgrid-disablePointerEvents ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th>
						<th id="cevaluation_timeeval" class="ui-state-default ui-th-column ui-th-ltr" style="width: 120px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr">&nbsp;</span><div id="jqgh_cevaluation_timeeval" class="ui-jqgrid-sortable">Time Evaluation<span class="s-ico" style="display:none"><span class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-jqgrid-disablePointerEvents ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-jqgrid-disablePointerEvents ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th>
						<th id="cevaluation_performanceeval" class="ui-state-default ui-th-column ui-th-ltr" style="width: 120px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr">&nbsp;</span><div id="jqgh_cevaluation_performanceeval" class="ui-jqgrid-sortable">Technical Evaluation<span class="s-ico" style="display:none"><span class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-jqgrid-disablePointerEvents ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-jqgrid-disablePointerEvents ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th>
						<th id="cevaluation_notes" class="ui-state-default ui-th-column ui-th-ltr" style="width: 722px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr">&nbsp;</span><div id="jqgh_cevaluation_notes" class="ui-jqgrid-sortable">Notes<span class="s-ico" style="display:none"><span class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-jqgrid-disablePointerEvents ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-jqgrid-disablePointerEvents ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span></div></th></tr>
						</thead></table></div></div><
		div class="ui-state-error ui-jqgrid-errorbar ui-jqgrid-errorbar-ltr" style="display:none;"><span class="ui-jqgrid-error"></span></div>
		<div class="ui-jqgrid-bdiv" style="height: 200px; width: 1251px;">
			<div style="position:relative;">
				<table id="cevaluation" tabindex="0" role="presentation" aria-labelledby="gbox_cevaluation" class="ui-jqgrid-btable" style="width: 1px;">
					<tbody><tr class="jqgfirstrow" role="row" style="height:auto">
						<td role="gridcell" style="height:0;width:30px;"></td>
						<td role="gridcell" style="height:0;width:241px;"></td>
						<td role="gridcell" style="height:0;width:120px;"></td>
						<td role="gridcell" style="height:0;width:120px;"></td>
						<td role="gridcell" style="height:0;width:722px;"></td>
						</tr>
					</tbody></table></div></div></div>
	<div class="ui-widget-header ui-jqgrid-resize-mark" id="rs_mcevaluation">&nbsp;</div>
	<div id="pagercequipment" class="ui-state-default ui-jqgrid-pager ui-corner-bottom" dir="ltr" style="width: 1276px;">
		<div id="pg_pagercequipment" class="ui-pager-control" role="group">
			<table class="ui-pg-table" style="width:100%;table-layout:fixed;height:100%;">
				<tbody><tr>
					<td id="pagercontract_left" style="text-align:left;"><div class="ui-pg-table navtable" role="toolbar" style="float:left;table-layout:auto;">
				 	 <a href="form.php" role="button" class="ui-pg-button ui-corner-all" title="Add">
						<div class="ui-pg-div"><span class="ui-icon ace-icon fa fa-plus-circle purple"></span></div></a>
				 </div></td>
					<td id="pagerhospital_center" style="text-align: center; white-space: pre; width: 332px;display: flex;">
		<table style="table-layout:auto;white-space: pre;margin-left:auto;margin-right:auto;" class="ui-pg-table">
			<tbody>
				<tr><a aria-label="Previous" href="<?php printf("%s?pageNum_rs_contract=%d%s", $currentPage, max(0, $pageNum_rs_contract - 1), $queryString_rs_contract); ?>"><span class="ui-icon ace-icon fa fa-angle-left bigger-140"></span>  Previous</a>
					&nbsp;
        <a aria-label="Next" href="<?php printf("%s?pageNum_rs_contract=%d%s", $currentPage, $totalPages_rs_contract, $queryString_rs_contract); ?>">Next   <span class="ui-icon ace-icon fa fa-angle-right bigger-140"></span> </a>
   
					</tr></tbody></table></td>
					</tr></tbody></table></div></div>
									</div>
                                    
                                </div>														
                            </div>

                            <script type="text/javascript">
                                var $path_base = ".";//in Ace demo this will be used for editurl parameter
                            </script>

                            <!-- PAGE CONTENT ENDS -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->

                            
                    
                </div><!-- /.page-content -->
            </div>
            
</div>
		
        <!-- /.main-content -->

   <div class="footer">
            <div class="footer-inner">
                <div class="footer-content">
					<span class="bigger-120">
                    <p style="background-color:#CCC;" align="center"><strong>Copyright &copy; 1995-2022 All Rights Reserved <a href="https://bmepplanner.com/" target="_blank">bmepplanner</a></strong></p>
                    </span>
                </div>
            </div>
        </div>

        <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
            <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
        </a>
		    
    </div><!-- /.main-container -->

    <!-- basic scripts -->

    <!--[if !IE]> -->
    <script src="../assetss/js/jquery.2.1.1.min.js"></script>

    <!-- <![endif]-->

    <!--[if IE]>
<script src="assetss/js/jquery.1.11.1.min.js"></script>
<![endif]-->

    <!--[if !IE]> -->
    <script type="text/javascript">
        window.jQuery || document.write("<script src='../assetss/js/jquery.min.js'>"+"<"+"/script>");
    </script>

    <!-- <![endif]-->

    <!--[if IE]>
<script type="text/javascript">
window.jQuery || document.write("<script src='assetss/js/jquery1x.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
    <script type="text/javascript">
        if('ontouchstart' in document.documentElement) document.write("<script src='../assetss/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
    </script>
    <script src="../assetss/js/bootstrap.min.js"></script>

    <!-- page specific plugin scripts -->
 
       <script src="../assetss/js/echarts.min.js"></script><div id="scrnli_recorder_root"></div>
    <script type="text/javascript" language="javascript" src="../assetss/js/jquery.dataTables.min.js"></script>		
    <script type="text/javascript" language="javascript" src="../assetss/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" language="javascript" src="../assetss/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" language="javascript" src="../assetss/js/bootstrap-multiselect.min.js"></script>
    <script src="../assetss/js/jquery.validate.min.js"></script>
    <script src="../assetss/js/jquery.validate.additional-methods.min.js"></script>
    <script src="../assetss/js/jquery.form.min.js"></script>
    


    <!--[if lte IE 8]>
      <script src="assetss/js/excanvas.min.js"></script>
    <![endif]-->
    <script src="../assetss/js/custom.js"></script>
    <script src="../assetss/js/jquery-ui.min.js"></script>
    <script src="../assetss/js/mobile-detect.min.js"></script>
    <script src="../assetss/js/jquery.ui.touch-punch.min.js"></script>
    <script src="../assetss/js/jquery.jqGrid.min.js"></script>
    <script src="../assetss/js/grid.locale-en.js"></script>
    <script src="../assetss/js/jqgrid-format.js"></script>
    <script src="../assetss/js/jquery.jspanel.min.js"></script>
    <script src="../assetss/js/moment.min.js"></script>
    <script src="../assetss/js/bootstrap-datetimepicker.min.js"></script>
    <script src="../assetss/js/query-builder.standalone.min.js"></script>


    <!-- ace scripts -->
    <script src="assetss/js/ace-elements.min.js"></script>
    <script src="assetss/js/ace.min.js"></script>

    <!-- inline scripts related to this page -->
    <script type="text/javascript">
    
       
    </script>
	  
   
   
  </body>
</html>
<?php mysqli_free_result($rs_contract); ?>
