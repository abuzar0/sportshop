$(document).ready(function() {
    console.log('ok kro...');
    $('#logout').click(function() {
        setTimeout(function() {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open('GET', 'destroy_session.php', true);
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4) {
                    if (xmlhttp.status == 200) {
                        alert(xmlhttp.responseText);
                    }
                }
            };
            xmlhttp.send(null);
            window.location.href = "login.php";
        }, 300);
    })
})