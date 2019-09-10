<div class="content content-narrow">
    <a href="<?php echo base_url().'/assets/index.xlsx' ?>" id="download_exc_cached">download</a>
    <div class="block">
      <div class="block-header">
          <h3 class="col-sm-6 block-title">
              <small></small>
          </h3>


      </div>
        <div class="block-content">
            <table id="datatable_oper"
                   class="display table table-bordered table-striped js-dataTable-full-pagination dataTable no-footer"
                   cellspacing="0" width="100%">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>user</th>
                    <th>num Vehicule</th>
                    <th>Date de début</th>
                    <th>Date de fin</th>
                    <th>Sujet</th>
                    <th>Description</th>
                    <th>Action</th>
                    <th>Note</th>
                  </tr>
                </thead>
                <tfoot>
                <tr>
                  <th>ID</th>
                  <th>user</th>
                  <th>num Vehicule</th>
                  <th>Date de début</th>
                  <th>Date de fin</th>
                  <th>Sujet</th>
                  <th>Description</th>
                  <th>Action</th>
                  <th>Note</th>
                </tr>
                </tfoot>
                <tbody>



                 <?php
                 foreach ($data as $key => $user): ?>
                    <tr>

                        <td><?php echo $user->id ?></td>
                        <td><?php echo $user->id_user ?></td>
                        <td><?php echo $user->id_vehicule ?></td>
                        <td><?php echo $user->date_debut ?></td>
                        <td><?php echo $user->date_fin ?></td>
                        <td><?php echo $user->sujet ?></td>
                        <td><?php echo $user->description ?></td>
                        <td class="text-center">
                             <div class="btn-group">

                                    <?php
                                    $group = 3;
                                     if ($this->ion_auth->in_group($group) ):?>
                                        <button class="btn btn-xs btn-default edit-oper" type="button" data-toggle="tooltip"
                                             title="" data-original-title="Modifier l'utilisateur">
                                             <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </button>

                                         <?php endif; ?>


                            </div>
                        </td>
                        <td class="text-center">
                             <div class="btn-group">
                                    <?php
                                    $group = 3;
                                     if ($this->ion_auth->in_group($group) ):?>
                                         <button class="btn btn-xs btn-default voir-note" type="button" data-toggle="tooltip"
                                         title="" data-original-title="Voir note">
                                         <i class="fa fa-eye"></i>
                                         </button>
                                         <button class="btn btn-xs btn-default add-note" type="button" data-toggle="tooltip"
                                           title="" data-original-title="add note">
                                                  <i class="fa fa-plus-circle"></i>
                                          </button>
                                         <?php endif; ?>
                            </div>
                        </td>
                    </tr>
                <?php endforeach ?>

                </tbody>
            </table>
        </div>
    </div>

</div>
</div>





<div class="modal fade in" id="edit-oper-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-popin">
        <div class="modal-content">
            <div class="block block-themed block-transparent remove-margin-b">
                <div class="block-header bg-primary">
                    <ul class="block-options">
                        <li>
                            <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">modifer Un operation</h3>
                </div>
                <div class="block-content">
                    <form class="form-horizontal push-5-t" id="edit-oper-form" method="post">

                      <div class="block">
                        <div class="form-group">
                            <label class="col-xs-12" for="date_debut">date debut</label>

                            <div class="col-xs-12">
                                <input class="form-control" type="date" name="date_debut">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-12" for="date_fin">date fin</label>

                            <div class="col-xs-12">
                                <input class="form-control" type="date" name="date_fin">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-12" for="sujet">sujet</label>

                            <div class="col-xs-12">
                                <input class="form-control" type="text" name="sujet"
                                       placeholder="sujet..">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-12" for="description-">description</label>

                            <div class="col-xs-12">
                                <textarea  class="form-control description"  name="description" placeholder="description .."></textarea>

                            </div>
                        </div>
                        <!-- <input type="hidden" name="id_vehicule">
                        <input type="hidden" name="id_user"> -->
                        <input type="hidden" name="id">

                      </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Fermer</button>
                <button id="edit-oper-submit" class="btn btn-sm btn-primary" type="submit">Modifier <i
                        class="fa fa-edit"></i></button>
            </div>
            </form>


        </div>
    </div>
</div>


<div class="modal fade in" id="add-note-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-popin">
        <div class="modal-content">
            <div class="block block-themed block-transparent remove-margin-b">
                <div class="block-header bg-primary">
                    <ul class="block-options">
                        <li>
                            <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Ajouter Une Note</h3>
                </div>
                <div class="block-content">
                    <form class="form-horizontal push-5-t" id="add-note-form" method="post">

                      <div class="block">

                        <div class="form-group">
                            <label class="col-xs-12" for="description-">Note</label>

                            <div class="col-xs-12">
                                <textarea  class="form-control note"  name="note" placeholder="note .."></textarea>

                            </div>
                        </div>
                        <!-- <input type="hidden" name="id_vehicule">
                        <input type="hidden" name="id_user"> -->
                        <input type="hidden" name="id">

                      </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Fermer</button>
                <button id="add-note-submit" class="btn btn-sm btn-primary" type="submit">Modifier <i
                        class="fa fa-edit"></i></button>
            </div>
            </form>


        </div>
    </div>
</div>
