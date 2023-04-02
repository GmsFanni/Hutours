<h3 class="text-center mb-3 mt-3">Melyik helység időjárása érdekel?</h3>
<select id="cities" class="form-select" onchange="showWeather(this)">
    <option value="0">válassz egy települést...</option>
</select>
 <!-- <div class="descr"></div> -->
 <div class="card text-dark bg-white mb-3 col-md-4 mb-5 mt-5" >
  <div class="card-header name text-center"> Városnév:</div>
  <div class="card-body">
        
        <span>Leírás: <p class="card-text descr"></p></span>

       <h6>Minimum hőmérséklet(C°): <p class="card-text tempMin"></p></h6>


        <h6>Maximum hőmérséklet(C°):<p class="card-text tempMax"></p></h6>


        <h6>Páratartalom(%):<p class="card-text humidity"></p></h6>


        <h6>Szél(km/h)<p class="card-text wind"></p></h6>
    
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
        console.log(data)
        document.querySelector('.name').innerHTML=data.name;
        document.querySelector('.descr').innerHTML=data.descr;
       // document.querySelector('.imgUrl').innerHTML=data.imgUrl
        document.querySelector('.tempMax').innerHTML=data.tempMax;
        document.querySelector('.tempMin').innerHTML=data.tempMin;
        document.querySelector('.humidity').innerHTML=data.humidity;
        document.querySelector('.wind').innerHTML=data.wind;
    }


</script>