getUrl = window.location;
baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];

if ($("#datatable_users").length) {
    $(document).ready(function () {
        var t = $('#datatable_users').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
            },
            'createdRow': function (row, data, dataIndex) {
                $(row).attr('data-id', data[0]);
            },
            'columnDefs': [
                {
                    'targets': 3,
                    'createdCell': function (td, cellData, rowData, row, col) {
                        $(td).attr('data-id', rowData[0]);
                    }
                }
            ]
        });

        $(document).on("click", "#add-user-submit", function (e) {
            e.preventDefault();
            $("#add-user-form p").remove();
            $.ajax({
                type: "POST",
                url: baseUrl + "/users/add_user",
                data: $("#add-user-form").serialize(), // serializes the form's elements.
                success: function (result) {

                    if (result) {
                        data = JSON.parse(result);
                        if (data.error) {
                            $("#add-user-form").prepend("<p>" + (data.error).split('\n').join("<br>") + "</p>");
                            $("#add-user-form p").css("color", "red");
                            return false;
                        }
                        jQuery('#add-user-modal').modal('hide');

                        t.row.add([data.id, data.first_name, data.last_name, data.email, data.role,
                            '<button class="btn btn-xs btn-default voir-user" type="button" data-toggle="tooltip" title="" data-original-title="Voir les détails de l\'utilisateur"><i class="fa fa-eye"></i></button>' +
                            '<button class="btn btn-xs btn-default edit-user" type="button" data-toggle="tooltip" title="" data-original-title="Modifier l\'utilisateur"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>' +
                            '<button class="btn btn-xs btn-default delete-user" type="button" data-toggle="tooltip" title="" data-original-title="Supprimer l\'utilisateur"><i class="fa fa-times"></i></button>']).draw();
                        swal({
                            type: 'success',
                            title: 'Utilisateur ajouté avec succées',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    }

                    console.log();
                }
            });


        });

        $(document).on("click", "#delete_user", function () {
            id = $(this).attr("data-id");
            $.ajax({
                url: baseUrl + "/users/user_delete",
                type: "POST",
                data: {id: id},
                dataType: "json",
                success: (function (result) {
                    t.row($("tr[data-id='" + id + "']")).remove().draw(false);
                })

            });

        });
    });
}


if ($("#add-user").length) {
    $(document).on("click", "#add-user", function () {
        jQuery('#add-user-modal').modal('show');
    });
}

if ($(".delete-user").length) {
    $(document).on("click", ".delete-user", function () {
        jQuery('#delete-user-modal').modal('show');
        $("#delete_user").attr("data-id", $(this).closest("tr").attr("data-id"));
    });
}


$(document).on("click", ".voir-user", function () {
    jQuery('#voir-user-modal').modal('show');
    id = $(this).closest("tr").attr("data-id");


    $.ajax({
        url: baseUrl + "/users/user_details",
        type: "POST",
        data: {id: id},
        dataType: "json",
        success: (function (result) {

            $('#voir-user-modal table tr td:nth-child(2)').empty();
            $("#table_user_details tr:nth-child(1) td:nth-child(2)").text(result.id);
            $("#table_user_details tr:nth-child(2) td:nth-child(2)").text(result.first_name);
            $("#table_user_details tr:nth-child(3) td:nth-child(2)").text(result.last_name);
            $("#table_user_details tr:nth-child(4) td:nth-child(2)").text(result.email);
            $("#table_user_details tr:nth-child(5) td:nth-child(2)").text(result.name);
        })

    });

});

$(document).on("click", ".edit-user", function () {
    jQuery('#edit-user-modal').modal('show');
    id = $(this).closest("tr").attr("data-id");


    $.ajax({
        url: baseUrl + "/users/user_details",
        type: "POST",
        data: {id: id},
        dataType: "json",
        success: (function (result) {
            console.log(result);
            //    $('#voir-user-modal table tr td:nth-child(2)').empty();
            $("#edit-user-modal form input").eq(0).val(result.first_name);
            $("#edit-user-modal form input").eq(1).val(result.last_name);
            $("#edit-user-modal form input").eq(2).val(result.email);
            if (result.name == "gestn")
                $("#edit-user-modal form input").eq(3).prop('checked', true);
            else
                $("#edit-user-modal form input").eq(3).prop('checked', false);
            $("#edit-user-modal form input").eq(4).val(result.id);

        })

    });

});


$(document).on("click", "#edit-user-submit", function (e) {
    e.preventDefault();
    $("#edit-user-form p").remove();
    $.ajax({
        type: "POST",
        url: baseUrl + "/users/edit_user2",
        data: $("#edit-user-form").serialize(), // serializes the form's elements.
        success: function (result) {

            if (result) {
                data = JSON.parse(result);
                if (data.error) {
                    $("#edit-user-form").prepend("<p>" + (data.error).split('\n').join("<br>") + "</p>");
                    $("#edit-user-form p").css("color", "red");
                    return false;
                }
                jQuery('#edit-user-modal').modal('hide');
                $("tr[data-id='" + data.id + "'] td:nth-child(2)").text(data.first_name);
                $("tr[data-id='" + data.id + "'] td:nth-child(3)").text(data.last_name);
                $("tr[data-id='" + data.id + "'] td:nth-child(4)").text(data.email);
                $("tr[data-id='" + data.id + "'] td:nth-child(5)").text(data.role);
                swal({
                    type: 'success',
                    title: 'Utilisateur modifié avec succées',
                    showConfirmButton: false,
                    timer: 1500
                })
            }

            console.log(result);
        }
    });


});
