const form =document.querySelector('.form form');
submitbtn = form.querySelector('.submit input');
errortxt =form.querySelector('.error-text');

form.onsubmit = (e) =>{
    e.preventDefault(); 
}

submitbtn.onclick = () =>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST","./php/login1.php",true);
    xhr.onload=() => {
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status == 200){
                let data = xhr.response;
                if(data == "success"){
                    location.href="./home.php"

                }
                else{
                    errortxt.textContent = data;
                    errortxt.style.display ="block";
                }
            }
        } 
    }
    let formData = new FormData(form);
    xhr.send(formData);

}