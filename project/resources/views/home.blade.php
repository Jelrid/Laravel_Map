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

        var coordinateHome=[[52.29, 104.28],[52.25, 104.25]]

        var coordinateFlat=[[52.24, 104.26],[52.27, 104.28]]
        // Создание метки
        for(var i=0; i< coordinateHome.length; i++){
            var myPlacemarkHome = new ymaps.Placemark(coordinateHome[i], {}, {
                iconLayout:'default#image',
                iconImageHref:'./img/home.png',
                iconImageSize:[46,40],
                
            });
            myMap.geoObjects.add(myPlacemarkHome);
        }
        for(var i=0; i< coordinateFlat.length; i++){
            var myPlacemarkFlat = new ymaps.Placemark(coordinateFlat[i], {}, {
                iconLayout:'default#image',
                iconImageHref:'./img/flat.png',
                iconImageSize:[46,40],
                
            });
            myMap.geoObjects.add(myPlacemarkFlat);
        }
            
    }
</script>