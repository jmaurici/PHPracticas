<section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
    <div class="my-auto">
        <h1 class="mb-0">Google Maps

        </h1>
        <div class="subheading mb-5">

<div id="map"></div>
<script>
    var map;
    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 28.123618 , lng: -15.432873},
            zoom: 12
        });

    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key= AIzaSyD66tVEwouXQH78x2PsnKLl8srIlRcMMuA&callback=initMap"
        async defer></script>

        </div>
    </div>
</section>