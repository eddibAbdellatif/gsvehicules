


<div class="content content-narrow">
    <a href="<?php echo base_url().'/assets/index.xlsx' ?>" id="download_exc_cached">download</a>
    <div class="block">
        <div class="block-header">
            <h3 class="col-sm-6 block-title">Liste des vehicules
                <small></small>
            </h3>
            <?php
            $group = 2;
             if ($this->ion_auth->in_group($group) ):?>
            <button id="add-vehic" class="col-sm-3 pull-right btn btn-success">Ajouter Un vehicule<i
                    class="fa fa-plus-circle" aria-hidden="true"></i></button>
            <?php endif; ?>

        </div>
        <div class="block-content">
            <table id="datatable_vehic"
                   class="display table table-bordered table-striped js-dataTable-full-pagination dataTable no-footer"
                   cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Marque</th>
                    <th>Date d’achat</th>
                    <th>Carburant</th>
                    <th>num_matricule</th>
                    <?php
                    $group = 2;
                     if ($this->ion_auth->in_group($group) ):?>
                      <th>Action</th>
                   <?php endif; ?>
                   <?php
                   $group = 3;
                    if ($this->ion_auth->in_group($group) ):?>
                     <th>Operation</th>
                 <?php endif; ?>
                </tr>
                </thead>
                <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Nom</th>
                  <th>Marque</th>
                  <th>Date d’achat</th>
                  <th>Carburant</th>
                  <th>num_matricule</th>
                  <?php
                  $group = 2;
                   if ($this->ion_auth->in_group($group) ):?>
                    <th>Action</th>
                <?php endif; ?>
                <?php
                $group = 3;
                 if ($this->ion_auth->in_group($group) ):?>
                  <th>Operation</th>
              <?php endif; ?>
                </tr>
                </tfoot>
                <tbody>



                 <?php
                 foreach ($data as $key => $user): ?>
                    <tr>

                        <td><?php echo $user->id ?></td>
                        <td><?php echo $user->nom ?></td>
                        <td><?php echo $user->marque ?></td>
                        <td><?php echo $user->date_achat ?></td>
                        <td><?php echo $user->carburant ?></td>
                        <td><?php echo $user->num_matricule ?></td>
                        <td class="text-center">
                             <div class="btn-group">
                               <?php
                               $group = 2;
                                if ($this->ion_auth->in_group($group) ):?>
                                   <button class="btn btn-xs btn-default edit-vehic" type="button" data-toggle="tooltip"
                                        title="" data-original-title="Modifier l'utilisateur">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                   </button>

                                    <button class="btn btn-xs btn-default delete-vehic" type="button"
                                            data-toggle="tooltip" title="" data-original-title="Supprimer l'utilisateur">
                                            <i class="fa fa-times"></i>
                                    </button>
                                    <?php endif; ?>

                                    <?php
                                    $group = 3;
                                     if ($this->ion_auth->in_group($group) ):?>

                                     <button class="btn btn-xs btn-default voir-oper" type="button" data-toggle="tooltip"
                                             title="" data-original-title="Voir les détails de l'operation"><i
                                             class="fa fa-eye"></i>
                                      </button>

                                         <button class="btn btn-xs btn-default add-oper" type="button"
                                                 data-toggle="tooltip" title="" data-original-title="add operatuion">
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


<div class="modal fade in" id="add-vehic-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-popin">
        <div class="modal-content">
            <div class="block block-themed block-transparent remove-margin-b">
                <div class="block-header bg-success">
                    <ul class="block-options">
                        <li>
                            <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Ajouter Un vehicule</h3>

                </div>

                <div class="block-content">
                    <form class="form-horizontal push-5-t" id="add-vehic-form" method="post">
                        <div class="block">
                            <div class="form-group">
                                <label class="col-xs-12" for="register1-username">Nom</label>

                                <div class="col-xs-12">
                                    <input class="form-control" type="text" name="nom"
                                           placeholder="Entrer le nom..">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-xs-12" for="register1-usere">marque</label>

                                <div class="col-xs-12">
                                    <input class="form-control" type="text" name="marque"
                                           placeholder="entrer la marque..">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-xs-12" for="register1-password">types vehic</label>

                                <div class="col-xs-12">
                                    <!-- <input class="form-control" type="text" name="carburant"
                                           placeholder="carburant .."> -->
                                           <select class="form-control selectpicker" name="type">
                                            <option>type1 </option>
                                            <option>type2</option>
                                            <option>type3</option>
                                            </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-xs-12" for="register1-email">date d’achat</label>

                                <div class="col-xs-12">
                                    <input class="form-control" type="date" name="date_achat"
                                           placeholder="Enter le date_achat..">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-xs-12" for="register1-password">carburant</label>

                                <div class="col-xs-12">
                                    <!-- <input class="form-control" type="text" name="carburant"
                                           placeholder="carburant .."> -->
                                           <select class="form-control selectpicker" name="carburant">
                                            <option>diesel </option>
                                            <option>essence</option>
                                            <option>hybride</option>
                                            </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-xs-12" for="register1-password2">num_matricule</label>

                                <div class="col-xs-12">
                                    <input class="form-control" type="text" name="num_matricule"
                                           placeholder="num_matricule ..">
                                </div>
                            </div>

                        </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Fermer</button>
                <button id="add-vehic-submit" class="btn btn-sm btn-success" type="submit">Ajouter <i
                        class="fa fa-plus"></i></button>
            </div>
            </form>


        </div>
    </div>
</div>


<div class="modal fade in" id="delete-vehic-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-popin">
        <div class="modal-content">
            <div class="block block-themed block-transparent remove-margin-b">
                <div class="block-header bg-danger">
                    <ul class="block-options">
                        <li>
                            <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Supprimer l'utilisateur</h3>
                </div>
                <div class="block-content">
                    <div class="block">
                        <h3>Étes vous sure de supprimer ce utilisateur ?</h3>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Fermer</button>
                <button id="delete_vehic" class="btn btn-sm btn-danger" type="button" data-dismiss="modal"><i
                        class="fa fa-check"></i>Supprimer
                </button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade in" id="edit-vehic-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-popin">
        <div class="modal-content">
            <div class="block block-themed block-transparent remove-margin-b">
                <div class="block-header bg-primary">
                    <ul class="block-options">
                        <li>
                            <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">modifer Un utilisateur</h3>
                </div>
                <div class="block-content">
                    <form class="form-horizontal push-5-t" id="edit-vehic-form" method="post">

                      <div class="block">
                          <div class="form-group">
                              <label class="col-xs-12" for="register1-username">Nom</label>

                              <div class="col-xs-12">
                                  <input class="form-control" type="text" name="nom"
                                         placeholder="Entrer le nom..">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-xs-12" for="register1-username">marque</label>

                              <div class="col-xs-12">
                                  <input class="form-control" type="text" name="marque"
                                         placeholder="entrer la marque..">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-xs-12" for="register1-email">date d’achat</label>

                              <div class="col-xs-12">
                                  <input class="form-control" type="date" name="date_achat"
                                         placeholder="Enter le date_achat..">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-xs-12" for="register1-password">carburant</label>

                              <div class="col-xs-12">
                                  <input class="form-control" type="text" name="carburant"
                                         placeholder="carburant ..">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-xs-12" for="register1-password2">num_matricule</label>

                              <div class="col-xs-12">
                                  <input class="form-control" type="text" name="num_matricule"
                                         placeholder="num_matricule ..">
                              </div>
                          </div>
                          <input type="hidden" name="id">

                      </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Fermer</button>
                <button id="edit-vehic-submit" class="btn btn-sm btn-primary" type="submit">Modifier <i
                        class="fa fa-edit"></i></button>
            </div>
            </form>


        </div>
    </div>
</div>

<!-- operatuion modal -->
<div class="modal fade in" id="add-oper-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-popin">
        <div class="modal-content">
            <div class="block block-themed block-transparent remove-margin-b">
                <div class="block-header bg-primary">
                    <ul class="block-options">
                        <li>
                            <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">add Un operatuion</h3>
                </div>
                <div class="block-content">
                    <form class="form-horizontal push-5-t" id="add-oper-form" method="post" enctype="multipart/form-data">
                      <div class="block">
                          <div class="form-group">
                              <label class="col-xs-12" for="register1-username">date debut</label>

                              <div class="col-xs-12">
                                  <input class="form-control" type="date" name="date-debut">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-xs-12" for="register1-username">date fin</label>

                              <div class="col-xs-12">
                                  <input class="form-control" type="date" name="date-fin">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-xs-12" for="register1-email">sujet</label>

                              <div class="col-xs-12">
                                  <input class="form-control" type="text" name="sujet"
                                         placeholder="sujet..">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-xs-12" for="register1-password">description</label>

                              <div class="col-xs-12">
                                  <textarea  class="form-control"  name="description" placeholder="description .."></textarea>

                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-xs-12" for="image">image</label>

                              <div class="col-xs-12">
                                  <input  class="form-control" id="image" type="file" name="image"/>

                              </div>
                          </div>
                          <input type="hidden" name="id_vehicule">
                      </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Fermer</button>
                <button id="add-oper-submit" class="btn btn-sm btn-primary" type="submit">Modifier <i
                        class="fa fa-edit"></i></button>
            </div>
            </form>


        </div>
    </div>
</div>
