
if ($("#datatable_vehic").length) {
    $(document).ready(function () {
        var t = $('#datatable_vehic').DataTable({
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

        $(document).on("click", "#add-vehic-submit", function (e) {
            e.preventDefault();
            $("#add-vehic-form p").remove();
            $.ajax({
                type: "POST",
                url: baseUrl + "/vehicule/add_vehic",
                data: $("#add-vehic-form").serialize(), // serializes the form's elements.
                success: function (result) {

                    if (result) {
                        data = JSON.parse(result);
                        if (data.error) {
                            $("#add-vehic-form").prepend("<p>" + (data.error).split('\n').join("<br>") + "</p>");
                            $("#add-vehic-form p").css("color", "red");
                            return false;
                        }
                        jQuery('#add-vehic-modal').modal('hide');

                        t.row.add([data.id, data.nom, data.marque, data.date_achat, data.carburant, data.num_matricule,
                            '<button class="btn btn-xs btn-default edit-user" type="button" data-toggle="tooltip" title="" data-original-title="Modifier l\'utilisateur"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>' +
                            '<button class="btn btn-xs btn-default delete-user" type="button" data-toggle="tooltip" title="" data-original-title="Supprimer l\'utilisateur"><i class="fa fa-times"></i></button>']).draw();
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

          $(document).on("click", "#delete_vehic", function () {
              id = $(this).attr("data-id");
              $.ajax({
                  url: baseUrl + "/vehicule/vehic_delete",
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

if ($("#add-vehic").length) {
        $(document).on("click", "#add-vehic", function () {
            jQuery('#add-vehic-modal').modal('show');
        });
    }

if ($(".delete-vehic").length) {
    $(document).on("click", ".delete-vehic", function () {
        jQuery('#delete-vehic-modal').modal('show');
        $("#delete_vehic").attr("data-id", $(this).closest("tr").attr("data-id"));
    });
}

$(document).on("click", ".edit-vehic", function () {
    jQuery('#edit-vehic-modal').modal('show');
    id = $(this).closest("tr").attr("data-id");


    $.ajax({
        url: baseUrl + "/vehicule/vehic_details",
        type: "POST",
        data: {id: id},
        dataType: "json",
        success: (function (result) {
            console.log(result);
            //    $('#voir-user-modal table tr td:nth-child(2)').empty();
            $("#edit-vehic-modal form input").eq(0).val(result.nom);
            $("#edit-vehic-modal form input").eq(1).val(result.marque);
            $("#edit-vehic-modal form input").eq(2).val(result.date_achat);
            $("#edit-vehic-modal form input").eq(3).val(result.carburant);
        //$('#edit-vehic-modal form select').append('<option value="' + result.carburant + '">' + result.carburant + '</option>');


            $("#edit-vehic-modal form input").eq(4).val(result.num_matricule);
            $("#edit-vehic-modal form input").eq(5).val(result.id);

        })

    });

});


$(document).on("click", "#edit-vehic-submit", function (e) {
    e.preventDefault();
    $("#edit-vehic-form p").remove();
    $.ajax({
        type: "POST",
        url: baseUrl + "/vehicule/confermer_edit_vehic",
        data: $("#edit-vehic-form").serialize(), // serializes the form's elements.


        success: function (result) {

            if (result) {
                data = JSON.parse(result);
                if (data.error) {
                    $("#edit-vehic-form").prepend("<p>" + (data.error).split('\n').join("<br>") + "</p>");
                    $("#edit-vehic-form p").css("color", "red");
                    return false;
                }
                jQuery('#edit-vehic-modal').modal('hide');
                // $("tr[data-id='" + data.id + "'] td:nth-child(1)").text(data.id);
                $("tr[data-id='" + data.id + "'] td:nth-child(2)").text(data.nom);
                $("tr[data-id='" + data.id + "'] td:nth-child(3)").text(data.marque);
                $("tr[data-id='" + data.id + "'] td:nth-child(4)").text(data.date_achat);
                $("tr[data-id='" + data.id + "'] td:nth-child(5)").text(data.carburant);
                $("tr[data-id='" + data.id + "'] td:nth-child(6)").text(data.num_matricule);
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





if ($(".add-oper").length) {
        $(document).on("click", ".add-oper", function () {
            jQuery('#add-oper-modal').modal('show');
            id = $(this).closest("tr").attr("data-id");
            //id = 8;
            $("#add-oper-modal form input").eq(4).val(id);

        });
    }


$(document).on("click", "#add-oper-submit", function (e) {
    e.preventDefault();
    $("#add-oper-form p").remove();


    $.ajax({
        type: "POST",
        url: baseUrl + "/vehicule/add_oper",
        //data: $("#add-oper-form").serialize(), // serializes the form's elements.
        data:  new FormData($("#add-oper-form")[0]),
   contentType: false,
         cache: false,
   processData:false,
        success: function (result) {
          if (result) {
              data = JSON.parse(result);
              if (data.error) {
                  $("#add-oper-form").prepend("<p>" + (data.error).split('\n').join("<br>") + "</p>");
                  $("#add-oper-form p").css("color", "red");
                  return false;
              }
              jQuery('#add-oper-modal').modal('hide');

              swal({
                  type: 'success',
                  title: 'Utilisateur modifié avec succées',
                  showConfirmButton: false,
                  timer: 1500
              })
          }
            console.log();
          }
      });


  });



  $(document).on("click", ".voir-oper", function () {
      //jQuery('#voir-user-modal').modal('show');
      id = $(this).closest("tr").attr("data-id");
      window.location.href = baseUrl + "/vehicule/oper_details/" + id;


  });


  if ($("#datatable_oper_ve").length) {
      $(document).ready(function () {
          var t = $('#datatable_oper_ve').DataTable({
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
