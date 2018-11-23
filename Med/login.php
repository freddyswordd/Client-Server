<?


$inputuser = $_POST["user"]; #låser det vi skriver i det første felt til user
$inputpass = $_POST["pass"]; #låser det vi skriver i det første felt til pass



if ($inputuser == "Oskar" && $inputpass == "Roegild")
{
	echo "Velkommen "; 
	echo $inputuser;

} else {

echo "Forkert login, tjek det du har indtastet";

}
	


?>