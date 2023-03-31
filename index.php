
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content=" Oscar RD">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Contactos</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/starter-template/">

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/custom.css" rel="stylesheet">
    <link href="https://kit.fontawesome.com/381775ee0d.js" crossorigin="anonymous"></link>
  <!--  <link href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">-->

    <link href="DataTables/datatables.min.css" rel="stylesheet"/>

    <!-- Custom styles for this template -->
    <!-- <link href="starter-template.css" rel="stylesheet"> -->
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">Principal</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link"href="#"><span  class ="fas fa-home" ></span> Inicio <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>

        <!--  <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li> -->

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Redes Sociales</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Youtuber</a>
              <a class="dropdown-item" href="#">Facebook</a>
              <a class="dropdown-item" href="#">Instagram</a>
              <a class="dropdown-item" href="#">Twitter</a>
            </div>
          </li>
        </ul>

      <!--  <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Buscar" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
        </form> -->

      </div>
    </nav>

    <div  class="container">

     <!-- <div class="starter-template">
        <h1>Bootstrap starter template</h1>
        <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
      </div>
         -->
        <h1 class="page-header text-center">CONTACTOS</h1>

            <div class="row">

              <div class="col-sm-12">


                <a href="#addNew" class=" btn btn-primary" data-toggle="modal" style="margin-bottom:8px;"><span class="fa fa-plus"></span>Nuevo</a>

                   <?php 
              session_start();
              if (isset($_SESSION['message'])) {
                ?>
                <div class="alert alert-dismissible alert-success" style="margin-top: 20px;">
                  <button type="button" class="close" data-dismiss="alert" >
                    &times;
                  </button>
                  <?php echo $_SESSION['message']; ?>
                </div>

                <?php 
                unset( $_SESSION['message']);              
              }
           ?>
                
              <table class="table table-bordered table-striped"  id="MiAgenda" style="margin-top:20px;">
              <thead>
        
                      <th>ID</th>
                      <th>NOMBRES</th>
                      <th>CEDULA</th>
                      <th>APELLIDOS</th>
                      <th>TELEFONO</th>
                      <th>DIRECCION</th>
                      <th>EMAIL</th>
                      <th>F.NACIONAL</th>
                      <th>ACCION</th>

                  
        </thead>
        <tbody>

          <?php 
            include_once('conexion.php');
            $database = new ConectarDB();
            $db = $database->open();
            try {
            $sql = 'SELECT * FROM personas';
            foreach ($db->query($sql) as $row) {
            ?>
              <tr>
                <td> <?php echo $row['idpersona']; ?> </td>
                <td> <?php echo $row['nombres']; ?></td>
                <td> <?php echo $row['cedula']; ?></td>
                <td> <?php echo $row['apellidos']; ?></td>
                <td> <?php echo $row['telefono']; ?></td>
                <td> <?php echo $row['direccion']; ?></td>
                <td> <?php echo $row['email']; ?></td>
                <td> <?php echo $row['fnacimiento']; ?></td>
                <td><a href="#edit_<?php echo $row['idpersona'];?>" class="btn btn-success btn-sm" data-toggle="modal"><span class="fa fa-edit"></span> Editar</a>
                <a href="#delete_<?php echo $row['idpersona']; ?>" class="btn btn-danger btn-sm" data-toggle="modal"><span class="fa fa-trash"></span> Eliminar</a>

                </td>
                <?php include ('EditarEliminarModal.php'); ?>

              <?php

                  }
                } catch (PDOException $e) {
                  echo 'Hay probleas con la conexion : '.$e->getmessage();
                }
                $database->close();

             ?>
           <!-- <tr>
                <td>Oscar Antonio</td>
                <td>Ruiz Diaz</td>
                <td>0975445313</td>
                <td>Prof.Delfin Chamorro, entre O'leary y 15 de Agosto</td>
                <td>ruizoki@gmail.com</td>
                <td>08/10/1992</td>
                <td>Soltero/a</td>
            </tr> -->
        </tbody>


              </table>
              </div>

            </div>



    </div><!-- /.container -->
    <?php 
      include ('addModal.php');
    ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <script src="DataTables/datatables.min.js"></script>            

   <!-- <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script> -->

    <script>
      $(document).ready( function () {
        $('#MiAgenda').DataTable();
      });
    </script>
    <script>
    var table = $('#MiAgenda').DataTable({
        language:{
          "decimal": "",
          "emptyTable": "No hay información",
          "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
          "infoEmpty": "Mostrando 0 a 0 de 0 Entradas",
          "infoFiltered": "(Filtrado de _MAX_ total entradas)",
          "infoPostFix": "",
          "thousands": ",",
          "lengthMenu": "Mostrar _MENU_ Entradas",
          "loadingRecords": "Cargando...",
          "processing": "Procesando...",
          "search": "Buscar:",
          "zeroRecords": "Sin resultados encontrados",
          "paginate": {
              "first": "Primero",
              "last": "Ultimo",
              "next": "Siguiente",
              "previous": "Anterior"
          }
        },


      });

      </script>
  </body>
</html>
