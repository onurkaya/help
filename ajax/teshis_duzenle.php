<?php
/**
 * Created by PhpStorm.
 * User: Webmaster
 * Date: 27.07.2015
 * Time: 12:35
 */

$teshis_id = isset($_GET['data_id']) ? $_GET['data_id'] : '';

if ($teshis_id == "" || is_null($teshis_id)) {
    echo '<td colspan="2"><div class="alert alert-danger">Lütfen teşhis seçiniz.</div></td>';
} else {
    ?>
    <td colspan="2">
        <form id="form-edit">
            <input type="hidden" name="data_id" value="<?=$teshis_id?>">
            <div class="input-group">
                <input type="text" class="form-control" name="teshis_adi" placeholder="Teşhis adı">
                <span class="input-group-btn">
                    <button class="btn btn-success" type="button" onclick="ajax_teshis_update(<?=$teshis_id?>); return false;">Kaydet</button>
                    <button class="btn btn-default" type="button">İptal</button>
                </span>
            </div>
            <!-- /input-group -->
        </form>
    </td>
    <script>
        $(document).ready(function() {

        });
    </script>
    <?php
}