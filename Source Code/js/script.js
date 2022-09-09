var locations, items =
{
    "Bruceteria":
        { "E": "", "M": "", "P": "", "S": "" },
    "Champs":
        { "E": "", "M": "", "P": "", "S": "" },
    "Kitchen West":
        { "E": "", "M": "", "P": "", "S": "" },
    "Mean Greens":
        { "E": "", "M": "", "P": "", "S": "" },
    "Eagle Landing":
        { "E": "", "M": "", "P": "", "S": "" },
}
    ;
jQuery(document).ready(function () {
    $(".location").hide();
    $($(".cta")[0]).click();
    $(".cta").click((e) => {
        $(".cta").removeClass("active");
        $($(e.target).closest(".cta")).addClass("active");
        console.log($(e.target).closest(".cta"));
        $(".location").show();
        locations = e.target.innerText;
        $("#selected-restaurant").text(locations);
    });
    $(document).on("click", ".dropdown-item", function () {
        var id = $(this).attr("id");
        if (items[locations])
            items[locations][id] = $(this).html();
        var itemcount = 0;
        Object.keys(items).map(locations => {
            items[locations] && Object.keys(items[locations]).map(key => {

                items[locations][key] != "" ? itemcount++ : ""
            })
        });
        console.log(items);
        itemcount > 0 &&
            $(".gotocart > span").html(`(${itemcount})`);
    });
    $(document).on("click", ".gotocart", function () {
        var count = 0;
        Object.keys(items).map(key => items[key] != "" ? count++ : "");
        var params = [];
        Object.keys(items).map(locations => {
            Object.keys(items[locations]).map(key => {
                items[locations][key] &&
                    params.push(`${locations}[${key}]=${items[locations][key]}`);
            }
            )
        });
        if (params.length > 0) {
            location = `./cart.html?${params.join('&')}`;
        }
        else
            alert("select alteast one item");
    })
});