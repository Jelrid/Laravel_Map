<x-app.authlayout>
<div class="flex justify-center">
    <div id="map" class="h-96 w-1/2" />
</div>
</x-app.authlayout>
    <script type="text/javascript">
    ymaps.ready(init);
    function init(){
        // Создание карты.
        var myMap = new ymaps.Map("map", {
            center: [55.76, 37.64],
            zoom: 7
        });
    }
    </script>