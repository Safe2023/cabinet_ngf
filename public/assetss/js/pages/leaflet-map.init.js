var mymap = L.map("leaflet-map").setView([51.505, -0.09], 13);

L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
    maxZoom: 18,
    attribution: '&copy; OpenStreetMap contributors'
}).addTo(mymap);


var markermap = L.map("leaflet-map-marker").setView([51.505, -0.09], 13);

L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
    maxZoom: 18,
    attribution: '&copy; OpenStreetMap contributors'
}).addTo(markermap);

L.marker([51.5, -0.09]).addTo(markermap);

L.circle([51.508, -0.11], {
    color: "#34c38f",
    fillColor: "#34c38f",
    fillOpacity: 0.5,
    radius: 500
}).addTo(markermap);

L.polygon([
    [51.509, -0.08],
    [51.503, -0.06],
    [51.51, -0.047]
], {
    color: "#556ee6",
    fillColor: "#556ee6"
}).addTo(markermap);


var popupmap = L.map("leaflet-map-popup").setView([51.505, -0.09], 13);

L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
    maxZoom: 18,
    attribution: '&copy; OpenStreetMap contributors'
}).addTo(popupmap);

L.marker([51.5, -0.09])
    .addTo(popupmap)
    .bindPopup("<b>Hello world!</b><br />I am a popup.")
    .openPopup();


var customiconsmap = L.map("leaflet-map-custom-icons").setView([51.5, -0.09], 13);

L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
    attribution: '&copy; OpenStreetMap contributors'
}).addTo(customiconsmap);


var LeafIcon = L.Icon.extend({
    options: {
        iconSize: [45, 95],
        iconAnchor: [22, 94],
        popupAnchor: [-3, -76]
    }
});

var greenIcon = new LeafIcon({
    iconUrl: "assets/images/logo.svg"
});

L.marker([51.5, -0.09], {
    icon: greenIcon
}).addTo(customiconsmap);


var interactivemap = L.map("leaflet-map-interactive-map").setView([37.8, -96], 4);

function getColor(e) {
    return e > 1000 ? "#435fe3" :
           e > 500 ? "#556ee6" :
           e > 200 ? "#677de9" :
           e > 100 ? "#798ceb" :
           e > 50 ? "#8a9cee" :
           e > 20 ? "#9cabf0" :
           e > 10 ? "#aebaf3" :
                      "#c0c9f6";
}

function style(e) {
    return {
        weight: 2,
        opacity: 1,
        color: "white",
        dashArray: "3",
        fillOpacity: 0.7,
        fillColor: getColor(e.properties.density)
    };
}

L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
    maxZoom: 18,
    attribution: '&copy; OpenStreetMap contributors'
}).addTo(interactivemap);

var geojson = L.geoJson(statesData, {
    style: style
}).addTo(interactivemap);