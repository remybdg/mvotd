function myFunction(event) {
    console.log(event.target);

    if (event.target == document.getElementById("artistRT")) {
        document.getElementById("myDropdown1").classList.toggle("show");
        document.getElementById("myDropdown2").classList.remove("show");
        document.getElementById("myDropdown3").classList.remove("show");
    }
    else if (event.target == document.getElementById("titleRT")) {
        document.getElementById("myDropdown2").classList.toggle("show");
        document.getElementById("myDropdown1").classList.remove("show");
        document.getElementById("myDropdown3").classList.remove("show");				
        
    }			
    else if (event.target == document.getElementById("directorRT")) {
        document.getElementById("myDropdown3").classList.toggle("show");
        document.getElementById("myDropdown2").classList.remove("show");
        document.getElementById("myDropdown1").classList.remove("show");				
        
    }			
}

function myFunction2() {
    document.getElementById("myDropdown2").classList.add("show");
}

function myFunction3() {
    document.getElementById("myDropdown3").classList.add("show");
}

function matchHoverColor(event, target) {
    let doc = document.getElementById(target);
    let id = 'id'+event.currentTarget.dataset.id;
    doc.querySelector("."+id).style.color = "#9966ff";
    event.currentTarget.style.color = "#9966ff";
}

function setOriginalColor(event, target) {
    let doc = document.getElementById(target);
    let id = 'id'+event.currentTarget.dataset.id;
    doc.querySelector("."+id).style.color = "#ff80ff";
    event.currentTarget.style.color = "#ff80ff";

}