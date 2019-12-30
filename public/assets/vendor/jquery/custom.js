$(document).ready(function() {
    $("#repeatPassword").keyup(function() {
        if ($("#repeatPassword").val() === $("#inputPassword").val()) {
            document.getElementById("registerButton").style.display = "block";
            $("#repeatPassword")
                .addClass("is-valid")
                .removeClass("is-invalid");
        } else {
            document.getElementById("registerButton").style.display = "none";
            $("#repeatPassword")
                .addClass("is-invalid")
                .removeClass("is-valid");
        }
    });

    $(".modalButton").click(function() {
        var id = $(this)
            .closest("tr")
            .attr("id");
        var trId = "#" + id;
        console.log(id);
        var subject = $(trId)
            .children(".rowSub")
            .text();
        var description = $(trId)
            .children(".rowDesc")
            .text();
        var priority = $(trId)
            .children(".rowPrio")
            .text();
        var status = $(trId)
            .children(".rowStat")
            .text();
        var assign = $(trId)
            .children(".rowAssign")
            .text();
        $(".rowSubModal").text(subject);
        $(".rowDescModal").text(description);
        $(".rowPrioModal").text(priority);
        $(".rowStatModal").text(status);
        $(".rowAssignModal").text(assign);
    });
});
