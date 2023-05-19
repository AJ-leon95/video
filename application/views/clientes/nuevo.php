<div class="container">

    <div class="card">
        <center>
            <h4>Nuevo Cliente</h4>
        </center>
        <div class="card-body">
            <form action="ojo" method="post">
                <div class="mb-3">
                    <label for="id_cli" class="form-label">ID</label>
                    <input type="number" class="form-control" name="id_cli" id="id_cli" aria-describedby="helpId" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="primer_apell_cli" class="form-label">Primer apellido</label>
                    <input type="text" class="form-control" name="primer_apell_cli" id="primer_apell_cli" aria-describedby="helpId" placeholder="Ayala">
                </div>
                <div class="mb-3">
                    <label for="segundo_apellido_cli	" class="form-label">Segundo Apellido</label>
                    <input type="text" class="form-control" name="segundo_apellido_cli	" id="segundo_apellido_cli	" aria-describedby="helpId" placeholder="Leon">
                </div>
                <div class="mb-3">
                    <label for="nombres_cli" class="form-label">Nombres</label>
                    <input type="text" class="form-control" name="nombres_cli" id="nombres_cli" aria-describedby="helpId" placeholder="Jhonatan Alexander">
                </div>
                <div class="mb-3">
                    <label for="telef_cli	" class="form-label">Telefono</label>
                    <input type="text" class="form-control" name="telef_cli	" id="telef_cli	" aria-describedby="helpId" placeholder="05525">
                </div>
                <div class="mb-3">
                    <label for="direccion" class="form-label">Direccion</label>
                    <input type="text" class="form-control" name="direccion" id="direccion" aria-describedby="helpId" placeholder="Pujili">
                </div>
                <center>
                
                    <a name="" id="" class="btn btn-primary" href="ojo" role="button">Crear</a>
                    <a name="" id="" class="btn btn-dark" href="<?php echo site_url() ?>/Usuarios/index" role="button">Cancelar</a>
                </center>
            </form>
        </div>
    </div>
</div>