const form  = document.getElementById('form');
const tbody  = document.getElementById('tbody');
const msgBox  = document.getElementById('msgBox');

getRequest();


// POST REQUEST

form.addEventListener('submit', (e) => {
    e.preventDefault()

    const username = document.getElementById('username');
    const email = document.getElementById('email');

    const data = {
        username: username.value,
        email: email.value
    }

    var xhttp = new XMLHttpRequest()
    
    xhttp.open('POST', '../controller/postController.php', true)
    xhttp.setRequestHeader('Content-type', 'application/json')
    
    xhttp.onload = function () {

        msgBox.classList.remove('active');

        msgBox.innerHTML = 
            `<div class="success" id="success">
            ${this.responseText}
            <div class="close" onclick="closeMsgBox()">x</div>
            </div>`;

        getRequest();
    }
    
    xhttp.send(JSON.stringify(data))

    username.value = "";
    email.value = "";
})


// GET REQUEST

function getRequest(){

    var xmlhttp = new XMLHttpRequest();

    xmlhttp.open("GET", "../controller/getController.php", true);

    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            tbody.innerHTML= this.responseText; 

        }
    };

    xmlhttp.send();
}




// DELETE REQUEST

function deleteRequest(val){

    var xmlhttp = new XMLHttpRequest();

    xmlhttp.open("DELETE", "../controller/deleteController.php?id="+val, true);
    xmlhttp.setRequestHeader('Content-type','x-www-form-urlencoded')

    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            msgBox.classList.remove('active')
            msgBox.innerHTML = 
            `<div class="success" id="success">
            ${this.responseText}
            <div class="close" onclick="closeMsgBox()">x</div>
            </div>`;
            getRequest()
        }
    };
    xmlhttp.send();

}



// CLOSE MSG BOX
function closeMsgBox(){
    msgBox.classList.add('active')
}
