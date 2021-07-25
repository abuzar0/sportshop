$(document).ready(function() {
    var DATA = [];
    var G_total = 0;
    $('#purchase').click(() => {
        var x = confirm('Are you sure!!!');
        if (x === true) {
            var email = $('#sessionmail').val();
            for (i = 1; i < table.rows.length; i++) {
                var objCells = table.rows[i];
                DATA.push({
                    // "S_no": objCells.cells[0].innerHTML,
                    "Name": objCells.cells[0].innerHTML,
                    "Quantity": objCells.cells[1].innerHTML,
                    "Amount": objCells.cells[2].innerHTML,
                    "Total": objCells.cells[3].innerHTML,
                });
                G_total = G_total + parseInt(objCells.cells[4].innerHTML);
            }
            console.log(G_total);
            $.ajax({
                url: 'purchase.php',
                method: 'POST',
                type: 'json',
                data: {
                    data: JSON.stringify(DATA),
                    loginFlag: 1,
                    email: email,
                    Total: G_total,
                },
                success: function(data) {
                    console.log(data);
                    if (data === "OK`S") {
                        alert('Thanks for Shopping here !!!!');
                        setTimeout(function() {
                            var y = confirm('Remove U char !!!!');
                            if (y === true) {
                                setTimeout(function() {
                                    $('#table tr').remove();
                                }, 3000)
                            }
                        }, 3000);
                    } else {
                        alert('Plz try again some thing is worng !!!!!!!!!');
                    }
                    setTimeout(function() {
                        window.location.href = "test.php";
                    }, 300)
                }
            });
        } else {
            alert('plz confrim it .........');
        }
    });
})