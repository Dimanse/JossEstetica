if(document.querySelector('#mapa')){
    const lat = 9.873944334907783;
    const lng = -84.01986397366514;
    const zoom = 16;
   
    const map = L.map('mapa').setView([lat, lng], zoom);
  
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);
  
    L.marker([lat, lng]).addTo(map)
        .bindPopup(`
        <div class="logo">
            <h3 class="logo__texto">
                <span class="span1">The </span>Beauty <span class="span2"> Spa</span>
            </h3>
        </div>
            <p class="explicacion-modal__texto--centrado text-center">Quebrada Honda</p>
        `)
        .openPopup();
  }