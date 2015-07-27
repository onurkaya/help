<!DOCTYPE html>
<html lang="tr">
<head>
  <meta http-equiv="Content-Type" content="text/HTML; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <!--[if lt IE 9]>
  <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <form id="form-ekle">
        <div class="form-group">
          <label>Teşhis adı</label>
          <input type="text" class="form-control" name="teshis_adi" placeholder="Teşhis adı">
        </div>
        <button type="button" class="btn btn-success" onclick="ajax_teshis_ekle(); return false;">Ekle</button>
      </form>
      <div id="ajax-response"></div>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-12">
      <table class="table table-striped table-hover table-condensed">
        <thead>
          <tr>
            <th>Teşhis</th>
            <th>İşlemler</th>
          </tr>
        </thead>
        <tbody id="ajax-tbody">
          <tr id="data-id-1">
            <td>İşlem adı</td>
            <td>
              <div class="btn-group" role="group" aria-label="...">
                <button type="button" class="btn btn-default btn-xs" onclick="ajax_teshis_duzenle(1); return false;">Düzenle</button>
                <button type="button" class="btn btn-danger btn-xs" onclick="ajax_teshis_sil(1); return false;">Sil</button>
              </div>
            </td>
          </tr>
          <tr id="data-id-2">
            <td>İşlem adı</td>
            <td>
              <div class="btn-group" role="group" aria-label="...">
                <button type="button" class="btn btn-default btn-xs" onclick="ajax_teshis_duzenle(2); return false;">Düzenle</button>
                <button type="button" class="btn btn-danger btn-xs" onclick="ajax_teshis_sil(2); return false;">Sil</button>
              </div>
            </td>
          </tr>
          <tr id="data-id-3">
            <td>İşlem adı</td>
            <td>
              <div class="btn-group" role="group" aria-label="...">
                <button type="button" class="btn btn-default btn-xs" onclick="ajax_teshis_duzenle(3); return false;">Düzenle</button>
                <button type="button" class="btn btn-danger btn-xs" onclick="ajax_teshis_sil(3); return false;">Sil</button>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script>
  function ajax_teshis_ekle() {
    $("#ajax-response").html("<div class=\"alert alert-info\">Lütfen bekleyiniz, işlem devam ediyor.</div>").fadeIn("fast");
    $.ajax({
      type: "POST",
      url: "ajax/teshis_ekle.php",
      data: $("#form-ekle").serialize(),
      success: function(view) {$("#ajax-response").html(view).fadeIn("fast");},
      error: function(xhr, ajaxOptions, thrownError) {$("#ajax-response").html(xhr.responseText).fadeIn("fast");}
    });
  }

  function ajax_teshis_duzenle(data_id) {
    $("#data-id-"+data_id).html("<div class=\"alert alert-info\">Lütfen bekleyiniz, işlem devam ediyor.</div>").fadeIn("fast");
    $.ajax({
      type: "GET",
      url: "ajax/teshis_duzenle.php",
      data: "data_id="+data_id,
      success: function(view) {$("#data-id-"+data_id).html(view).fadeIn("fast");},
      error: function(xhr, ajaxOptions, thrownError) {$("#data-id-"+data_id).html(xhr.responseText).fadeIn("fast");}
    });
  }

  function ajax_teshis_update(data_id) {
    $("#data-id-"+data_id).html("<div class=\"alert alert-info\">Lütfen bekleyiniz, işlem devam ediyor.</div>").fadeIn("fast");
    $.ajax({
      type: "POST",
      url: "ajax/teshis_update.php",
      data: $("#form-edit").serialize(),
      success: function(view) {$("#data-id-"+data_id).html(view).fadeIn("fast");},
      error: function(xhr, ajaxOptions, thrownError) {$("#data-id-"+data_id).html(xhr.responseText).fadeIn("fast");}
    });
  }

  function ajax_teshis_sil(data_id) {
    $("#ajax-response").html("<div class=\"alert alert-info\">Lütfen bekleyiniz, işlem devam ediyor.</div>").fadeIn("fast");
    $.ajax({
      type: "POST",
      url: "ajax/teshis_sil.php",
      data: "data_id="+data_id,
      success: function(view) {$("#ajax-response").html(view).fadeIn("fast");},
      error: function(xhr, ajaxOptions, thrownError) {$("#ajax-response").html(xhr.responseText).fadeIn("fast");}
    });
  }

</script>
</body>
</html>