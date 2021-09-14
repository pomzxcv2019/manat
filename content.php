<!-- link menu -->
<?php
    error_reporting (~E_NOTICE);
    switch ($_GET["page"]) {
        case 'Total_it':
            include ("it/Total_it.php");
             break;
        case 'itmob':
            include ("it/itmob.php");
             break;
        case 'itcom':
           include ("it/itcom.php");
            break;
        case 'itgad':
           include ("it/itgad.php");
            break;
        case 'Total_science':
            include ("science/Total_science.php");
             break;
        case 'scibio_sci':
           include ("science/scibio_sci.php");
            break;
        case 'scibo_bv':
           include ("science/scibo_bv.php");
            break;
        case 'scibio_asmr':
           include ("science/scibio_asmr.php");
            break;
        case 'Self_development':
           include ("Self development/Self_development.php");
            break;
        case 'EQ':
           include ("Self development/EQ.php");
            break;
        case 'Register':
           include ("Register.php");
            break;
        case 'Login':
           include ("Login.php");
            break;
        case 'about':
           include ("about.php");
            break;
            
        
        default:
            include ("Total_page.php");
            break;
    }
?>