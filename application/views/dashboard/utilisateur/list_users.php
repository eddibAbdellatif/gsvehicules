
<div class="content content-narrow">
    <a href="<?php echo base_url().'/assets/index.xlsx' ?>" id="download_exc_cached">download</a>
    <div class="block">
        <div class="block-header">
            <h3 class="col-sm-6 block-title">Gestion des utilisateurs / liste des utilisateurs
                <small></small>
            </h3>
            <button id="add-user" class="col-sm-3 pull-right btn btn-success">Ajouter un utilisateur <i
                    class="fa fa-plus-circle" aria-hidden="true"></i></button>
        </div>
        <div class="block-content">
            <table id="datatable_users"
                   class="display table table-bordered table-striped js-dataTable-full-pagination dataTable no-footer"
                   cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>RÔle</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>RÔle</th>
                    <th>Action</th>
                </tr>
                </tfoot>
                <tbody>
                <?php foreach ($data as $key => $user): ?>
                    <tr>

                        <td><?php echo $user->id ?></td>
                        <td><?php echo $user->first_name ?></td>
                        <td><?php echo $user->last_name ?></td>
                        <td><?php echo $user->email ?></td>
                        <td><?php echo $user->name ?></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button class="btn btn-xs btn-default voir-user" type="button" data-toggle="tooltip"
                                        title="" data-original-title="Voir les détails de l'utilisateur"><i
                                        class="fa fa-eye"></i></button>
                                <button class="btn btn-xs btn-default edit-user" type="button" data-toggle="tooltip"
                                        title="" data-original-title="Modifier l'utilisateur"><i
                                        class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                <?php if ($this->session->userdata("user_id") != $user->id): ?>
                                    <button class="btn btn-xs btn-default delete-user" type="button"
                                            data-toggle="tooltip" title=""
                                            data-original-title="Supprimer l'utilisateur"><i class="fa fa-times"></i>
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


<div class="modal fade in" id="add-user-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-popin">
        <div class="modal-content">
            <div class="block block-themed block-transparent remove-margin-b">
                <div class="block-header bg-success">
                    <ul class="block-options">
                        <li>
                            <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Ajouter Un utilisateur</h3>

                </div>
                <div class="block-header bg-warning text-dark">

                    <h3 class="block-title"> utilisateur par default techniciens</h3>

                </div>
                <div class="block-content">
                    <form class="form-horizontal push-5-t" id="add-user-form" method="post">
                        <div class="block">
                            <div class="form-group">
                                <label class="col-xs-12" for="register1-username">Nom</label>

                                <div class="col-xs-12">
                                    <input class="form-control" type="text" name="register1-firstname"
                                           placeholder="Entrer le nom..">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-xs-12" for="register1-username">Prénom</label>

                                <div class="col-xs-12">
                                    <input class="form-control" type="text" name="register1-lastname"
                                           placeholder="entrer le prénom..">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-xs-12" for="register1-email">Email</label>

                                <div class="col-xs-12">
                                    <input class="form-control" type="email" name="register1-email"
                                           placeholder="Enter l'email..">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-xs-12" for="register1-password">Mot de pass</label>

                                <div class="col-xs-12">
                                    <input class="form-control" type="password" name="register1-password"
                                           placeholder="Entrer le mot de pass..">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-xs-12" for="register1-password2">Confirmer le mot de pass</label>

                                <div class="col-xs-12">
                                    <input class="form-control" type="password" name="register1-password2"
                                           placeholder="Confirmer le mot de pass..">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <label class="css-input switch switch-sm switch-success">
                                        <input type="checkbox" name="register1-gestionnaires"><span></span> Définir commme
                                        gestionnaires ?
                                    </label>
                                </div>

                            </div>
                        </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Fermer</button>
                <button id="add-user-submit" class="btn btn-sm btn-success" type="submit">Ajouter <i
                        class="fa fa-plus"></i></button>
            </div>
            </form>


        </div>
    </div>
</div>


<div class="modal fade in" id="delete-user-modal" tabindex="-1" role="dialog" aria-hidden="true">
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
                <button id="delete_user" class="btn btn-sm btn-danger" type="button" data-dismiss="modal"><i
                        class="fa fa-check"></i>Supprimer
                </button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade in" id="voir-user-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-popin modal-lg">
        <div class="modal-content">
            <div class="block block-themed block-transparent remove-margin-b">
                <div class="block-header bg-primary">
                    <ul class="block-options">
                        <li>
                            <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Voir les détails</h3>
                </div>
                <div class="block-content">
                    <div class="block">
                        <table id="table_user_details" class="table table-bordered">
                            <tbody>
                            <tr>
                                <td>ID</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Nom</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Prénom</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Rôle</td>
                                <td></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade in" id="edit-user-modal" tabindex="-1" role="dialog" aria-hidden="true">
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
                    <form class="form-horizontal push-5-t" id="edit-user-form" method="post">

                        <div class="block">

                            <div class="form-group">
                                <label class="col-xs-12" for="register1-username">Nom</label>

                                <div class="col-xs-12">
                                    <input class="form-control" type="text" id="edit_first_name" name="register1-firstname"
                                           placeholder="Entrer le nom..">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-xs-12" for="register1-username">Prénom</label>

                                <div class="col-xs-12">
                                    <input class="form-control" type="text" id="edit_last_name" name="register1-lastname"
                                           placeholder="entrer le prénom..">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-xs-12" for="register1-email">Email</label>

                                <div class="col-xs-12">
                                    <input class="form-control" type="email" id="edit_email" name="register1-email"
                                           placeholder="Enter l'email..">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <label class="css-input switch switch-sm switch-primary">
                                        <input type="checkbox" name="register1-terms" id="edit_admin"><span></span> Définir commme
                                        gestionnaires ?
                                    </label>
                                    <input type="hidden" name="id">
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Fermer</button>
                <button id="edit-user-submit" class="btn btn-sm btn-primary" type="submit">Modifier <i
                        class="fa fa-edit"></i></button>
            </div>
            </form>


        </div>
    </div>
</div>


<div class="modal fade in" id="voir-devis-user-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-popin modal-lg">
        <div class="modal-content">
            <div class="block block-themed block-transparent remove-margin-b">
                <div class="block-header bg-primary">
                    <ul class="block-options">
                        <li>
                            <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Les devis crée par l'utilisateur</h3>
                </div>
                <div class="block-content">
                    <div class="block">
                        <div class="block-content">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nom</th>
                                    <th>Date d'enregistrement</th>
                                    <th>État de commande</th>
                                </tr>
                                </thead>
                                <tbody>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Fermer</button>
                <button class="btn btn-sm btn-success" id="download_excel_user" type="submit" ><i class="fa fa-download"></i> Télécharger le fichier Excel</button>
            </div>
        </div>
    </div>
</div>

<!-- <script type="text/javascript" src="users.js"></script> -->
<!-- <script src="<?php echo site_url('users.js')?> ></script> -->
