          <?php $this->view('category/v_add_update'); ?>
          <!-- START CONTAINER FLUID -->
          <div class=" container-fluid   container-fixed-lg bg-white">
            <h3 style="padding-top: 1rem"><strong>Category Table</strong></h3>
            <!-- START card -->
            <div class="card card-transparent">
              <div class="card-header ">
                <!-- <div class="card-title">Tabel Kategori
                </div> -->
                <div class="card-title">
                  <div class="row">
                    <div class="col-xs-2">
                      <button id="" class="btn btn-default"><i class="fa fa-undo"></i></button>
                    </div>  &nbsp
                    <div class="col-xs-5">
                      <button id="show-modal" class="btn btn-primary btn-cons"><i class="fa fa-plus"></i> Add New</button>
                    </div>
                  </div>
                </div>
                <div class="row pull-right">
                  <div class="col-xs-10">
                    <input type="text" id="search-table" class="form-control pull-right" placeholder="Search">
                  </div>
                  <!-- <div class="col-xs-2">
                    <button id="" class="btn btn-primary btn-cons"><i class="fa fa-plus"></i></button>
                  </div>
                  <div class="col-xs-2">
                    <button id="show-modal" class="btn btn-primary btn-cons"><i class="fa fa-plus"></i> Add New</button>
                  </div> -->
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="card-body">
                <table class="table table-hover demo-table-search table-responsive-block" id="tableWithSearch">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Name</th>
                      <th>Deleted?</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody id="show_data">
                    <!-- <tr>
                      <td class="v-align-middle semi-bold">
                        <p>First Tour</p>
                      </td>
                      <td class="v-align-middle"><a href="#" class="btn btn-tag">United States</a>
                      </td>
                      <td class="v-align-middle">
                        <p>it is more then ONE nation/nationality</p>
                      </td>
                      <td class="v-align-middle">
                        <p>Public</p>
                      </td>
                    </tr> -->
                  </tbody>
                </table>
              </div>
            </div>
            <!-- END card -->
          </div>
          <!-- END CONTAINER FLUID -->