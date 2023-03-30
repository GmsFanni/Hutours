<p>Melyik helység időjárása érdekel?</p>
<select id="cities" class="form-select" onchange="showWeather(this)">
    <option value="0">válassz...</option>
</select>
 <!-- <div class="descr"></div> -->
 <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img class="img-fluid rounded-start ">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title name"></h5>
        <p class="card-text descr"></p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
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
        document.querySelector('.name').innerHTML=data.name
        
        document.querySelector('.descr').innerHTML=data.descr
    }


</script>