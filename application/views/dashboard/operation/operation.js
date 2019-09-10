
if ($("#datatable_oper").length) {
    $(document).ready(function () {
        var t = $('#datatable_oper').DataTable({
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




    });
}

$(document).on("click", ".edit-oper", function () {
    jQuery('#edit-oper-modal').modal('show');
      id = $(this).closest("tr").attr("data-id");


    $.ajax({
        url: baseUrl + "/operations/details_oper",
        type: "POST",
        data: {id: id},
        dataType: "json",
        success: (function (result) {
            console.log(result);

            //    $('#voir-user-modal table tr td:nth-child(2)').empty();
            $("#edit-oper-modal form input").eq(0).val(result.date_debut);
            $("#edit-oper-modal form input").eq(1).val(result.date_fin);
            $("#edit-oper-modal form input").eq(2).val(result.sujet);
            //$("#edit-oper-modal form textarea#description").eq(3).val(result.description);
            $('.description')[0].value = result.description;
            $("#edit-oper-modal form input").eq(3).val(result.id);

        })

    });

});


$(document).on("click", "#edit-oper-submit", function (e) {
    e.preventDefault();
    $("#edit-oper-form p").remove();
    $.ajax({
        type: "POST",
        url: baseUrl + "/operations/confermer_edit_oper",
        data: $("#edit-oper-form").serialize(), // serializes the form's elements.


        success: function (result) {

            if (result) {
                data = JSON.parse(result);
                if (data.error) {
                    $("#edit-oper-form").prepend("<p>" + (data.error).split('\n').join("<br>") + "</p>");
                    $("#edit-oper-form p").css("color", "red");
                    return false;
                }
                jQuery('#edit-oper-modal').modal('hide');

                $("tr[data-id='" + data.id + "'] td:nth-child(4)").text(data.date_debut);
                $("tr[data-id='" + data.id + "'] td:nth-child(5)").text(data.date_fin);
                $("tr[data-id='" + data.id + "'] td:nth-child(6)").text(data.sujet);
                $("tr[data-id='" + data.id + "'] td:nth-child(7)").text(data.description);
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


})


if ($(".add-note").length) {
  $(document).on("click", ".add-note", function () {
      jQuery('#add-note-modal').modal('show');
        id = $(this).closest("tr").attr("data-id");
            $("#add-note-modal form input").eq(0).val(id);

        });
    }

$(document).on("click", "#add-note-submit", function (e) {
    e.preventDefault();
    $("#add-note-form p").remove();
    $.ajax({
        type: "POST",
        url: baseUrl + "/operations/add_note",
        data: $("#add-note-form").serialize(), // serializes the form's elements.
        success: function (result) {

          if (result) {
              data = JSON.parse(result);
              if (data.error) {
                  $("#add-note-form").prepend("<p>" + (data.error).split('\n').join("<br>") + "</p>");
                  $("#add-note-form p").css("color", "red");
                  return false;
              }
              jQuery('#add-note-modal').modal('hide');


              swal({
                  type: 'success',
                  title: 'vehic ajouté avec succées',
                  showConfirmButton: false,
                  timer: 1500
              })
          }


            console.log();
          }
      });


  });


$(document).on("click", ".voir-note", function () {
    //jQuery('#voir-user-modal').modal('show');
    id = $(this).closest("tr").attr("data-id");
    window.location.href = baseUrl + "/operations/oper_note_details/" + id;


});



if ($("#datatable_oper_note").length) {
    $(document).ready(function () {
        var t = $('#datatable_oper_note').DataTable({
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




    });
}
