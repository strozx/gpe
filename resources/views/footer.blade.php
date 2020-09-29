<!--Footer-->
<footer class="page-footer text-center font-small mt-4 wow fadeIn">

{{--    <!--Call to action-->--}}
{{--    <div class="pt-4">--}}
{{--        <a class="btn btn-outline-white" href="https://mdbootstrap.com/docs/jquery/getting-started/download/" target="_blank"--}}
{{--           role="button">Download MDB--}}
{{--            <i class="fas fa-download ml-2"></i>--}}
{{--        </a>--}}
{{--        <a class="btn btn-outline-white" href="https://mdbootstrap.com/education/bootstrap/" target="_blank" role="button">Start--}}
{{--            free tutorial--}}
{{--            <i class="fas fa-graduation-cap ml-2"></i>--}}
{{--        </a>--}}
{{--    </div>--}}
{{--    <!--/.Call to action-->--}}

    <hr class="my-4">

    <!-- Social icons -->
    <div class="pb-4">
        <a href="https://www.facebook.com/gpe.uni.mb" class="nav-link" target="_blank">
            <i class="fab fa-facebook-f mr-3"></i>
        </a>
        <a href="https://www.instagram.com/unimbgpe/" class="nav-link" target="_blank">
            <i class="fab fa-instagram mr-3"></i>
        </a>
        <a href="https://www.youtube.com/channel/UCIv_LONORJEYdCtDUTvSc8w" target="_blank">
            <i class="fab fa-youtube mr-3"></i>
        </a>
    </div>
    <!-- Social icons -->

    <!--Copyright-->
    <div class="footer-copyright py-3">
        {{now()->year}} Copyright:
{{--        <a href="https://mdbootstrap.com/education/bootstrap/" target="_blank"> MDBootstrap.com </a>--}}
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->

<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script>
<!-- Initializations -->
<script type="text/javascript">
    // Animations initialization
    new WOW().init();

</script>
</body>

</html>
