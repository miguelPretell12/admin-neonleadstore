<div class="content-principal container mt-20">
    <div class="flex-between">
        <h3>Color</h3>
        <button type="button" id="model-cliente" data-bs-toggle="modal" data-bs-target="#modalCliente" class="btn-inline btn-success flex-center">
            <i class="fas fa-plus-circle"></i> Agregar Cliente
        </button>
    </div>
</div>

<div class="content-principal container mt-20">
    <div class="table-responsive">
        <table class="table table-purple table-striped table-hover  w-100 table-light table-fixed" id="tablacliente">
             <!--PARA PONER CON BLANCO: table table-striped table-hover table-light table-fixed w-100-->    
            <thead class="table-dark sticky">
                <tr>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Correo</th>
                    <th>Clave</th>
                    <th>Estado</th>
                    <th>Editar/Borrar</th>
                </tr>
                </thead>
                <tbody>

            </tbody>
        </table>
    </div>
</div>


<!-- ./CONTENT -->
<div class="modal fade" id="modalCliente" tabindex="-1" aria-labelledby="modalCliente" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title">Guardar Cliente</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="cerrar"></button>
            </div>
            <div class="modal-body">
                <form id="formCliente" enctype="multipart/form-data">
                    <input type="hidden" id="id">
                    <div class="mb-3">
                        <label for="nombre">Nombre Cliente</label>
                        <input type="text" class="form-control" id="cli_nombre">
                    </div>

                    <div class="mb-3">
                        <label for="nombre">Apellido Cliente</label>
                        <input type="text" class="form-control" id="cli_apellidos">
                    </div>

                    <div class="mb-3">
                        <label for="nombre">Email Cliente</label>
                        <input type="text" class="form-control" id="cli_email">
                    </div>

                    <div class="mb-3">
                        <label for="nombre">Clave Cliente</label>
                        <input type="password" class="form-control" id="cli_clave">
                    </div>

                    <div class="mb-3">
                        <label for="nombre">Estado Cliente</label>
                        <select id="cli_estado" class="form-control">
                            <option value="">--SELECCIONE--</option>
                            <option value=0>Inactivo</option>
                            <option value=1>Activo</option>
                        </select>
                    </div>

                    <div class="modal-footer">
                        <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary" id="save">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script src="build/js/ajax/ajax.cliente.js"></script>
