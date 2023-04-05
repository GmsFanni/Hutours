<h1 class="mt-2 text-center">Járataink</h1>
<div class="row">
    <div class="col-md-6">
        <table class="table table-striped">
            <thead class="thead-dark">
                <th class="text-center"><h4>Helyeink, ahova tartunk</h4></th>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>

    <div class="col-md-6 details mt-2 ">
        <table class="table table-secondary text-center">
            

            <tbody id="tbd">

            </tbody>
        </table>
    
    </div>

</div>




<script src="getData.js"></script>
<script>
    /*<td id="${obj.H_id}" class="btn btn-outline-info" onclick="details(this)">${obj.Varosok}</td> */
    getData('../server/helyek.php', renderTable)

    function renderTable(data) {
        console.log(data);
        document.querySelector('tbody').innerHTML = data.map(obj => `
        
            <button type="button" id="${obj.H_id}" class="btn btn-outline-dark mb-1 ms-2 mt-2" onclick="details(this)">${obj.Varosok}</button>
                 
        
        `).join('')
    }
    

    function details(objDom){
        let id=objDom.id
        console.log('id:',id)
        getData('../server/idok.php?id='+id, renderDetails, renderTbl)

    }
    function renderDetails(data){
        console.log(data)
        let str=''
        for(let obj of data){
            str+=`
            <img class="img-fluid mb-2" src="photos/varosok/${obj.foto_url}" alt="kép">
            
            <table class="table table-secondary text-center">
                    <tr>
                        <th>Indulás</th>
                        <th>Óra:perc:mp</th>
                        <th>Indulás vissza</th>
                        <th>Óra:perc:mp</th>
                        <th></th>
                    </tr>

            <tbody>
            <tr>
                    <td>${obj.ido_mikoroda}</td>
                    <td>${obj.ido_oda}</td>
                    <td>${obj.ido_visszamikor}</td>
                    <td>${obj.ido_vissza}</td>
                    <td><button class="btn-secondary" onclick="foglal(this)">Foglalás</button></td>
            </tr>

            </tbody>
            
            </table>
            
            <hry
        `
        }
        document.querySelector('.details').innerHTML = str        
        }

        function foglal(data){
            console.log(ok);
        }

        
        function renderTbl(data){
            ///console.log(data)
            document.querySelector('#tbd').innerHTML=data.map(obj=>`
                
             
            `).join('')

        }
        
        

        
    


</script>

<?php require('labjegyzet.php'); ?>


