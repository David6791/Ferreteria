<body>
<section class="register-page">
    <div class="register-box">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-8">
                        <p class="card-title">Formulario de Registro</p>
                    </div>
                    <div class="col-md-4">
                        <img class="profile-user-img img-circle" id="previewHolder" alt="" width="100px" height="100px"/>
                    </div>
                </div>
                
                
            </div>
            <div class="card-body register-card-body">
                <form class="send_user_dates" action="{{url('save_dates_users')}}" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <div class="row">
                        <div class="col-md-6">
                            <small class="text-red" id=""></small>
                            <div class="input-group mb-3">                                
                                <input type="text" name="nombres" class="form-control name_form" placeholder="Nombres">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <small class="text-red" id=""></small>
                            <div class="input-group mb-3">                                
                                <input type="text" name="apellidos" class="form-control name_form" placeholder="Apellidos">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <small class="text-red" id=""></small>
                            <div class="input-group mb-3">
                                <input type="text" name="cedula" class="form-control name_form" placeholder="Cedula de Identidad">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                    <span class="fas fa-id-card"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <small class="text-red" id=""></small>
                            <div class="input-group mb-3">
                                <input type="text" name="fecha_nacimiento" class="form-control name_form" placeholder="Fecha de Nacimiento">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                    <span class="fas fa-calendar-day"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <small class="text-red" id=""></small>
                            <div class="input-group mb-3">
                                <input type="text" name="direccion" class="form-control name_form" placeholder="Direccion">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                    <span class="fas fa-map-marker-alt"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <small class="text-red" id=""></small>
                            <div class="input-group mb-3">                                
                                <input type="text" name="telefono" class="form-control name_form" placeholder="Telefono">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                    <span class="fas fa-phone"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <small class="text-red" id=""></small>
                                <div class="custom-file">
                                    <input type="file" name="foto_perfil" id="foto_perfil" class="custom-file-input name_form" placeholder="">
                                    
                                    <label class="custom-file-label" for="exampleInputFile">Seleccione imagen</label>
                                </div>
                        </div>
                        <div class="col-md-6">
                            <small class="text-red" id=""></small>
                            <div class="input-group mb-3">
                            <input type="text" name="gmail" class="form-control name_form" placeholder="correo electronico">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                    <span class="fas fa-mail-bulk"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <small class="text-red" id=""></small>                            
                            <div class="input-group mb-3">
                                <input type="text" name="contrasena" class="form-control name_form" placeholder="Contraseña">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                    <span class="fas fa-key"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <small class="text-red" id=""></small>
                            <div class="input-group mb-3">
                                <input type="text" name="re_contrasena" class="form-control name_form" placeholder="Repita Contraseña">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                    <span class="fas fa-key"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <center>
                            <button type="submit" class="btn btn-primary">Registrar Usuario</button>
                            </center>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<script>

function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
      $('#previewHolder').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
  }
}

$("#foto_perfil").change(function() {
  readURL(this);
});
</script>
</body>