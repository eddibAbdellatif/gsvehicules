<div class="content content-narrow">
    <a href="<?php echo base_url().'/assets/index.xlsx' ?>" id="download_exc_cached">download</a>
    <div class="block">

      <div class="col-md-12">
                                    <div class="col-md-12" style="background-color: #DADADA; border-radius: 2px">
                                        <h4 style="text-align: center;">Informations</h4>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="col-md-5">
                                            <div class="col-md-12" style="padding-top: 20px;text-align: center;">
                                                <b>ID Operation </b>
                                            </div>
                                            <div class="col-md-12"
                                                 style="padding-top: 0px;padding-bottom: 0px;margin-top: 0px;height: 10px">
                                                <hr style="margin-top: 4px; margin-bottom: 4px"/>
                                            </div>
                                            <div class="col-md-12" style="padding-top: 5px;text-align: center;padding-bottom: 5%;">
                                              <?php
                                                echo $data[0]->id;
                                                ?>

                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="col-md-12"  style="padding-top: 20px;text-align: center;">
                                                <b>NUM_MATRICULE</b>
                                            </div>
                                            <div class="col-md-12"
                                                 style="padding-top: 0px;padding-bottom: 0px;margin-top: 0px;height: 10px">
                                                <hr style="margin-top: 4px; margin-bottom: 4px"/>
                                            </div>
                                            <div class="col-md-12" style="padding-top: 5px;text-align: center;padding-bottom: 5%;">
                                              <?php
                                                echo $data[0]->num_matricule;
                                                ?>

                                            </div>
                                        </div>
                                    </div>
      </div>


        <div class="block-content">
            <table id="datatable_oper_note"
                   class="display table table-bordered table-striped js-dataTable-full-pagination dataTable no-footer"
                   cellspacing="0" width="100%">
                <thead>
                <tr>

                  <th>Vehicule</th>
                  <th>num_matricule</th>
                  <th>User</th>
                  <th>Note</th>

                </tr>
                </thead>
                <tfoot>
                <tr>

                  <th>Vehicule</th>
                  <th>num_matricule</th>
                  <th>User</th>
                  <th>Note</th>
                </tr>
                </tfoot>
                <tbody>


                 <?php
                 foreach ($data as $key => $user): ?>
                    <tr>
                        
                        <td><?php echo $user->nom ?></td>
                        <td><?php echo $user->num_matricule ?></td>
                        <td><?php echo $user->nom_user ?></td>
                        <td><?php echo $user->note ?></td>
                    </tr>
                <?php endforeach ?>

                </tbody>
            </table>
        </div>
    </div>

</div>
</div>
