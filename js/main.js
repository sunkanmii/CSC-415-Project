const allStatuses = document.querySelectorAll(".p415-work-status-update-green");
const getSlotValue = document.querySelector("#slots");
const getSlotSuffix = document.querySelector("#slots-suffix");
const getErrorMsg = document.querySelector(".error-message");
const userPassword = document.querySelector(".p415-mail-section input[type='password']");

for (let i = 0; i < allStatuses.length; i++) {
    if (allStatuses[i].innerText === "Cancelled") {
        allStatuses[i].classList.remove("p415-work-status-update-green");
        allStatuses[i].classList.add("p415-work-status-update-red");
    } else if (allStatuses[i].innerText === "Pending") {
        allStatuses[i].classList.remove("p415-work-status-update-green");
        allStatuses[i].classList.add("p415-work-status-update-pink");
    }
}

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

function checkValidPassword(){
//  Compare user password with one in db
    if(userPassword == ""){
        getErrorMsg.textContent = "success";
        getErrorMsg.style.display ="inline-block";
        if(getErrorMsg.classList.contains("success") == false){
            getErrorMsg.classList.toggle("success");
        }
    }
    else{
        getErrorMsg.textContent= "Error";
        getErrorMsg.style.display ="inline-block";
        if(getErrorMsg.classList.contains("red") == false){
            getErrorMsg.classList.toggle("red")
        }
    }
}