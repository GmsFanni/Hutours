<?php
  session_start();
  
?>
<h3 class="text-center mb-3 mt-3">Melyik helység időjárása érdekel?</h3>
<select id="cities" class="form-select" onchange="showWeather(this)">
    <option value="0">válassz egy települést...</option>
</select>
 <!-- <div class="descr"></div> -->
 <div class="card text-dark bg-white mb-3 col-md-4 mb-5 mt-5 mx-auto" >
    <div class="card-header name text-center">Város: </div>
    <div class="card-body ">
        <div class="text-center"><img class="imgUrl align-center" src="" alt=""></div>
        <h6 class="fw-bold ">Leírás: </h6> <p class="card-text descr"></p>

        <h6 class="fw-bold ">Minimum hőmérséklet (C°):</h6> <p class="card-text tempMin"></p>


        <h6 class="fw-bold ">Maximum hőmérséklet (C°):</h6> <p class="card-text tempMax"></p>


        <h6 class="fw-bold ">Páratartalom (%):</h6><p class="card-text humidity"></p>


        <h6 class="fw-bold ">Szél (km/h)</h6><p class="card-text wind"></p>
    
    </div>
</div>

<script>
    const getData = async (url, renderFc) => {
        const response = await fetch(url)
        const data = await response.json()
        renderFc(data)
    }


    getData('../server/helyek.php', renderOptions)

    function renderOptions(data) {
        console.log(data)
        document.getElementById('cities').innerHTML += data.map(obj => `
            <option value="${obj.city_id}">${obj.Varosok}</option>
        `).join('')
    }

    function showWeather(domObj) {
        let cityId = domObj.value
        console.log(cityId)
        getData('../server/idojaras.php?cityId='+cityId, renderWeatherData)
    }
 
    function renderWeatherData(data) {
        console.log(data.imgUrl)
        document.querySelector('.name').innerHTML=data.name;
        document.querySelector('.descr').innerHTML=data.descr;
        document.querySelector('.imgUrl').src=data.imgUrl
        document.querySelector('.tempMax').innerHTML=data.tempMax;
        document.querySelector('.tempMin').innerHTML=data.tempMin;
        document.querySelector('.humidity').innerHTML=data.humidity;
        document.querySelector('.wind').innerHTML=data.wind;
    }


</script>
<?php require('labjegyzet.php'); ?>