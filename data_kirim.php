 
 <?php 

	include "conn.php";
?>
<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <!-- Favicon -->
        <link href="favicon.ico" rel="shortcut icon">
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.css" rel="stylesheet">
        <!-- Template CSS -->
        <link rel="stylesheet" href="assets/css/animate.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/nexus.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/custom.css" rel="stylesheet">
        <!-- Google Fonts-->
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open Sans:300,400" />
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Source Sans Pro:300,400" />
    </head>
    <body>
        <div id="body_bg">
            <div id="container_header" class="container">
                <div id="header" class="row">
                    <div class="col-md-12 margin-top-15">
                        <!-- Header Social Icons -->
                        <ul class="social-icons circle pull-right">
                            <li class="social-rss">
                                <a href="#" target="_blank" title="RSS"></a>
                            </li>
                            <li class="social-twitter">
                                <a href="#" target="_blank" title="Twitter"></a>
                            </li>
                            <li class="social-facebook">
                                <a href="#" target="_blank" title="Facebook"></a>
                            </li>
                            <li class="social-googleplus">
                                <a href="#" target="_blank" title="GooglePlus"></a>
                            </li>
                        </ul>
                        <!-- End Header Social Icons -->
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="primary-container-group">
                <!-- Background -->
                <div class="primary-container-background">
                    <div class="primary-container"></div>
                    <div class="clearfix"></div>
                </div>
                <!--End Background -->
                <div class="primary-container">
                    <div id="container_hornav" class="container no-padding">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.html">
                                <img src="assets/img/logo.png" alt="Logo" />
                            </a>
                        </div>
<head>
<aside class="right-side">
      </head>
      <body class="skin-black">
                <!-- Main content -->
                <section class="content">

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="panel">
                                <header class="panel-heading">
                                    <b>Data ID Barang</b>

                                </header>
                               
                                <div class="panel-body table-responsive">
                                    <div class="box-tools m-b-15">
                                    <form action="pengajar.php" method="POST">
                                        <div class="input-group">
                                        <input type='text' class="form-control input-sm pull-right" style="width: 150px;"  name='qcari' placeholder='Cari berdasarkan User ID dan Username' required /> 
                                            <div class="input-group-btn">
                                                <button class="btn btn-sm btn-default" type="submit"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>    
                                    </div>
                                    <?php
                    $query1="select * from kirim";
                    
                    if(isset($_POST['qcari'])){
	               $qcari=$_POST['qcari'];
	               $query1="SELECT * FROM  kirim where nama_pengirim like '%$qcari%'
	               or id_barang like '%$qcari%'  ";
                    }
                    $tampil=mysql_query($query1) or die(mysql_error());
                    ?>
                                    <table id="example" class="table table-hover table-bordered">
                  <thead>
                      <tr>
					  <th><center>ID Barang</center></th>
                        <th><center>Nama pengirim </center></th>
						<th><center>No HP </center></th>
						<th><center>Alamat </center></th>
                        <th><center>Nama Penerima </center></th>
                        <th><center>No HP </center></th>
                        <th><center>Alamat</center></th>
                        
                      </tr>
                  </thead>
                     <?php while($data=mysql_fetch_array($tampil))
                    { ?>
                    <tbody>
                    <tr>
					<td><?php echo $data['id_barang']; ?></td>
					<td><?php echo $data['nama_pengirim']; ?></td>
                    <td><?php echo $data['no_hp1']; ?></td>
					 <td><?php echo $data['alamat1'];?></td>
					 <td><?php echo $data['nama_penerima']; ?></td>
                    <td><?php echo $data['no_hp2']; ?></td>
					 <td><?php echo $data['alamat2'];?></td>
					
					
					
                  
                   
                   
                </td></tr></div>
                 <?php   
              } 
              ?>
                   </tbody>
                   </table>
                   
                  <?php $tampil=mysql_query("select * from kirim order by id_barang");
                        $user=mysql_num_rows($tampil);
                    ?>
                  
                  
                <div class="text-right" style="margin-top: 10px;">
                 <a href="admin.html" class="btn btn-sm btn-info">Kembali <i class="fa fa-refresh"></i></a>
                </div>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>
	     <!-- row end -->
                </section><!-- /.content -->
          </div>      
            </aside><!-- /.right-side -->
<div id="base" class="container padding-vert-30">
                        <div class="row">
                            
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <!-- Footer Menu -->
                    <div id="footermenu" class="container">
                        <div class="row">
                            <ul class="list-unstyled list-inline">
                               
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <!-- End Footer Menu -->
                </div>
            </div>
            <div class="container padding-vert-30">
                <div class="row">
                    <div id="copyright">
                        <p>(c) Copyright L-Carry 2016</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- JS -->
        <script type="text/javascript" src="assets/js/jquery.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="assets/js/scripts.js"></script>
        <!-- Isotope - Portfolio Sorting -->
        <script type="text/javascript" src="assets/js/jquery.isotope.js" type="text/javascript"></script>
        <!-- Mobile Menu - Slicknav -->
        <script type="text/javascript" src="assets/js/jquery.slicknav.js" type="text/javascript"></script>
        <!-- Animate on Scroll-->
        <script type="text/javascript" src="assets/js/jquery.visible.js" charset="utf-8"></script>
        <!-- Modernizr -->
        <script src="assets/js/modernizr.custom.js" type="text/javascript"></script>
        <!-- End JS -->
    </body>
</html>