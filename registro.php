<?php
require_once("includes/header.php");
?>
<style>
    body,
    html {
        height: 100%;
        background-repeat: no-repeat;
        background-image: linear-gradient(rgb(104, 145, 162), rgb(12, 97, 33));
    }

    .auto {
        height: auto !important;
    } 
    .card {
        background-color: #F7F7F7;
        padding: 20px 25px 30px;
        margin: 0 auto 25px;
        margin-top: 50px;
        -moz-border-radius: 2px;
        -webkit-border-radius: 2px;
        border-radius: 2px;
        -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    }

    .profile-name-card {
        font-size: 16px;
        font-weight: bold;
        text-align: center;
        margin: 10px 0 0;
        min-height: 1em;
    }
</style>
<br>
<br>
<div class="container">
    <div class="row justify-content-md-center" id="div_principal">
        <div class="col-sm-8">
            <div class="card card-container">
                <p id="profile-name" class="profile-name-card">¿Para qué usarás Line Commerce?</p>
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-sm-6">
                            <a onclick="siguiente_cuadro('cliente')">
                                <div class="card card-container bg-primary text-center">
                                    <img src="/line_commerce/img/comprar.png" height="128" width="203">
                                    <br>
                                    <br>
                                    <h5 class="card-title text-light">Comprar Productos</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6">
                            <a onclick="siguiente_cuadro('negocio')">
                                <div class="card card-container bg-primary text-center">
                                    <img src="/line_commerce/img/vender.png" height="128" width="203">
                                    <br>
                                    <br>
                                    <h5 class="card-title text-light">Vender Productos</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Registro de Clientes -->
    <div class="row justify-content-md-center" id="registro_cliente">
        <div class="col-sm-8">
            <div class="card card-container">
                <p id="profile-name" class="profile-name-card">Registro de Clientes</p>
                <div class="container">
                    <div class="row justify-content-md-center">
                    <div class="col-sm-12">
                            <form action="" method="post" id="form_cliente">
                                <div class="form-group">
                                    <label for="usuario_c">Usuario</label>
                                    <input type="text" class="form-control" id="usuario_c" placeholder="Nombre de Usuario" maxlength="50" required>
                                </div>
                                <div class="form-group">
                                    <label for="password1_c">Contraseña</label>
                                    <input type="password" class="form-control" id="password1_c" placeholder="Contraseña" maxlength="20" required>
                                </div>
                                <div class="form-group">
                                    <label for="password2_c">Repetir Contraseña</label>
                                    <input type="password" class="form-control" id="password2_c" placeholder="Repetir Contraseña" maxlength="20" required>
                                </div>
                                <div class="form-group">
                                    <label for="nombres_c">Nombres</label>
                                    <input type="text" class="form-control" id="nombres_c" placeholder="Nombres" maxlength="100" required>
                                </div>
                                <div class="form-group">
                                    <label for="apellidos_c">Apellidos</label>
                                    <input type="text" class="form-control" id="apellidos_c" placeholder="Apellidos" maxlength="100" required>
                                </div>
                                <div class="form-group">
                                    <label for="email_c">Correo Electrónico</label>
                                    <input type="mail" class="form-control" id="email_c" placeholder="alguien@example.com" maxlength="100" required>
                                </div>
                                <div class="form-group">
                                    <label for="telefono_c">Teléfono</label>
                                    <input type="text" class="form-control" id="telefono_c" placeholder="Teléfono" maxlength="8" pattern="[0-9]{8}" required>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Registrarse" name="enviar" class="btn btn-primary btn-block">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <button class="btn btn-primary" onclick="siguiente_cuadro('volver')" >Volver</button>
            </div>
            <br>
        </div>
    </div>
    <!-- Registro de Negocios -->
    <div class="row justify-content-md-center" id="registro_negocio">
        <div class="col-sm-8">
            <div class="card card-container">
                <p id="profile-name" class="profile-name-card">Registro de Negocios</p>
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-sm-12">
                            <form action="" method="post" id="form_negocio">
                                <div class="form-group">
                                    <label for="usuario">Usuario</label>
                                    <input type="text" class="form-control" id="usuario" placeholder="Nombre de Usuario" maxlength="50" required>
                                </div>
                                <div class="form-group">
                                    <label for="password1">Contraseña</label>
                                    <input type="password" class="form-control" id="password1" placeholder="Contraseña" maxlength="20" required>
                                </div>
                                <div class="form-group">
                                    <label for="password2">Repetir Contraseña</label>
                                    <input type="password" class="form-control" id="password2" placeholder="Repetir Contraseña" maxlength="20" required>
                                </div>
                                <div class="form-group">
                                    <label for="negocio">Nombre del Negocio</label>
                                    <input type="text" class="form-control" id="negocio" placeholder="Nombre del Negocio" maxlength="100" required>
                                </div>
                                <div class="form-group">
                                    <label for="descripcion">Descripción del Negocio</label>
                                    <textarea class="form-control" id="descripcion" rows="3" maxlength="500" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="email">Correo Electrónico</label>
                                    <input type="email" class="form-control" id="email" placeholder="alguien@example.com" maxlength="100" required>
                                </div>
                                <div class="form-group">
                                    <label for="direccion">Dirección del Negocio</label>
                                    <textarea class="form-control" id="direccion" rows="3" maxlength="500" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="telefono">Teléfono</label>
                                    <input type="text" class="form-control" id="telefono" placeholder="Teléfono" maxlength="8" pattern="[0-9]{8}" required>
                                </div>
                                <div class="form-group">
                                    <label for="foto">Foto de Perfil</label>
                                    <input type="file" class="form-control-file" id="foto" required>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Registrarse" name="enviar" class="btn btn-primary btn-block">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <button class="btn btn-primary" onclick="siguiente_cuadro('volver')" >Volver</button>
            </div>
            <br>
        </div>
    </div>
    <div class="text-center">
        <a href="index.php" class="btn btn-primary">Volver al Inicio</a>
    </div>
</div>
<?php
require_once("includes/scripts.php");
?>
<script language="javascript">
    $(document).ready(function() {
        $("#registro_cliente").hide();
        $("#registro_negocio").hide();

        //Validación y submit de form cliente
        $("#form_cliente").on("submit",function(e){
            e.preventDefault();
            
            //Campos
            var usuario = $("#usuario_c").val();
            var pass1 = $("#password1_c").val();
            var pass2 = $("#password2_c").val();
            var nombres = $("#nombres_c").val();
            var apellidos = $("#apellidos_c").val();
            var email = $("#email_c").val();
            var telefono = $("#telefono_c").val();

            //Verificar si las claves coinciden
            if(pass1 != pass2){
                swal({
                    icon: "warning",
                    text: "Las contraseñas no coinciden"
                })
            }else{
                //Enviar el form
                fd = new FormData();
                fd.append("usuario",usuario)
                fd.append("clave",pass2)
                fd.append("correo_electronico",email)
                fd.append("nombre",nombres)
                fd.append("apellido",apellidos)
                fd.append("telefono",telefono)
                $.ajax({
                    url: 'admin/ajax.php?request=registrar_cliente',
                    type: 'post',
                    data: fd,
                    contentType: false,
                    processData: false,
                    success: function(response){
                        if(response != 0){
                            swal({
                                icon: "success",
                                text: "Usuario registrado correctamente"
                            }).then((value) => {
                                window.location = "index.php"
                            })
                        }else{
                            swal({
                                icon: "warning",
                                text: "Ocurrió un error al registrar el usuario"
                            })
                        }
                    },
                });
            }
        })

        //Validacion y registro del form negocio
        $("#form_negocio").on("submit",function(e){
            e.preventDefault();
            
            //Campos
            var usuario = $("#usuario").val();
            var pass1 = $("#password1").val();
            var pass2 = $("#password2").val();
            var negocio = $("#negocio").val();
            var descripcion = $("#descripcion").val();
            var email = $("#email").val();
            var direccion = $("#direccion").val();
            var telefono = $("#telefono").val();
            var foto_perfil = $("#foto")[0].files[0];

            //Validacion de las claves
            if(pass1 != pass2){
                swal({
                    icon: "warning",
                    text: "Las contraseñas no coinciden"
                })
            }else{
                //Enviar el form
                fd = new FormData();
                fd.append("usuario",usuario)
                fd.append("clave",pass2)
                fd.append("nombre_negocio",negocio)
                fd.append("descripcion",descripcion)
                fd.append("correo_electronico",email)
                fd.append("telefono",telefono)
                fd.append("direccion",direccion)
                fd.append("foto_perfil",foto_perfil)
                $.ajax({
                    url: 'admin/ajax.php?request=registrar_negocio',
                    type: 'post',
                    data: fd,
                    contentType: false,
                    processData: false,
                    success: function(response){
                        if(response != 0){
                            swal({
                                icon: "success",
                                text: "Usuario agregado correctamente"
                            }).then((value) => {
                                window.location = "index.php"
                            })
                        }else{
                            swal({
                                icon: "warning",
                                text: "Ocurrió un error al insertar el usuario"
                            })
                        }
                    }
                });
            }
        })
    })
    function siguiente_cuadro(cuadro){
        switch(cuadro){
            case 'cliente':
                $("#div_principal").hide();
                $("body").addClass("auto");
                $("#registro_cliente").show();
            break;
            case 'negocio':
                $("#div_principal").hide();
                $("body").addClass("auto");

                $("#registro_negocio").show();
            break;
            case 'volver':
                $("#registro_cliente").hide();
                $("#registro_negocio").hide();
                $("#div_principal").show();
                $("body").removeClass("auto");
            break;
        }
    }
</script>