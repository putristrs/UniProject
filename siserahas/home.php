<?php
session_start();
include_once 'database/koneksi.php';

if (isset($_GET['id'])) {

}

 ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<link rel="icon" type="images/png" href="images/honda.png">
		<title>Sistem Informasi Antrian Servis Motor</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
		<style media="screen">
			.small-box{border-radius:2px;position:relative;display:block;margin-bottom:20px;box-shadow:0 1px 1px rgba(0,0,0,0.1)}.small-box>.inner{padding:10px}.small-box>.small-box-footer{position:relative;text-align:center;padding:3px 0;color:#fff;color:rgba(255,255,255,0.8);display:block;z-index:10;background:rgba(0,0,0,0.1);text-decoration:none}.small-box>.small-box-footer:hover{color:#fff;background:rgba(0,0,0,0.15)}.small-box h3{font-size:38px;font-weight:bold;margin:0 0 10px 0;white-space:nowrap;padding:0}.small-box p{font-size:15px}.small-box p>small{display:block;color:#f9f9f9;font-size:13px;margin-top:5px}.small-box h3,.small-box p{z-index:5}.small-box .icon{-webkit-transition:all .3s linear;-o-transition:all .3s linear;transition:all .3s linear;position:absolute;top:-10px;right:10px;z-index:0;font-size:90px;color:rgba(0,0,0,0.15)}.small-box:hover{text-decoration:none;color:#f9f9f9}.small-box:hover .icon{font-size:95px}@media (max-width:767px){.small-box{text-align:center}.small-box .icon{display:none}.small-box p{font-size:12px}}.box{position:relative;border-radius:3px;background:#ffffff;border-top:3px solid #d2d6de;margin-bottom:20px;width:100%;box-shadow:0 1px 1px rgba(0,0,0,0.1)}
		</style>
	</head>

	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header">
					<a href="" class="navbar-brand">
						<small>
							<i class="fa fa-user"></i>
							AHASS Surya Cipta Pratama
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
					<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
                <?php

                $query = mysqli_query($koneksi, "SELECT foto FROM user");
                $data = mysqli_fetch_array($query);
                 ?>
								<img class="nav-user-photo" src="images/user/<?php echo $data['foto']; ?>" alt="Jason's Photo" />
								<span class="user-info">
									<small>Welcome,</small>
									<?php echo $_SESSION['username']; ?>
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">

								<li class="divider"></li>

								<li>
								<a href="page/logout.php?>""target="_blank" onclick="return confirm('Apakah anda yakin ingin keluar dari sistem ini?')">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-xlarge" id="sidebar-shortcuts-xlarge" style="padding: 10px;">
						<a class="btn btn-success" href="home.php?page=beranda">
							<i class="ace-icon fa fa-tachometer"></i>
						</a>

						<a class="btn btn-info" href="home.php?page=sms">
							<i class="ace-icon fa fa-rss-square "></i>
						</a>
					</div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!-- /.sidebar-shortcuts -->

				<ul class="nav nav-list">
					<li class="<?php if($_GET['page'] == 'home'){echo "active";} ?>">
						<a href="home.php?page=home">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Beranda </span>
						</a>

						<b class="arrow"></b>
					</li>

					<li class="<?php if($_GET['page'] == 'profil'){echo "active";} ?>">
						<a href="home.php?page=profil">
							<i class="menu-icon fa fa-user"></i>
							<span class="menu-text"> Profil Akun </span>
						</a>

						<b class="arrow"></b>
					</li>

					<li class="<?php if($_GET['page'] == 'antrian'){echo "active";} ?>">
						<a href="home.php?page=antrian" class="">
							<i class="menu-icon fa fa-search"></i>
							<span class="menu-text">
								Antrian
							</span>
						</a>

						<b class="arrow"></b>

					</li>

					<li class="<?php if($_GET['page'] == 'reminder'){echo "active";} ?>">
						<a href="home.php?page=reminder" class="">
							<i class="menu-icon fa fa-asterisk"></i>
							<span class="menu-text"> Reminder </span>
						</a>

						<b class="arrow"></b>
					</li>

			
					<li class="<?php if($_GET['page'] == 'sms'){echo "active";} ?>">
						<a href="home.php?page=sms">
							<i class="menu-icon fa fa-rss-square"></i>
							<span class="menu-text"> SMS </span>
						</a>
						

						<b class="arrow"></b>
					</li>

					<li class="<?php if($_GET['page'] == 'daftarkontak'){echo "active";} ?>">
						<a href="home.php?page=daftarkontak">
							<i class="menu-icon fa fa-"></i>
							<span class="menu-text"> Daftar Kontak</span>
						</a>

						<b class="arrow"></b>
					</li>

					<li class="<?php if($_GET['page'] == 'pesanbaru'){echo "active";} ?>">
						<a href="home.php?page=pesanbaru">
							<i class="menu-icon fa fa"></i>
							<span class="menu-text"> Pesan Baru </span>
						</a>

						<b class="arrow"></b>
					</li>

					<li class="<?php if($_GET['page'] == 'pesankeluar'){echo "active";} ?>">
						<a href="?page=pesankeluar">
							<i class="menu-icon fa fa"></i>
							<span class="menu-text"> Pesan Keluar </span>
						</a>

						<b class="arrow"></b>
					</li>

					<li class="<?php if($_GET['kontak'] == 'pesanterkirim'){echo "active";} ?>">
						<a href="?page=pesanterkirim">
							<i class="menu-icon fa fa"></i>
							<span class="menu-text"> Pesan Terkirim </span>
						</a>

						<b class="arrow"></b>
					</li>


						<li class="<?php if($_GET['page'] == 'help'){echo "active";} ?>">
						<a href="home.php?page=help">
							<i class="menu-icon fa fa-angle-double-right"></i>
							<span class="menu-text"> Help </span>
						</a>
						

						<b class="arrow"></b>
					</li>



					
				</ul><!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>

			<?php

			if (isset($_GET['page'])) {
				$page = $_GET['page'];

				switch ($page) {
					case 'home':
						include 'page/home.php';
						break;
					case 'profil':
						include 'page/profil.php';
						break;
					case 'antrian':
						include 'page/antrian.php';
						break;
					case 'reminder':
						include 'page/reminder.php';
						break;
					case 'notifikasisms':
						include 'page/notifikasisms.php';
						break;
					case 'notifikasiupdate':
						include 'page/antrian.php';
						break;
					case 'help':
						include 'page/help.php';
						break;


					case 'sms':
            			include 'page/sms.php';
            			break;
					case 'daftarkontak':
            			include 'kontak/daftarkontak.php';
            			break;
            		case 'pesanbaru':
            			include 'kontak/pesanbaru.php';
            			break;
					case 'pesanterkirim':
            			include 'kontak/pesanterkirim.php';
            			break;
					case 'pesankeluar':
            			include 'kontak/pesankeluar.php';
            			break;

            
					case 'tambahdata':
						include 'page/tambahdataantrian.php';
						break;
          			case 'tambahdatareminder':
            			include 'page/tambahdatareminder.php';
            			break;
          			case 'tambahdatadaftarkontak':
            			include 'kontak/tambahdatadaftarkontak.php';
            			break;
            		case 'tambahdatapesanbaru':
            			include 'kontak/tambahdatapesanbaru.php';
            			break;
            		case 'tambahdatapesankeluar':
            			include 'kontak/tambahdatapesankeluar.php';
            			break;
            		case 'tambahdatapesanterkirim':
            			include 'kontak/tambahdatapesanterkirim.php';
            			break;

          			case 'editantrian':
            			include 'page/editantrian.php';
            			break;
          			case 'editreminder':
            			include 'page/editreminder.php';
           				break;
          			case 'editdaftarkontak':
              			include 'kontak/editdaftarkontak.php';
            			break;
            		case 'editpesanbaru':
              			include 'kontak/editpesanbaru.php';
            			break;
            		case 'editpesankeluar':
              			include 'kontak/editpesankeluar.php';
            			break;
            		case 'editpesanterkirim':
              			include 'kontak/editpesanterkirim.php';
            			break;


					case 'detail':
            			include 'kontak/detail.php';
            			break;
            			
					default:
						include 'page/home.php';
						break;

				}

			}
				else 
					{
						include 'page/home.php';
					}

			 ?>


			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="">Sistem Informasi Antrian Servis Motor</span>
						 &copy; 2019
						</span>

						&nbsp; &nbsp;
						
					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->
		<script src="assets/js/jquery-ui.custom.min.js"></script>
		<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="assets/js/jquery.easypiechart.min.js"></script>
		<script src="assets/js/jquery.sparkline.index.min.js"></script>
		<script src="assets/js/jquery.flot.min.js"></script>
		<script src="assets/js/jquery.flot.pie.min.js"></script>
		<script src="assets/js/jquery.flot.resize.min.js"></script>

		<script src="assets/js/jquery.dataTables.min.js"></script>
		<script src="assets/js/jquery.dataTables.bootstrap.min.js"></script>
		<script src="assets/js/dataTables.buttons.min.js"></script>
		<script src="assets/js/dataTables.select.min.js"></script>
		<!-- inline scripts related to this page -->


		<script type="text/javascript">
			$(document).ready(function(){
				$('#dynamic-table').DataTable();
			});
		</script>

		<!-- ace scripts -->
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
				$('.easy-pie-chart.percentage').each(function(){
					var $box = $(this).closest('.infobox');
					var barColor = $(this).data('color') || (!$box.hasClass('infobox-dark') ? $box.css('color') : 'rgba(255,255,255,0.95)');
					var trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
					var size = parseInt($(this).data('size')) || 50;
					$(this).easyPieChart({
						barColor: barColor,
						trackColor: trackColor,
						scaleColor: false,
						lineCap: 'butt',
						lineWidth: parseInt(size/10),
						animate: ace.vars['old_ie'] ? false : 1000,
						size: size
					});
				})

				$('.sparkline').each(function(){
					var $box = $(this).closest('.infobox');
					var barColor = !$box.hasClass('infobox-dark') ? $box.css('color') : '#FFF';
					$(this).sparkline('html',
									 {
										tagValuesAttribute:'data-values',
										type: 'bar',
										barColor: barColor ,
										chartRangeMin:$(this).data('min') || 0
									 });
				});


			  //flot chart resize plugin, somehow manipulates default browser resize event to optimize it!
			  //but sometimes it brings up errors with normal resize event handlers
			  $.resize.throttleWindow = false;

			  var placeholder = $('#piechart-placeholder').css({'width':'90%' , 'min-height':'150px'});
			  var data = [
				{ label: "social networks",  data: 38.7, color: "#68BC31"},
				{ label: "search engines",  data: 24.5, color: "#2091CF"},
				{ label: "ad campaigns",  data: 8.2, color: "#AF4E96"},
				{ label: "direct traffic",  data: 18.6, color: "#DA5430"},
				{ label: "other",  data: 10, color: "#FEE074"}
			  ]
			  function drawPieChart(placeholder, data, position) {
			 	  $.plot(placeholder, data, {
					series: {
						pie: {
							show: true,
							tilt:0.8,
							highlight: {
								opacity: 0.25
							},
							stroke: {
								color: '#fff',
								width: 2
							},
							startAngle: 2
						}
					},
					legend: {
						show: true,
						position: position || "ne",
						labelBoxBorderColor: null,
						margin:[-30,15]
					}
					,
					grid: {
						hoverable: true,
						clickable: true
					}
				 })
			 }
			 drawPieChart(placeholder, data);

			 /**
			 we saved the drawing function and the data to redraw with different position later when switching to RTL mode dynamically
			 so that's not needed actually.
			 */
			 placeholder.data('chart', data);
			 placeholder.data('draw', drawPieChart);


			  //pie chart tooltip example
			  var $tooltip = $("<div class='tooltip top in'><div class='tooltip-inner'></div></div>").hide().appendTo('body');
			  var previousPoint = null;

			  placeholder.on('plothover', function (event, pos, item) {
				if(item) {
					if (previousPoint != item.seriesIndex) {
						previousPoint = item.seriesIndex;
						var tip = item.series['label'] + " : " + item.series['percent']+'%';
						$tooltip.show().children(0).text(tip);
					}
					$tooltip.css({top:pos.pageY + 10, left:pos.pageX + 10});
				} else {
					$tooltip.hide();
					previousPoint = null;
				}

			 });

				/////////////////////////////////////
				$(document).one('ajaxloadstart.page', function(e) {
					$tooltip.remove();
				});




				var d1 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.5) {
					d1.push([i, Math.sin(i)]);
				}

				var d2 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.5) {
					d2.push([i, Math.cos(i)]);
				}

				var d3 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.2) {
					d3.push([i, Math.tan(i)]);
				}


				var sales_charts = $('#sales-charts').css({'width':'100%' , 'height':'220px'});
				$.plot("#sales-charts", [
					{ label: "Domains", data: d1 },
					{ label: "Hosting", data: d2 },
					{ label: "Services", data: d3 }
				], {
					hoverable: true,
					shadowSize: 0,
					series: {
						lines: { show: true },
						points: { show: true }
					},
					xaxis: {
						tickLength: 0
					},
					yaxis: {
						ticks: 10,
						min: -2,
						max: 2,
						tickDecimals: 3
					},
					grid: {
						backgroundColor: { colors: [ "#fff", "#fff" ] },
						borderWidth: 1,
						borderColor:'#555'
					}
				});


				$('#recent-box [data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('.tab-content')
					var off1 = $parent.offset();
					var w1 = $parent.width();

					var off2 = $source.offset();
					//var w2 = $source.width();

					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}


				$('.dialogs,.comments').ace_scroll({
					size: 300
			    });


				//Android's default browser somehow is confused when tapping on label which will lead to dragging the task
				//so disable dragging when clicking on label
				var agent = navigator.userAgent.toLowerCase();
				if(ace.vars['touch'] && ace.vars['android']) {
				  $('#tasks').on('touchstart', function(e){
					var li = $(e.target).closest('#tasks li');
					if(li.length == 0)return;
					var label = li.find('label.inline').get(0);
					if(label == e.target || $.contains(label, e.target)) e.stopImmediatePropagation() ;
				  });
				}

				$('#tasks').sortable({
					opacity:0.8,
					revert:true,
					forceHelperSize:true,
					placeholder: 'draggable-placeholder',
					forcePlaceholderSize:true,
					tolerance:'pointer',
					stop: function( event, ui ) {
						//just for Chrome!!!! so that dropdowns on items don't appear below other items after being moved
						$(ui.item).css('z-index', 'auto');
					}
					}
				);
				$('#tasks').disableSelection();
				$('#tasks input:checkbox').removeAttr('checked').on('click', function(){
					if(this.checked) $(this).closest('li').addClass('selected');
					else $(this).closest('li').removeClass('selected');
				});


				//show the dropdowns on top or bottom depending on window height and menu position
				$('#task-tab .dropdown-hover').on('mouseenter', function(e) {
					var offset = $(this).offset();

					var $w = $(window)
					if (offset.top > $w.scrollTop() + $w.innerHeight() - 100)
						$(this).addClass('dropup');
					else $(this).removeClass('dropup');
				});

			})
		</script>
	</body>
</html>
