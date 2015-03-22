$(document).ready(function () {

    $('form').submit(function (event) {
        event.preventDefault();
    });

    function checked() {
        var sum = $('.radiobtn:checked').val();
        rollDice(sum);
    }

    function rollDice(sum) {
        var totSum = 0;
        var minArray = new Array();
        for (var i = 0; i < sum; i++) {
            var n = Math.floor((Math.random() * 6) + 1);
            totSum += n;
            minArray.push(n);
        }
        showResults(totSum, minArray);
    }

    function showResults(totSum, minArray) {
        $("#box").html("");
        var printTal = minArray.join([separator = '+'])
        $("#box").text(printTal + "=" + totSum);
    }

    $(".throwDice").click(function () {
        checked();

    });
});