$(document).ready(function() {
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            console.log(reader);

            reader.onload = function(e) {
                $("#imgPro").attr("src", e.target.result);
                $("fileInput").value(e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#fileInput").change(function() {
        $(".fa-cloud-upload-alt").addClass("d-none");
        $("#imgPro").removeClass("d-none");
        readURL(this);
    });

    $(".updateStatus").click(function() {
        var id = $(this)
            .children("input.hiddenUserID")
            .val();
        var statusId = $(this)
            .children("input.hiddenStatusID")
            .val();

        $("#userHiddenId")
            .val(id)
            .change();

        $("#statusHiddenId")
            .val(statusId)
            .change();
    });

    $(".deleteAccount").click(function() {
        var id = $(this)
            .children("input.hiddenUserID")
            .val();
        console.log(id);
        $("#userDeleteId")
            .val(id)
            .change();
    });

    $(".productDelete").click(function() {
        var id = $(this)
            .children("input.hiddenPID")
            .val();
        $("#productID")
            .val(id)
            .change();
    });

    $(".toast").toast("show");
});
