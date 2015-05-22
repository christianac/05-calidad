 @include('nav')

    <section>
        <form action="login_usuario" method="post">
            <label for="user">Nombre de usuario</label>
            <input type="text" name="user">
            <label for="password">Contraseña</label>
            <input type="password" name="password">
            <input type="submit" class="btn btn-success" value="Entrar">
            <a href="<?=URL::to('registrarse'); ?>"><input type="button" class="btn btn-info" value="Registrarse"></a>
        </form>
    </section>



    <!-- jQuery -->
    <script src="<?=URL::to('js/jquery.js'); ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=URL::to('js/bootstrap.min.js'); ?>"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>

</body>

</html>
