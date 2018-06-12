<?php $section = "docs"; $dsection = "for"; $dpage = "index_develop_for"; include '../include/header.php' ?>
<div class="row main">
    <div class="col-md-3">
        <?php include ('docsnav.php') ?>
    </div>
    <div class="col-md-9">
        <h1>Develop for Luna</h1>
        <div class="row">
            <div class="col-6 col-md-4">
                <div class="list-group">
                    <h5 class="list-group-header"><i class="fal fa-fw fa-paint-brush"></i> Customize</h5>
                    <a class="list-group-item" href="themes.php">Themes</a>
                    <a class="list-group-item" href="plugins.php">Plugins</a>
                    <a class="list-group-item" href="translations.php">Language packs</a>
                </div>
            </div>
            <div class="col-6 col-md-4">
                <div class="list-group">
                    <h5 class="list-group-header"><i class="fal fa-fw fa-wrench"></i> Develop</h5>
                    <a class="list-group-item" href="troubleshooting.php">Troubleshooting</a>
                </div>
            </div>
            <div class="col-6 col-md-4">
                <div class="list-group">
                    <h5 class="list-group-header"><i class="fal fa-fw fa-bookmark"></i> References</h5>
                    <a class="list-group-item" href="constants.php">Constants</a>
                    <a class="list-group-item" href="dbstructure.php">Database structure</a>
                    <a class="list-group-item" href="dblayer.php">Database layer</a>
                    <a class="list-group-item" href="variables.php">Global variables</a>
                    <a class="list-group-item" href="functions.php">Functions</a>
                    <a class="list-group-item" href="caching.php">Caching</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include '../include/footer.php' ?>