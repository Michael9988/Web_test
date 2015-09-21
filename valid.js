$(document).ready(function () {
    $("#areadropdown").change(function () {
        var areavalue = $("#areadropdown option:selected").val();
        getcity();
    });
});

function getcity() {
    var areavalue = $("#areadropdown option:selected").val();
    var city = $("#citydropdown");
    if (areavalue.length === 0) {
        city.attr("disabled", true);
    } else {
        city.attr("disabled", false);
        city.load('getcity.php', {area: areavalue});
    }
}