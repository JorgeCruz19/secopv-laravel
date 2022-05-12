const menuMobile = document.getElementById("menu-mobile");
const linksMobile = document.querySelectorAll("#menu-mobile a");
const button = document.getElementById("button");
const form = document.getElementById("form-email");
button.addEventListener("click", () => {
    menuMobile.classList.toggle("show");
});

linksMobile.forEach((el) => {
    el.addEventListener("click", () => {
        menuMobile.classList.remove("show");
    });
});

//Tabs
function changeAtiveTab(event, tabID) {
    let element = event.target;
    while (element.nodeName !== "A") {
        element = element.parentNode;
    }
    ulElement = element.parentNode.parentNode;
    aElements = ulElement.querySelectorAll("li > a");
    tabContents = document
        .getElementById("tabs-id")
        .querySelectorAll(".tab-content > div");
    for (let i = 0; i < aElements.length; i++) {
        aElements[i].classList.remove("text-white");
        aElements[i].classList.remove("bg-gray-800");
        aElements[i].classList.add("text-gray-800");
        aElements[i].classList.add("bg-white");
        tabContents[i].classList.add("hidden");
        tabContents[i].classList.remove("block");
    }
    element.classList.remove("text-gray-800");
    element.classList.remove("bg-white");
    element.classList.add("text-white");
    element.classList.add("bg-gray-800");
    document.getElementById(tabID).classList.remove("hidden");
    document.getElementById(tabID).classList.add("block");
}

/* Form */
if (form) {
    form.addEventListener("submit", function (e) {
        e.preventDefault();
        fetch("https://formsubmit.co/ajax/c7f8b3c6c59a4b2269d3fc6056134992", {
            method: "POST",
            body: new FormData(e.target),
        })
            .then((res) => (res.ok ? res.json() : Promise.reject(res)))
            .then((json) => {
                console.log(json);
                Swal.fire({
                    icon: "success",
                    title: "Se envío correctamente",
                });
            })
            .catch((err) => {
                Swal.fire({
                    icon: "error",
                    title: "Hubo un error, intentelo de nuevo",
                });
                console.log(err);
            });
    });
}
