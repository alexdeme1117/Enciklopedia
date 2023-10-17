$("b.p1").click(function() {
    $("#2").slideToggle(500);
});
function clicked(id) {
    $("#" + (parseInt(id)+1).toString()).slideToggle(500);
}
