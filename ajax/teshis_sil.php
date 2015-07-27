<?php
/**
 * Created by PhpStorm.
 * User: Webmaster
 * Date: 27.07.2015
 * Time: 12:35
 */

$teshis_id = isset($_POST['data_id']) ? $_POST['data_id'] : '';

if ($teshis_id == "" || is_null($teshis_id)) {
    echo '<div class="alert alert-danger">Lütfen teşhis seçiniz.</div>';
} else {
    echo '<div class="alert alert-success">Teşhis silindi.</div>';
    ?>
    <script>
        $(document).ready(function() {
            $("#data-id-<?=$teshis_id?>").fadeOut("fast");
        });
    </script>
    <?php
}