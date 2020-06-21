<?php 
require_once  'vendor/autoload.php';


include 'pay_invoice.php';





$html =  "
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
<title>PDF Invoice</title>
<link rel=\"stylesheet\" href=\"css/index.css\" />
</head>
<body>
  <div class=\"container\">
<div class=\"invoice\">
    <img src=\"img/invoice.png\" alt=\"img\" class=\"img\">
    <h1 class=\"h-one\">Invoice</h1>
 
</div>    
<div class=\"company-info\">
    <h3>Your Company Name</h3>
    <p>Your Bussines Adress</p>
    <p>City</p>
    <p>Country</p>
    <p>Postal</p>
</div>

</div>
<div class=\"main\">
        <table class=\"table\">
            <thead>
              <tr>
                <th scope=\"col\">Items</th>
                <th scope=\"col\" class=\"product\">Description</th>
                <th scope=\"col\">Quantity</th>
                <th scope=\"col\">Price</th>
                <th scope=\"col\">Tax</th>
                <th scope=\"col\">Amount</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Item 1</td>
                <td class=\"product\">Website Development</td>
                <td>1</td>
                <td>$100.00</td>
                <td>1%</td>
                <td>$101.00</td>
              </tr>
            </tbody>
          </table>

    </div>

    <div class=\"foot\">
      <div class=\"left-foot\">
          <h3>NOTES:</h3>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt ea deserunt saepe possimus doloremque exercitationem. Vero consequatur velit rem mollitia nihil vel neque quae expedita?</p>
      </div>
      <div class=\"right-foot\">
          <div class=\"total\">
            <h3>TOTAL:</h3>
            <H1>$101.00</H1>
          </div>      
      </div>
    </div>

</body>";

$css = file_get_contents('css/index.css');


 
$mpdf = new \Mpdf\Mpdf ();
$mpdf->WriteHTML($css, 1);
$mpdf->WriteHTML($html, 2);
$mpdf->Output();
