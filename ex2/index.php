<!DOCTYPE html>
<html lang="ca">
<body>
	<h1>Conversor de monedes versàtil</h1>
 
	<form action="logic.php" method="GET">
		Euros: <input type="number" name="euros" min="0" step="any" required>
		a
		<select name="moneda">
			<option value="USD">USD - Dòlar americà</option>
			<option value="GBP">GBP - Lliura esterlina</option>
			<option value="CHF">CHF - Franc suís</option>
			<option value="SEK">SEK - Corona sueca</option>
			<option value="NOK">NOK - Corona noruega</option>
			<option value="DKK">DKK - Corona danesa</option>
			<option value="PLN">PLN - Zloty polonès</option>
			<option value="CZK">CZK - Corona txeca</option>
			<option value="HUF">HUF - Fòrint hongarès</option>
			<option value="RON">RON - Leu romanès</option>
			<option value="BGN">BGN - Lev búlgar</option>
			<option value="ISK">ISK - Corona islandesa</option>
			<option value="RSD">RSD - Dinar serbi</option>
			<option value="UAH">UAH - Hrívnia ucraïnesa</option>
			<option value="TRY">TRY - Lira turca</option>
		</select>
		<input type="submit" value="Convertir">
	</form>
</body>
</html>
 