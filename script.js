mapboxgl.accessToken = 'pk.eyJ1Ijoic3lmcmwiLCJhIjoiY2w2ZDVrdHJrMXRjMjNjcnptOGFoZXRmbSJ9.xlfxxhsScjLuE3vfcq0fnw';
const map = new mapboxgl.Map({
    container: 'map', // container id
    style: 'mapbox://styles/mapbox/satellite-streets-v11', // stylesheet location
    center: [119.48065582151219,  -5.1948511155886195], // starting position [lng, lat]
    zoom: 11.5 // starting zoom
});

// Add zoom and rotation controls to the map.
map.addControl(new mapboxgl.NavigationControl());
    let lng;
    let lat;
    const lngDisplay = document.getElementById('lng');
    const latDisplay = document.getElementById('lat');
    const eleDisplay = document.getElementById('ele');
    const marker = new mapboxgl.Marker({
        'color': '#314ccd'
    });
  
    map.on('click', (event) => {
        // Use the returned LngLat object to set the marker location
        // https://docs.mapbox.com/mapbox-gl-js/api/#lnglat
        marker.setLngLat(event.lngLat).addTo(map);
        lng = event.lngLat.lng;
        lat = event.lngLat.lat;
        getElevation();
    });
  
    async function getElevation() {
        // Construct the API request
        const query = await fetch(
            `https://api.mapbox.com/v4/mapbox.mapbox-terrain-v2/tilequery/${lng},${lat}.json?layers=contour&limit=50&access_token=${mapboxgl.accessToken}`,
            { method: 'GET' }
        );
        if (query.status !== 200) return;
        const data = await query.json();
        // Display the longitude and latitude values
        lngDisplay.textContent = lng.toFixed(9);
        latDisplay.textContent = lat.toFixed(9);
        // Get all the returned features
        const allFeatures = data.features;
        // For each returned feature, add elevation data to the elevations array
        const elevations = allFeatures.map((feature) => feature.properties.ele);
        // In the elevations array, find the largest value
        const highestElevation = Math.max(...elevations);
        // Display the largest elevation value
        eleDisplay.textContent = `${highestElevation} mdpl`;
    }

// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
 window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
