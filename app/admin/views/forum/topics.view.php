<header>
    <div class="top_line">
        <p>Welcome <span><?php echo $_SESSION['admin']; ?></span></p>
        <a href="<?php echo BASE_URL.'admin/login/logout'; ?>"><button>Logout</button></a>
    </div>
    <div id="burger_menu">≡</div>
    <nav id="nav_bar" class="nav_bar">
        <li><a href="<?php echo BASE_URL.'admin'; ?>"><i class="fa fa-cube" aria-hidden="true"></i><span>Home</span></a></li>
        <li><a href="<?php echo BASE_URL.'admin/users'; ?>"><i class="fa fa-users" aria-hidden="true"></i><span>Users</span></a></li>
        <li><a href="<?php echo BASE_URL.'admin/medias'; ?>"><i class="fa fa-usb" aria-hidden="true"></i><span>Medias</span></a></li>
        <li><a href="<?php echo BASE_URL.'admin/contents'; ?>"><i class="fa fa-life-ring" aria-hidden="true"></i><span>Pages &amp; Articles</span></a></li>
        <li><a href="<?php echo BASE_URL.'admin/stats'; ?>"><i class="fa fa-line-chart" aria-hidden="true"></i><span>Statistics</span></a></li>
        <li><a href="<?php echo BASE_URL.'admin/management'; ?>"><i class="fa fa-line-chart" aria-hidden="true"></i><span>Forum Management</span></a></li>
        <li><a href="<?php echo BASE_URL.'admin/message'; ?>"><i class="fa fa-line-chart" aria-hidden="true"></i><span>Messages</span></a></li>
        <li><a href="<?php echo BASE_URL.'admin/threads'; ?>"><i class="fa fa-line-chart" aria-hidden="true"></i><span>Threads</span></a></li>
        <li><a href="<?php echo BASE_URL.'admin/topics'; ?>"><i class="fa fa-line-chart" aria-hidden="true"></i><span>Topics</span></a></li>

    </nav>
</header>

<!--
<?php var_dump($topics); ?>

<?php foreach ($topics as $key => $obj): ?>
    <p><?php echo $obj["description"] ?></p>
    <?php foreach ($obj as $id => $data): ?>
        <p><?php echo $id." => ".$data ?></p>
    <?php endforeach ?>
<?php endforeach ?>
-->

<!--Afficher les Topics de maniere correct pour la gestion de l'admin   $id = -1, $name = null, $description = null, $users_id = -1-->

<section class="information_panel">

    <div id="loader"></div>

    <div class="path">
        <p><i class="fa fa-home" aria-hidden="true"></i> > Topics</p>
    </div>

    <div class="only_one">
        <table class="six_columns">
            <caption>Topics<a href="<?php echo BASE_URL.'admin/topics/add'; ?>"><button title="Create topic"><i class="fa fa-plus-circle" aria-hidden="true"></i></button></a></caption>
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Description</th>
                <th>User</th>
                <th>Action</th>
               <!-- <th class="important_one">Status</th>-->
            </tr>
            </thead>
            <tbody>
            <?php foreach ($topics as $topic): ?>
                <tr>
                    <td><?php echo $topic['id']; ?></td>
                    <td><?php echo $topic['name']; ?></td>
                    <td><?php echo $topic['description']; ?></td>
                    <td><?php echo $topic['username']; ?></td>

                    <td>
                    <a href="<?php echo BASE_URL.'admin/topics/update/'.$topic['id']; ?>"><button title="Modify"><i class="fa fa-cogs" aria-hidden="true"></i></button></a>
                    <a href="<?php echo BASE_URL.'admin/topics/delete/'.$topic['id']; ?>"><button title="Delete"><i class="fa fa-times" aria-hidden="true"></i></button></a>
                    </td>
                </tr>
            <?php endforeach ?>
            </tbody>
        </table>

        <button class="view_more">view more</button>

    </div>

</section>