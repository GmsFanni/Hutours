

<?php
    if(isset($_SESSION['username'])){
        echo "<h1 class='text-center mt-3 mb-5'>Kedves <a>{$_SESSION['username']}</a> itt láthatod a lefoglalt útjaidat</h1>";
    }else{
        echo "Kérlek jelentkezz be, hogy lásd mit foglaltál!";
    }
?>


<table class="col-lg-6 col-md-6 table table-striped mt-3">
    <thead class="thead-dark">
    
            <th>Város</th>
            <th>Indulás</th>
            <th>Óra:perc:mp</th>
            <th>Indulás vissza</th>
            <th>Óra:perc:mp</th>
            <th>Ára: </th>
            <th></th>
                    
    </thead>
    <tbody>
        
    </tbody>
</table>
<img src="photos/BUS.png" class="img-fluid rounded mx-auto d-block" alt="logobus">

<script src="getData.js"></script>
<script>
    getData('../server/foglalok.php',renderStat)

    function renderStat(data){
        console.log(data);
        document.querySelector('tbody').innerHTML = data.map(obj=>`
        <tr>
                    <td>${obj.Város}</td>
                    <td>${obj.Odadatum}</td>
                    <td>${obj.odaora}</td>
                    <td>${obj.visszadatum}</td>
                    <td>${obj.visszaora}</td>
                    <td>${obj.ar}</td>
            
        </tr>
        `).join('')
    }

    

</script>


