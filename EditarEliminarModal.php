<div class="modal fade" id="edit_<?php echo $row['idpersona'];?>" tabindex="-1" role="dialog" aria-labelledby="myMOdallabel" arial-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <center> <h4 class="modal-title"> Editar Contacto</h4> </center>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">x</span>
                </button>
            </div>
        
        <div class="modal-body">
            <div class="container-fuid">
                <form method="POST" action="editar.php?id=<?php echo $row['idpersona'];?>">

                    <div class="row form-group">
                        <div class="col-sm-2">
                            <label class="control-label"  style="position:relative; top:7px;">Nombres</label>
                        </div>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" nome="nombres" value="<?php echo $row['nombres'];?>">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-2">
                            <label class="control-label">Cedula</label>
                        </div>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" nome="cedula" value="<?php echo $row['cedula'];?>">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-2">
                            <label class="control-label">Apellidos</label>
                        </div>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" nome="apellidos" value="<?php echo $row['apellidos'];?>">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-2">
                            <label class="control-label">Telefono</label>
                        </div>
                        <div class="col-sm-10">
                            <input type="tel" class="form-control" nome="telefono" value="<?php echo $row['telefono'];?>">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-2">
                            <label class="control-label">Direccion</label>
                        </div>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" nome="direccion" value="<?php echo $row['direccion'];?>">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-2">
                            <label class="control-label">Email</label>
                        </div>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" nome="email" value="<?php echo $row['email'];?>">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-2">
                            <label class="control-label">Fecha N.</label>
                        </div>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" nome="fnacimiento">
                        </div>
                    </div>

                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-close"></span>Cancelar</button>
                        <button type="submit" name="edit" class="btn btn-success"><span class="fa fa-check"></span> Actualizar</button>
                    </div>
                </form>

            </div>
        </div>

        </div>

    </div>

</div>


<!-- Eliminar-->

<div class="modal fade" id="delete_<?php echo $row['idpersona'];?>" tabindex="-1" role="dialog"             aria-labelledby="myMOdallabel" arial-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <center> <h4 class="modal-title"> Borrar Contacto</h4> </center>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">x</span>
                </button>
            </div>
        
            <div class="modal-body">
                <P class="text-center">¿Estas seguro en borrar los datos de?</P>
                <h2 class="text-center"><?php echo $row['nombres'];?></h2>
            </div>
                    
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-close"></span> Cancelar</button>
                <a href="delete.php?id=<?php echo $row['idpersona'];?>" class="btn btn-danger"><span class="fa fa-trash"> Si</span></a>
                
            </div>
            
            </div>

    </div>

</div>
