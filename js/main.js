
const getSlotValue = document.querySelector("#slots");
const getSlotSuffix = document.querySelector("#slots-suffix");
const getAllElementsInDropDown = document.querySelectorAll(".dropdown-content a");
const dropDownText = document.querySelector(".dropbtn");
const caretDown = document.querySelector("fa fa-caret-down");

// Dropdown for home page.
function showDropDown() {
    document.getElementById("myDropdown").classList.toggle("show");
}

function displayDate(){
    for(let i = 0; i < getAllElementsInDropDown.length; i++){
        getAllElementsInDropDown[i].addEventListener('click', () => {
            dropDownText.innerHTML = getAllElementsInDropDown[i].textContent + "<i class='fa fa-caret-down'></i>"; 
        })
    }
}
displayDate();
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
changeSuffix();


//document.getElementsByClassName('dropbtn')[0].innerText