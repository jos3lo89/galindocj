<div class="container">
    <p class='text-center text-capitalize fs-3 my-2 text-primary'>Contacto</p>
    <div class="d-flex justify-content-center align-items-center flex-column-reverse flex-md-row">

        <footer class=" border rounded-3 bg-body-tertiary m-4 p-3">
            <div>
                <h5>Mis Redes Sociales</h5>
                <div>
                    <a href="https://www.facebook.com/joseloidc" target="_blank" class="d-block my-2 btn btn-info"><i class="bi bi-facebook"></i> Facebook</a>
                    <a href="https://github.com/jos3lo89" target="_blank" class="d-block my-2 btn btn-info"><i class="bi bi-github"></i> Github</a>
                    <a href="https://wa.me/916099300" target="_blank" class="d-block my-2 btn btn-info"><i class="bi bi-whatsapp"></i> Whatsapp</a>
                </div>
            </div>
            <div>
                <h5>datos</h5>
                <div>
                    <a href="mailto:1007220181@unajma.edu.pe" class="d-block btn btn-info my-2"><i class="bi bi-envelope"></i> 1007220181@unajma.edu.pe</a>
                    <a href="tel:+51916099300" class="d-block btn btn-info my-2"><i class="bi bi-phone"></i> +51 916 099 300</a>
                </div>
            </div>
        </footer>

        <form class="col-lg-4 p-3 border rounded-3 bg-body-tertiary" id="formContacto" method="post">
            <div class="mb-3">
                <label for="nombreUser" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombreUser" name="nombreUser" placeholder="Aqui tu nombre">
            </div>
            <div class="mb-3">
                <label for="correoUser" class="form-label">Correo Electronico</label>
                <input type="email" class="form-control" id="correoUser" name="correoUser" placeholder="ejemplo@ejemplo.com">
            </div>
            <div class="mb-3">
                <label for="textoUser" class="form-label">Mensaje</label>
                <textarea class="form-control" id="textoUser" rows="2" name="textoUser"></textarea>
            </div>
            <button type="submit" class="btn btn-success" name="contactar_usuario" id="btnContactar">Enviar Mensaje</button>
        </form>

    </div>
</div>