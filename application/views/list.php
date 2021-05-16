<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curd Application -  View Users</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css'; ?>">
</head>
<body>
<div class="navbar navbar-dark bg-dark">
<div class="container">
<a href="#" class="navbar-brand">CURD Application</a>
</div>
</div>

<div class="container" style="padding-top: 10px;">
<div class="row">
    <div class="col-md-12">
        <?php 
            $success = $this->session->userdata('success');
            if($success !=""){
        ?>
        <div class="alert alert-success"><?php echo $success; ?> </div>
        <?php } ?>
        <?php 
            $failure = $this->session->userdata('failure');
            if($failure!=""){
        ?>
        <div class="alert alert-danger"><?php echo $failure; ?> </div>
        <?php } ?>        
        
    </div>
</div>

<div class="row">
<div class="col-md-8">
    <div class="row">
        <div class="col-6"><h3>View User</h3></div>
        <div class="col-6 text-right"><a href="<?php echo base_url().'index.php/user/create'; ?>"  class="btn btn-primary"> create</a></div>
    </div>
    <hr>
</div>
</div>




<div class="row">
    <div class="col-md-8">
    <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th width="70">Edit</th>
                <th width="70">Delete</th>
            </tr>
            <?php if(!empty($users)) {foreach($users as $user) { ?>
            <tr>
                <td><?php echo $user['user_id']; ?></td>
                <td><?php echo $user['name']; ?></td>
                <td><?php echo $user['email']; ?></td>
                <td>
                 <a href="<?php echo base_url().'index.php/user/edit/'.$user['user_id']; ?>" class="btn btn-primary">Edit</a>
                </td>
                <td>
                 <a href="<?php echo base_url().'index.php/user/delete/'.$user['user_id']; ?>" class="btn btn-danger">Delete</a>
                </td>                
            </tr>
            <?php } } else { ?>
            <tr>
                <td colspan="5">Record Noty Found </td>
            </tr>

            <?php } ?>
        </table>
    
    </div>


</div>

</div>

    
</body>
</html>