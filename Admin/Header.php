    <!-- Bootstrap Links -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 
    <!-- Bootstrap Links End -->
    
    <!-- Import Stylesheet -->
    <style type="text/css"> 
        @import url('../Style.css');
        @import url('AdminStyle.css');
        @import url('NavBarStyle.css');
        @import url('../../DemoPhp/Style/font-awesome-4.6.3/css/font-awesome.min.css');
        body {
            background-color: #fff;
        }
    </style>
    <?php
        //session_start();
        //echo $_SESSION['login_admin'];
        if($_SESSION['login_admin'] != '')
        {
    ?>    
    <div class="bs-example">
        <nav role="navigation" class="navbar navbar-inverse" style="padding: 20px; border-radius: 0px;">
            <div class="row container-fluid">
            	<div class="col-md-6">
            		<a href="../Index.php" class="navbar-brand"><i class="fa fa-globe"></i> Grocers.com</a>
            	</div>
            	<div class="col-md-6">
            		<a href="Logout.php" class="btn-link" style="font-size: 1.2em; text-decoration: none; float: right; margin-top:10px;"><i class="fa fa-sign-out" style="font-size: 22px;"></i> LogOut</a>
            	</div>
            </div>
        </nav>
    </div>
    <?php } else { ?>
    <p style="text-align: center; margin-top: 100px;">
        <i style="font-size: 2em;" class="fa fa-exclamation-triangle"><font>Something Went Wrong.! Try Again.</font></i>
    </p>
    <?php header('Refresh:1, url=Index.php'); } ?>    