<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

<title>foreachsam.github.io</title>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.6/semantic.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.6/semantic.min.js"></script>


<style>
body {
  background-color: #eee;
  color: #707070;
  font-family: sans-serief;
}
</style>

<?php
	$list = array();

	$item = array();
	$item['title'] = 'Gitbook 使用筆記';
	$item['url'] = '/book-util-gitbook/';
	$item['description'] = 'Gitbook 使用筆記';
	$item['color'] = 'red';
	$item['icon'] = 'book';
	$list[] = $item;

	$item = array();
	$item['title'] = 'Atom 使用筆記';
	$item['url'] = '/book-editor-atom/';
	$item['description'] = 'Atom 使用筆記';
	$item['color'] = 'orange';
	$item['icon'] = 'book';
	$list[] = $item;

	$item = array();
	$item['title'] = 'Vala 學習筆記';
	$item['url'] = '/book-lang-vala/';
	$item['description'] = 'Vala 學習筆記';
	$item['color'] = 'yellow';
	$item['icon'] = 'book';
	$list[] = $item;

	$item = array();
	$item['title'] = 'PyGI 學習筆記';
	$item['url'] = '/book-lang-python-pygi/';
	$item['description'] = 'PyGI 學習筆記';
	$item['color'] = 'olive';
	$item['icon'] = 'book';
	$list[] = $item;

	$item = array();
	$item['title'] = 'Gjs 學習筆記';
	$item['url'] = '/book-lang-javascript-gjs/';
	$item['description'] = 'Gjs 學習筆記';
	$item['color'] = 'green';
	$item['icon'] = 'book';
	$list[] = $item;

	$item = array();
	$item['title'] = 'PHP Exploration';
	$item['url'] = '/blog-lang-php/';
	$item['description'] = 'PHP Exploration';
	$item['color'] = 'teal';
	$item['icon'] = 'file';
	$list[] = $item;

	$item = array();
	$item['title'] = 'Semantic UI Exploration';
	$item['url'] = '/blog-framework-semantic-ui/';
	$item['description'] = 'Semantic UI Exploration';
	$item['color'] = 'blue';
	$item['icon'] = 'file';
	$list[] = $item;

    $item = array();
	$item['title'] = 'Materializecss Exploration';
	$item['url'] = '/blog-framework-materializecss/';
	$item['description'] = 'Materializecss Exploration';
	$item['color'] = 'violet';
	$item['icon'] = 'file';
	$list[] = $item;

	$item = array();
	$item['title'] = 'Windwalker Framework Exploration';
	$item['url'] = '/blog-framework-windwalker/';
	$item['description'] = 'Windwalker Framework Exploration';
	$item['color'] = 'purple';
	$item['icon'] = 'file';
	$list[] = $item;

	$item = array();
	$item['title'] = 'Github - foreachsam';
	$item['url'] = 'https://github.com/foreachsam';
	$item['description'] = 'Github - foreachsam';
	$item['color'] = 'pink';
	$item['icon'] = 'github';
	$list[] = $item;

?>

</head>
<body>



<div class="ui one column stackable page grid center aligned" style="margin-top: 10px;">
	<div class="sixteen column wide">
		<div style="text-align:center">

<?php

	foreach ($list as $key => $item) {

?>
			<div class="ui <?php echo $item['color']; ?> four column segment" style="text-align:left">

					<a class="ui <?php echo $item['color']; ?> icon button" href="<?php echo $item['url']; ?>" target="_blank" title="<?php echo $item['title']; ?>">
						<i class="ui <?php echo $item['icon']; ?> massive link icon"></i>
					</a>

					<?php echo $item['description']; ?>
			</div>
<?php
 	}
?>


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



		</div>
	</div>
</div>


<script type="text/javascript">
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-56999876-1', 'auto');
ga('send', 'pageview');
</script>

</body>
</html>
