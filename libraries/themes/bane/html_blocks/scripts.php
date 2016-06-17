<script type="text/javascript" charset="utf-8">
  $(document).ready(function() {
    // Google Maps API
    //var latlng = new google.maps.LatLng(42.291096, -71.540494);
    var directionsDisplay;
    var directionsService = new google.maps.DirectionsService();

    var facilities = {
      lynn: {
        name: 'Abbott House Skilled Nursing Home & Rehabilitation',
        lat: 42.475125,
        lng: -70.929498,
        img: 'abbott-house-ext.jpg',
        add: '28 Essex Street, Lynn, MA 01902',
        phn: '781-595-5500'
      },
      marblehead: {
        name: 'Devereux House Skilled Nursing Home & Rehabilitation',
        lat: 42.493975,
        lng: -70.877438,
        img: 'devereux-house-ext.jpg',
        add: '39 Lafayette Street, Marblehead, MA 01945',
        phn: '781-631-6120'
      },
      peabody: {
        name: 'Rosewood Skilled Nursing Home & Rehabilitation',
        lat: 42.546687,
        lng: -70.995161,
        img: 'Rosewood-EXT.jpg',
        add: '22 Johnson Street, W. Peabody, MA 01960',
        phn: '978-535-8700'
      },
      duxbury: {
        name: 'Bay Path Rehabilitation & Nursing Center',
        lat: 42.031616,
        lng: -70.741473,
        img: 'Bay-Path-EXT.jpg',
        add: '308 Kings Town Way, Duxbury, MA 02332',
        phn: '781-585-5561'
      },
      weymouth: {
        name: 'Colonial Rehabilitation & Nursing Center',
        lat: 42.2163766,
        lng: -70.9629449,
        img: 'Colonial-EXT.jpg',
        add: '125 Broad Street, Weymouth, MA 02188',
        phn: '781-337-3121'
      },
      quincy: {
        name: 'Hancock Park Rehabilitation & Nursing Center',
        lat: 42.245157,
        lng: -71.0050613,
        img: 'hancockpark-ext.jpg',
        add: '164 Parkingway, Quincy, MA 02169',
        phn: '617-773-4222'
      },
      hingham: {
        name: 'Harbor House Rehabilitation & Nursing Center',
        lat: 42.252628,
        lng: -70.909528,
        img: 'harborhouse-ext.jpg',
        add: '11 Condito Road, Hingham, MA 02043',
        phn: '781-749-4774'
      },
      braintree: {
        name: 'John Scott House Rehabilitation & Nursing Center',
        lat: 42.217711,
        lng: -70.994513,
        img: 'john-scott-house-ext.jpg',
        add: '233 Middle Street, Braintree, MA 02184',
        phn: '781-843-1860'
      },
      mayflower: {
        name: 'Mayflower Place',
        lat: 41.660839,
        lng: -70.2612147,
        img: 'mayflower-EXT.jpg',
        add: '579 Buck Island Road, West Yarmouth, MA 02673',
        phn: '1-800-245-8389'
      },
      bostonian: {
        name: 'The Bostonian Skilled Nursing Home & Rehabilitation',
        lat: 42.287780, 
        lng: -71.047121,
        img: 'the-bostonian-ext.jpg',
        add: '308 Kings Town Way, Duxbury, MA 02332',
        phn: '617-265-2350'
      },
      brighton: {
        name: 'Brighton House Rehabilitation & Nursing Center',
        lat: 42.343321,
        lng: -71.141831,
        img: 'brighton-house-ext.jpg',
        add: '170 Corey Road, Brighton, MA 02135',
        phn: '617-731-0515'
      },
      hyde: {
        name: 'Park Place Skilled Nursing Home & Rehabilitation',
        lat: 42.260888,
        lng: -71.120557,
        img: 'park-place-ext.jpg',
        add: '113 Central Ave, Hyde Park, MA 02136',
        phn: '617-361-2388'
      },
      dalton1: {
        name: 'Craneville Place Skilled Nursing Home & Rehabilitation',
        lat: 42.473039, 
        lng: -73.177508,
        img: 'cranesville-ext.jpg',
        add: '265 Main Street, Dalton, MA 01226',
        phn: '413-684-3212'
      },
      pittsfield: {
        name: 'Springside Skilled Nursing Home & Rehabilitation',
        lat: 42.432487, 
        lng: -73.306289,
        img: 'springside-ext.jpg',
        add: '255 Lebanon Avenue, Pittsfield, MA 01201',
        phn: '413-499-2334'
      },
      dalton: {
        name: 'Sugar Hill Skilled Nursing Home & Rehabilitation',
        lat:  42.474546, 
        lng:  -73.183835,
        img: 'sugar-hill-ext.jpg',
        add: '45 Main St, Dalton, MA 01226',
        phn: '413-684-0100'
      },

    };

    function initialize() {
      directionsDisplay = new google.maps.DirectionsRenderer();

      var center = new google.maps.LatLng(42.217711, -71.994513);

      var settings = {
        zoom: 8,
        scrollwheel: false,
        center: center,
        disableDefaultUI: true,
        navigationControl: true,
        navigationControlOptions: {
          style: google.maps.NavigationControlStyle.SMALL,
          position: google.maps.ControlPosition.LEFT_BOTTOM
        },
        zoomControl: true,
        streetViewControl: true,
        mapTypeId: google.maps.MapTypeId.ROADMAP
      };

      var map = new google.maps.Map(document.getElementById("map_canvas"), settings);

      directionsDisplay.setMap(map);

      directionsDisplay.setPanel(document.getElementById('directions'));

      var infowindow = new google.maps.InfoWindow();
      var marker;

      for (var i in facilities) {
        marker = new google.maps.Marker({
          position: new google.maps.LatLng(facilities[i]['lat'], facilities[i]['lng']),
          map: map,
          draggable: false,
          animation: google.maps.Animation.BOUNCE
      });
      //console.log(facilities[i]['name']);

      google.maps.event.addListener(marker, 'click', (function (marker, i) {
        return function () {
          infowindow.setContent('<div class="infoWindow"><img style="width:100%;" src ="apps/_ee/files/' + facilities[i]["img"] + '" class="centerImg"><div id="bodyContent"><h4 id="firstHeading" class="fancy">' + facilities[i]["name"] + '</h4><p>' + facilities[i]["add"] + '<br>' + facilities[i]["phn"] + '</p></div></div>');
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
  }

    function calcRoute(start, facility) {
      //alert(start+latlng); var end = new google.maps.LatLng(facilities[end]['lat'], facilities[end]['lng']);
      var end = facilities[facility]['add'];
      var request = {
        origin: start,
        destination: end,
        travelMode: google.maps.TravelMode.DRIVING
      };
      directionsService.route(request, function (response, status) {
        if (status == google.maps.DirectionsStatus.OK) {
          //alert(start+end);
          directionsDisplay.setDirections(response);
          //$("#directionPanelButton").fadeIn('fast');
        } else {
          alert('Address not found, please try again.');
        }
      });
    }
    google.maps.event.addDomListener(window, 'load', initialize);

    // Directions Form
    //map routing
    $(".GetDirectionButton").click(function () {
      console.log('im clicked');
      var startAddress = $("#startAddress").val();
      var destination = $('#centerChosen').val();
      if (startAddress != '' && destination != '') {
        calcRoute(startAddress, destination);
        $("#directions").slideToggle('fast');
        $('#printDirectionButton').toggle();

      } else {
        alert("Please enter both the starting address and the destination center");
      }
    })

    $('#printDirectionButton').click(function () {
      window.print();
      return false;

    });
  });
</script>
