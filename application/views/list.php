<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>Task details</title>
</head>
<body>
<h3>Employee Task List</h3>
    
   

    <div class="row">
        <div class="col-md-8">
            <table class="table table-stripped">
               <tr>
                <th>Employee ID</th>
                <th>Task</th>
                <th>Due date</th>
                <th>Task Status</th>
                <th>Edit Task </th>
                <th>Delete Task </th>
                <th>Task description</th>
               </tr>
               <?php if(!empty($users)){ foreach($users as $user ){ ?>
                <tr>
                    <td><?php echo $user['id'] ; ?></td>
                    <td><?php echo $user['task']; ?></td>
                    <td><?php echo $user['due_date'] ;?></td>
                    <td><?php echo "pending"; ?></td>
                    <td>
                        <a href="<?php echo base_url().'user/edit/'.$user['id'] ?>" class="btn btn-primary">Edit Task</a>
                        </td>
                        <td>
                        <a href="<?php echo base_url().'user/delete/'.$user['id'] ?>" class="btn btn-danger">Delete</a>
                    </td>
                    <td>
                    <a href="<?php echo base_url().'user/description/'.$user['id'] ?>" class="btn btn-primary">Details</a>
                        </td>
                        <hr>
                   
                </tr>
                <?php }} else { ?>
                    <tr>
                        <td colspan="5">Records not found</td>
                    </tr>
                    <?php } ?>
            </table>

        </div>

    </div>
</body>
</html>