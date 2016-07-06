<?php
/**
 * Шаблон подвала (footer.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>

<!-- open .modal modal__share -->
<div class="modal modal__share">

	<!-- open .modal__box -->
	<div class="modal__box">
		<!-- open .modal__box_decaration -->
		<div class="modal__box_decoration"></div>
		<!-- close .modal__box_decaration -->
		<h3>СВЯЖИСЬ.</h3>
		<input type="email" name="modal__share_email" class="modal__input" placeholder="Your email adress" />
		<button type="submit" class="modal__btn">Хочу участвовать</button>
	</div>
	<!-- close .modal__box -->
</div>
<!-- close .modal modal__share -->

<?php wp_footer(); // необходимо для работы плагинов и функционала  ?>
</body>
</html>