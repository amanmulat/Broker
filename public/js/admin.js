//disable when checkbox not checked
var backgroundAdd = document.getElementById("unitBgAdd");
if (backgroundAdd) {
    backgroundAdd.addEventListener("click", function () {
        var div = document.createElement("div");
        var file = document.createElement("input");
        file.setAttribute("type", "file");
        file.setAttribute(
            "class",
            "block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
        );
        file.setAttribute("name", "unit_image[]");
        div.append(file);
        document.getElementById("bgDiv").appendChild(div);
    });
}
var backgroundRemove = document.getElementById("unitBgRemove");
if (backgroundRemove) {
    backgroundRemove.addEventListener("click", function () {
        const bgDiv = document.getElementById("bgDiv");
        if (bgDiv.hasChildNodes()) {
            bgDiv.removeChild(bgDiv.children[bgDiv.children.length - 1]);
        }
    });
}

const amAdd = document.getElementById("unitAmenAdd");
if (amAdd) {
    amAdd.addEventListener("click", function () {
        // Create a div
        var div = document.createElement("div");

        // Create a file input
        var file = document.createElement("input");
        file.setAttribute("type", "file");
        file.setAttribute(
            "class",
            "form-controlblock py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
        );
        file.setAttribute("placeholder", "Amenities Icon");
        file.setAttribute("name", "amenities_icon[]");

        // Create a text input
        var amenities = document.createElement("input");
        amenities.setAttribute("type", "text");
        amenities.setAttribute("name", "amenities[]");
        amenities.setAttribute(
            "class",
            "block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
        );
        amenities.setAttribute("placeholder", "Amenity");
        // Create a amenities input

        // add the file and text to the div
        div.appendChild(file);
        div.appendChild(amenities);

        //Append the div to the container div
        document.getElementById("amenities").appendChild(div);
    });
}
const amrRemove = document.getElementById("unitAmenRemove");

if (amrRemove) {
    amrRemove.addEventListener("click", function () {
        const Theamenites = document.getElementById("amenities");
        if (Theamenites.hasChildNodes()) {
            Theamenites.removeChild(
                Theamenites.children[Theamenites.children.length - 1]
            );
        }
    });
}

const uConst = document.getElementById("status");
const uConstChecker = () => {
    var progress = document.getElementById("progress");
    const uConstclass = document.getElementsByClassName("options");

    const selecedValues = [...uConst.options]
        .filter((x) => x.selected)
        .map((x) => x.value);
    progress.disabled = true;
    if (selecedValues.includes("uc")) {
        progress.disabled = false;
    }
};
// uConstclass.forEach((element) => {
//     if (element) {
//         element.addEventListener("click", uConstChecker);
//     }
// });
if (uConst) {
    uConst.addEventListener("change", uConstChecker);
}
