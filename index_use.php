<?php $section = "docs"; $dsection = "use"; $dpage = "index_use"; include '../include/header.php' ?>
<div class="row main">
    <div class="col-md-3">
        <?php include ('docsnav.php') ?>
    </div>
    <div class="col-md-9">
        <h1>Use Luna</h1>
        <div class="row">
            <div class="col-6 col-md-4">
                <div class="list-group">
                    <h5 class="list-group-header"><i class="fal fa-fw fa-moon"></i> Get started</h5>
                    <a class="list-group-item" href="install.php">Installation</a>
                    <a class="list-group-item" href="setup.php">Setting up your board</a>
                    <a class="list-group-item" href="upgrading.php">Updating</a>
                    <h5 class="list-group-header"><i class="fal fa-fw fa-wrench"></i> Develop</h5>
                    <a class="list-group-item" href="troubleshooting.php">Troubleshooting</a>
                </div>
            </div>
            <div class="col-6 col-md-4">
                <div class="list-group">
                    <h5 class="list-group-header"><i class="fal fa-fw fa-home"></i> Mainstage</h5>
                    <a class="list-group-item" href="editor.php">Editor and BBCode</a>
                    <a class="list-group-item" href="labels.php">Thread labels</a>
                    <h5 class="list-group-header"><i class="fal fa-fw fa-tachometer-alt"></i> Backstage</h5>
                    <a class="list-group-item" href="backstage.php">Using Backstage</a>
                    <a class="list-group-item" href="organizing.php">Organizing</a>
                    <a class="list-group-item" href="admin.php">Administration</a>
                    <a class="list-group-item" href="antispam.php">Fighting Spam</a>
                </div>
            </div>
            <div class="col-6 col-md-4">
                <div class="list-group">
                    <h5 class="list-group-header"><i class="fal fa-fw fa-paint-brush"></i> Customize</h5>
                    <a class="list-group-item" href="fontawesome.php">Font Awesome</a>
                    <a class="list-group-item" href="customizing.php">Customizing</a>
                    <h5 class="list-group-header"><i class="fal fa-fw fa-info-circle"></i> General</h5>
                    <a class="list-group-item" href="cookies.php">Cookies</a>
                    <a class="list-group-item" href="data.php">Data collection</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include '../include/footer.php' ?>