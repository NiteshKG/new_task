<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>Crud Application - Create Task</title>
    
<body>
    <form name="createuser" method="post" action="<?php echo base_url().'user/create/'; ?>">
        <div class="container">
           
        <div class="form-group col-md-6">
     <label>Employee's Id </label> : <input type="int" name="id"   placeholder="Id">
     <label for=""><?php echo form_error('id')? form_error('id') : '' ;?></label>
    </div>

    <div class="form-group col-md-6 ">
     <label>Employee's name </label> : <input type="text" name="name"   placeholder="name">
     <label for=""><?php echo form_error('name')? form_error('name') : '' ;?></label>
    </div>
    <div class="form-group col-md-6">
     <label> Task </label> :       <input type="text" name="task"   placeholder="task">
     <label for=""><?php echo form_error('nametask')? form_error('task') : '' ;?></label>
     </div>
    <div class="form-group col-md-6">
    <label>Due date   </label> :  <input type="date" name="due_date" placeholder="date">
   <label for=""><?php echo form_error('due_date')? form_error('due_date') : '' ;?></label>
    </div>
    <div class="form-group col-md-6">
        <label>Task description :</label>
        <div><textarea id="task_description" name="task_description" rows="4" cols="50">

</textarea>
</div>
        </div>
    <div class="form-group col-md-6">
    <button class="btn btn-primary">Submit</button>
    </div>
        <br>
        <div class="form-group">
        <a href="<?php echo base_url().'user/index' ?>" class="btn btn-primary">Cancel</a>
        </div>
        </div>
    </form>
    <hr>
    <hr>
    
</body>
</html>

