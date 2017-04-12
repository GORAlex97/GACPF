<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>DEMO GACPF</title>
</head>
<body>
<pre>
    <code>
        require ('GACPF.php'); // Connection script
        $gacpf = new GACPF(); // Create a class for working with functions.

        /** This function returns data about this script. **/
        echo $gacpf->about(); // Full information
        echo $gacpf->about(1); //
        echo $gacpf->about('full_name'); //

        /**  **/
        echo $gacpf->plus(57,13); //
        echo $gacpf->plus(57,13,'s'); //
        echo $gacpf->plus(57,13,'f'); //
        echo $gacpf->plus(57,13,'t'); //

        /**  **/
        echo $gacpf->minus(13,50); //
        echo $gacpf->minus(13,50,'s'); //
        echo $gacpf->minus(13,50,'f'); //
        echo $gacpf->minus(13,50,'t'); //
    </code>
</pre>
</body>
</html>

<?php

require('GACPF.php'); // Connection script
$gacpf = new GACPF(); // Create a class for working with functions.

/** This function returns data about this script. **/
echo $gacpf->about() . "<br>"; // Full information
echo $gacpf->about(1) . "<br>"; //
echo $gacpf->about('full_name') . "<br>"; //

/**  **/
echo $gacpf->plus(57,13) . "<br>"; //
echo $gacpf->plus(57,13,'s') . "<br>"; //
echo $gacpf->plus(57,13,'f') . "<br>"; //
echo $gacpf->plus(57,13,'t') . "<br>"; //

/**  **/
echo $gacpf->minus(13,50) . "<br>"; //
echo $gacpf->minus(13,50,'s') . "<br>"; //
echo $gacpf->minus(13,50,'f') . "<br>"; //
echo $gacpf->minus(13,50,'t') . "<br>"; //

?>