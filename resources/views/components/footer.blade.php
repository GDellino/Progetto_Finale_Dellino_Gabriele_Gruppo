<!-- Footer -->
<footer class="text-center text-lg-start text-muted w-100 bottom-0 footerColor vh-100"
    style="position:sticky; bottom:0; left:0;">
    <section class="position-relative">

    </section>

    <section class="py-5">
        <p class="pTitle ">{{ __('ui.revisor') }}</p>
    </section>

    <div class="container-fluid bg-black">
        <div class="row rowFooter">
            <div class="col-12 col-md-6 border-top border-bottom border-end d-flex justify-content-center  ">
                <!-- Section: Social media -->
                <section class="d-flex flex-column justify-content-center p-4">
                    <div class="center">
                        <div id="social-test">
                            <p class="pFotter">{{ __('ui.net') }}</p>
                            <ul class="social">
                                <li><a class="fa fa-facebook" aria-hidden="true" href="https://it-it.facebook.com/reg/"></a></li>
                                <li><a class="fa fa-twitter" aria-hidden="true" href="https://x.com/?lang=it"></a>
                                </li>
                                <li><a class="fa fa-instagram " aria-hidden="true" href="https://www.instagram.com/"></a></li>
                                <li><a class="fa fa-dribbble" aria-hidden="true" href="https://dribbble.com/"></a>
                                </li>
                                <li><a class="fa fa-github" aria-hidden="true" href="https://github.com/"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>
                <!-- Section: Social media -->
            </div>
            <div class="col-12 col-md-6 border-top border-bottom d-flex flex-column justify-content-center footerQ">
                @if(Auth::user() && Auth::user()->is_revisor)
                <h3 class="text-white text-center">{{__('ui.goRevisor')}}</h3>
                <div class="text-center">
                    <a href="{{route('revisor.index')}}" class="btn btnFooter noselect mt-4 rounded-5 text-center">{{__('ui.click')}}</a>
                </div>

                @else
                <img class="imgFooter" src="images/tech-support.png" alt="">
                <h6 class="text-white">{{__('ui.Tell us why you want to become a reviewer!')}}</h6>
                <form action="{{ route('become.revisor') }}" method="POST" >
                    @csrf
                    <textarea name="body" id="" cols="60" rows="5" placeholder='{{ __('ui.self') }}' class="beige"></textarea>
                    <p class="text-white">{{ __('ui.clickButtonBelow') }}</p>
                    <button class=" btnFooter noselect mt-4 rounded-5" type="submit">{{ __('ui.workWithUs') }}
                    </button>
                </form>
                @endif
            </div>
        </div>
    </div>


    <!-- Section: Links  -->
    <section class="">

    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4 bottom-0 copyF" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2024 Copyright:
        <a class="text-reset fw-bold" href="">Presto.it</a>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->
