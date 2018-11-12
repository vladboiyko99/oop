<!DOCTYPE HTML>
<html lang="ru">
  <head>
  <meta charset="utf-8"/> 
  <title>Гостевая книга</title>
</head>
<body>
  <header>

  </header>
  <form method='post'>
	<input type='text' name='login' placeholder='Введите ваше имя'>
	<br>
	<br>
	<textarea name='text' placeholder='Введите ваш текст'></textarea>
	<br>
	<br>
	<input type='submit' value='Отправить'>
  </form>
  <br>
	<?if (empty($myrow)) : ?>
	<p>Нет записей</p>
	<? else : ?>
		<?foreach ($myrow as $key=>$vol) :?>
			<article>
			<header><?=$myrow[$key]['user']?></header>
			<?=$myrow[$key]['text']?>
			<footer><?=$myrow[$key]['data']?></footer>
			</article>
		<? endforeach ;?>
	<? endif ; ?>
  
  
  <footer>

  </footer>
</body>
</html>