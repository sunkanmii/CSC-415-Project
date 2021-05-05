
const getSlotValue = document.querySelector("#slots");
const getSlotSuffix = document.querySelector("#slots-suffix");
const getAllElementsInDropDown = document.querySelectorAll(".dropdown-content a");
const dropDownText = document.querySelector(".dropbtn");
const caretDown = document.querySelector("fa fa-caret-down");
const selected_time = document.querySelector("#selected_time");
const slots = document.querySelector("#slots");

// Dropdown for home page.
function showDropDown() {
    document.getElementById("myDropdown").classList.toggle("show");
}

function displayDate(){
    for(let i = 0; i < getAllElementsInDropDown.length; i++){
        getAllElementsInDropDown[i].addEventListener('click', () => {
            dropDownText.innerHTML = getAllElementsInDropDown[i].textContent + "<i class='fa fa-caret-down'></i>";
            selected_time.innerHTML =  getAllElementsInDropDown[i].textContent;
            slots.innerHTML = getAllElementsInDropDown[i].getAttribute('data-value');
        })
    }
}
if(getAllElementsInDropDown != null){
    displayDate();
}
// Close the dropdown if the user clicks outside of it
window.onclick = function (e) {
    if (!e.target.matches('.dropbtn')) {
        var myDropdown = document.getElementById("myDropdown");
        if (myDropdown.classList.contains('show')) {
            myDropdown.classList.remove('show');
        }
    }
}

// Changle suffix for slot -> slots
function changeSuffix(){
    if(Number(getSlotValue.textContent) > 1){
        getSlotSuffix.textContent = "Slots left";
    }
    else{
        getSlotSuffix.textContent = "Slot left";
    }
}
if(getSlotValue != null){
    changeSuffix();
}



function post_select_Date(){
   
    for(let i = 0; i < getAllElementsInDropDown.length; i++){
        getAllElementsInDropDown[i].addEventListener('click', () => {
             var selected_dte = getAllElementsInDropDown[i].textContent; 

             /*
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    console.log(this.responseText);
                }
                };
                xmlhttp.open("GET", "index.php?dte=" + selected_dte, true);
                xmlhttp.send(); */

              





        })
    }

    
}

post_select_Date();


//document.getElementsByClassName('dropbtn')[0].innerText