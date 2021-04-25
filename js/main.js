const allStatuses = document.querySelectorAll(".p415-work-status-update-green");
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