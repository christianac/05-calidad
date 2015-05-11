 @include('nav')

    <section>
        <form action="login_a" method="post">
            <label for="user"></label>
            <input type="text" name="user">
            <label for="password"></label>
            <input type="password" name="password">
            <input type="submit" value="entrar">
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
