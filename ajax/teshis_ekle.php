<?php
/**
 * Created by PhpStorm.
 * User: Webmaster
 * Date: 27.07.2015
 * Time: 12:35
 */

$teshis_adi = isset($_POST['teshis_adi']) ? $_POST['teshis_adi'] : '';

if ($teshis_adi == "" || is_null($teshis_adi)) {
    echo '<div class="alert alert-danger">Lütfen teşhis adını yazınız.</div>';
} else {
    echo '<div class="alert alert-success">Teşhis eklendi.</div>';
?>
    <script>
        $(document).ready(function() {
            $("#ajax-tbody").append("<tr><td><?=$teshis_adi?></td><td><div class=\"btn-group\" role=\"group\" aria-label=\"...\"><button type=\"button\" class=\"btn btn-default btn-xs\">Düzenle</button><button type=\"button\" class=\"btn btn-danger btn-xs\">Sil</button></div></td></tr>");
        });
    </script>
<?php
}