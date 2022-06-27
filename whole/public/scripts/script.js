function func_add() {
    let xhr = new XMLHttpRequest();
    let url = " http://127.0.0.1:8000/api/todos";
    xhr.open("POST", url, true);
    xhr.setRequestHeader("Content-Type", "application/json");
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            response.innerHTML = this.responseText;
        }
    };
    //var data = JSON.stringify({ "title": add_title.value, "priority": add_priority.value, "add_done": add_done.value });
    var data = `{
        "title": "${add_title.value}",
        "priority": ${add_priority.value},
        "done": ${add_done.value}
        }`;
    xhr.send(data);
    add_title.value = "";
    add_priority.value = "";
    add_done.value = "";
}

function func_index() {
    info.innerHTML = "";
    let xhr = new XMLHttpRequest();
    let url = " http://127.0.0.1:8000/api/todos/" + item_id.value;
    xhr.open("GET", url, true);
    xhr.setRequestHeader("Content-Type", "application/json");
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            info.innerHTML = this.responseText;
        }
    };
    xhr.send();
}

function func_update() {
    let xhr = new XMLHttpRequest();
    let url = " http://127.0.0.1:8000/api/todos/" + item_id_u.value;
    xhr.open("PATCH", url, true);
    xhr.setRequestHeader("Content-Type", "application/json");
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            info.innerHTML = this.responseText;
        }
    };
    var data = `{
        "done": ${done.value}
        }`;
    xhr.send(data);
    item_id_u.value = "";
    done.value = "";
}

function func_display_all() {
    response.innerHTML = "";
    let xhr = new XMLHttpRequest();
    let url = " http://127.0.0.1:8000/api/todos";
    xhr.open("GET", url, true);
    xhr.setRequestHeader("Content-Type", "application/json");
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            response.innerHTML = this.responseText;
        }
    };
    xhr.send();
}

function func_destroy() {
    let xhr = new XMLHttpRequest();
    let url = " http://127.0.0.1:8000/api/todos/" + item_id_d.value;
    xhr.open("DELETE", url, true);
    xhr.setRequestHeader("Content-Type", "application/json");
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            response.innerHTML = this.responseText;
        }
    };
    xhr.send();
    item_id_d.value = "";
}