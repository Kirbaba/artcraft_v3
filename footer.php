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
		<input type="email" name="modal__share_email" class="modal__input js-form-email"
		       placeholder="Your email adress"/>
		<button type="submit" class="modal__btn js-send-form">Хочу участвовать</button>
		<button class="modal_close">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 47.971 47.971">
				<path fill="#00abb1" d="M28.228 23.986L47.092 5.122c1.172-1.17 1.172-3.07 0-4.242-1.172-1.172-3.07-1.172-4.242 0L23.986 19.744 5.12.88C3.95-.292 2.05-.292.88.88-.294 2.05-.294 3.95.88 5.122l18.864 18.864L.88 42.85c-1.173 1.17-1.173 3.07 0 4.242.585.585 1.353.878 2.12.878s1.535-.293 2.12-.88l18.866-18.863L42.85 47.09c.586.587 1.354.88 2.12.88s1.536-.293 2.122-.88c1.172-1.17 1.172-3.07 0-4.24L28.228 23.985z"/>
			</svg>
		</button>
		
	</div>
	<!-- close .modal__box -->
</div>
<!-- close .modal modal__share -->

<!-- open .modal modal__share -->
<div class="modal modal__order">

	<!-- open .modal__box -->
	<div class="modal__box">
		<!-- open .modal__box_decaration -->
		<div class="modal__box_decoration"></div>
		<!-- close .modal__box_decaration -->
		<h3>ОФОРМИ.</h3>
		<input type="text" name="modal__share_email" class="modal__input js-order-name"
		       placeholder="Введите ваше имя"/>
		<input type="tel" name="modal__share_email" class="modal__input js-order-phone"
		       placeholder="Введите ваш телефон"/>
		<input type="email" name="modal__share_email" class="modal__input js-order-email"
		       placeholder="Введите ваш E-mail"/>
		<textarea name="message" placeholder="Сообщение" class="modal__input js-order-msg"></textarea>
		<button type="submit" class="modal__btn js-send-order-form">оформить заказ</button>
		<button class="modal_close">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 47.971 47.971">
				<path fill="#00abb1" d="M28.228 23.986L47.092 5.122c1.172-1.17 1.172-3.07 0-4.242-1.172-1.172-3.07-1.172-4.242 0L23.986 19.744 5.12.88C3.95-.292 2.05-.292.88.88-.294 2.05-.294 3.95.88 5.122l18.864 18.864L.88 42.85c-1.173 1.17-1.173 3.07 0 4.242.585.585 1.353.878 2.12.878s1.535-.293 2.12-.88l18.866-18.863L42.85 47.09c.586.587 1.354.88 2.12.88s1.536-.293 2.122-.88c1.172-1.17 1.172-3.07 0-4.24L28.228 23.985z"/>
			</svg>
		</button>

	</div>
	<!-- close .modal__box -->
</div>
<!-- close .modal modal__share -->

<!-- open .modal modal__share -->
<div class="modal modal__project">
	<!-- open .modal__project_image-box -->
	<div class="modal__project_image-box"></div>
	<!-- close .modal__project_image-box -->
	<!-- open .modal__project_content -->
	<div class="modal__project_content">
	</div>
	<!-- close .modal__project_content -->
	<button class="modal__project_close">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 47.971 47.971">
			<path fill="#00abb1" d="M28.228 23.986L47.092 5.122c1.172-1.17 1.172-3.07 0-4.242-1.172-1.172-3.07-1.172-4.242 0L23.986 19.744 5.12.88C3.95-.292 2.05-.292.88.88-.294 2.05-.294 3.95.88 5.122l18.864 18.864L.88 42.85c-1.173 1.17-1.173 3.07 0 4.242.585.585 1.353.878 2.12.878s1.535-.293 2.12-.88l18.866-18.863L42.85 47.09c.586.587 1.354.88 2.12.88s1.536-.293 2.122-.88c1.172-1.17 1.172-3.07 0-4.24L28.228 23.985z"/>
		</svg>
	</button>
		
</div>
<!-- close .modal modal__share -->
<script>if (typeof (turboRn) == "undefined") {
		turboRn = Math.floor(Math.random() * 99999999999);
	}
	turboRn2 = Math.floor(Math.random() * 99999999999);
	document.write('<div id="turbo' + turboRn2 + '"></div>');
	var turboScript = document.createElement('script');
	turboScript.type = 'text/javascript';
	turboScript.async = true;
	var protocol = (window.location.protocol != "https:")? 'http:' : 'https:';
	turboScript.src = protocol + '//engine.turboroller.ru/Route?place=110km-4187' + '&ctx=' + escape(document.title) + '&r=' + turboRn + '&r2=' + turboRn2 + '&ct1=' + document.defaultCharset + '&ct2=' + document.characterSet;
	if (typeof (turboScripts) == "undefined") {
		turboScripts = [turboScript];
		setTimeout(function () {
			var s = document.getElementsByTagName('script')[0];
			for (var i = 0; i < turboScripts.length; i++) s.parentNode.insertBefore(turboScripts[i], s);
		}, 10);
	}
	else {
		turboScripts.push(turboScript);
	}</script>
<?php wp_footer(); // необходимо для работы плагинов и функционала  ?>
</body>
</html>