<script>
// Import PHP variables into JavaScript
var SCRIPT_DIR = <?php echo json_encode(URL . SCRIPT_DIR) ?>;
var IMAGE_DIR = <?php echo json_encode(URL . IMAGE_DIR) ?>;
</script>
<script src="<?php echo URL . SCRIPT_DIR?>.js"></script>
</body>
</html>