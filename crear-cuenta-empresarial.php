<?php include_once 'templates/head.php'; ?>
<title>MUNDO EMPLEO | CENTRO AMERICA</title>
<?php include_once 'templates/style.php'; ?>
<?php include_once 'templates/header.php'; ?>
<?php include_once 'templates/leftmunu.php'; ?>

<style type="text/css">

	.section-title h1{
		color: #0B3486;
	}

	#imgbanner{

		background: url('img/bannercadaservicio/Amarillo/Servicio_Empresarial.jpg');
		background-repeat: no-repeat;
		background-size: cover;

	}



</style>

<div class="breadcrumbs" id="imgbanner">

	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="bread-inner">
					<!-- Bread Menu -->
					<!-- Bread Title -->
					<div class="bread-title"><h2 id="titulos">Crear Cuenta Empresarial.</h2></div>
				</div>
			</div>
		</div>
	</div>
	
</div>



<section class="contact-us section-space">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 col-md-7 col-12">
				<!-- Contact Form -->
				<div class="contact-form-area m-top-30">
					<h4 id="titulos">Regístrate Gratis</h4> <hr>
					<p>Los campos con asterisco (*) son obligatorios y deben ser completados para continuar con el proceso de registro.</p>
					<br>
					<p> La contraseña debe tener entre 8 carácteres y de preferencia utilice  dígitos, minúscula o al menos una mayúscula. Puede tener otros símbolos (@,$,!,%,*,#,?,&).</p>
					
					<div class="row">




						<div class="col-lg-6 col-md-6 col-12">
							<div class="form-group">
								<div class="icon"><i class="fa fa-user"></i></div>
								<input class="form-control" id="Nombres" name="Nombres" type="text"  placeholder="Nombres*"  >
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-12">
							<div class="form-group">
								<div class="icon"><i class="fa fa-user"></i></div>
								<input class="form-control valid" id="Apellidos"   name="Apellidos" type="text"  placeholder="Apellidos*"  >
							</div>
						</div>

						<div class="col-lg-12 col-md-6 col-12">
							<div class="form-group">
								<div class="icon"><i class="fa fa-envelope"></i></div>
								<input class="form-control" id="correo" name="correo" type="text" placeholder="Correo Electrónico:*" >
								<div id="respuesta"></div>
							</div>
						</div>

						<div class="col-lg-6 col-md-6 col-12">
							<div class="form-group">
								<div class="icon"><i class="fa fa-tag"></i></div>
								<input class="form-control valid" id="password" name="password" type="password" placeholder="Contraseña*"  >
								<span id="passstrength"></span>
							</div>
						</div>

						<div class="col-lg-6 col-md-6 col-12">
							<div class="form-group">
								<div class="icon"><i class="fa fa-tag"></i></div>
								<input class="form-control valid" id="confirmarPass" name="confirmarPass" type="password"  placeholder="confirmar la contraseña*">
								<div id="verificaPassword"></div>
							</div>
						</div>



						<div  class="col-lg-6 col-md-6 col-12">
							<br>
							<div class="form-check" >
								<input  type="checkbox" id="mostrar_contrasena" title="clic para mostrar contraseña"/>
								&nbsp;&nbsp;Mostrar Contraseña

							</div>
						</div>


						<div  class="col-lg-6 col-md-6 col-12">
							<br>
							<div class="form-check" style="margin-left: 18px;">
							
								<input class="form-check-input" type="checkbox" value="" id="validarContrato">
								Acepto los Términos & condiciones

								<br><br>
								<a href="terminos-condiciones" target="_blank"  >Leer terminos y servicios</a>
								
							</div>
						</div>


						<div class="col-12">
							<div class="form-group button">
								<input type="button"class="bizwheel-btn theme-2" id="crear-cuenta"  value="Crear Cuenta">
							</div>
						</div>


					</div>
				</div>
				<!--/ End contact Form -->
			</div>
			<div class="col-lg-5 col-md-5 col-12">
				<div class="contact-box-main m-top-30">

					<div class="contact-title">
						<p style="text-align: center;">
							<img src="assets/recusosMundoEmpleo/logo.png" class="img-fluid">
						</p>
					</div>


					<div class="contact-title">
						<h2>CONTÁCTENOS:</h2>						
					</div>
					<!-- Single Contact -->
					<div class="single-contact-box">
						<div class="c-icon"><i class="fa fa-clock-o"></i></div>
						<div class="c-text">
							<h4>Hora de apertura</h4>
							<p>Lunes a Viernes<br>08AM - 10PM (Todas las dias)</p>
						</div>
					</div>
					<!--/ End Single Contact -->
					<!-- Single Contact -->
					<div class="single-contact-box">
						<div class="c-icon"><i class="fa fa-phone"></i></div>
						<div class="c-text">
							<h4>Llámanos ahora</h4>
							<p>Tel.: +503 2222 2222<br> Mob.: +503 654 3451</p>
						</div>
					</div>
					<!--/ End Single Contact -->
					<!-- Single Contact -->
					<div class="single-contact-box">
						<div class="c-icon"><i class="fa fa-envelope-o"></i></div>
						<div class="c-text">
							<h4>Envíanos un correo electrónico</h4>
							<p>contact@bizwheel.com<br>info@bizwheel.com</p>
						</div>
					</div>
					<!--/ End Single Contact -->
					<div class="button">
						¿Ya tienes una cuenta?<br>
						<a href="login-empresa" class="bizwheel-btn theme-1">Iniciar Sesión<i class="fa fa-angle-right"></i></a> <br>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</section>



<?php include_once 'templates/footer.php'; ?>
<?php include_once 'templates/script.php'; ?>

<script type="text/javascript">

    $(document).ready(function () {
        // Mostrar u ocultar contraseña cuando se marca/desmarca la casilla de verificación
        $('#mostrar_contrasena').click(function () {
            if ($('#mostrar_contrasena').is(':checked')) {
                $('#password').attr('type', 'text');
                $('#confirmarPass').attr('type', 'text');
            } else {
                $('#password').attr('type', 'password');
                $('#confirmarPass').attr('type', 'password');
            }
        });
    });

    // Inicialización de la fuerza de la contraseña
    $(document).ready(function () {
        $('#passstrength').html('<div class="progress"><div class="progress-bar bg-danger" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div></div>');

        // Verificar email al cargar la página
        var Email = $('#correo').val();
        buscar_datos(Email);

        // Verificar email cuando hay un cambio en el campo de correo
        $('#correo').on('change', function () {
            var Email = $('#correo').val();
            buscar_datos(Email);
        });

        // Manejo del botón de creación de cuenta
        $('#crear-cuenta').on('click', function () {
            // Verificar si se aceptaron los términos y condiciones
            if ($('#validarContrato').is(':checked')) {
                // Expresiones regulares para validaciones
                var regcampos = /^[A-Za-z _ñÑáéíóúÁÉÍÓÚ]*[A-Za-zñÑáéíóúÁÉÍÓÚ][A-Za-z _ñÑáéíóúÁÉÍÓÚ]*$/; // Solo letras y espacios
                var regemail = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/; // Email válido

                // Captura de los valores de los campos
                var nombres = $('#Nombres').val();
                var apellidos = $('#Apellidos').val();
                var Email = $('#correo').val();
                var password1 = $('#password').val();
                var password2 = $('#confirmarPass').val();
                var validarEmail = $('#validez').val();

                // Validar que todos los campos estén completos
                if (nombres !== "" && apellidos !== "" && Email !== "" && password1 !== "" && password2 !== "") {
                    // Validación de campos específicos
                    if (!regcampos.test(nombres)) {
                        swal({ title: 'Error', text: 'No se permiten caracteres especiales en nombres', icon: 'warning' });
                        return false;
                    } else if (!regcampos.test(apellidos)) {
                        swal({ title: 'Error', text: 'No se permiten caracteres especiales en apellidos', icon: 'warning' });
                        return false;
                    } else if (nombres.length <= 3) {
                        swal({ title: 'Advertencia', text: 'El nombre debe tener al menos 4 caracteres', icon: 'warning' });
                        return false;
                    } else if (apellidos.length <= 3) {
                        swal({ title: 'Advertencia', text: 'El apellido debe tener al menos 4 caracteres', icon: 'warning' });
                        return false;
                    } else if (!regemail.test(Email)) {
                        swal({ title: 'Advertencia', text: 'El correo electrónico no es válido', icon: 'warning' });
                        return false;
                    } else if (validarEmail === '1') {
                        swal({ title: 'Advertencia', text: 'El correo electrónico ya está en uso', icon: 'warning' });
                        return false;
                    } else if (password1.length <= 7) {
                        swal({ title: 'Advertencia', text: 'La contraseña debe tener al menos 8 caracteres', icon: 'warning' });
                        return false;
                    } else if (password1 !== password2) {
                        swal({ title: 'Advertencia', text: 'Las contraseñas no coinciden', icon: 'warning' });
                        return false;
                    } else {
                        // Si todas las validaciones pasan, enviar datos al servidor
                        $.ajax({
                            url: 'main/UsuarioCuentas/cuenta-empresa.php',
                            type: 'POST',
                            dataType: 'html',
                            data: {
                                correo: Email,
                                Cargo: 'Empresa',
                                Nombre: nombres,
                                Apellidos: apellidos,
                                password: password1
                            },
                            beforeSend: function () {
                                swal({
                                    title: "Cargando...",
                                    text: "Por favor espere",
                                    imageUrl: "assets/img/icono/loader.gif",
                                    button: false,
                                    closeOnClickOutside: false,
                                    closeOnEsc: false,
                                    imageWidth: 100,
                                    imageHeight: 100,
                                    showCancelButton: false,
                                    showConfirmButton: false
                                });
                            }
                        })
                            .done(function (response) {
                                if (response == 1) {
                                    swal({ title: 'Advertencia', text: 'El correo electrónico ya está en uso', icon: 'warning' });
                                } else if (response == 2) {
                                    // Limpiar campos después de crear la cuenta
                                    $('#Nombres').val("");
                                    $('#Apellidos').val("");
                                    $('#correo').val("");
                                    $('#password').val("");
                                    $('#confirmarPass').val("");
                                    $('#validez').val("");
                                    $('#passstrength').html('<div class="progress"><div class="progress-bar bg-danger" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div></div>');
                                    swal({
                                        title: "Cuenta creada con éxito",
                                        text: "Verifica tu correo electrónico para validar el usuario. A veces puede caer en spam o correo no deseado.",
                                        icon: "success",
                                        buttons: true,
                                        dangerMode: true,
                                    }).then((willDelete) => {
                                        if (willDelete) {
                                            setTimeout("location.href='login-empresa?success=1'");
                                        }
                                    });
                                } else if (response == 3) {
                                    swal({ title: 'Advertencia', text: 'Intente de nuevo', icon: 'warning' });
                                } else {
                                    console.log(response);
                                }
                            })
                            .fail(function (request, errorType, errorMessage) {
                                // Manejo de errores en la solicitud AJAX
                                swal({ title: 'Error', text: 'Intente de nuevo para procesar el envío', icon: 'error' });
                                console.error(errorType, errorMessage);
                            });
                    }
                } else {
                    swal({ title: 'Advertencia', text: 'Complete todos los campos', icon: 'warning' });
                    return false;
                }
            } else {
                swal({ title: 'Advertencia', text: 'No ha aceptado Términos & Condiciones', icon: 'warning' });
            }
        });

        // Validación de la fuerza de la contraseña
        $('#password').keyup(function () {
            var strongRegex = new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$", "g");
            var mediumRegex = new RegExp("^(?=.{7,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
            var enoughRegex = new RegExp("(?=.{6,}).*", "g");
            var Password = $("#password").val();

            if (Password === "") {
                $('#passstrength').html('<div class="progress"><div class="progress-bar bg-danger" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div></div>');
            } else {
                if (!enoughRegex.test(Password)) {
                    $('#passstrength').html('<div class="progress"><div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div></div>');
                } else if (strongRegex.test(Password)) {
                    $('#passstrength').html('<div class="progress"><div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div></div>');
                } else if (mediumRegex.test(Password)) {
                    $('#passstrength').html('<div class="progress"><div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div></div>');
                } else {
                    $('#passstrength').html('<div class="progress"><div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div></div>');
                }
            }
        });

        // Función para verificar la validez del email
        function buscar_datos(consulta) {
            $.ajax({
                url: 'main/UsuarioCuentas/consultar-datos.php',
                type: 'POST',
                dataType: 'html',
                data: { consulta: consulta }
            })
                .done(function (respuesta) {
                    $("#validez").val(respuesta); // Resultado de la consulta almacenado
                })
                .fail(function () {
                    console.error("Error en la consulta de email");
                });
        }
    });

</script>
