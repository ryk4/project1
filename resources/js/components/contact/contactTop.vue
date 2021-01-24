<template>
  <div>
    <section class="container-fluid p-0">
        <div id="map" style="width:100%;height:500px;"></div>
    </section>
    <section class="container py-5">

            <div class="row">
                <div class="col-12 col-lg-6 py-3">
                    <h1>Our contacts</h1>
                    <p><i class="fas fa-map-marker fa-fw mr-2"></i><span> Sauletekio ave. 15, Vilnius, Lithuania. LT-00000</span></p>
                    <p><a href="#"><i class="fas fa-phone fa-fw mr-2"></i>+370 000 00000</a></p>
                    <p><a href="#"><i class="fas fa-envelope fa-fw mr-2"></i>foodlifting.contact@gmail.com</a></p>
                    <p class="text-muted">Get in touch with us if you have any questions along with any sort of business enquires. Any suggestions or bugs regarding this site are also very much appreciated.</p>
                </div>
                <get-in-touch-component></get-in-touch-component>
            </div>
    </section>
  </div>

</template>

<script>
export default {
    functions: {
        initMap() {//not actually used at the moment
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
    }
}

        
       // <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBYrT3I2aBq4314tkfMn93EF3B3ph-cQ98&amp;callback=initMap" ></script>

<style>

</style>