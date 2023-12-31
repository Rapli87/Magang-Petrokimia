<!-- Client Logo Section Start Here-->
<div class="clicent-logo-section sec-spacer">
    <div class="overly-bg"></div>
    <div class="container">
        <h3 class="title-bg" style="color: white;">Our Sponsors</h3>
        <div id="upcoming" class="rs-carousel owl-carousel" data-loop="true" data-items="6" data-margin="20"
            data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="2000" data-dots="false" data-nav="false"
            data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false"
            data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2"
            data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="4" data-md-device-nav="false"
            data-md-device-dots="false">
            @foreach ($sponsorships as $sponsorship)
                <div class="item">
                    <div class="single-logo">
                        <a href="{{ $sponsorship->image_sponsorship }}" target="_blank">
                            <img src="{{ asset($sponsorship->image_sponsorship) }}" alt="{{ $sponsorship->name_sponsorship }}">
                        </a>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
<!-- Client Logo Section End Here-->
