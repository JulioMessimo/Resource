<div id="leftside">
<?
$sql="select * from cathegory_rat";
$result=$connect->addQuery($sql);
echo "<ul id='cathegory_list'>";
while($myrow = mysql_fetch_array($result))
		{
		printf('<li class="li_class1"> %s</li>',$myrow['Title']);
		}
echo "</ul>";		

?>			           
</div>