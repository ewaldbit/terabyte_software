$('.slider').owlCarousel({
    items:1,
    loop: true,
    margin: 2,
    autoplay: true,
    autoplayTimeout: 4000,
    autoplayHoverPause: true,
    nav: true
});

$('.play').on('click', function () {
    owl.trigger('play.owl.autoplay', [1000])
})
$('.stop').on('click', function () {
    owl.trigger('stop.owl.autoplay')
})


$(function(){
		$(".chamada1 h2").typed({
            strings: ["Conectando pessoas ao universo digital!"],
            typeSpeed: 100,
            loop: true,
        });
    });


/*window.onload = function(){
	// google maps
	var map;

	initMap();

	function initMap(){
		var mapProp = {
			center : new google.maps.LatLng(-10.255103361169692, -48.34271377512011),
			scrollWheel:false,
			zoom:15,
			mapTypeId:google.maps.MapTypeId.ROADMAP
		}

		map = new google.maps.Map(document.getElementById("map"), mapProp);
	}

	function addMarker(lat,long,icon,content){
		var LatLng = {'lat':lat,'lng':long};

		var marker = new google.maps.Marker({
			position:LatLng,
			map:map,
			icon:icon
		});

		var infoWindow = new google.maps.InfoWindow({
			content:content,
			maxWidth:200,
			pixelOffSet: new google.maps.Size(0,20)
		});

		infoWindow.open(map,marker)
	}

	
	var conteudo = '<p style="color:black;font-size:15px;padding:10px 0;">Terabyte Software</p>';
	addMarker(-10.256243562747958,-48.34275669046411,'',conteudo);
}

*/