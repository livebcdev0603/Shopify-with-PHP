<html>
    <head>
        <title>Shopify with PHP</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/picnic/6.1.1/picnic.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/picnic/6.1.1/plugins.min.css">
	<link rel="stylesheet" href="css/style.css">
    </head>
    <body style="text-align:center">
        <br/><br/><br/>
        <h2>Shopify with PHP</h2>
        <main>
            
            <?php
		  	    if(isset($_GET['shop']) && $_GET['shop'] != ''){
		  	        echo '<h4>Store Name: '.$_GET['shop'].'</h4>';
		  	    }
		  	    else{
  	        ?>
  	                <form method="POST" action="install.php">
            			<fieldset class="flex one">
            			  <label>
            			  	Store Name
            			  	<input type="text" name="store" placeholder="e.g. test-shop.myshopify.com" required>
            			  </label>
            			</fieldset>
            			<button>Install</button>
            		</form>
  	        <?php
		  	    }
		  	?>
            
    		
    	</main>
        <br/><br/><br/>
    </body>
</html>
