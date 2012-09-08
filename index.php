<?PHP include('php/private.php'); ?>

<!--$query = 'SELECT * FROM ' . $usertable;
		$result = mysql_query($query);
		if($result) {
			while($row = mysql_fetch_array($result)){
				$name = $row[$yourfield];
				echo 'Name: ' . $name;
			}
		}
        -->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/OneDashboard.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<!-- InstanceBeginEditable name="doctitle" -->
<title>OneDashboard</title>
<!-- InstanceEndEditable -->

<link rel="stylesheet" type="text/css" href="/OneDashboard/css/style.css"/>

<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->

</head>

<body>

	<div id="header">
    	
        <div id="logo">
            <h1>LOGO HERE</h1>
        </div>
        
        <div id="nav-top">
        	<ul>
            	<?PHP if($_SESSION['AccessDashboard'] == 'y'){ echo '<li>Dashboard</li>'; } ?>
                <?PHP if($_SESSION['AccessSchedule'] == 'y'){ echo '<li>Schedule</li>'; } ?>
                <?PHP if($_SESSION['AccessCheckout'] == 'y'){ echo '<li>Checkout</li>'; } ?>
                <?PHP if($_SESSION['AccessAKS1'] == 'y'){ echo '<li>AKS 1</li>'; } ?>
            	<?PHP if($_SESSION['AccessAKS2'] == 'y'){ echo '<li>AKS 2</li>'; } ?>
                
            </ul>
        </div>
        
        <div id="profile">
        	<div id="profile_pic">
            	<img src="<?PHP echo $_SESSION['Picture']; ?>" height="76" />
            </div>
            <div id="profile_options">
                <?PHP
                    echo $_SESSION['UserName'];
                ?>
                
                <br />
                
                <a href="php/private.php?logout=1" >Logout</a>
            </div>
        </div>
    	
    </div>
    <div id="container">
    
        <div id="sidebar">
        	<div id="nav-left">
            	These will update depending on which section from the top you will be in
            </div>
        </div>
        
		<!-- InstanceBeginEditable name="Content" -->
		<div id="content">
            <?PHP
				// TEST SESSION STORED VARIABLE BETWEEN PAGES
				echo $_SESSION['UserName'];
				echo $_SESSION['AccessLevel'];
				
			?>
        </div>
		<!-- InstanceEndEditable -->
        
    </div>
	
    <div id="footer">
    	Just a usual footer. nothing to see here.
    </div>

</body>
<!-- InstanceEnd --></html>
