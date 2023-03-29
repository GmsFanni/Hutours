const postData= async (url,configObj,renderFc)=>{
    console.log('utils.js',url, configObj)
    console.log(configObj)
    /*
    const response=await fetch(url,configObj)
    .then(data => {
        console.log(data)
        //document.getElementById("register-close").click();
        //document.getElementById("register-modal-body").innerHTML = "sikeres regisztracio"
    })
    .catch(e => {
        console.log(e)
    })
    */

    
    const response=await fetch(url,configObj)
    const data=await response.json()
    renderFc(data);
    
}

const verifyUser= async (url,renderFc)=>{
    console.log('ajax:',url)
    const response=await fetch(url)
    const data=await response.json()
    renderFc(data);
}

const logoutUser= async (url,renderFc)=>{
    const response=await fetch(url)
    const data=await response.json()
    renderFc(data);
}
