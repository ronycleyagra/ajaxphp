function load_turmas() {
    var req;
    if (window.XMLHttpRequest) {
        req = new XMLHttpRequest();
    } else if (window.ActiveXObject) {
        req = new ActiveXObject("Microsoft.XMLHTTP");
    }
    var url = "./load_turmas.php";
    req.open("Get", url, true);
    req.onreadystatechange = function () {
        if (req.readyState == 4 && req.status == 200) {
            var resposta = req.responseText;
            $("#turmas").html(resposta);
        }
    }
    req.send(null);
}

function load_matriculas(valor) {
    var req;
    if (window.XMLHttpRequest) {
        req = new XMLHttpRequest();
    } else if (window.ActiveXObject) {
        req = new ActiveXObject("Microsoft.XMLHTTP");
    }
    var url = "load_matriculas.php?id_turma=" + valor;
    req.open("Get", url, true);
    req.onreadystatechange = function () {
        if (req.readyState == 1) {
            document.getElementById('resultado').innerHTML = 'Buscando Noticias...';
        }
        if (req.readyState == 4 && req.status == 200) {
            var resposta = req.responseText;
            $("#resultado").html(resposta);
        }
    }
    req.send(null);
}