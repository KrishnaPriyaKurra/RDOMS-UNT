$(function () {
    let str = location.search
        .substr(1);
    let obj = Object.fromEntries(new URLSearchParams(str));
    let locationsArray = [];
    Object.keys(obj).map(locations => {
        locationsArray.push(locations.substr(0, locations.indexOf("[")))
    });
    locationsArray = new Set(locationsArray);
    console.log(locationsArray);
    var itemvalues = {};
    locationsArray.forEach(location => {
        itemvalues[location] = { "E": "", "M": "", "P": "", "S": "" };
        if (obj[location + '[E]']) {
            itemvalues[location].E = { "name": obj[location + '[E]'], "quantity": 1 };
        }
        if (obj[location + '[M]']) {
            itemvalues[location].M = { "name": obj[location + '[M]'], "quantity": 1 };
        }
        if (obj[location + '[P]']) {
            itemvalues[location].P = { "name": obj[location + '[P]'], "quantity": 1 };
        }
        if (obj[location + '[S]']) {
            itemvalues[location].S = { "name": obj[location + '[S]'], "quantity": 1 };
        }
    });
    console.log(itemvalues);
    var items = Object.keys(itemvalues);
    items = items.filter(item => item.value != "");
    if (items.length > 0) $('tbody').html("");
    items.map((location, index) => {
        Object.keys(itemvalues[location]).map(item => {
            itemvalues[location][item] != "" &&
                $("tbody").append(`<tr><td>${location}</td><td>${itemvalues[location][item].name}</td><td>
                <input type="number" class="number" data-id="${index}" value="${itemvalues[location][item].quantity}" min="0" /></td > <td><input type="checkbox" checked="checked" class="selecteditem" data-id="${index}" id="${item}" /></td></tr > `)
        }
        )
    });

});
$(document).on("change", ".number", function () {
    if ($(this).val() == 0) {
        $('.selecteditem[data-id=' + $(this).attr("data-id") + ']').prop('checked', false);
    }
    else {
        $('.selecteditem[data-id=' + $(this).attr("data-id") + ']').prop('checked', true);

    }
});
$(document).on("click", ".confirm", function () {
    alert("Order placed successfully");
    location = "OrderConfirmationPage.html"
});
