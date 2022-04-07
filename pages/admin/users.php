<?php 
$name = $phone = "";

// Checking for a POST request
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['assign-officer'])) {
    $officer = test_input($_POST["officer"]);
    $userId = test_input($_POST['user_id']);

    var_dump($userId);

    $db->update('users',[
        'officer' => $officer == 'NULL' ? NULL : intval($officer)
    ], [
        'user_id' => $userId
    ]);
    $_POST = array(); 
    echo "<meta http-equiv='refresh' content='0'>";

}

// Removing the redundant HTML characters if any exist.
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>
<!-- Modal for now admin -->
<div class="modal fade" id="add-admin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="add-admin">New User</h5>
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
          
          </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" value="add-admin" name="add-admin" class="btn btn-primary">Add User</button>
            </div>
        </form>
      
    </div>
  </div>
</div>
<!-- End of modal for now admin -->
<!-- [ Main Content ] start -->
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>All Users</h5>
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#add-admin">Add User</button>
            </div>
            
            
            
            <div class="card-block">
                
                <!--table starts here--> 
                <div class="card-block table-border-style">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>User ID</th>
                                <th>Account Manager</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Date Opened</th>
                                <th>Acc Name</th>
                                <th>Account Number</th>
                                <th>Bank Name</th>
                                <th>View User</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php $sql = $db->select("users", "*");?>
                            <?php foreach($sql as $key=>$row): ?>
                                <tr>
                                    <th scope='row'><?= $key + 1; ?></th>
                                    <td><?= $row['phone']; ?></td>
                                    <?php if($row['officer']):?>
                                        <td><btn class='btn btn-info' data-bs-toggle="modal" data-bs-target="#exampleModal<?= $key + 1; ?>">Update Account Manager</btn></td>
                                    <?php else:?>
                                        <td><btn class='btn btn-success' data-bs-toggle="modal" data-bs-target="#exampleModal<?= $key + 1; ?>">Assign Account Manager</btn></td>
                                    <?php endif?>

                                    <td><?= $row['firstname']; ?></td>
                                    <td><?= $row['surname']; ?></td>
                                    <td><?= $row['acc_name']; ?></td>
                                    <td><?= $row['acc_number']; ?></td>
                                    <td><?= $row['acc_bankname']; ?></td>
                                    <td><?= $row['date_created']; ?></td>
                                    <td><a href="user?user_id=<?=$row['user_id']?>" class='btn btn-primary'>View User</a></td>
                                </tr>
                                <div class="modal fade" id="exampleModal<?= $key + 1; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                   
                                            <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <form action="" method="POST">
                                                    <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Assign officer for <?= $row['firstname']; ?></h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <input type="hidden" name="user_id" value="<?= $row['user_id']; ?>">
                                                    <div class="input-group mb-3">
                                                        <select name="officer" class="custom-select" id="inputGroupSelect02">
                                                            <option value="NULL" >Remove Officer</option>
                                                            <?php foreach($db->select('admin', '*', ['role' => 'OFFICER']) as $key=>$row2):?>
                                                                <option <?= $row2['id'] == $row['officer'] ? 'selected' : '' ?> value="<?= $row2['id']?>"><?= $row2['fname']?></option>
                                                            <?php endforeach?>
                                                        </select>
                                                        <div class="input-group-append">
                                                            <label class="input-group-text" for="inputGroupSelect02">Officer</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" name="assign-officer"  class="btn btn-primary">Assign Officer</button>
                                                </div>
                                                </form>
                                            </div>
                                        
                                    
                                </div>
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
