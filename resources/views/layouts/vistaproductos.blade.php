<div class="contenido navbar-nav ml-auto" style="margin-top: 8rem;">
    <div class="filtrado row" style="justify-content: center;">
        <div class="ordenar-productos input-group mb-3 col col-sm-3">
            <label class="input-group-text" for="inputGroupSelect01">Ordenar por</label>
            <select class="form-select" id="inputGroupSelect01">
                <option selected>Más relevantes</option>
                <option value="1">Menor precio</option>
                <option value="2">Mayor precio</option>
            </select>
        </div>
        <div class="ordenar-precio input-group mb-3 col col-sm-3">
            <span class="input-group-text btn btn-outline-secondary">Precio</span>
            <input placeholder="Minimo" type="text" aria-label="First name" class="form-control">
            <input placeholder="Maximo" type="text" aria-label="Last name" class="form-control">
        </div>


    </div>
</div>
@yield('products')