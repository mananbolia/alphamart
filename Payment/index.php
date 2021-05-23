<?php

if(strcasecmp($_SERVER['REQUEST_METHOD'], 'POST') == 0){
	//Request hash
	$contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';	
	if(strcasecmp($contentType, 'application/json') == 0){
		$data = json_decode(file_get_contents('php://input'));
		$hash=hash('sha512', $data->key.'|'.$data->txnid.'|'.$data->amount.'|'.$data->pinfo.'|'.$data->fname.'|'.$data->email.'|||||'.$data->udf5.'||||||'.$data->salt);
		$json=array();
		$json['success'] = $hash;
    	echo json_encode($json);
	
	}
	exit(0);
}
 
function getCallbackUrl()
{
	$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
	return $protocol . $_SERVER['HTTP_HOST'] . '/Alphamart/response.php';
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>AlphaMart</title>
<link rel="shortcut icon" href="lifestyleStore.png" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<!-- this meta viewport is required for BOLT //-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" >
<!-- BOLT Sandbox/test //-->
<script id="bolt" src="https://sboxcheckout-static.citruspay.com/bolt/run/bolt.min.js" bolt-
color="e34524" bolt-logo="http://boltiswatching.com/wp-content/uploads/2015/09/Bolt-Logo-e14421724859591.png"></script>
<!-- BOLT Production/Live //-->
<!--// script id="bolt" src="https://checkout-static.citruspay.com/bolt/run/bolt.min.js" bolt-color="e34524" bolt-logo="http://boltiswatching.com/wp-content/uploads/2015/09/Bolt-Logo-e14421724859591.png"></script //-->

</head>
<style type="text/css">
	.main {
		margin-left:30px;
		font-family:Verdana, Geneva, sans-serif, serif;
	}
	.text {
		width:180px;
	}
	.dv {
		margin-bottom:5px;
	}
	.mb{
		background-color: rgba(0, 0, 0, 0.7) ;color:white;width:500px;align-self: center; border:1px solid black;border-radius: 5px;
        box-shadow: 7px 7px 5px rgba(0, 0, 0, .5);
	}
	.button1 {
		background-color: #4CAF50;
		color: white;
		font-size: 30px;
		height:50px;
		width:500px;
		border:1px solid black;border-radius: 5px;
		box-shadow: 7px 7px 5px rgba(0, 0, 0, .5);
	}
	.mb2{
		height:30px;
		width:300px;
		border-radius: 3px;
	}
	.main{
		border:1px solid black;border-radius: 5px;
		box-shadow: 7px 7px 5px rgba(0, 0, 0, .5);
		background-color: white;
		width:600px;
		height:350px;
		padding-top: 20px;
	}
</style>
<body style="background-color: #e7e7e7;"><center>
	<br><br><br><br>
<div class="main">
	<div>
    	<img src="images/payumoney.png" /><br><br>
    </div>
    <div>
    </div>
	<form action="#" id="payment_form">
    <input type="hidden" id="udf5" name="udf5" value="BOLT_KIT_PHP7" />
    <input type="hidden" id="surl" name="surl" value="<?php echo getCallbackUrl(); ?>" />
    <div class="dv">
    <span class="text"><label hidden>Merchant Key:</label></span>
    <span><input type="text" hidden id="key" name="key" placeholder="Merchant Key" value="oCRSSUni" /></span>
    </div>
    
    <div class="dv">
    <span class="text"><label hidden>Merchant Salt:</label></span>
    <span><input type="text" hidden id="salt" name="salt" placeholder="Merchant Salt" value="5oYoIop6fO" /></span>
    </div>
    
    <div class="dv">
    <span class="text"><label hidden>Transaction/Order ID:</label></span>
    <span><input type="text" id="txnid" hidden name="txnid" placeholder="Transaction ID" value="<?php echo  "Txn" . rand(10000,99999999)?>" /></span>
    </div>
    
    <div class="dv">
    <span class="text"><label hidden>Amount:</label></span>
    <span><input type="text" id="amount" hidden name="amount" placeholder="Amount" value="<?php echo $_GET['amount']; ?>" /></span>    
    </div>
    
    <div class="dv">
    <span class="text"><label hidden>Product ID:</label></span>
    <span><input type="text" hidden id="pinfo" name="pinfo" placeholder="Product Info" value="<?php echo $_GET['product_id']; ?>" /></span>
    </div>
    
    <div class="dv">
    <span class="text"><label hidden>Name:</label></span>
    <span><input type="text" hidden id="fname" name="fname" placeholder="First Name" value="<?php echo $_GET['name']; ?>" /></span>
    </div>
    
    <div class="dv">
    <span class="text"><label hidden>Email ID:</label></span>
    <span><input type="text" hidden id="email" name="email" placeholder="Email ID" value="<?php echo $_GET['email']; ?>" /></span>
    </div>
    
    <div class="mb">
    <span class="text"><label><br>Enter the number you can recieve an OTP on</label></span><br><br>
    <span><input type="text" id="mobile" class="mb2" name="mobile" placeholder="  Mobile/Cell Number" value="" /></span><br><br>
    </div><br><br>
    
    <div class="dv">
    <span class="text"><label hidden>Hash:</label></span>
    <span><input type="text" hidden id="hash" name="hash" placeholder="Hash" value="" /></span>
    </div>

    <div><input type="submit" class="button1" value="Proceed" onclick="launchBOLT(); return false;" /></div>
    <br><a href="../cart.php">Cancel transaction</a>
	</form></center>
</div>
<script type="text/javascript"><!--
$('#payment_form').bind('keyup blur', function(){
	$.ajax({
          url: 'index.php',
          type: 'post',
          data: JSON.stringify({ 
            key: $('#key').val(),
			salt: $('#salt').val(),
			txnid: $('#txnid').val(),
			amount: $('#amount').val(),
		    pinfo: $('#pinfo').val(),
            fname: $('#fname').val(),
			email: $('#email').val(),
			mobile: $('#mobile').val(),
			udf5: $('#udf5').val()
          }),
		  contentType: "application/json",
          dataType: 'json',
          success: function(json) {
            if (json['error']) {
			 $('#alertinfo').html('<i class="fa fa-info-circle"></i>'+json['error']);
            }
			else if (json['success']) {	
				$('#hash').val(json['success']);
            }
          }
        }); 
});
//-->
</script>
<script type="text/javascript"><!--
function launchBOLT()
{
	bolt.launch({
	key: $('#key').val(),
	txnid: $('#txnid').val(), 
	hash: $('#hash').val(),
	amount: $('#amount').val(),
	firstname: $('#fname').val(),
	email: $('#email').val(),
	phone: $('#mobile').val(),
	productinfo: $('#pinfo').val(),
	udf5: $('#udf5').val(),
	surl : $('#surl').val(),
	furl: $('#surl').val(),
	mode: 'dropout'	
},{ responseHandler: function(BOLT){
	console.log( BOLT.response.txnStatus );		
	if(BOLT.response.txnStatus != 'CANCEL')
	{
		//Salt is passd here for demo purpose only. For practical use keep salt at server side only.
		var fr = '<form action=\"'+$('#surl').val()+'\" method=\"post\">' +
		'<input type=\"hidden\" name=\"key\" value=\"'+BOLT.response.key+'\" />' +
		'<input type=\"hidden\" name=\"salt\" value=\"'+$('#salt').val()+'\" />' +
		'<input type=\"hidden\" name=\"txnid\" value=\"'+BOLT.response.txnid+'\" />' +
		'<input type=\"hidden\" name=\"amount\" value=\"'+BOLT.response.amount+'\" />' +
		'<input type=\"hidden\" name=\"productinfo\" value=\"'+BOLT.response.productinfo+'\" />' +
		'<input type=\"hidden\" name=\"firstname\" value=\"'+BOLT.response.firstname+'\" />' +
		'<input type=\"hidden\" name=\"email\" value=\"'+BOLT.response.email+'\" />' +
		'<input type=\"hidden\" name=\"udf5\" value=\"'+BOLT.response.udf5+'\" />' +
		'<input type=\"hidden\" name=\"mihpayid\" value=\"'+BOLT.response.mihpayid+'\" />' +
		'<input type=\"hidden\" name=\"status\" value=\"'+BOLT.response.status+'\" />' +
		'<input type=\"hidden\" name=\"hash\" value=\"'+BOLT.response.hash+'\" />' +
		'</form>';
		var form = jQuery(fr);
		jQuery('body').append(form);								
		form.submit();
	}
},
	catchException: function(BOLT){
 		alert( BOLT.message );
	}
});
}
//--
</script>	

</body>
</html>
	
