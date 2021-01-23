<footer id="footer">
    <div class="container-fluid bg-dark text-light fixed-bottom ">
        <div class="row">
            <div class="col-6 d-flex justify-content-center">
                &copy; M.Chernyshev, {{ date('Y') }}
            </div>
            <div class="col-6 d-flex justify-content-center">
                powered by Laravel
            </div>
        </div>
        <div class="row mb-3 mt-3">
            <div class="col-6 d-flex justify-content-center">
            </div>
            <div class="col-6 d-flex justify-content-center">
                <a href="tg://resolve?domain=@max_check" class="ml-2 mr-2">
                    <i class="fa fa-telegram" aria-hidden="true" style="font-size:48px;color:#ffffff"></i>

                </a>
                <a href="https://api.whatsapp.com/send?phone=+380502070252" class="ml-2 mr-2">
                    <i class="fa fa-whatsapp" aria-hidden="true" style="font-size:48px;color:#ffffff"></i>
                </a>
            </div>

            {{--                <div class="col-2 d-flex justify-content-center mt-2 mb-2">--}}
            {{--                <a href="#"><i class="fa fa-viber" aria-hidden="true" style="font-size:48px;color:#ffffff"></i></a>--}}
            {{--                </div>--}}
        </div>
    </div>
</footer>
<script src="{{asset('assets/front/js/scripts.min.js')}}"></script>


