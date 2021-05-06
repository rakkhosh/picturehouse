
<?php
require('server.php');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />

    <title>Movie Ticket</title>

    <link rel='stylesheet' type='text/css' href='appetizer/scss/css/style.css' />
    <link rel='stylesheet' type='text/css' href='appetizer/scss/css/print.css' media="print" />


</head>

<body>

<div id="page-wrap">

    <textarea id="header">Ticket</textarea>

    <div id="identity">

            <textarea id="address">Soumik Barua
Username: <?php
                $a= $_SESSION['username'];
                echo $_SESSION['username'];?>


Phone: 01516117333</textarea>

        <div id="logo">


            <div id="logohelp">
                <input id="imageloc" type="text" size="50" value="" /><br />
                (max width: 540px, max height: 100px)
            </div>
            <img id="image" src="images/logo1.png" height="150" alt="" />
        </div>

    </div>

    <div style="clear:both"></div>

    <div id="customer">

        <font face="Comic sans MS" size="7">Picture House</font>

        <table id="meta">
            <tr>
                <td class="meta-head">Serial</td>
                <td><textarea>000123</textarea></td>
            </tr>
            <tr>

                <td class="meta-head">Date</td>
                <td><textarea id="date">December 19, 2019</textarea></td>
            </tr>
            <tr>
                <td class="meta-head">Amount Paid</td>
                <td><div class="due">500 bdt</div></td>
            </tr>

        </table>

    </div>

    <table id="items">

        <tr>
            <th>Movie Name</th>
            <th>Date-Time</th>
            <th>Catagory</th>
            <th>Seats</th>
            <th>Seat Position</th>
            <th>Total Price(bdt)</th>
        </tr>

        <tr class="item-row">
            <td class="item-name"><div class="delete-wpr"><span>Joker</span></div></td>
            <td class="description"><span>Date: 01-01-2020 Time: 14:00</span></td>
            <td><span class="cost">Thriller</span></td>
            <td><span class="qty">1</span></td>
            <td><span class="price">Front Row</span></td>
            <td><span class="price">500</span></td>
        </tr>




        <tr>

            <td colspan="2" class="blank"> </td>
            <td colspan="2" class="total-line">Total(bdt)</td>
            <td class="total-value"><div id="total">500.00</div></td>
        </tr>
        <tr>
            <td colspan="2" class="blank"> </td>
            <td colspan="2" class="total-line">Amount Paid(bdt)</td>

            <td class="total-value"><textarea id="paid">500.00</textarea></td>
        </tr>
        <tr>
            <td colspan="2" class="blank"> </td>
            <td colspan="2" class="total-line balance">Balance Due(bdt)</td>
            <td class="total-value balance"><div class="due">00.00</div></td>
        </tr>

    </table>


</div>


</body>

</html>



