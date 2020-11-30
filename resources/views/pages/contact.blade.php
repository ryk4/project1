@extends('layouts.mainRecipe')




@section('content')


    <section class="container-fluid p-0">
        <div id="map" style="width:100%;height:500px;"></div>
        <script>
            function initMap() {
                var uluru = {lat: 54.723460, lng: 25.337933};
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 15,
                    center: uluru,
                    gestureHandling: 'cooperative'
                });
                var marker = new google.maps.Marker({
                    position: uluru,
                    map: map
                });
            }
        </script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBYrT3I2aBq4314tkfMn93EF3B3ph-cQ98&amp;callback=initMap"></script>
    </section>
    <section class="container py-5">

            <div class="row">
                <div class="col-12 col-lg-6 py-3">
                    <h1>Our contacts</h1>
                    <p><i class="fas fa-map-marker fa-fw mr-2"></i><span>Sunrise Valley Science and Technology Park,</span><br><span> Sauletekio ave. 15, Vilnius, Lithuania</span></p>
                    <p><a href="#"><i class="fas fa-phone fa-fw mr-2"></i>+370 000 00000</a></p>
                    <p><a href="#"><i class="fas fa-envelope fa-fw mr-2"></i>foodlifting.contact@gmail.com</a></p>
                    <p class="text-muted">Get in touch with us if you have any questions along with any sort of business enquires. Any suggestions or bugs regarding this site are also very much appreciated.</p>
                </div>
                <div class="col-12 col-lg-6 order-lg-first">
                    <form method="POST" action="{{url('sendEmail')}}" class="g-block__three-rounds bg-white p-4">
                        {{csrf_field()}}

                        <h4 class="d-flex flex-wrap"><strong>Get in touch</strong><i class="fas fa-envelope ml-auto"></i></h4>
                        <hr>
                        <div class="form-group">
                            <label for="contactInputName">Full Name</label>
                            <input class="form-control" type="text" name="inputName" placeholder="Full Name">
                        </div>
                        <div class="form-group">
                            <label for="contactInputMail">Email address</label>
                            <input class="form-control" type="text" name="inputEmail" placeholder="Email address">
                        </div>
                        <div class="form-group">
                            <label for="contactInputComment">Leave comment</label>
                            <textarea class="form-control" name="inputComment" placeholder="Leave comment"></textarea>
                        </div>
                        <div class="text-right mt-4">
                            <button class="btn btn-primary" type="submit">{{ __('Send') }}</button>
                        </div>
                    </form>
                </div>
            </div>
    </section>


@endsection
