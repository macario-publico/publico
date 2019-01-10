 mapboxgl.accessToken = 'pk.eyJ1IjoiZGFubG91aXM5NzAxIiwiYSI6ImNqbmdhcHB3dzAxODUzcG8wM3p2NWM3N20ifQ.ENQ3iUzrJeYJZl-dEZBjhg';

        var puebla = [-99.1773206, 19.4200922];
        var seneca = [-99.2047852, 19.4316624];
        var muzquiz = [-99.1898552, 19.4120634];
        var moliere = [-99.2046098, 19.4312885];
        var prado = [-99.2070167, 19.4278676];
        var hamburgo = [-99.1617697, 19.4285626];


        var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/danlouis9701/cjoucjx2z3f0y2smhgmaekuoq',
            center: [-99.1815036, 19.4251869],
            zoom: 12.5
        });

        // create the popup Puebla
        var popup = new mapboxgl.Popup()
            .setHTML("<img src='https://publi.co/publico2/img/cards-mapa/pt-mapa-puebla.jpg'><h2 class='title-map'>Puebla 403</h2><p class='description-map'>Puebla 403, Colonia Roma Nte., Ciudad de México, C.P. 06700</p><a class='btn-map' href=\"contacto/publico-trabajo-contacto\" target=\"_blank\" title=\"Puebla 403\">Contacto</a>");

        // create the popup Seneca
        var popup2 = new mapboxgl.Popup()
            .setHTML("<img src='https://publi.co/publico2/img/cards-mapa/pt-mapa-seneca.jpg'><h2 class='title-map'>Séneca 61</h2><p class='description-map'>Séneca 61, Colonia Polanco, Ciudad de México, C.P. 11550 </p><a class='btn-map' href=\"contacto/publico-trabajo-contacto\" target=\"_blank\" title=\"Puebla 403\">Contacto</a>");

        // create the popup Muzquiz
        var popup3 = new mapboxgl.Popup()
            .setHTML("<img src='https://publi.co/publico2/img/cards-mapa/pt-mapa-muzquiz.jpg'><h2 class='title-map'>Muzquiz 15</h2><p class='description-map'>Gobernador Melchor Muzquiz 15, Colonia San Miguel Chapultepec I Secc, Ciudad de México, C.P. 11850</p><a class='btn-map' href=\"contacto/publico-trabajo-contacto\" target=\"_blank\" title=\"Muzquiz 15\">Contacto</a>");

        // create the popup Muzquiz
        var popup4 = new mapboxgl.Popup()
            .setHTML("<img src='https://publi.co/publico2/img/cards-mapa/pt-mapa-moliere.jpg'><h2 class='title-map'>Moliere 50</h2><p class='description-map'>Av. Moliere 50, Colonia Polanco, Ciudad de México, C.P. 11550</p><a class='btn-map' href=\"contacto/publico-trabajo-contacto\" target=\"_blank\" title=\"Muzquiz 15\">Contacto</a>");

        // create the popup Prado
        var popup5 = new mapboxgl.Popup()
            .setHTML("<img src='https://publi.co/publico2/img/cards-mapa/pt-mapa-lomas.jpg'><h2 class='title-map'>Prado Norte 225</h2><p class='description-map'>Avenida Prado Norte 225, Lomas - Virreyes, Lomas de Chapultepec III Secc, 11000 Ciudad de México, CDMX</p><a class='btn-map' href=\"contacto/publico-trabajo-contacto\" target=\"_blank\" title=\"Lomas 225\">Contacto</a>");

        // create the popup Hamburgo
        var popup6 = new mapboxgl.Popup()
            .setHTML("<img src='https://publi.co/publico2/img/cards-mapa/pt-mapa-hamburgo.jpg'><h2 class='title-map'>Juárez 26</h2><p class='description-map'>Juárez 26, Juárez, 06600 Ciudad de México, CDMX</p><a class='btn-map' href=\"contacto/publico-trabajo-contacto\" target=\"_blank\" title=\"Juarez 26\">Contacto</a>");



        // create DOM element for the marker
        var el = document.createElement('div');
        el.id = 'marker';
        var el2 = document.createElement('div');
        el2.id = 'marker2';
        var el3 = document.createElement('div');
        el3.id = 'marker3';
        var el4 = document.createElement('div');
        el4.id = 'marker4';
        var el5 = document.createElement('div');
        el5.id = 'marker5';
        var el6 = document.createElement('div');
        el6.id = 'marker6';

        // create the marker Puebla
        new mapboxgl.Marker(el)
            .setLngLat(puebla)
            .setPopup(popup) // sets a popup on this marker
            .addTo(map);

         // create the marker Seneca
        new mapboxgl.Marker(el2)
            .setLngLat(seneca)
            .setPopup(popup2) // sets a popup on this marker
            .addTo(map);

         // create the marker Seneca
        new mapboxgl.Marker(el3)
            .setLngLat(muzquiz)
            .setPopup(popup3) // sets a popup on this marker
            .addTo(map);

         // create the marker Moliere
        new mapboxgl.Marker(el4)
            .setLngLat(moliere)
            .setPopup(popup4) // sets a popup on this marker
            .addTo(map);

        // create the marker Lomas
        new mapboxgl.Marker(el5)
            .setLngLat(prado)
            .setPopup(popup5) // sets a popup on this marker
            .addTo(map);

        // create the marker Juarez
        new mapboxgl.Marker(el6)
            .setLngLat(hamburgo)
            .setPopup(popup6) // sets a popup on this marker
            .addTo(map);
