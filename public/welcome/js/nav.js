document.getElementById("menu-toggle").addEventListener("click", function () {
    document.getElementById("menu").classList.toggle("hidden");
    document.querySelector("#menu-toggle i").classList.toggle("rotate-45");
});


//   ================Accordion===============
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function () {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
}

