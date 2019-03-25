<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<div id="users">
    <div class="col-md-12">
        <form method='post' action="index.php?action=login">
            <input type="submit" value="Logout" name="but_logout" class="btn btn-sm btn-success float-right">
        </form>
        <div class="pull-right">
            <a href="index.php?action=add"><i class="material-icons">add</i></a> &nbsp;
        </div>
    </div>
    <form action="index.php?action=get_form_data" method="POST" class="mt-4 p-3">
        <table class="table-bordered col-md-12 table-striped">
        <thead class="bg-info text-light">
            <th class="sort text-center">ID</th>
            <th class="sort text-center" data-sort="fname">Student Name</th>
            <th class="sort text-center" data-sort="age">Name</th>
            <th class="sort text-center" data-sort="salary">Password</th>
            <th class="sort text-center">Action</th>
            </thead>
            <!-- IMPORTANT, class="list" have to be at tbody -->
            <tbody class="list text-center">
                             <?php
                            
                              foreach ($data['data'] as $item): 
                                ?>
                                <tr> 
                                  <td><?php echo $item['id'] ?></td>
                                  <td><?php echo $item['username']?></td>
                                  <td><?php echo $item['name'] ?></td>
                                  <td><?php echo md5($item['password']) ?></td>
                        <td>
                            <a href="index.php?action=delete&id=<?php echo $item['id']?>" class="text-danger"><i class="material-icons">delete</i></a>&nbsp;
                            <a href="index.php?action=update&id=<?php echo $item['id']?>" class="text-success"><i class="material-icons">edit</i></a><br>
                        </td>
                    </tr>
                    <?php 
                   
                endforeach; 
                ?>
            </tbody>
        </table>
    </form>
</div>

