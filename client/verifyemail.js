
function verifyemail(str){
    if (str.indexOf("@") !== -1 && str.indexOf(".") !== -1) 
            return true;
    else 
            return false;
    }

//    module.exports = verifyemail;
