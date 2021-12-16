(function($) {



    /*

    *  new_map

    *

    *  This function will render a Google Map onto the selected jQuery element

    *

    *  @type	function

    *  @date	8/11/2013

    *  @since	4.3.0

    *

    *  @param	$el (jQuery element)

    *  @return	n/a

    */



    function new_map( $el ) {



        // var

        var $markers = $el.find('.marker');





        // vars

        var args = {

            zoom		: 10,

            center		: new google.maps.LatLng(0, 0),

            mapTypeId	: google.maps.MapTypeId.ROADMAP

        };





        // create map

        var map = new google.maps.Map( $el[0], args);





        // add a markers reference

        map.markers = [];





        // add markers

        $markers.each(function(){



            add_marker( $(this), map );



        });





        // center map

        center_map( map );





        // return

        return map;



    }



    /*

    *  add_marker

    *

    *  This function will add a marker to the selected Google Map

    *

    *  @type	function

    *  @date	8/11/2013

    *  @since	4.3.0

    *

    *  @param	$marker (jQuery element)

    *  @param	map (Google Map object)

    *  @return	n/a

    */



    function add_marker( $marker, map ) {



        // var

        var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );



        // create marker

        var marker = new google.maps.Marker({

            position	: latlng,

            map			: map,

            animation: google.maps.Animation.DROP,

            title: '',

            draggable: false,

            icon: {

                path: 'M13.7,5c-0.1-0.3-0.2-0.6-0.3-0.8C12,1.1,9.2,0,6.9,0C3.8,0,0.5,2,0,6.2v0.9			c0,0,0,0.4,0,0.5c0.3,2,1.8,4.1,3,6.1C4.4,15.8,5.7,17.9,7,20c0.8-1.4,1.6-2.8,2.4-4.1c0.2-0.4,0.5-0.8,0.7-1.2			c0.1-0.2,0.4-0.5,0.5-0.7c1.3-2.3,3.3-4.6,3.3-6.9V6.2C14,5.9,13.7,5,13.7,5z M7,9.3c-0.9,0-1.9-0.4-2.4-1.7C4.5,7.4,4.5,7,4.5,7			V6.4c0-1.6,1.3-2.3,2.5-2.3c1.4,0,2.6,1.1,2.6,2.6C9.6,8.1,8.4,9.3,7,9.3z',

                fillColor: "#f77e3e",

                strokeColor: "#f77e3e",

                fillOpacity: 1,

                strokeWeight: 1,

                scale: 1.5,

                size: new google.maps.Size(0, 0),

                origin: new google.maps.Point(0, 0),

                anchor: new google.maps.Point(12, 13),

                scaledSize: new google.maps.Size(0, 0)

            }

        });



        // add to array

        map.markers.push( marker );



        // if marker contains HTML, add it to an infoWindow

        if( $marker.html() )

        {

            // create info window

            var infowindow = new google.maps.InfoWindow({

                content		: $marker.html()

            });



            // show info window when marker is clicked

            google.maps.event.addListener(marker, 'click', function() {



                infowindow.open( map, marker );



            });

        }



    }



    /*

    *  center_map

    *

    *  This function will center the map, showing all markers attached to this map

    *

    *  @type	function

    *  @date	8/11/2013

    *  @since	4.3.0

    *

    *  @param	map (Google Map object)

    *  @return	n/a

    */



    function center_map( map ) {



        // vars

        var bounds = new google.maps.LatLngBounds();



        // loop through all markers and create bounds

        $.each( map.markers, function( i, marker ){



            var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );



            bounds.extend( latlng );



        });



        // only 1 marker?

        if( map.markers.length == 1 )

        {

            // set center of map

            map.setCenter( bounds.getCenter() );

            map.setZoom( 16 );

        }

        else

        {

            // fit to bounds

            map.fitBounds( bounds );

        }



    }



    /*

    *  document ready

    *

    *  This function will render each map when the document is ready (page has loaded)

    *

    *  @type	function

    *  @date	8/11/2013

    *  @since	5.0.0

    *

    *  @param	n/a

    *  @return	n/a

    */

// global var

    var map = null;



    $(document).ready(function(){



        $('.map').each(function(){



            // create map

            map = new_map( $(this) );



        });



    });



})(jQuery);