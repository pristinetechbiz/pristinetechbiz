<?php 

// Checking for a POST request
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add-admin'])) {
    $fname = test_input($_POST["fname"]);
    $lname = test_input($_POST["lname"]);
    $phone = test_input($_POST["phone"]);
    $password = test_input($_POST["password"]);
    $role = test_input($_POST["role"]);

    $db->insert('admin',[
        'fname' => $fname,
        'lname' => $lname,
        'phone' => $phone,
        'password' => $password,
        'role' => $role
    ]);

$_POST = array(); 
echo "<meta http-equiv='refresh' content='0'>";
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update-admin'])) {
    $fname = test_input($_POST["fname"]);
    $id = test_input($_POST["id"]);
    $lname = test_input($_POST["lname"]);
    $phone = test_input($_POST["phone"]);
    $password = test_input($_POST["password"]);
    $role = test_input($_POST["role"]);

    $db->update('admin',[
        'fname' => $fname,
        'lname' => $lname,
        'phone' => $phone,
        'password' => $password,
        'role' => $role
    ],[
        'id' => $id
    ]);

$_POST = array(); 
echo "<meta http-equiv='refresh' content='0'>";
}

if (isset($_GET['delete-admin'])) {
    $db->delete("admin",["id" => $_GET['delete-admin']]);
}

// Removing the redundant HTML characters if any exist.
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>

<!-- [ Main Content ] start -->
<!-- Modal for now admin -->
<div class="modal fade" id="add-admin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="add-admin">New Admin</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">First Name</label>
            <input required type="text" class="form-control" id="recipient-name" name="fname">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Last Name</label>
            <input required type="text" class="form-control" id="recipient-name" name="lname">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Password</label>
            <input required type="text" class="form-control" id="recipient-name" name="password">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Phone</label>
            <input required type="text" class="form-control" id="recipient-name" name="phone">
          </div>
          <br>
          <div class="input-group">
            <select class="custom-select" required name="role" id="">
                <option value="SUPERADMIN">Super Admin</option>
                <option value="ADMIN">Admin</option>
                <option value="OFFICER">Relationship Officer</option>
            </select>
            <div class="input-group-append">
                <label class="input-group-text" for="inputGroupSelect02">Role</label>
            </div>
          </div>
          </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" value="add-admin" name="add-admin" class="btn btn-primary">Add Admin</button>
            </div>
        </form>
      
    </div>
  </div>
</div>
<!-- End of modal for now admin -->
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <h5>All Admin</h5>
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#add-admin">Add Admin</button>
                </div>
            </div>
            
            
            
            <div class="card-block">
                
                <!--table starts here--> 
                <div class="card-block table-border-style">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Phone</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Role</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php $sql = $db->select("admin", "*");?>
                            <?php foreach($sql as $key=>$row): ?>
                                <tr>
                                    <th scope='row'><?= $key + 1; ?></th>
                                    <td><?= $row['phone']; ?></td>
                                    <td><?= $row['fname']; ?></td>
                                    <td><?= $row['lname']; ?></td>
                                    <td><?= $row['role']; ?></td>
                                    <td data-bs-toggle="modal" data-bs-target="#exampleModal<?= $key + 1; ?>" > <button class='badge badge-pill label theme-bg2 text-white f-12'>Edit</button> </td>
                                    <td><a class='badge badge-pill label theme-bg text-white f-12' href="?delete-admin=<?=$row['id']?>">Delete</a> </td>
                                </tr>
                                <!-- Modal for now admin -->
                                <div class="modal fade" id="exampleModal<?= $key + 1; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModal<?= $key + 1; ?>">New Admin</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST">
                                            <input type="hidden" name="id" value="<?= $row['id']; ?>">
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">First Name</label>
                                            <input required type="text" value="<?= $row['fname']; ?>" class="form-control" id="recipient-name" name="fname">
                                        </div>
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Last Name</label>
                                            <input required type="text" value="<?= $row['lname']; ?>" class="form-control" id="recipient-name" name="lname">
                                        </div>
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Password</label>
                                            <input required type="text" value="<?= $row['password']; ?>" class="form-control" id="recipient-name" name="password">
                                        </div>
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Phone</label>
                                            <input required type="text" value="<?= $row['phone']; ?>" class="form-control" id="recipient-name" name="phone">
                                        </div>
                                        <br>
                                        <div class="input-group">
                                            <select class="custom-select" value="<?= $row['role']; ?>" required name="role" id="">
                                                <option <?= $row['role'] == 'SUPERADMIN' ? 'selected' : '' ?> value="SUPERADMIN">Super Admin</option>
                                                <option <?= $row['role'] == 'ADMIN' ? 'selected' : '' ?> value="ADMIN">Admin</option>
                                                <option <?= $row['role'] == 'OFFICER' ? 'selected' : '' ?> value="OFFICER">Relationship Officer</option>
                                            </select>
                                            <div class="input-group-append">
                                                <label class="input-group-text" for="inputGroupSelect02">Role</label>
                                            </div>
                                        </div>
                                        </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" value="update-admin" name="update-admin" class="btn btn-primary">Update Admin</button>
                                            </div>
                                        </form>
                                    
                                    </div>
                                </div>
                                </div>
                                <!-- End of modal for now admin -->
                                
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!--Table ends here-->
            </div>
        </div>
    </div>
</div>
<!-- [ Main Content ] end -->

                        