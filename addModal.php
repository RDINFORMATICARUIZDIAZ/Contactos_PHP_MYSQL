<div class="modal fade" id="addNew" tabindex="-1" role="dialog" aria-labelledby="myMOdallabel" arial-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <center> <h4 class="modal-title"> Agregar Contacto</h4> </center>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">x</span>
                </button>
            </div>
        
        <div class="modal-body">
            <div class="container-fuid">
                <form method="POST" action="agregar.php" id="MyFormAdd">

                    <div class="row form-group">
                        <div class="col-sm-2">
                            <label class="control-label"  style="position:relative; top:7px;">Nombres</label>
                        </div>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" nome="nombres">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-2">
                            <label class="control-label">Cedula</label>
                        </div>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" nome="cedula">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-2">
                            <label class="control-label">Apellidos</label>
                        </div>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" nome="apellidos">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-2">
                            <label class="control-label">Telefono</label>
                        </div>
                        <div class="col-sm-10">
                            <input type="tel" class="form-control" nome="telefono">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-2">
                            <label class="control-label">Direccion</label>
                        </div>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" nome="direccion">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-2">
                            <label class="control-label">Email</label>
                        </div>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" nome="email">
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
                        <button type="button" class="btn btn-default" data-dismiss="modal"  onclick="BorrarDatosFrom()"><span class="fa fa-close"></span>Cancelar</button>
                        <button type="submit" name="add" class="btn btn-primary"><span class="fa fa-save"></span> Guardar</button>
                    </div>
                </form>

            </div>
        </div>

        </div>

    </div>

</div>

<script>
    function BorrarDatosFrom(){
        document.getElementById("MyFormAdd").reset();
    }
</script>