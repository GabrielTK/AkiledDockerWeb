<!DOCTYPE html>
<html lang="en">
<?php
include_once "includes/head.php";
$_SESSION['title'] = '';
$_SESSION['slogan'] = '';
$_SESSION['news'] = '';
admin::CheckRank(17);
?>

<body>

    <?php
    include_once "includes/navi.php";
    include_once "includes/header.php";

    ?>


    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Seciones del catalogo</h4>
                            <p class="card-description">Gestor de seciones del catalogo</p>
                            <!--   <a href="/adminpan/addcatalogsection" class="btn active" role="button" aria-pressed="true" style="background-color:#4272d7;color:#FFFFFF;">Añadir sección</a>-->

                            <?php admin::DeleteCatalogPage(); ?>
                            <?php if (User::userData('rank') > '10') { ?>
                                <center>
                                    <div class="table-responsive ">
                                        <table class="table  table-condensed" id="tableprueba" style="">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Icono</th>
                                                    <th>Nombre</th>
                                                    <th>Editar</th>
                                                </tr>

                                            </thead>

                                            <tbody>
                                                <?php
                                                $getpages = $dbh->prepare("SELECT * FROM roleplay_items");
                                                $getpages->execute();

                                                while ($pages = $getpages->fetch()) {
                                                ?>

                                                    <tr style="color:#6c7293; background:#191c24">
                                                        <td> <?php echo $pages["id"]; ?></td>

                                                        <td><img src="<?php echo $config["hotelUrl"]; ?>/items/<?php echo $pages["name"]; ?>.png" /></td>
                                                        <td><?php echo $pages["name"]; ?></td>
                                                        <td>
                                                            <center><a type="button" class="btn btn-info" href="<?php echo $config['hotelUrl']; ?>/adminpan/editroleplay/<?php echo $pages["id"]; ?>">Editar</center></a>
                                                        </td>


                                                    </tr>
                                                <?php } ?>




                                            </tbody>
                                        </table>
                                </center>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
        </div>


        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <?php
        include_once "includes/footer.php";
        ?>
        <!-- container-scroller -->

        <!-- End custom js for this page -->

        <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" />
        <script type="text/javascript" src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#tableprueba').DataTable();
            });
        </script>
</body>


</html>