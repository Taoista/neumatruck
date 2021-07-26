<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Notificación desde Neumatruck</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<style type="text/css">
a { color:#000; text-decoration:none; }
a img { border:none; }
html, body { width:100%; height:100%; margin:0; padding:0; }
body {
height:auto;
padding:40px 0;

background-color: #eee;
	}
table { border-collapse:collapse; }
.container { width:100%; max-width:600px; margin:0 auto; background:#FFF; box-shadow: 0 0 15px rgba(0, 0, 0, 0.30) !important; }
.header { width:100%; }
.logo { padding:25px 0 25px 25px; text-align: center; }
.top { padding-right:25px; font:bold 20px/22px helvetica, arial, sans-serif; text-align:right; }
.hero img, .specials img { width:100%; height:auto; }
.content { text-align:center; padding:40px 40px 10px 40px; }
.content.enquiry { text-align:left; padding:20px 40px 20px 40px; border-top:1px solid #E5E5E5; }
.content.enquiry td { font:11px/20px helvetica, arial, sans-serif; vertical-align:top; }
.content.enquiry td.title { width:120px; }
h1 { margin:0 0 27px; padding:0; font:bold 24px/26px helvetica, arial, sans-serif; color:#000; }
p { margin:0 0 30px; padding:0; font:14px/22px helvetica, arial, sans-serif; color:#000; }
@media only screen and (max-width:400px) {
.header { height:150px !important; }
.logo img { max-width:200px !important; text-align: center; padding:5px !important; }
.top { font-size:16px !important; }
.content { padding:25px 25px 3px 25px !important; }
h1 { margin-bottom:17px !important; font-size:20px !important; line-height:24px !important; }
p { margin-bottom:20px !important; line-height:20px !important; }
p.intro { font-size:16px !important; line-height:20px !important; }
.content.enquiry { padding:25px !important; }
.content.enquiry td.title { width:110px !important; }
}
@media only screen and (max-width:600px) {
.container { width:98% !important; margin: 0 auto;}
	#izquierda { float: left !important;}
}
</style>
</head>
<body style="width: 100%; height:auto; margin: 0; padding:40px 0;">
<table width="600" class="container" cellpadding="0" cellspacing="0" style="border-collapse: collapse; width: 600px;margin:0 auto;background: #FFF; border: 1px solid #e83a2d;">
<tr>
<td>
<table class="header" cellpadding="0" cellspacing="0" style="border-collapse: collapse;width: 100%; padding:20px 0;">
	<tr>
    	<td class="logo"><img src="http://www.neumatruck.cl/img/logo_neumatruck.png" ></td>
    </tr>
</table>
<table width="100%" cellpadding="0" cellspacing="0" style="border-collapse: collapse;">
    <tr>
    	<td class="content" style="padding: 20px 40px 10px 40px; text-align:center;">
        	<h1 style="margin:0; padding:0; padding-bottom: 10px; font:bold 24px/26px helvetica, arial, sans-serif; color:#000;">Gracias por su Compra</h1>
		</td>
    </tr>

    <tr>
    	<td class="content" style="padding: 20px 40px 0px 40px; text-align:center; border-top: 1px solid #e83a2d;">
        <p style="margin:0 padding:0; font:14px/20px helvetica, arial, sans-serif; color:#000; ">Nuestros ejecutivos se contactarán con usted para terminar de procesar su cotización y orientarlo para terminar su pedido.<br>
  			cualquier duda o pregunta, contactarse con <?php echo $resp_nombre." al ".$resp_telefono;  ?>.
  		</p>
		</td>
    </tr>

		<?php

		 ?>

    <tr>
    	<td class="content enquiry" style="padding: 20x 40px 20x 40px; border-top:1px solid #E5E5E5; text-align: left; width: 100%;">

			<table style="border-collapse: collapse; margin:auto;" align="left">
			         <tr>
                <td class='title' style='font: 11px/20px helvetica, arial, sans-serif;vertical-align: top;width: 80px;'><strong>Contacto</strong></td>
                <td style='font: 11px/20px helvetica, arial, sans-serif;vertical-align: top;'><?php echo $contacto; ?></td>
                </tr>
                <tr>
                <td class='title' style='font: 11px/20px helvetica, arial, sans-serif;vertical-align: top;width: 80px;'><strong>Razón Social</strong></td>
                <td style='font: 11px/20px helvetica, arial, sans-serif;vertical-align: top;'><?php echo $razon_soc; ?></td>
                </tr>
                <tr>
                <td class='title' style='font: 11px/20px helvetica, arial, sans-serif;vertical-align: top;width: 80px;'><strong>Rut</strong></td>
                <td style='font: 11px/20px helvetica, arial, sans-serif;vertical-align: top;'><?php echo $rut; ?></td>
                </tr>
                <tr>
                <td class='title' style='font: 11px/20px helvetica, arial, sans-serif;vertical-align: top;width: 80px;'><strong>Email </strong></td>
                <td style='font: 11px/20px helvetica, arial, sans-serif;vertical-align: top;'><a href='mailto:<?php echo $email; ?>' style=' text-decoration:none; color:#000;'><?php echo $email; ?></a></td>
                </tr>
                <tr>
                <td class='title' style='font: 11px/20px helvetica, arial, sans-serif;vertical-align: top;width: 80px;'><strong>Teléfono</strong></td>
                <td style='font: 11px/20px helvetica, arial, sans-serif;vertical-align: top;'><?php echo $telefono ?></td>
                </tr>
                <tr>
                <td class='title' style='font: 11px/20px helvetica, arial, sans-serif;vertical-align: top;width: 80px;'><strong>Nº OC</strong></td>
                <td style='font: 11px/20px helvetica, arial, sans-serif;vertical-align: top;'><?php echo $n_oc; ?></td>
                </tr>
                <tr>
                <td class='title' style='font: 11px/20px helvetica, arial, sans-serif;vertical-align: top;width: 80px;'><strong>Mensaje</strong></td>
                <td style='font: 11px/20px helvetica, arial, sans-serif;vertical-align: top;'><?php echo $msg; ?></td>
                </tr>
                <tr>
                <td class='title' style='font: 11px/20px helvetica, arial, sans-serif;vertical-align: top;width: 80px;'><strong>Dirección</strong></td>
                <td style='font: 11px/20px helvetica, arial, sans-serif;vertical-align: top;'><?php echo $direccion; ?></td>
                </tr>

            </table>


        </td>
    </tr>

    <tr>
    	<td class="content enquiry" style="padding: 20x 40px 20x 40px; border-top:1px solid #E5E5E5; text-align: left; width: 100%;">

			<table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tbody>
            <tr style="margin-bottom: 10px;">
              <td align="left" style="color:#0152a1; font-weight: bold;"><strong>PRODUCTO - CANTIDAD</strong></td>
              <td align="right" style="color:#0152a1; font-weight: bold;"><strong>PRECIO</strong></td>
            </tr>
            <?php
              session_start();
              $neto_suma = array();
              $oc_produc = $_SESSION["array_error_product"];
              for ($i=0; $i < count($oc_produc) ; $i++) {
              // echo $oc_produc[$i]["codigo"].' '.$oc_produc[$i]]"nombre"].' X '.$oc_produc[$i]["cantidad"];
                ?>
                  <tr>
                    <td align="left"> <?php echo $oc_produc[$i]["codigo"]." ".$oc_produc[$i]["nombre"]." X ".$oc_produc[$i]["cantidad"]; ?></td>
                    <td align="right"> <?php echo number_format($oc_produc[$i]["total"],0, ',', '.'); ?> </td>
                  </tr>
                <?php
              }
             ?>
        </tbody>
			</table>

			 <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-top: 20px; margin-bottom: 30px;">


					<tbody>
						<tr>
							<td align="right">TOTALES</td>
						</tr>
							<tr>
								<td align="right">Neto</td>
								<td align="right">$ <?php echo number_format($neto,0, ',', '.'); ?></td>
							</tr>
							<tr>
								<td align="right">IVA (19%)</td>
								<td align="right">$ <?php echo number_format($iva,0, ',', '.'); ?></td>
							</tr>
							<tr>
								<td align="right"><strong>TOTAL</strong></td>
								<td align="right" style="color: #d12016"><strong>$ <?php echo number_format($total,0, ',', '.'); ?></strong></td>
							</tr>
					</tbody>
			</table>


        </td>
    </tr>

</table>
</td>
</tr>
<tr>
	<td  class="content" style="padding: 0px 20px 10px; border-top:1px solid #e83a2d; ">
	<p style="font:12px/16px helvetica, arial, sans-serif; color:#0152a1; padding-bottom: 0px; padding-top: 10px; margin-bottom: 0px;">neumatruck.cl</p>
		</td>
	</tr>
</table>
</body>
</html>
