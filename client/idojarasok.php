<p>Melyik helység időjárása érdekel?</p>
<select id="cities" class="form-select" onchange="showWeather(this)">
    <option value="0">válassz...</option>
</select>
<div class="descr"></div>

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
            <option value="${obj.cities_id}">${obj.Varosok}</option>
        `).join('')
    }

    function showWeather(domObj) {
        let cityId = domObj.value
        console.log(cityId)
        getData('../server/idojaras.php?cityId='+cityId, renderWeatherData)
    }
 
    function renderWeatherData(data) {
        console.log(data)
        document.querySelector('.descr').innerHTML=data.descr
    }


</script>