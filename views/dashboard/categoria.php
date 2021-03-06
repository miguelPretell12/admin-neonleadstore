<div class="content-principal container mt-20">
    <div class="flex-between">
        <h3>CATEGORIAS</h3>

        <button type="button" id="model-register" data-bs-toggle="modal" data-bs-target="#modalCategoria" class="btn-inline btn-success flex-center">
            <i class="fas fa-plus-circle"></i> Agregar
        </button>
    </div>
</div>

<div class="content-principal container mt-20">
    <div class="table-responsive">
        <table class="table table-purple table-striped table-hover table-light table-fixed w-100" id="tablacategoria">
            <thead class="table-dark sticky">
                <tr>
                    <th>Imagen</th>
                    <th>Nombre</th>
                    <th>link</th>
                    <th>estado</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>

<div class="modal fade" id="modalCategoria" tabindex="-1" aria-labelledby="modalColor" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalColor">Guardar Categoria</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="cerrar"></button>
            </div>
            <div class="modal-body">
                <form id="formCategoria" enctype="multipart/form-data" class="color-dark">
                    <input type="hidden" id="id">
                    <div class="mb-3">
                        <label for="nombre">Nombre de categora</label>
                        <input type="text" class="form-control" id="cat_nombre">
                    </div>
                    <div class="mb-3">
                        <label for="cat_imagen">Imagen</label>
                        <input type="file" id="cat_imagen" class="form-control">
                    </div>
                    <img src="" id="img" width="">
                    <div class="mb-3">
                        <label for="cat_link">Link</label>
                        <input type="text" id="cat_link" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="cat_estado">Estado</label>
                        <select id="cat_estado" class="form-control">
                            <option value="">--SELECCIONE--</option>
                            <option value="ACTIVO">Activo</option>
                            <option value="INACTIVO">Inactivo</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn-inline btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn-inline btn-primary" id="save">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script src="build/js/ajax/ajax.categoria.js"></script>