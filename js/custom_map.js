
var x = -2.24, y = 53.48;
 var mapboxgl = require('mapbox-gl');

if(navigator.geolocation){
  navigator.geolocation.getCurrentPosition(showPosition);
function showPosition(position){
  setmap(position.coords.latitude, position.coords.longitude);
  }
}
else{
  setmap(x,y);
}

function setmap(latitude,longitude){
  L.mapbox.accessToken = 'pk.eyJ1IjoiYWpveTg4MjAiLCJhIjoiY2wyNmI5ZWVzMDR1ZzNjbzg0a2Y2NXhuayJ9.hSXv_d85IsaHhDinef6rhw';
  
  var map = L.mapbox.map('map')
      .setView([latitude,longitude], 9)
      .addLayer(L.mapbox.styleLayer('mapbox://styles/mapbox/streets-v11'));
      
        var markar = new mapboxgl.Marker().setLngLat([latitude,longitude]).addTo(map);
      
}

