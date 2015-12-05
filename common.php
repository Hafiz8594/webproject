<?php // common.php
 
function message($msg) {
?>
<html>
<head>
  <script language="JavaScript">
  <!--
  alert("<?=$msg?>");
  history.back();
  //setTimeout(function () { window.location.reload(); }, 10);
  //-->
  </script>
</head>
<body>
</body>
</html>

<?php
exit;
}
?>