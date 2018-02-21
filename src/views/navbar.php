<nav class="navbar sticky-top navbar-expand-lg navbar-dark green darken-1">
    <a class="navbar-brand logotipo" href="/">Mi Primer Blog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/">Inicio</span></a>
            </li>
            <?php if(isset($_SESSION['USUARIO_ACTUAL'])): ?>
                <li class="nav-item">
                    <a class="nav-link" href="/nuevo.php">Nuevo</a>
                </li>
                <span class="navbar-text">&nbsp;|&nbsp;</span>
                <li class="nav-item">
                    <a class="nav-link" href="/logout.php">Cerrar Sesión</a>
                </li>
            <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link" href="/login.php">Login</a>
                </li>
            <?php endif; ?>

        </ul>
        <?php if(isset($_SESSION['USUARIO_ACTUAL'])): ?>
            <span class="nav-link yellow-text"><i class="fa fa-user-circle-o" aria-hidden="true"></i> <?= $_SESSION['USUARIO_ACTUAL'] ?></span>
        <?php endif; ?>
        <form class="form-inline" name="busqueda" action="buscar.php" method="get">
            <input class="form-control mr-sm-2" type="text" placeholder="Buscar" aria-label="Buscar">
        </form>
    </div>
</nav>