<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Make a router</title>
	</head>
	<body>
		<nav>
			<ul>
				<li><a href="about.php">About Page</a></li>
				<li><a href="contact.php">Contact Page</a></li>
			</ul>
		</nav>
		<h1>My Tasks</h1>
		<ul>
			<?php foreach ($tasks as $task) : ?>
				<li>
					<?php if ($task->completed) : ?>
						<strike><?= $task->description; ?></strike>
					<?php else : ?>
						<?= $task->description; ?>
					<?php endif; ?>
				</li>
			<?php endforeach; ?>
		</ul>
	</body>
</html>