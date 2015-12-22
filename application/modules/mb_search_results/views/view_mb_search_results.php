
<div id="page-wrapper" style="min-height: 489px;">

<p> test </p>
<p>
aqui iria
<?php
foreach ($searchResults as $result)
{
	echo $result['FirstName'];
	echo $result['LastName'];
	echo $result['PartyName'];
}
echo 'test echo';

?>
</p>

</div>