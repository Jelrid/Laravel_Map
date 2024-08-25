<x-app.authlayout>
    <div class="flex justify-center">
        <div id="map" class="h-96 w-5/6">

        </div>
    </div>
</x-app.authlayout>
<script src="https://api-maps.yandex.ru/2.1/?apikey=YOUR_API_KEY&lang=ru_RU" type="text/javascript"></script>
<script type="text/javascript">
    ymaps.ready(init);

    function init() {
        // Создание карты.
        var myMap = new ymaps.Map("map", {
            center: [52.29, 104.28],
            zoom: 12
        });

        const homeData = [
            { img: './img/room1.png', title: 'Дом 1', price: '10 000 ₽', description: 'Описание дома 1' },
            { img: './img/room2.png', title: 'Дом 2', price: '15 000 ₽', description: 'Описание дома 2' }
        ];

        const flatData = [
            { img: './img/room3.png', title: 'Квартира 1', price: '8 000 ₽', description: 'Описание квартиры 1' },
            { img: './img/room4.png', title: 'Квартира 2', price: '12 000 ₽', description: 'Описание квартиры 2' }
        ];

        const coordinateHome = [[52.24, 104.23], [52.27, 104.25]]
        const coordinateFlat = [[52.24, 104.28], [52.22, 104.28]]

        // Создание метки 
        // Так и не понял почему если сделать строку 35 "coordinateHome[i], {}, {" то тогда иконка смениться на дома, а карточка будет пустой,
        // но если скобки убрать(как я и сделал) то тогда уже корректно отображает карточку но иконки становятся класическими.
        for (var i = 0; i < coordinateHome.length; i++) {
            var myPlacemarkHome = new ymaps.Placemark(coordinateHome[i], {
                iconLayout: 'default#image',
                iconImageHref: './img/home.png',
                iconImageSize: [46, 40],

                balloonContentHeader: `<img src="${homeData[i].img}" height="150" width="200">
                <a href = "#">${homeData[i].title}</a><br><br/>`,
                balloonContentBody: `<a href="#">${homeData[i].price}</a><br/>`,
                balloonContentFooter: `${homeData[i].description}`,
                hintContent: `${homeData[i].title}`

            });
            myMap.geoObjects.add(myPlacemarkHome);
            myPlacemarkHome.balloon.open();
        }
        for (var i = 0; i < coordinateFlat.length; i++) {
            var myPlacemarkFlat = new ymaps.Placemark(coordinateFlat[i], {}, {
                iconLayout: 'default#image',
                iconImageHref: './img/flat.png',
                iconImageSize: [46, 40],

            });
            myMap.geoObjects.add(myPlacemarkFlat);

        }

    }
</script>