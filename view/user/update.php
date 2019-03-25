<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<div id="users">
<div class="container">
<div class="container">
<div class="row">
    <div class="col-4"></div>
    <div class="col-4">
    <div class="form-group">
    <button class="btn btn-success text-light"><a href="#">Back</button>
</div>
<form action="index.php?action=update_user" method="POST">
    <?php 
        
        foreach($data['update'] as $item) :
    ?>
        <input type="hidden" class="form-control" name='id' value="<?php echo $item['id'] ?>">
        <div class="form-group">
            <input type="text" class="form-control" name='username' placeholder="Username" value="<?php echo $item['username'] ?>">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name='name' placeholder="Name" value="<?php echo $item['name'] ?>">
        </div>
        
        <div class="form-group">
            <input type="password" class="form-control" name='password' placeholder="Password" value="<?php echo md5($item['password']) ?>">
        </div>

        <div class="form-group">
            <button  type="submit" class="btn btn-primary" name='submit'>Save</button>
        </div>
        <?php endforeach;?> 
    </form>
    </div>
    <div class="col-4"></div>
</div>
</div>
</div>
</div>

