<?php
    $title = 'Manage Users'; 

    require_once 'includes/header.php'; 
    require_once 'includes/auth_check.php';
    require_once 'db/conn.php'; 

    // Get All The Users
    $results = $user->getUsers();
    if(isset($_GET['success'])){
        if($_GET['success'] == 1){
            include 'includes/successmessage.php';
        }else{
            include 'includes/errormessage.php';
        }
    }
?>



<a href="createuser.php" class="btn btn-success">+ Create User</a>
<br/>
<br/>
<table class="table">
        <tr>
            
            <th>Username</th>
            <th>Actions</th>
        </tr>
        <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
           <tr>
                
                <td><?php echo $r['username'] ?></td>
                <td>
                    <a href="resetpassword.php?id=<?php echo $r['id'] ?>" class="btn btn-warning">Reset Password</a>
                    <a href="deleteuser.php?id=<?php echo $r['id'] ?>" class="btn btn-danger">Deactivate</a>
                </td>
           </tr> 
        <?php }?>
    </table>

<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>