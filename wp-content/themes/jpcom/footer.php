<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage jpcom
 * @since jpcom 1.0
 */
?>
	</main>
	</content>
	<footer class="page-footer">

	<h1>Odkazy</h1>
	<div id="links">
			<ul>
					<li><a target="_blank" href="http://www.linkedin.com/in/jiriprihoda">linked-in</a></li>
					<li><a target="_blank" href="http://www.dribbble.com/mawrhis">dribble</a></li>
					<li><a target="_blank" href="http://www.github.com/mawrhis">github</a></li>
					<li><a target="_blank" href="http://www.tmsecomix.com">tmsecomix.com</a></li>
					<li><a target="_blank" href="http://www.kazdydenjekrasny.cz">kazdydenjekrasny.cz</a></li>
			</ul>
	</div>

	<div id="sandbox">
	tenhle web je pískoviště.

	</div>

	<div id="sandbox-mouseover">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sandbox.svg">
		Tenhle web je pískoviště. Nikdy nebude hotový, pořád na něm něco upravuji, tvořím a učím se na něm nové věci. Pokud vás zajímají detaily, můžete se podívat na <a href="https://github.com/mawrhis/jpcom/blob/master/wp-content/themes/jpcom/todo.md	">todo list</a>
	</div>

<?php wp_footer(); ?>
	</footer>
</body>
</html>

