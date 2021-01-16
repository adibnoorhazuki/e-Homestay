<?php
session_start();
session_destroy();
?>
<script type="text/javascript">
alert("<?php echo "You are succesfully logout from the system.."; ?>");
window.location="test.php";
</script>