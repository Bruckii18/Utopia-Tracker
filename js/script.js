var input_list = document.getElementsByTagName('input');
for (var i = 0; i < input_list.length; i++) {
    if (input_list[i].getAttribute('type') == ('checkbox')) {
        refreshAttributes(input_list[i]);
    }
}
console.log(input_list);

for (var i = 0; i < input_list.length; i++) {
    if (input_list[i].getAttribute('type') == ('checkbox')) {
        input_list[i].addEventListener("change", hideAttributes);
    }
}



function hideAttributes(event) {
    object = event.target;
    classObject = document.getElementsByClassName(object.id);
    console.log(classObject);
    if (object.checked == true) {
        for (var i = 0; i < classObject.length; i++) {
            classObject[i].style.display = "table-cell";
        }
    } else {
        for (var i = 0; i < classObject.length; i++) {
            classObject[i].style.display = "none";
        }

    }
}
function refreshAttributes(event) {
    object = event;
    classObject = document.getElementsByClassName(object.id);
    console.log(classObject);
    if (object.checked == true) {
        for (var i = 0; i < classObject.length; i++) {
            classObject[i].style.display = "table-cell";
        }
    } else {
        for (var i = 0; i < classObject.length; i++) {
            classObject[i].style.display = "none";
        }

    }
}