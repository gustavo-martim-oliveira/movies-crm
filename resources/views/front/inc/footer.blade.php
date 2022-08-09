<!-- footer -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="footer__content">
                    <a href="{{route('front.index')}}" class="footer__logo">
                        <img src="{{asset('front/img/logo.svg')}}" alt="">
                    </a>

                    <span class="footer__copyright">© {{env('APP_NAME')}}, {{now()->format('Y')}} <br>
                        Theme By <a href="https://themeforest.net/user/dmitryvolkov/portfolio" target="_blank">Dmitry Volkov</a> <br>
                        System By <a href="#">SP Dev</a>
                    </span>

                    <nav class="footer__nav">
                        <a href="about.html">Sobre</a>
                        <a href="contacts.html">Contato</a>
                    </nav>

                    <button class="footer__back" type="button">
                        <i class="icon ion-ios-arrow-round-up"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- end footer -->
