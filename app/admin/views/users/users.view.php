<section class="information_panel">

    <div class="path">
        <p><i class="fa fa-home" aria-hidden="true"></i> > Users</p>
    </div>

    <div class="only_one">
        <table class="six_columns">
            <caption>Users<a href="<?php echo BASE_URL.'admin/users/add'; ?>"><button title="Create user"><i class="fa fa-plus-circle" aria-hidden="true"></i></button></a></caption>
            <thead>
            <tr>
                <th>#</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Username</th>
                <th>Email</th>
                <th class="important_one">Status</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?php echo $user['id']; ?></td>
                    <td><?php echo $user['firstname']; ?></td>
                    <td><?php echo $user['lastname']; ?></td>
                    <td><?php echo $user['username']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                    <?php
                    if($user['status'] == -1) {
                        $status = 'rejected';
                    }
                    if($user['status'] == 0) {
                        $status = 'pending';
                    }
                    if($user['status'] == 1) {
                        $status = 'done';
                    }
                    echo "<td><span class=".$status.">".ucfirst($status)."</span>";
                    ?>
                    <a href="<?php echo BASE_URL.'admin/users/update/'.$user['id']; ?>"><button title="Modify"><i class="fa fa-cogs" aria-hidden="true"></i></button></a>
                    <button class="Delete" title="Delete" value="<?php echo BASE_URL.'admin/users/delete/'.$user['id']; ?>"><i class="fa fa-times" aria-hidden="true"></i></button>
                    </td>
                </tr>
            <?php endforeach ?>
            </tbody>
        </table>

        <button class="view_more">view more</button>

    </div>

</section>