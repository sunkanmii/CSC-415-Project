
const getSlotValue = document.querySelector("#slots");
const getSlotSuffix = document.querySelector("#slots-suffix");

// Dropdown for home page.
function showDropDown() {
    document.getElementById("myDropdown").classList.toggle("show");
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
changeSuffix();