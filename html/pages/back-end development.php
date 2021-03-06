<!DOCTYPE html>
<html>
<head>
		<title>PHP</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../css/main.css">
		<link rel="stylesheet" href="../css/main-header.css">
		<link rel="stylesheet" href="../css/madia.css">
		<link rel="stylesheet" href="../css/fonts.css">
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic&subset=latin,cyrillic-ext,cyrillic' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Raleway:400,300,800,500,600' rel='stylesheet' type='text/css'>
		<link rel="shortcut icon" href="img/favicon.ico">
</head>
<body>
	<!--HEADER-->
	<div class="topnav_fixed_block">
		<section>
			<div class="container">
				<nav class="top-nav clearfix">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="site-name logo" href="/">CircleAcademy</a>
					</div>
					<menu class="clearfix">
						<li><a href="#">News</a></li>
						<li class="has-dropdown-menu">
							<a href="#">Courses</a>
							<ul class="dropdown-menu lvl2">
								<li><a href="js-basic.php">js basic</a></li>
								<li><a href="back-end development.php">back&#8209;end&nbsp;development</a></li>
							</ul>
						</li>
						<li><a href="../resource">Resource</a></li>
						<li><a href="#">Playlists</a></li>
						<li><a href="">Schedule</a></li>
						<li><a href="#">amet</a></li>
						<li><a href="login.php">Login</a></li>
					</menu>
				</nav>
			</div>
		</section>
	</div>
	
	<header>

	</header>
	<!--CONTENT-->
	<div class="wrapper">
		<h2>Программа курса</h2>
		<br>
		<ul class="course-list">
			<li><a target="_blank" href="#"> lecture 1</a></li>
			<li><a target="_blank" href="https://drive.google.com/file/d/0BwkTykTI_0gTNmJGZEZGVXRGRm8/view"> lecture 2</a></li>
			<li><a target="_blank" href="https://drive.google.com/file/d/0BwkTykTI_0gTZEZYRl93a0FyS0k/view"> lecture 3 (Операторы и управляющие конструкции)</a></li>
			<li><a target="_blank" href="https://drive.google.com/file/d/0BwkTykTI_0gTUjItcllHNGRfUkk/view"> lecture 4 (Пользовательские функции)</a></li>
			<li>
				<a target="_blank" href="#">lecture 5 is coming</a>
				<ul>
					<li><a target="_blank" href="https://drive.google.com/file/d/0BwkTykTI_0gTTFBVaWVhc0dua3c/view"> lecture 5.1 (Функции работы с файлами)</a></li>
					<li><a target="_blank" href="https://drive.google.com/file/d/0BwkTykTI_0gTRHdZdFJiZTZxQ1k/view"> lecture 5.2 (Функции для работы со строками)</a></li>
					<li><a target="_blank" href="https://drive.google.com/file/d/0BwkTykTI_0gTR3pHN1F0amJuZ1k/view"> lecture 5.3 (Функции для работы с масивами)</a></li>
				</ul>
			</li>
			<li><a target="_blank" href="https://drive.google.com/file/d/0BwkTykTI_0gTMHdmcUQzMWRrbHc/view"> lecture 6 (Технология REST. Методы передачи данных GET и POST)</a></li>
			<li><a target="_blank" href="https://drive.google.com/file/d/0BwkTykTI_0gTSkstT0V2Yzh1N28/view"> lecture 7 (Глобальные переменные)</a></li>
			<li><a target="_blank" href="https://drive.google.com/file/d/0BwkTykTI_0gTZGREcm9uQWVfNVE/view"> lecture 8 (Регулярные выражения)</a></li>
			<li><a target="_blank" href="#"> lecture 9 (что-то о гит)</a></li>
			<li>
				<a target="_blank" href="https://drive.google.com/file/d/0BwkTykTI_0gTUTh3SzNfdS02TUU/view"> lecture 10 (База Данных MySQL)</a>
				<ul>
					<li><a target="_blank" href="https://drive.google.com/file/d/0BwkTykTI_0gTODZ3ZkR2Ujc4bW8/view"> lecture 10.1 (Запросы select, insert, update, delete)</a></li>
					<li><a target="_blank" href="https://drive.google.com/file/d/0BwkTykTI_0gTLUlzNG5DdzlROVU/view"> lecture 10.2 (Индексация баз данных. primery key, index, unique, fulltext)</a></li>
					<li><a target="_blank" href="https://drive.google.com/file/d/0BwkTykTI_0gTbWxqaS0zN01UV1E/view"> lecture 10.3 (MySQL + PHP. LEFT/RIGHT/INNER/OUTER JOIN)</a></li>
				</ul>
			</li>
			<li><a target="_blank" href="https://drive.google.com/file/d/0BwkTykTI_0gTRVA0VTM0VkE2QVE/view"> lecture 11 (Объектно-ориентированный PHP)</a></li>
			<li><a target="_blank" href="#"> lecture 12 ()</a></li>
		</ul>
		<!-- *********************************** -->
		<h2 class="tasks_title">Задачи</h2>
		<p class="exercise">
			1.	Создать папку с файлами  *.php и фалойм index.php.
			В index.php инициализировать масив названий фалов, циклом foreach подключить файлы,
			в случае подключения файла выводить имя файла + 'included' иначе 'File undefined'.
		</p>
		<p class="exercise">
			2.	Инициализирован масив array('h','e','l','l','o');
			Написать скрипт который выведет в результате.
			'olleh' (не используя функцию array_reverse());
		</p>
		<p class="exercise">
			3.	Создайте код, который выводит все простые числа из интервала от 1 до 100 с шагом 2.
			Результат должен быть: 1,3,5,7,11,13,17,19,23,29 ...
		</p>
		<p class="exercise">
			4.	Инициализирована переменная $a со значением скорости передвижения космического корабля a <pre> (0&lt;a&lt;600) </pre>
			В зависимости от значений a определить и вывести траекторию полета космического корабля если нам извесно, что<br>
			(a>=v1, v1=7,9) - космический корабль станет спутником Земли<br>
			(a>=v2, v2=11,2) - космический корабль преодолеет гравитационное притяжение Земли<br>
			(a>=v3, v3=16,650) - космический корабль покинет звёздную систему, преодолев притяжение Сонцы<br>
			(a>=v4, v4=550) - космический корабль покинет галактику<br>
		</p>
		<p class="exercise">
			5.	Последовательность чисел Фибоначчи имеет формулу Fn = Fn-1 + Fn-2. То есть, следующее число получается как сумма двух предыдущих.<br>
			Первые два числа равны 1, затем 2(1+1), затем 3(1+2), 5(2+3) и так далее: 1, 1, 2, 3, 5, 8, 13, 21....<br>
			Напишите функцию fib(n), которая возвращает n-е число Фибоначчи.<br>
		</p>
		<p class="exercise">
			6.	Создать квадратный двумерный массив 10x10 заполнив его случайными числами (rand(0,50)). Посчитать сумму чисел по диагонали от (0;0) до (10;10).
		</p>
		<p class="exercise">
			7.	Создать масив от 0 до 100. Внести в него случайным образом числа rand(0,10). Посчтиать сколько раз какие числа повторяются.
		</p>
		<p class="exercise">
			8. Из файла http://demjan.890m.com/resource/home_work_JSON.json с помощю команды json_decode(file_get_contents($file), true); и скопировать себе в файл
			 people.txt все записи login и password у которых status = 1.<br>
			<a href="http://php.net/manual/ru/function.json-decode.php">json_decode()</a><br>
			json -  текстовый формат обмена данными<br>

		</p>
		<p class="exercise">
			9. Каждый у себя в ФТП директории создает файл: FIO.txt куда вносит свои данные (ФИО).<br>
			Скачать вот этот <a download href="http://demjan.890m.com/resource/Hello.php">файл</a> и залить себе на сервер.<br>

			Нужно создать скрипт который прочитает эти данные в переменную $fio.
			Подключить файл Hello.php.
			Запустить свои скрпит на веб-сервере.
		</p>
		<h2 class="home-work_title tasks_title">Домашка(OOP)</h2>
		<p class="exercise">
			1. Сделайте класс Worker, в котором будут следующие public поля - name (имя), age (возраст), salary (зарплата). Создайте объект этого класса, установите поля в следующие значения - имя 'Иван', возраст 25, зарплата 1000.
		</p>
		<p class="exercise">
			2. Создайте Класс Body, с тремя любыми переменными но с разными областями видимости (public, private, protected). Создайте Два Класа которые будут их расширять (extends) и попробуйте вывести из них все эти переменные.
		</p>
		<p class="exercise">
			3. Создать класс с именем Rectangle.
			В теле класса создать две переменные, описывающие длины сторон side1, side2.
			Обявить обьект Rectangle(side1, side2), в теле которого поля side1 и side2 инициализируются значениями аргументов.
			Создать два метода, вычисляющие площадь прямоугольника - AreaCalculator() и периметр прямоугольника - PerimeterCalculator().
			Создать два свойства Area и Perimeter.
			Написать программу, которая принимает от пользователя длины двух сторон прямоугольника и выводит на экран периметр и площадь.
		</p>
		<!-- *********************************** -->
		<br>
		<br>

		<br>
		<video src="../resource/htnl5_history.mp4" width="100%" height="auto" controls></video>
		<br>
	</div>
	<footer style="margin:35px 0 0 0">
		<div style="padding:80px 0; background:#28292A"></div>
		<div style="padding:24px 0; background:#0E0E0E"></div>
	</footer>
	<script src="../js/jquery-3.1.0.js"></script>
	<script src="../js/main.js"></script>
	<script src="../js/main-header.js"></script>	
</body>
</html>
