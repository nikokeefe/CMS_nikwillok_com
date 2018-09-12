<?php

    require_once('../../../private/initialize.php'); 

    $id = $_GET['id'] ?? '1'; // php7

    echo h($id);

?>

<a href="show.php?name=<?php echo u('John Doe'); ?>">Link</a><br />
<a href="show.php?company=<?php echo u('Widgets&Less'); ?>">Link</a><br />
<a href="show.php?query=<?php echo u('!@#$%?'); ?>">Link</a><br />