<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
</head>
<body>

<div style="margin: 20px; padding: 10px; background: #F3F3F3;">
	<h1>English to Nepali Date Converter Library in Codeigniter PHP</h1>
    <div>
        <form action="<?php echo base_url(); ?>welcome/index" method="post">
            <table>
                <tr>
                    <td>Enter English Date (AD)</td>
                    <td>
                        <input type="text" name="english_date" placeholder="YYYY-MM-DD" /> Example: 1990-01-01 
                        
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="Convert Date to BS" /></td>
                </tr>
            </table>
        </form>
    </div>
</div>
<?php
	if(isset($result)){
?>
<div style="margin: 20px; padding: 10px; background: #F3F3F3;">
    <h2>नेपाली मिति :</h2><br />
    <table>
        <tr>
            <td>  </td>
            <td><?php echo $result['year']; ?> साल <?php echo $result['nmonth']; ?> <?php echo $result['date']; ?> गते  <?php echo $result['day']; ?></td>
        </tr>

    </table>
</div>
<?php
	}
?>
<div style="margin: 20px; padding: 10px; background: #F3F3F3;">
	    <p>Maintained  by <a href="http://www.sharadkhatiwada.com.np" target="_blank">Sharad Khatiwada. </a></p>

    <div>
</body>
</html>