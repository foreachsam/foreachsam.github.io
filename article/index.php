<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

<title>foreachsam</title>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.8/semantic.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.8/semantic.min.js"></script>


<style>
body {
	background-color: #eee;
	color: #707070;
	font-family: sans-serief;
}
main {
	margin-top: 50px;
	margin-bottom: 50px;
	min-height: 100vh;
}
</style>

<?php
	//http://schema.org/docs/gs.html#microdata_how
	//http://schema.org/docs/schemas.html
	//http://schema.org/docs/full.html

	$list = array();

	$item = array();
	$item['title'] = 'coreutils 使用筆記';
	$item['url'] = '/book-util-coreutils/';
	$item['description'] = 'coreutils 使用筆記';
	$item['color'] = 'green';
	$item['icon'] = 'book';
	$item['type'] = 'Book';
	$list[] = $item;

	$item = array();
	$item['title'] = 'binutils 使用筆記';
	$item['url'] = '/book-util-binutils/';
	$item['description'] = 'binutils 使用筆記';
	$item['color'] = 'blue';
	$item['icon'] = 'book';
	$item['type'] = 'Book';
	$list[] = $item;

	$item = array();
	$item['title'] = 'util-linux 使用筆記';
	$item['url'] = '/book-util-kmod/';
	$item['description'] = 'util-linux 使用筆記';
	$item['color'] = 'pink';
	$item['icon'] = 'book';
	$item['type'] = 'Book';
	$list[] = $item;

	$item = array();
	$item['title'] = 'kmod 使用筆記';
	$item['url'] = '/book-util-kmod/';
	$item['description'] = 'kmod 使用筆記';
	$item['color'] = 'red';
	$item['icon'] = 'book';
	$item['type'] = 'Book';
	$list[] = $item;

	$item = array();
	$item['title'] = 'man 使用筆記';
	$item['url'] = '/book-util-man/';
	$item['description'] = 'man 使用筆記';
	$item['color'] = 'blue';
	$item['icon'] = 'book';
	$item['type'] = 'Book';
	$list[] = $item;

	$item = array();
	$item['title'] = 'manpages 索引';
	$item['url'] = '/book-doc-manpages/';
	$item['description'] = 'manpages 索引';
	$item['color'] = 'green';
	$item['icon'] = 'book';
	$item['type'] = 'Book';
	$list[] = $item;

	$item = array();
	$item['title'] = 'Fcitx 使用筆記';
	$item['url'] = '/book-util-fcitx/';
	$item['description'] = 'Fcitx 使用筆記';
	$item['color'] = 'yellow';
	$item['icon'] = 'book';
	$item['type'] = 'Book';
	$list[] = $item;

	$item = array();
	$item['title'] = 'im-config 使用筆記';
	$item['url'] = '/book-util-im-config/';
	$item['description'] = 'im-config 使用筆記';
	$item['color'] = 'pink';
	$item['icon'] = 'book';
	$item['type'] = 'Book';
	$list[] = $item;

	$item = array();
	$item['title'] = 'Jekyll Theme Kula';
	$item['url'] = '/theme-jekyll-kula/';
	$item['description'] = 'Jekyll Theme Kula';
	$item['color'] = 'teal';
	$item['icon'] = 'theme';
	$item['type'] = 'CreativeWork';
	$list[] = $item;

	$item = array();
	$item['title'] = 'Jekyll Theme Semi';
	$item['url'] = '/theme-jekyll-semi/';
	$item['description'] = 'Jekyll Theme Semi';
	$item['color'] = 'red';
	$item['icon'] = 'theme';
	$item['type'] = 'CreativeWork';
	$list[] = $item;

	$item = array();
	$item['title'] = 'D-Bus 使用筆記';
	$item['url'] = '/book-util-dbus/';
	$item['description'] = 'D-Bus 使用筆記';
	$item['color'] = 'blue';
	$item['icon'] = 'book';
	$item['type'] = 'Book';
	$list[] = $item;

	$item = array();
	$item['title'] = 'GNU Wget 使用筆記';
	$item['url'] = '/book-util-wget/';
	$item['description'] = 'GNU Wget 使用筆記';
	$item['color'] = 'brown';
	$item['icon'] = 'book';
	$item['type'] = 'Book';
	$list[] = $item;

	$item = array();
	$item['title'] = 'dpkg 使用筆記';
	$item['url'] = '/book-util-dpkg/';
	$item['description'] = 'dpkg 使用筆記';
	$item['color'] = 'pink';
	$item['icon'] = 'book';
	$item['type'] = 'Book';
	$list[] = $item;

	$item = array();
	$item['title'] = 'apt 使用筆記';
	$item['url'] = '/book-util-apt/';
	$item['description'] = 'apt 使用筆記';
	$item['color'] = 'red';
	$item['icon'] = 'book';
	$item['type'] = 'Book';
	$list[] = $item;

	$item = array();
	$item['title'] = 'Ubuntu snap 使用筆記';
	$item['url'] = '/book-util-snap/';
	$item['description'] = 'Ubuntu snap 使用筆記';
	$item['color'] = 'teal';
	$item['icon'] = 'book';
	$item['type'] = 'Book';
	$list[] = $item;

	$item = array();
	$item['title'] = 'DConf 使用筆記';
	$item['url'] = '/book-util-dconf/';
	$item['description'] = 'DConf 使用筆記';
	$item['color'] = 'yellow';
	$item['icon'] = 'book';
	$item['type'] = 'Book';
	$list[] = $item;

	$item = array();
	$item['title'] = 'Gsettings 使用筆記';
	$item['url'] = '/book-util-gsettings/';
	$item['description'] = 'Gsettings 使用筆記';
	$item['color'] = 'green';
	$item['icon'] = 'book';
	$item['type'] = 'Book';
	$list[] = $item;

	$item = array();
	$item['title'] = 'Elixir 學習筆記';
	$item['url'] = '/book-lang-elixir/';
	$item['description'] = 'Elixir 學習筆記';
	$item['color'] = 'purple';
	$item['icon'] = 'book';
	$item['type'] = 'Book';
	$list[] = $item;

	$item = array();
	$item['title'] = 'Erlang 學習筆記';
	$item['url'] = '/book-lang-erlang/';
	$item['description'] = 'Erlang 學習筆記';
	$item['color'] = 'pink';
	$item['icon'] = 'book';
	$item['type'] = 'Book';
	$list[] = $item;

	$item = array();
	$item['title'] = 'GNU Make 使用筆記';
	$item['url'] = '/book-util-make/';
	$item['description'] = 'GNU Make 使用筆記';
	$item['color'] = 'brown';
	$item['icon'] = 'book';
	$item['type'] = 'Book';
	$list[] = $item;

	$item = array();
	$item['title'] = 'GNU Bash 學習筆記';
	$item['url'] = '/book-lang-bash/';
	$item['description'] = 'GNU Bash 學習筆記';
	$item['color'] = 'pink';
	$item['icon'] = 'book';
	$item['type'] = 'Book';
	$list[] = $item;

	$item = array();
	$item['title'] = 'MkDocs 使用筆記';
	$item['url'] = '/book-util-mkdocs/';
	$item['description'] = 'MkDocs 使用筆記';
	$item['color'] = 'teal';
	$item['icon'] = 'book';
	$item['type'] = 'Book';
	$list[] = $item;

	$item = array();
	$item['title'] = 'Gitbook 使用筆記';
	$item['url'] = '/book-util-gitbook/';
	$item['description'] = 'Gitbook 使用筆記';
	$item['color'] = 'red';
	$item['icon'] = 'book';
	$item['type'] = 'Book';
	$list[] = $item;

	$item = array();
	$item['title'] = 'Atom Editor 使用筆記';
	$item['url'] = '/book-editor-atom/';
	$item['description'] = 'Atom Editor 使用筆記';
	$item['color'] = 'orange';
	$item['icon'] = 'book';
	$item['type'] = 'Book';
	$list[] = $item;

	$item = array();
	$item['title'] = 'Vala 學習筆記';
	$item['url'] = '/book-lang-vala/';
	$item['description'] = 'Vala 學習筆記';
	$item['color'] = 'yellow';
	$item['icon'] = 'book';
	$item['type'] = 'Book';
	$list[] = $item;

	$item = array();
	$item['title'] = 'PyGI 學習筆記';
	$item['url'] = '/book-lang-python-pygi/';
	$item['description'] = 'PyGI 學習筆記';
	$item['color'] = 'olive';
	$item['icon'] = 'book';
	$item['type'] = 'Book';
	$list[] = $item;

	$item = array();
	$item['title'] = 'Gjs 學習筆記';
	$item['url'] = '/book-lang-javascript-gjs/';
	$item['description'] = 'Gjs 學習筆記';
	$item['color'] = 'green';
	$item['icon'] = 'book';
	$item['type'] = 'Book';
	$list[] = $item;

	$item = array();
	$item['title'] = 'PHP Exploration';
	$item['url'] = '/blog-lang-php/';
	$item['description'] = 'PHP Exploration';
	$item['color'] = 'teal';
	$item['icon'] = 'file';
	$item['type'] = 'Blog';
	$list[] = $item;

	$item = array();
	$item['title'] = 'Semantic UI Exploration';
	$item['url'] = '/blog-framework-semantic-ui/';
	$item['description'] = 'Semantic UI Exploration';
	$item['color'] = 'blue';
	$item['icon'] = 'file';
	$item['type'] = 'Blog';
	$list[] = $item;

	$item = array();
	$item['title'] = 'Materializecss Exploration';
	$item['url'] = '/blog-framework-materializecss/';
	$item['description'] = 'Materializecss Exploration';
	$item['color'] = 'violet';
	$item['icon'] = 'file';
	$item['type'] = 'Blog';
	$list[] = $item;

	$item = array();
	$item['title'] = 'Windwalker Framework Exploration';
	$item['url'] = '/blog-framework-windwalker/';
	$item['description'] = 'Windwalker Framework Exploration';
	$item['color'] = 'purple';
	$item['icon'] = 'file';
	$item['type'] = 'Blog';
	$list[] = $item;

	$item = array();
	$item['title'] = 'GitHub - foreachsam';
	$item['url'] = 'https://github.com/foreachsam';
	$item['description'] = 'GitHub - foreachsam';
	$item['color'] = 'black';
	$item['icon'] = 'github';
	$item['type'] = 'Code';
	$list[] = $item;

?>

</head>
<body>


<main>

	<div class="ui stackable grid container">

		<div class="three wide column">

		</div>

		<div class="ten wide column">

<?php

	foreach ($list as $key => $item) {

?>
			<div class="ui <?php echo $item['color']; ?> segment" itemscope="itemscope" itemtype="http://schema.org/<?php echo $item['type']; ?>">

				<div class="ui two column stackable grid">

					<div class="column">
						<a class="ui <?php echo $item['color']; ?> icon button" href="<?php echo $item['url']; ?>" target="_blank" title="<?php echo $item['description']; ?>" itemprop="url">
							<i class="ui <?php echo $item['icon']; ?> massive link icon" itemprop="image"></i>
						</a>
					</div>

					<div class="right aligned column">
						<h2 itemprop="name"><?php echo $item['title']; ?></h2>
					</div>

				</div>

			</div>

<?php
 	} // End foreach
?>

		</div>


	</div>

</main>


<script type="text/javascript">
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-56999876-1', 'auto');
ga('send', 'pageview');
</script>


<?php
/*

//http://cdnjs.com/libraries/semantic-ui
//http://semantic-ui.com/elements/segment.html#colored
<div class="ui red segment">Red</div>
<div class="ui orange segment">Orange</div>
<div class="ui yellow segment">Yellow</div>
<div class="ui olive segment">Olive</div>
<div class="ui green segment">Green</div>
<div class="ui teal segment">Teal</div>
<div class="ui blue segment">Blue</div>
<div class="ui violet segment">Violet</div>
<div class="ui purple segment">Purple</div>
<div class="ui pink segment">Pink</div>
<div class="ui brown segment">Brown</div>
<div class="ui grey segment">Grey</div>
<div class="ui black segment">Black</div>
*/
?>

</body>
</html>
