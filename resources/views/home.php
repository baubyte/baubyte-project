<h1>Bienvenido</h1>
<?php if (isGuest()):?>
    <div>
        <a href="/login">Login</a>
    </div>
    <div>
        <a href="/register">Register</a>
    </div>
<?php else : ?>
    !Estas logueado¡
<?php endif; ?>