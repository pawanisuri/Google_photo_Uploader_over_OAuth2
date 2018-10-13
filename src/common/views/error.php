<?php
$this->layout('template', ['title' => 'Error']);

echo $exception;
?>

<h1>An error occurred.</h1>
<pre class="code"><? print_r($exception) ?></pre>
