<html>
<head><title>MHVTL</title></head>
<link href="styles.css" rel="stylesheet" type="text/css">
<body>
<hr width="100%" size=10 color="blue">
<b><font color=purple size=3>MHVTL Settings</font><b>
<hr width="100%" size=1 color="blue">

<tr>
<td align=left valign=middle>
<img src="images/configuration.png" >
</td>
</tr>

<?php
echo "<pre><b>MHVTL-GUI Color Theme Selector :</b></pre>";
?>

<hr width="100%" size=1 color="blue">

<form method="post" action="mhvtl-gui.theme.selector.php">

Select Color <SELECT name="theme" >
<OPTION style=background-color:#EEEEEE;>Default:#EEEEEE</OPTION>
<OPTION style=background-color:#FFFFFF;>White:#FFFFFF</OPTION>
<OPTION style=background-color:#F9B7FF;>Plum1:#F9B7FF</OPTION>
<OPTION style=background-color:#EBDDE2;>Blush2:#EBDDE2</OPTION>
<OPTION style=background-color:#C8BBBE;>Blush3:#C8BBBE</OPTION>
<OPTION style=background-color:#E3E4FA;>Lavender:#E3E4FA</OPTION>
<OPTION style=background-color:#FDEEF4;>Blush:#FDEEF4</OPTION>
<OPTION style=background-color:#C6DEFF;>Blue1:#C6DEFF</OPTION>
<OPTION style=background-color:#E0FFFF;>Cyan:#E0FFFF</OPTION>
<OPTION style=background-color:#C2DFFF;>Gray1:#C2DFFF</OPTION>
<OPTION style=background-color:#00FFFF;>Cyan:#00FFFF</OPTION>
<OPTION style=background-color:#48CCCD;>Turquoise:#48CCCD</OPTION>
<OPTION style=background-color:#8EEBEC;>Gray2:#8EEBEC</OPTION>
<OPTION style=background-color:#77BFC7;>Blue3:#77BFC7</OPTION>
<OPTION style=background-color:#AFDCEC;>Blue2:#AFDCEC</OPTION>
<OPTION style=background-color:#736AFF;>Blue:#736AFF</OPTION>
<OPTION style=background-color:#CFECEC;>Cyan2:#CFECEC</OPTION>
<OPTION style=background-color:#AFC7C7;>Cyan3:#AFC7C7</OPTION>
<OPTION style=background-color:#64E986;>Green2:#64E986</OPTION>
<OPTION style=background-color:#6AFB92;>Green1:#6AFB92</OPTION>
<OPTION style=background-color:#B5EAAA;>Green2:#B5EAAA</OPTION>
<OPTION style=background-color:#C3FDB8;>Green1:#C3FDB8</OPTION>
<OPTION style=background-color:#CCFB5D;>Green1:#CCFB5D</OPTION>
<OPTION style=background-color:#FFFF00;>Yellow:#FFFF00</OPTION>
<OPTION style=background-color:#FFF380;>Khaki1:#FFF380</OPTION>
<OPTION style=background-color:#EDE275;>Khaki2:#EDE275</OPTION>
<OPTION style=background-color:#EDDA74;>Goldenrod:#EDDA74</OPTION>
<OPTION style=background-color:#ADA96E;>Khaki:#ADA96E</OPTION>
<OPTION style=background-color:#C9BE62;>Khaki3:#C9BE62</OPTION>
<OPTION style=background-color:#FAAFBE;>Pink:#FAAFBE</OPTION>
<OPTION style=background-color:#FBBBB9;>Brown1:#FBBBB9</OPTION>
<OPTION style=background-color:#C9C299;>Chiffon3:#C9C299</OPTION>
<OPTION style=background-color:#FFE87C;>Goldenrod1:#FFE87C</OPTION>
<OPTION style=background-color:#ECE5B6;>Chiffon2:#ECE5B6</OPTION>
<OPTION style=background-color:#FFF8C6;>Chiffon:#FFF8C6</OPTION>

</SELECT>
<input type="submit" value="Change" ></form>
<FORM ACTION="form.mhvtl-gui.theme.selector.php"> <INPUT TYPE=SUBMIT VALUE="Return"></FORM>

</body>
</html>

