<h1 class="d-flex text-align-center">Járataink</h1>
<div class="row">
    <div class="col-md-6">
        <table class="table table-striped">
            <thead class="thead-dark">
                <th>Helyeink ahova tartunk</th>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
    <div class="col-md-6 details">
        
    </div>
</div>



<script src="getData.js"></script>
<script>
    /*<td id="${obj.H_id}" class="btn btn-outline-info" onclick="details(this)">${obj.Varosok}</td> */
    getData('../server/helyek.php', renderTable)

    function renderTable(data) {
        console.log(data);
        document.querySelector('tbody').innerHTML = data.map(obj => `
        
            <button type="button" id="${obj.H_id}" class="btn btn-outline-info" onclick="details(this)">${obj.Varosok}</button>
                 
        
        `).join('')
    }

    function details(objDom){
        let id=objDom.id
        console.log('id:',id)
        getData('../server/idok.php?id='+id, renderDetails)

    }
    function renderDetails(data){
        console.log(data)
        let str=''
        for(let obj of data){
            str+=`
            <img class="img-fluid" src="photos/varosok/${obj.foto_url}" alt="kép">
            <p>többi adat...</p>
            <hry
        `
        }
        document.querySelector('.details').innerHTML = str
    }
</script>


<?php require('labjegyzet.php'); ?>