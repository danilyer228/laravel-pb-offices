import './bootstrap';

$('.load-button').click(function () {
    $.ajax(
        "/getOffices",
        {
            success: function (data) {
                var table = $(".table tbody");
                $.each(data, function(id, elem){
                    table.append("<tr>" +
                        "<td>"+elem.name+"</td>" +
                        "<td>"+elem.city+"</td>" +
                        "<td>"+elem.address+"</td>" +
                        "<td>"+elem.index+"</td>" +
                        "<td>"+elem.phone+"</td>" +
                        "</tr>");
                });
            }
        }
    );
    $(this).hide();
})
