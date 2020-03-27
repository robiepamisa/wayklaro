$(document).ready(function() {
    $(".cartButton").click(function() {
        var image = $(".imgPath").attr("src");
        var name = $(this)
            .closest(".parentDiv")
            .children("div.block2")
            .children(".childrenDiv")
            .children("a.prodName")
            .text();

        var price = $(this)
            .closest(".parentDiv")
            .children("div.block2")
            .children(".childrenDiv")
            .children("span ")
            .text();
        var productID = $(this)
            .closest(".block2-btn-addcart")
            .children("input.proID")
            .val();
        var getUrl = window.location;
        var baseUrl =
            "/" +
            getUrl.pathname.split("/")[1] +
            "/" +
            getUrl.pathname.split("/")[2];

        var base_url = baseUrl + "/images/products/";
        console.log(base_url);
        var cartUrl = "addToCart";
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
            }
        });
        $.ajax({
            method: "POST",
            dataType: "json",
            url: cartUrl,
            data: {
                productID: productID,
                name: name,
                price: price,
                image: image,
                qty: 1,
                image: image,
                baseUrl: base_url
            },
            success: function(data) {
                console.log(data.cart_items);
                $("#cartItem").html(data.cart_items);
                $("#cartTotalAmt").html(`Total: $` + data.total_amount);
                $("#cartTotalProduct").html(data.total_product);
            }
        });
    });

    $(".activateUser").click(function() {
        var id = $(this)
            .$(".hiddenUserId")
            .val();
        console.log(id);
    });

    $(".ProductButton").click(function() {
        console.log("asdasd");
        var productID = $(this)
            .closest(".block2-btn-addcart")
            .children("input.proID")
            .val();
        var getUrl = window.location;
        console.log(getUrl);
    });
});
