function validate(){
    let x = document.getElementById("name").value.length;
    if(x>15){
        alert("Name should not exceed 20 characters!");
        return false;
    }

    let mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(!(document.getElementById('email').value.match(mailformat))){
		alert("Enter a valid email address!");
        return false;
	}

    
    let y = document.getElementById('phone').value.length;
    if(isNaN(y) || y>10 || y<10){
        alert("Enter a valid phone number!");
        return false;
    }

    let a = document.getElementById("address").value.length;
    if(a>100){
        alert("Address should not exceed 100 characters!");
        return false;
    }

    let b = document.getElementById("location").value;
    if(b=="Select location"){
        alert("Please select location!");
        return false;
    }

    let c = document.getElementById("guests").value;
    if(c<5 || c>50){

        if(c<5){ 
            alert("Required minimum five guest!");
            return false;
        }
        if(c>50){
            alert("Maximum guests are 50!");
            return false;
        }
        
    }
 
    return true;

}

function validate1(){
    let x = document.getElementById("fname").value.length;
    if(x>10){
        alert("Name should not exceed 10 characters!");
        return false;
    }

    let y = document.getElementById("lname").value.length;
    if(x>10){
        alert("Name should not exceed 10 characters!");
        return false;
    }

    let z = document.getElementById("subject").value.length;
    if(x>50){
        alert("Subject should not exceed 50 characters!");
        return false;
    }

    let mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(!(document.getElementById('email').value.match(mailformat))){
		alert("Enter a valid email address!");
        return false;
	}
    
    return true;

}
