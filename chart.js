window.onload = function() {
    $('#shop').click(() => {
        var x = $('.buy').val();
        // console.log(x);
        var y = $('.price').val();
        // console.log(y);
        var z = $('.name').val();
        // console.log(z);

        tableBody = $("table");
        if (x == 0 || y == 0) {
            alert('plz select quantity data is insert ');
        } else {
            var obj = {
                name: '',
                Quantity: '',
                price: '',
                total: '',
            }
            obj.name = $('.name').val();
            obj.Quantity = $('.buy').val();
            obj.price = $('.price').val();
            obj.total = x * y;
            $.ajax({
                url: 'chart.php',
                type: 'post',
                data: { data: JSON.stringify(obj) },
                success: function(data) {
                    console.log(data);
                }
            });
            alert('Item Is Add In Your Cart ');
            setTimeout(() => {
                location.reload();
            }, 3000);
            $('.buy').val('');
        }

    })
    $('#shop7').click(() => {
        var x = $('.buy7').val();
        // console.log(x);
        var y = $('.price7').val();
        // console.log(y);
        var z = $('.name7').val();
        // console.log(z);

        tableBody = $("table");
        if (x == 0 || y == 0) {
            alert('plz select quantity data is insert ');
        } else {
            var obj = {
                name: '',
                Quantity: '',
                price: '',
                total: '',
            }
            obj.name = $('.name7').val();
            obj.Quantity = $('.buy7').val();
            obj.price = $('.price7').val();
            obj.total = x * y;
            $.ajax({
                url: 'chart.php',
                type: 'post',
                data: { data: JSON.stringify(obj) },
                success: function(data) {
                    console.log(data);
                }
            });
            alert('Item Is Add In Your Cart ');
            setTimeout(() => {
                location.reload();
            }, 3000);
            $('.buy7').val('');
        }

    })
    $('#shop9').click(() => {
        var x = $('.buy9').val();
        // console.log(x);
        var y = $('.price9').val();
        // console.log(y);
        var z = $('.name9').val();
        // console.log(z);
        if (x == 0 || y == 0) {
            alert('plz select quantity data is insert ');
        } else {
            var obj = {
                name: '',
                Quantity: '',
                price: '',
                total: '',
            }
            obj.name = $('.name9').val();
            obj.Quantity = $('.buy9').val();
            obj.price = $('.price9').val();
            obj.total = x * y;
            $.ajax({
                url: 'chart.php',
                type: 'post',
                data: { data: JSON.stringify(obj) },
                success: function(data) {
                    // console.log(data);
                }
            });
            alert('Item Is Add In Your Cart ');
            setTimeout(() => {
                location.reload();
            }, 3000);
            $('.buy9').val('');
        }

    })
    $('#shop8').click(() => {
        var x = $('.buy8').val();
        // console.log(x);
        var y = $('.price8').val();
        // console.log(y);
        var z = $('.name8').val();
        // console.log(z);
        if (x == 0 || y == 0) {
            alert('plz select quantity data is insert ');
        } else {
            var obj = {
                name: '',
                Quantity: '',
                price: '',
                total: '',
            }
            obj.name = $('.name8').val();
            obj.Quantity = $('.buy8').val();
            obj.price = $('.price8').val();
            obj.total = x * y;
            $.ajax({
                url: 'chart.php',
                type: 'post',
                data: { data: JSON.stringify(obj) },
                success: function(data) {
                    console.log(data);
                }
            });
            alert('Item Is Add In Your Cart ');
            setTimeout(() => {
                location.reload();
            }, 3000);
            $('.buy8').val('');
        }

    })
    $('#shop4').click(() => {
        var x = $('.buy4').val();
        // console.log(x);
        var y = $('.price4').val();
        // console.log(y);
        var z = $('.name4').val();
        // console.log(z);
        if (x == 0 || y == 0) {
            alert('plz select quantity data is insert ');
        } else {
            var obj = {
                name: '',
                Quantity: '',
                price: '',
                total: '',
            }
            obj.name = $('.name4').val();
            obj.Quantity = $('.buy4').val();
            obj.price = $('.price4').val();
            obj.total = x * y;
            $.ajax({
                url: 'chart.php',
                type: 'post',
                data: { data: JSON.stringify(obj) },
                success: function(data) {
                    console.log(data);
                }
            });
            alert('Item Is Add In Your Cart ');
            setTimeout(() => {
                location.reload();
            }, 3000);
            $('.buy4').val('');
        }

    })
    $('#shop5').click(() => {
        var x = $('.buy5').val();
        // console.log(x);
        var y = $('.price5').val();
        // console.log(y);
        var z = $('.name5').val();
        // console.log(z);
        if (x == 0 || y == 0) {
            alert('plz select quantity data is insert ');
        } else {
            var obj = {
                name: '',
                Quantity: '',
                price: '',
                total: '',
            }
            obj.name = $('.name5').val();
            obj.Quantity = $('.buy5').val();
            obj.price = $('.price5').val();
            obj.total = x * y;
            $.ajax({
                url: 'chart.php',
                type: 'post',
                data: { data: JSON.stringify(obj) },
                success: function(data) {
                    console.log(data);
                }
            });
            alert('Item Is Add In Your Cart ');
            setTimeout(() => {
                location.reload();
            }, 3000);
            $('.buy5').val('');
        }

    })
    $('#shop3').click(() => {
        var x = $('.buy3').val();
        // console.log(x);
        var y = $('.price3').val();
        // console.log(y);
        var z = $('.name3').val();
        // console.log(z);
        if (x == 0 || y == 0) {
            alert('plz select quantity data is insert ');
        } else {
            var obj = {
                name: '',
                Quantity: '',
                price: '',
                total: '',
            }
            obj.name = $('.name3').val();
            obj.Quantity = $('.buy3').val();
            obj.price = $('.price3').val();
            obj.total = x * y;
            $.ajax({
                url: 'chart.php',
                type: 'post',
                data: { data: JSON.stringify(obj) },
                success: function(data) {
                    console.log(data);
                }
            });
            alert('Item Is Add In Your Cart ');
            setTimeout(() => {
                location.reload();
            }, 3000);
            $('.buy3').val('');
        }

    })
    $('#shop2').click(() => {
        var x = $('.buy2').val();
        // console.log(x);
        var y = $('.price2').val();
        // console.log(y);
        var z = $('.name2').val();
        // console.log(z);
        if (x == 0 || y == 0) {
            alert('plz select quantity data is insert ');
        } else {
            var obj = {
                name: '',
                Quantity: '',
                price: '',
                total: '',
            }
            obj.name = $('.name2').val();
            obj.Quantity = $('.buy2').val();
            obj.price = $('.price2').val();
            obj.total = x * y;
            $.ajax({
                url: 'chart.php',
                type: 'post',
                data: { data: JSON.stringify(obj) },
                success: function(data) {
                    // console.log(data);
                }
            });
            alert('Item Is Add In Your Cart ');
            setTimeout(() => {
                location.reload();
            }, 3000);
            $('.buy2').val('');
        }

    })
    $('#shop1').click(() => {
        var x = $('.buy1').val();
        // console.log(x);
        var y = $('.price1').val();
        // console.log(y);
        var z = $('.name1').val();
        // console.log(z);
        if (x == 0 || y == 0) {
            alert('plz select quantity data is insert ');
        } else {
            var obj = {
                name: '',
                Quantity: '',
                price: '',
                total: '',
            }
            obj.name = $('.name1').val();
            obj.Quantity = $('.buy1').val();
            obj.price = $('.price1').val();
            obj.total = x * y;
            $.ajax({
                url: 'chart.php',
                type: 'post',
                data: { data: JSON.stringify(obj) },
                success: function(data) {
                    // console.log(data);
                }
            });
            alert('Item Is Add In Your Cart ');
            setTimeout(() => {
                location.reload();
            }, 3000);
            $('.buy1').val('');
        }

    })
}

// function DEL(ctl) {
//     var x = $(ctl).parents("tr").children('td:eq(0)').text();
//     $(ctl).parents("tr").remove();
//     console.log(x);
//     $.ajax({
//         url: 'cartSessionDel.php',
//         type: 'post',
//         data: { data: x },
//         success: function(data) {
//             console.log(data);
//         }

//     })
//     alert('item is removed in your cart ');
//     // counting = counting - 1;
// }