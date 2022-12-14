mapboxgl.accessToken = 'pk.eyJ1Ijoic3lmcmwiLCJhIjoiY2w2ZDVrdHJrMXRjMjNjcnptOGFoZXRmbSJ9.xlfxxhsScjLuE3vfcq0fnw';
const map = new mapboxgl.Map({
    container: 'map', // container id
    style: 'mapbox://styles/mapbox/satellite-streets-v11', // stylesheet location
    center: [119.48065582151219, -5.1948511155886195], // starting position [lng, lat]
    zoom: 10 // starting zoom
});

// Add zoom and rotation controls to the map.
map.addControl(new mapboxgl.NavigationControl());
const marker = new mapboxgl.Marker({
    'color': '#314ccd'
});

let lng;
let lat;
const lngDisplay = document.getElementById('lng');
const latDisplay = document.getElementById('lat');
map.on('click', (event) => {
    // Use the returned LngLat object to set the marker location
    // https://docs.mapbox.com/mapbox-gl-js/api/#lnglat
    marker.setLngLat(event.lngLat).addTo(map);
    lng = event.lngLat.lng;
    lat = event.lngLat.lat;
    getWeatherData();
});

$('#hasilKomoditas').hide();
$('#tidakCocok').hide();

async function getWeatherData() {
    // Construct the API request
    const query = await fetch(
        `https://api.mapbox.com/v4/mapbox.mapbox-terrain-v2/tilequery/${lng},${lat}.json?layers=contour&limit=50&access_token=${mapboxgl.accessToken}`,
        { method: 'GET' }
    );
    if (query.status !== 200) return;
    const data = await query.json();
    // Display the longitude and latitude values
    lngDisplay.textContent = lng.toFixed(5);
    latDisplay.textContent = lat.toFixed(5);

    // Buat Tampilkan elevation
    var respondEl = await $.ajax({
        url: 'https://api.open-elevation.com/api/v1/lookup',
        data: {
            locations: lat.toFixed(5) + ',' + lng.toFixed(5)
        }
    })
    console.log(respondEl);
    var eleDisplay = respondEl.results[0].elevation;
    $('#ele').text(eleDisplay + " mdpl");

    // Untuk Tampilkan iklim
    // https://api.openweathermap.org/data/2.5/weather?lat={lat}&lon={lon}&appid={API key}
    var respondIklim = await $.ajax({
        url: 'https://api.openweathermap.org/data/2.5/forecast',
        data: {
            lat: lat.toFixed(5),
            lon: lng.toFixed(5),
            appid: '4cfffc39110ea2ff21e427fdc0988f41',
            units: 'metric'
        },
    })
    console.log(respondIklim);
    // Curah hujan / 3 jam  dalam 5 hari * 6 = 30 hari
    var totalCurahHujan = 0;
    var totalKelembapan = 0;
    var totalSuhu = 0;
    respondIklim.list.forEach(data => {
        if (data.rain) {
            totalCurahHujan += data.rain['3h'];
        }
        totalKelembapan += data.main.humidity
        totalSuhu += data.main.temp
    });
    totalCurahHujan = totalCurahHujan * 6;
    totalKelembapan = totalKelembapan / respondIklim.list.length;
    totalSuhu = totalSuhu / respondIklim.list.length;
    totalCurahHujan = totalCurahHujan.toFixed(2)
    totalKelembapan = totalKelembapan.toFixed(2)
    totalSuhu = totalSuhu.toFixed(2)
    $('#curahHujan').text(totalCurahHujan + " mm/bln");
    $('#kelembapan').text(totalKelembapan + " %");
    $('#suhu').text(totalSuhu + " C");

    // Kirim data parameter ke Controller
    var daftarKomoditi = await $.ajax({
        url: baseUrl + 'Beranda/cek',
        data: {
            lat: lat.toFixed(5),
            lon: lng.toFixed(5),
            hujan: totalCurahHujan,
            suhu: totalSuhu,
            kelembapan: totalKelembapan,
            tanah: eleDisplay
        },
        type: "post"
    })
    // console.log(daftarKomoditi);

    // Tampilkan Hasil Perbandingan
    if (daftarKomoditi.length == 0) {
        $('#tampilanAwal').hide();
        $('#hasilKomoditas').hide();
        $('#tidakCocok').fadeIn();
    } else {
        $('#hasilKomoditas tbody').html('');
        daftarKomoditi.forEach(function (row) {
            $('#hasilKomoditas tbody').append(`
                <tr>
                    <td>${row.Komoditas}</td>
                    <td>${row.HujanMin} - ${row.HujanMax} mm/bln</td>
                    <td>${row.KelembapanMin} - ${row.KelembapanMax} %</td>
                    <td>${row.SuhuMin} - ${row.SuhuMax} °C</td>
                    <td>${row.TanahMin} - ${row.TanahMax} mdpl</td>
                </tr>
            `);
        })
        $('#tampilanAwal').hide();
        $('#tidakCocok').hide();
        $('#hasilKomoditas').fadeIn();
    }

    
} 