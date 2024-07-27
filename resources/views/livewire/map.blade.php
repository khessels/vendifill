<div>
    <style>
        #map {
            height: {{ $height}}px; /* The height is 400 pixels */
            width: 100%; /* The width is the width of the web page */
        }
    </style>
    {{-- Be like water. --}}
    <div wire:ignore id="div-map">
        <h2 id="map-name"></h2>
        <div id="map" style="display: none">{{ $height }}</div>
    </div>
    @script
    <script>
        let id = undefined;
        let component = undefined;

        (g=>{var h,a,k,p="The Google Maps JavaScript API",c="google",l="importLibrary",q="__ib__",m=document,b=window;b=b[c]||(b[c]={});var d=b.maps||(b.maps={}),r=new Set,e=new URLSearchParams,u=()=>h||(h=new Promise(async(f,n)=>{await (a=m.createElement("script"));e.set("libraries",[...r]+"");for(k in g)e.set(k.replace(/[A-Z]/g,t=>"_"+t[0].toLowerCase()),g[k]);e.set("callback",c+".maps."+q);a.src=`https://maps.${c}apis.com/maps/api/js?`+e;d[q]=f;a.onerror=()=>h=n(Error(p+" could not load."));a.nonce=m.querySelector("script[nonce]")?.nonce||"";m.head.append(a)}));d[l]?console.warn(p+" only loads once. Ignoring:",g):d[l]=(f,...n)=>r.add(f)&&u().then(()=>d[l](f,...n))})({
            key: "AIzaSyDKAsaW_3chQ-leWi7O8700PGgybVaSAbQ",
            v: "weekly",
            // Use the 'v' parameter to indicate the version to use (weekly, beta, alpha, etc.).
            // Add other bootstrap parameters as needed, using camel case.
        });


        // Request needed libraries.
        const { Map, InfoWindow } = await google.maps.importLibrary("maps");
        const { Marker } = await google.maps.importLibrary("marker");


        const map = new Map(document.getElementById("map"), {
            center: { lat: {{ $latitude }}, lng: {{ $longitude }} },
            zoom: {{ $zoom }},
            mapId: "4504f8b37365c3d0",
        });

        const infoWindow = new InfoWindow();
        const draggableMarker = new Marker({
            map,
            position: { lat: {{ $latitude }}, lng: {{ $longitude }} },
            draggable: true,
            animation: google.maps.Animation.DROP,
            title: '{{ $title }}',
        });

        draggableMarker.addListener("dragend", (event) => {
            infoWindow.close();
            let content = "Pin dropped at: " + event.latLng.lat() + ', ' + event.latLng.lng() + '<br>'
            content += "<a href='#' id='save-marker-position', data-latitude='" + event.latLng.lat() + "' data-longitude='" + event.latLng.lng() + "'>Save</a>"
            infoWindow.setContent(content);
            infoWindow.open(draggableMarker.map, draggableMarker);
        });

        async function setCenter(lat, lng, title, zoom){
            await map.setCenter({ lat: lat, lng: lng })
            await draggableMarker.setPosition({ lat: lat, lng: lng })
        }
        $wire.on('map-hide')
        {
            $('#div-map').hide();
        }
        $wire.on('map-show')
        {
            $('#div-map').show();
        }
        $wire.on('map-updated', (data) => {
            $('#map').fadeIn()
            $('#map-name').html(data[0]['title'])
            id = data[0]['id']
            component = data[0]['component']
            setCenter( parseFloat(data[0]['latitude']), parseFloat(data[0]['longitude'], data[0]['title'], data[0]['zoom']));
        });
        $('body').on('click', '#save-marker-position', function(evnt){
            let latitude = evnt.currentTarget.dataset.latitude;
            let longitude = evnt.currentTarget.dataset.longitude;

            switch(component){
                case 'location-index':
                    $wire.dispatch('location-coordinates-save', [{id:id, latitude: latitude, longitude: longitude}])
                    break;
                case 'machine-index':
                    $wire.dispatch('machine-coordinates-save', [{id:id, latitude: latitude, longitude: longitude}])
                    break;
                case 'machines-index':
                    $wire.dispatch('machines-coordinates-save', [{id:id, latitude: latitude, longitude: longitude}])
                    break;
                case 'outlet-index':
                    $wire.dispatch('outlet-coordinates-save', [{id:id, latitude: latitude, longitude: longitude}])
                    break;

            }
        })
    </script>
    @endscript
</div>
