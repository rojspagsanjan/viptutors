<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> Products</h1>
            Manage Products > <span class="active1"> Product Management </p>
          </div>
          <div class="col-sm-6">
          <button class="productModal button1 float-sm-right btn btn-primary" data-toggle="modal" data-target="#addproduct"><i class="fas fa-plus-circle" aria-hidden="true"></i> Create Product </button>
        
          <div class="modal fade" id="addproduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"aria-hidden="true">\
            <form id="add_product" method="post">
              <div class="modal-dialog modal-s" role="document">
                <div class="modal-content">
                  <div class="modal-header bg-info1">
                    <h5 class="modal-title" id="exampleModalLabel">Add Products</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <div class="col-12">
                        <div class="form-group">
                          <label for="product_name">Product Name:</label>
                          <input type="text" class="form-control" name="product_name" value="">
                          <span class="err"></span>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="form-group">
                          <label for="description">Description:</label>
                          <input type="text" class="form-control" name="description" value="">
                          <span class="err"></span>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="form-group">
                          <label for="price">Price:</label>
                          <input type="text" class="form-control" name="price" value="">
                          <span class="err"></span>
                        </div>
                      </div>
                    </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary add">Submit</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        <!-- edit Modal -->
    </div>
    <div class="modal fade" id="editproduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"aria-hidden="true">\
        <form id="edit_product" method="post">
          <div class="modal-dialog modal-s" role="document">
            <div class="modal-content">
              <div class="modal-header bg-info1">
                <h5 class="modal-title" id="exampleModalLabel">Edit Products</h5>
                <input type="hidden" class="form-control product_edit_id" name="product_edit_id" value="">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-12">
                    <div class="form-group">
                      <label for="product_name">Product Name:</label>
                      <input type="text" class="form-control" name="product_name" value="">
                      <span class="err"></span>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <div class="form-group">
                      <label for="description">Description:</label>
                      <input type="text" class="form-control" name="description" value="">
                      <span class="err"></span>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <div class="form-group">
                      <label for="price">Price:</label>
                      <input type="text" class="form-control" name="price" value="">
                      <span class="err"></span>
                    </div>
                  </div>
                </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary edit">Update</button>
              </div>
            </div>
          </div>
        </form>
      </div>

  </div>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="card">
      <!-- /.card-header -->
      <div class="card-body1">
        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
          <div class="row">
            <div class="table-responsive">
              <div class="col-sm-12">
                <table id="productTable" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                  <thead>
                    <th class="header-title">Product Name</th>
                    <th class="header-title">Description</th>
                    <th class="header-title">Price</th>
                    <th class="header-title">Date Created</th>
                    <th class="header-title">Date Modified</th>
                    <th class="header-title">Actions</th>
                  </thead>
                  <tbody id="tableData">
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
      </div>
      <!-- /.card-body -->
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->