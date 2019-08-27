<?php
function root_url()
{
    // src: https://stackoverflow.com/a/23698212/3705299
    $dirName = dirname(dirname(__FILE__) . ".." . DIRECTORY_SEPARATOR);
    $dirName = str_replace('\\', "/", $dirName);
    return str_replace($_SERVER['DOCUMENT_ROOT'], "", $dirName);
}


?>



<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="<?php echo root_url() ?>/index.php">My Blog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo root_url() ?>/index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo root_url() ?>/admin/login.php">Dashboard</a>
            </li>

        </ul>
    </div>
</nav>