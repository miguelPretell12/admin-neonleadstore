<div class="logo">
    <img src="build/img/login/logo.webp" alt="">
</div>

<form id="formLogin" method="POST" class="formulario">
    <div class="campo">
        <i class="far fa-envelope input-email"></i>
        <input type="text" id="user" placeholder="Tu correo electronico">
    </div>
    <div class="campo">
        <i class="fas fa-key input-password"></i>
        <input type="password" id="pass" placeholder="Tu password">
    </div>
    <button type="submit" class="btn btn-opacity">
        <i class="fas fa-sign-in-alt"></i> Iniciar Sesión
    </button>
</form>
<div class="enlaces">
    <a href="#"><span>¿Olvidastes tu contraseña?.</span> Haga click</a>
    <a href="#"><span>¿No tienes usuario?.</span> Crea una cuenta</a>
</div>

<script src="build/js/ajax/ajaxlogin.js"></script>