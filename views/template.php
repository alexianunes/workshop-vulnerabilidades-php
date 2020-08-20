<?php include('_header.php'); ?>
<body>
<?php $this->loadViewInTemplate($viewName, $viewData); ?>


<div class="modal_bg" style="display:none">
	<div class="modal_area">
		...
	</div>
</div>

<script type="text/javascript">
var BASE_URL = '<?php echo BASE_URL; ?>';
var group_list = <?php echo json_encode($viewData['current_groups']); ?>;
</script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/chat.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>

<?php include('_footer.php'); ?>