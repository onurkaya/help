<?php
/**
 * Created by PhpStorm.
 * User: Webmaster
 * Date: 27.07.2015
 * Time: 12:35
 */

$teshis_id = isset($_POST['data_id']) ? $_POST['data_id'] : '';
$teshis_adi = isset($_POST['teshis_adi']) ? $_POST['teshis_adi'] : '';

if ($teshis_id == "" || is_null($teshis_id)) {
    echo '<td colspan="2"><div class="alert alert-danger">Lütfen teşhis seçiniz.</div></td>';
} else {
    ?>
    <td colspan="2">
        <?php
            // Eğer teşhis adını boş bıraktıysa
            if ($teshis_adi == "" || is_null($teshis_adi)) {
?>
                <form id="form-edit">
                    <div class="input-group has-error">
                        <input type="text" class="form-control" name="teshis_adi" placeholder="Teşhis adı">
                        <span class="input-group-btn">
                            <button class="btn btn-success" type="button" onclick="ajax_teshis_update(<?=$teshis_id?>); return false;">Kaydet</button>
                            <button class="btn btn-default" type="button">İptal</button>
                        </span>
                    </div>
                    <!-- /input-group -->
                </form>
<?php
            } else {
?>
            <td><?=$teshis_adi?></td>
            <td>
              <div class="btn-group" role="group" aria-label="...">
                <button type="button" class="btn btn-default btn-xs" onclick="ajax_teshis_duzenle(<?=$teshis_id?>); return false;">Düzenle</button>
                <button type="button" class="btn btn-danger btn-xs" onclick="ajax_teshis_sil(<?=$teshis_id?>); return false;">Sil</button>
              </div>
            </td>
                <?php
            }
        ?>
    </td>
    <script>
        $(document).ready(function() {

        });
    </script>
    <?php
}