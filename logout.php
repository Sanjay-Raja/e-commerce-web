<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css"/>
<link rel="shortcut icon" type="image/jpg" href="logo.jpg"/>
<title>GadgetFlow</title>
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.--><script>var __adobewebfontsappname__="dreamweaver"</script><script src="http://use.edgefonts.net/alfa-slab-one:n4:default.js" type="text/javascript"></script>
</head>

<body>
<?php
session_start();
session_destroy();
echo "you have successfully logout.";
	
echo "Thank you for shopping at Gagdet Flow. We hope to see you again. ";
header("refresh:3; url=login.html");
?>
</body>
</html>