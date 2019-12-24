// function ListView() {
//     var element = document.getElementById("ListView");
//     element.classList.toggle("active");
// }
// function ToggleView() {
//     var element = document.getElementById("GridView");
//     if (element.classList.toggle("active")) {
//         ListView.style.display = "none";
//         GridView.style.display = "block";
//     } else {
//         ListView.style.display = "block";
//         GridView.style.display = "none";
//     }
// }

function switch_div(show) {
    document.getElementById("show_" + show).style.display = "block";
    document.getElementById("show_" + (show == 1 ? 2 : 1)).style.display =
        "none";
}
