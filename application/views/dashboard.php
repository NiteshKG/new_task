<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>Dashboard</title>
</head>
<body>
      <ul>
        <li>
        <a href="<?php echo base_url().'user/create/' ?>" class="btn btn-primary">Click here to assign task to a employ</a>
        </li>
        <li>
        <a href="<?php echo base_url().'user/index/' ?>" class="btn btn-primary">Click to see the employ's assigned task and date to submit</a>
        </li>
        <li>
        <a href="<?php echo base_url().'user/edit/' ?>" class="btn btn-primary">Click to update the assigned task to employs.</a>   
        </li>
      </ul>         
</body>
</html>