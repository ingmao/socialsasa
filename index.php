<?php
session_start();
require('clases/clasemetodos.php');
$objeto=new Clasemetodos;
//echo password_verify('123','$2y$10$/FDOOQgcDEeRT.K3e8Zysu4RGQhWpSmDus2qXIq1eHp4LmO1LF5li');
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}else{
	if(isset($_GET['id'])){
		$result=$objeto->consultararticulosusers($_GET['id']);
		}else{
			$result=$objeto->consultararticulos();
			}
	$id=$_SESSION["id"];
	$nombre=$_SESSION["nombre"];
	$users=$objeto->consultarusers($id);
	
	
	
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Red social Socialsasa</title>
</head>

<body>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
        crossorigin="anonymous">
        
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
        
<nav class="navbar navbar-light bg-white">
        <a href="index.php" class="navbar-brand">Socialsasa</a>
        <a href="modelos/logout.php" class="navbar-brand">Logout</a>
        <!--<form class="form-inline">
            <div class="input-group">
                <input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="button-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-primary" type="button" id="button-addon2">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </form>-->
    </nav>


    <div class="container-fluid gedf-wrapper">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="h5">@<?php echo $nombre;?><input type="hidden"  name="id_users" id="id_users" value="<?php echo $id;?>"/></div>
                        <div class="h7 text-muted">Fullname : <?php echo $nombre;?></div>
                        <div class="h7">
                        </div>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="h6 text-muted">Usuarios</div>
                            <?php while($row=mysqli_fetch_array($users)){?>
                            <div class="h5"><a href="index.php?id=<?php echo $row['id'];?>"><?php echo $row['nombre']?></a></div>
                            <?php } ?>
                        </li>
                        
                        
                    </ul>
                </div>
            </div>
          <div class="col-md-6 gedf-main">

                <!--- \\\\\\\Post-->
                <div class="card gedf-card">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="posts-tab" data-toggle="tab" href="#posts" role="tab" aria-controls="posts" aria-selected="true">Crear una Publicación</a>
                            </li>
                            <!--<li class="nav-item">
                                <a class="nav-link" id="images-tab" data-toggle="tab" role="tab" aria-controls="images" aria-selected="false" href="#images">Images</a>
                            </li>-->
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="posts" role="tabpanel" aria-labelledby="posts-tab">
                                <div class="form-group">
                                    <label class="sr-only" for="message">post</label>
                                    <textarea class="form-control" id="message" rows="3" placeholder="Ingrese su publiciación"></textarea>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="images" role="tabpanel" aria-labelledby="images-tab">
                                <div class="form-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Upload image</label>
                                    </div>
                                </div>
                                <div class="py-4"></div>
                            </div>
                        </div>
                        <div class="btn-toolbar justify-content-between">
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary" id="compartir">share</button>
                            </div>
                            <!--<div class="btn-group">
                                <button id="btnGroupDrop1" type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fa fa-globe"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="btnGroupDrop1">
                                    <!--<a class="dropdown-item" href="#"><i class="fa fa-globe"></i> Public</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-users"></i> Friends</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Just me</a>
                                </div>
                            </div>-->
                        </div>
                    </div>
                </div>
                <!-- Post /////-->

                <!--- \\\\\\\Post-->
                <?php while($row=mysqli_fetch_array($result)){
						
				?>
          <div class="card gedf-card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-2">
                                    <img class="rounded-circle" width="45" src="https://picsum.photos/50/50" alt="">
                                </div>
                                <div class="ml-2">
                                    <div class="h5 m-0">@<?php echo $row['nombre'];?></div>
                                    <div class="h7 text-muted"><?php echo $row['nombre'];?></div>
                                </div>
                            </div>
                            <div></div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i></div>
                        

                      <p class="card-text">
                           <?php echo $row['publicacion'];?>
                      </p>
                    </div>
                    <div class="card-footer">
                        
                        	<div class="form-group">
                                    <label class="sr-only" for="message-coment">post</label>
                                    <textarea class="form-control" id="message-coment-<?php echo $row['id'];?>" rows="3" placeholder="Ingrese su comentario"></textarea>
                                    <button type="button" class="btn btn-primary" id="comentario" value="<?php echo $row['id'];?>" onclick="comentario(<?php echo $row['id'];?>)"><i class="fa fa-comment"></i></button>
                                </div>
                                <p>
 
  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#comentarios<?php echo $row['id'];?>" aria-expanded="false" aria-controls="collapseExample">
    Comentarios
  </button>
</p>
<div class="collapse" id="comentarios<?php echo $row['id'];?>">
  <?php 
  $comentarios=$objeto->consultarcomentartios($row['id']);
  if(!empty($comentarios) && count($comentarios)>0){
  while($rowc=mysqli_fetch_array($comentarios)){?>
		
		
  <div class="card card-body">
  <div class="h5"><a href="index.php?id=<?php echo $rowc['id'];?>">@<?php echo $rowc['nombre']?></a></div>
    <?php echo $rowc['comentario'];?>
  </div>
  <?php }}?>
  
</div>
                    </div>
              </div>
              <?php }?>
              <!-- Post /////-->


              <!--- \\\\\\\Post--><!-- Post /////-->


              <!--- \\\\\\\Post--><!-- Post /////-->



            </div>
            <div class="col-md-3">
                <div class="card gedf-card">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
                <div class="card gedf-card">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                card's content.</p>
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.5.1.js" type="text/javascript"></script>
    <script src="js/publicaciones.js" type="text/javascript"></script>
    </body>
</html>