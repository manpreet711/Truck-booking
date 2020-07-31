<?php
session_start();
//$em=$_SESSION['email'];
$host = "localhost";
$dbusername = "root";
$dbpassword = "manpreetsingh";
$dbname = "saini_transport";
$db=mysqli_connect($host, $dbusername, $dbpassword , $dbname) or die("could not connect to database");

if($db){
  echo " ";
}else{
  echo "no connection";
}

mysqli_select_db($db,'saini_transport');
$sql = "select * from booking where status!=0";
$res = mysqli_query($db,$sql);
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	
	<title>Saini Transport Service</title>
	
	<link rel='stylesheet' type='text/css' href="invoicestyle.css" />
	<link rel='stylesheet' type='text/css' href="print.css" media="print" />
	<script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
	<script type='text/javascript' src='js/example.js'></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script type="text/javascript">
    var finalresult =0;
    var result1=0;
    var result2=0;
    var result3=0;
    var amountp=0;            // variable for amount paid
    var balanced=0;             // variable for balance due
        function multiply() {
            var FirstNo = document.getElementById('n1').value;
            var SecondNo = document.getElementById('n2').value;
             result1 = parseInt(FirstNo) * parseInt(SecondNo);
            if (!isNaN(result1)) {
               
                total();
                document.getElementById('n3').value = result1;
            }
        }
        function multiply1() {
            var FirstNo = document.getElementById('l1').value;
            var SecondNo = document.getElementById('l2').value;
             result2 = parseInt(FirstNo) * parseInt(SecondNo);
            if (!isNaN(result2)) {
                
                total();
                document.getElementById('l3').value = result2;
            }
        }
        function multiply2() {
            var FirstNo = document.getElementById('r1').value;
            var SecondNo = document.getElementById('r2').value;
             result3 = parseInt(FirstNo) * parseInt(SecondNo);
            if (!isNaN(result3)) {
                
                total();
                document.getElementById('r3').value = result3;
            }
        }
        function total() {
            finalresult = result1 + result2 +result3;
            document.getElementById('t1').value = finalresult;
        }

        function forStoringVariable(){
            amountp = document.getElementById('ap').value;
            balanced = document.getElementById('balance').value;
        }
        function amountpaid(){
            forStoringVariable();
            if(amountp == 0 ){
                balanced = finalresult;
                document.getElementById('balance').value = balanced;
                
            }else{
                balanced = finalresult - amountp;
                document.getElementById('balance').value  = balanced;
            }
        } 
        
        
    </script>
</head>

<body>
    <input type="button" value="Print" onclick="printpage()">

	<div id="page-wrap" style="background: #00000030;">

		<textarea id="header">INVOICE</textarea>
		
		<div id="identity">
        
		
            <span id="address">Saini 
                Transport Service Pvt Ltd
                Old Barrack,Chembur Camp,
                Mumbai-400074
                Phone: (555) 666-5555</span>

            <div id="logo">

              <div id="logohelp">
                <input id="imageloc" type="text" size="50" value="" /><br />
                (max width: 540px, max height: 100px)
              </div>
              <span><img id="image" src="images/logo.png" alt="logo" /></span>
            </div>
		
		</div>
		
        <div style="clear:both"></div>

		<div id="customer">

            <table id="meta">
                <tr>
                    <td class="meta-head">Invoice #</td>
                    <td><textarea>000123</textarea></td>
                </tr>
                <tr>

                    <td class="meta-head">Date</td>
                    <td><textarea id="date">September 24, 2019</textarea></td>
                </tr>
                <tr>
                    <td class="meta-head">Source</td>
                    <td><textarea> source</textarea></td>
                </tr>
                <tr>
                    <td class="meta-head">Destination</td>
                    <td><textarea> destination</textarea></td>
                </tr>
                <tr>
                    <td class="meta-head">Amount Due</td>
                    <td><textarea>0.00</textarea></td>
                </tr>

            </table>
		
              </div>
              
              <table id="items">
              
                <tr>
                    <th>Item</th>
                    <th>Description</th>
                    <th>Unit Cost</th>
                    <th>Quantity</th>
                    <th>Price</th>
                </tr>
                
                <tr class="item-row">
                    <td class="item-name"><div class="delete-wpr"><textarea>Item Name</textarea></div></td>
                    <td class="description"><textarea> Item Description</textarea></td>
                    <td class ="cost"><textarea id="n1" onkeyup="multiply()">0 </textarea> </td>
                    <td class ="qty"><textarea id="n2" onkeyup="multiply()">0 </textarea> </td>
                    <td class ="price"><textarea id="n3" onkeyup="multiply()"> </textarea> </td>
                </tr>
                
                <tr class="item-row">
                    <td class="item-name"><div class="delete-wpr"><textarea>Item Name</textarea></div></td>

                    <td class="description"><textarea>Item Description</textarea></td>
                    <td class ="cost"><textarea id="l1" onkeyup="multiply1()">0 </textarea> </td>
                    <td class ="qty"><textarea id="l2" onkeyup="multiply1()">0 </textarea> </td>
                    <td class ="price"><textarea id="l3" onkeyup="multiply1()"> </textarea> </td>
                </tr>
                <tr class="item-row">
                    <td class="item-name"><div class="delete-wpr"><textarea>Item Name</textarea></div></td>
                    <td class="description"><textarea>Item Description</textarea></td>
                    <td class ="cost"><textarea id="r1" onkeyup="multiply2()">o </textarea> </td>
                    <td class ="qty"><textarea id="r2" onkeyup="multiply2()">0 </textarea> </td>
                    <td class ="price"><textarea id="r3" onkeyup="multiply2()"> </textarea> </td>
                               
              
                <tr>

                    <td colspan="2" class="blank"> </td>
                    <td colspan="2" class="total-line">Total</td>
                    <td class="total"> <textarea id="t1" onkeyup="total()"> </textarea> </td>
                </tr>
                <tr>
                    <td colspan="2" class="blank"> </td>
                    <td colspan="2" class="total-line">Amount Paid</td>

                    <td class="total-value"><textarea id="ap" onkeyup="amountpaid()" >0</textarea></td>
                </tr>
                <tr>
                    <td colspan="2" class="blank"> </td>
                    <td colspan="2" class="total-line balance">Balance Due</td>
                    <td class="total-value balance"><textarea id="balance" onkeyup="amountpaid()" >0</textarea></td>
                </tr>
              </table>
              
              <div id="terms">
             
                <h5>Terms</h5>
                
                <textarea> Additional Charge of 1.5% will be made on unload truck after 5hrs</textarea>
              </div>
            
            </div>
            <script type="text/javascript">
                function printpage(){
                    window.print();
                }
            </script>
	
</body>

</html>