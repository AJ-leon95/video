<div class="container">
    <div class="card">
        <center>

            
            <h4>Nuevo Usuario</h4>
        </center>
        <div class="card-body">
            <form action="ojo" method="post">
                <div class="mb-3">
                    <label for="" class="form-label">id</label>
                    <input type="text" class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="100">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">usuario</label>
                    <input type="text" class="form-control" name="usuario" id="usuario" aria-describedby="helpId" placeholder="usser1">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" name="contra" id="contra" aria-describedby="helpId" placeholder="*****">
                </div>
                <center>
                    
                    <a name="" id="" class="btn btn-primary" href="ojo" role="button">Crear</a>
                    <a name="" id="" class="btn btn-dark" href="<?php echo site_url() ?>/Usuarios/index" role="button">Cancelar</a>
                </center>

            </form>
        </div>
    </div>
</div>