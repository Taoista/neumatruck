<!-- NEWSLETTER -->

<?php



    include 'conx.php';



    $telefonos = array();



    $re = mysql_query("SELECT * FROM telefonos ORDER BY orden ASC") or die(mysql_error());

        while($f = mysql_fetch_array($re)){

          array_push($telefonos,array("id" => $f["id"], "id_css" => $f["id_css"],"phone" => $f["phone"]));

    }



    // mysql_close();



?>

<div id="newsletter" class="section">

    <!-- container -->

    <div class="container">

        <!-- row -->

        <div class="row">

            <div class="col-md-12">

                <div class="newsletter">

                    <p>Si deseas ser parte de nuestro circulo y recibir nuestro <strong>NEWSLETTER</strong></p>

                    <!-- <form action="<?php //echo _GetDomain; ?>procesa-newsletter.php" method="POST" enctype="application/x-www-form-urlencoded">  -->
                    <form  method="POST" enctype="application/x-www-form-urlencoded"> 

                        <input id="email-newslatter" class="input" type="email" name="email_newsletter" placeholder="Dirección de Email" required>

                        <button onclick="send_newslatter(event)" class="newsletter-btn" type="submit"><i class="fa fa-envelope"></i> Suscribete</button> 

                    </form>
 
                    <ul class="newsletter-follow">

                        <li><a target="_blank" href="https://www.facebook.com/neumatruck.cl/"><i class="fa fa-facebook"></i></a></li>

                        <li><a target="_blank" href="https://web.whatsapp.com/send?phone=56954104080&amp;text=Estoy%20interesado%20en%20sus%20productos"><i class="fa fa-whatsapp"></i></a></li>

                        <li><a target="_blank" href="https://www.instagram.com/neumatruck.cl/"><i class="fa fa-instagram"></i></a></li>

                        <li><a target="_blank" href="mailto:contacto@neumatruck.cl"><i class="fa fa-envelope-o"></i></a></li>

                    </ul>

                </div>

            </div>

        </div>

        <!-- /row -->

    </div>

    <!-- /container -->

</div>

<!-- /NEWSLETTER -->

<footer id="footer">

    <!-- top footer -->

    <div class="section">

        <!-- container -->

        <div class="container">

            <!-- row -->

                <div class="col-md-3 col-xs-6">

                    <div class="footer">

                        <h3 class="footer-title">Nosotros</h3>

                        <p class="text-justify">

                        NeumaTruck.cl es una de las principales comercializadoras de marcas líderes de neumáticos para camión y buses, y líneas pesadas. Importamos solo marcas innovadoras con productos de alta tecnología en la industria.
Stock sujeto a cambios sin previo aviso

                        </p>

                        <ul class="footer-links">

                            <li><a href="despacho.php"><i class="fa fa-truck"></i> Politicas de Despacho</a></li>
                            <li><a href="devolucion.php"><i class="fa fa-truck"></i> Politicas de Devolución</a></li>



                        </ul>

                    </div>

                </div>



                <div class="col-md-2 col-xs-6 col-md-offset-1">

                    <div class="footer">

                        <h3 class="footer-title">Categorías</h3>

                        <ul class="footer-links">

                            <?php

                            // $categoriasfooter = $mysqli->query('SELECT nombre,id FROM categorias ORDER BY nombre ');

                            // while($categoriasfooterr = $categoriasfooter->fetch_assoc()){

                                $re = mysql_query("SELECT nombre,id FROM categorias ORDER BY nombre ") or die(mysql_error());

                                while($f = mysql_fetch_array($re)){
                        
                        
                        

                                ?>

                                    <li><a href="categoria.php?tipo-item=<?php echo $f["nombre"];?>"><?php echo $f['nombre'];?></a></li>

                                <?php

                            }

                            ?>

                        </ul>

                    </div>

                </div>



                <div class="clearfix visible-xs"></div>



                <div class="col-md-2 col-xs-6">

                    <div class="footer">

                        <h3 class="footer-title">Marcas</h3>

                        <ul class="footer-links">

                            <li><a href="marcas.php?marca=Pirelli&idm=9">Pirelli</a></li>

                            <li><a href="marcas.php?marca=Dunlop&idm=20">Dunlop</a></li>

                            <li><a href="marcas.php?marca=Fesite&idm=16">Fesite</a></li>

                            <li><a href="marcas.php?marca=Windforce&idm=8">Windforce</a></li>

                        </ul>

                    </div>

                </div>



                <div class="col-md-4 col-xs-6">

                <div class="footer">

                    <h3 class="footer-title">Contacto</h3>

                    <ul class="footer-links">

                        <ul class="footer-links">

                            <li><a href="<?php echo _GetDomain; ?>contacto.php"><i class="fa fa-map-marker"></i>Santa Margarita 0448 - Santiago</a></li>

                            <?php for ($i=0; $i < count($telefonos) ; $i++) { ?>

                                <li><a href="<?php echo 'tel:'.str_replace(' ','',$telefonos[$i]['phone']) ?>"><i class="fa fa-phone"></i><?php echo $telefonos[$i]['phone']; ?></a></li>

                            <?php  } ?>

                            <li><a href="mailto:contacto@neumatruck.cl"><i class="fa fa-envelope-o"></i>contacto@neumatruck.cl</a></li>

                            <li><a href="javascript:void(0);"><i class="fa fa-clock-o"></i>Lunes a Viernes: 09:00 a 18:00 hrs</a></li>

                        </ul>

                    </ul>

                </div>

            </div>

            </div>

            <!-- /row -->

        </div>

        <!-- /container -->

    </div>

    <!-- /top footer -->



    <!-- bottom footer -->

    <div id="bottom-footer" class="section">

        <div class="container">

            <!-- row -->

            <div class="row">

                <div class="col-md-4 text-center">

                    <ul class="footer-payments">

                        <!-- LOGO -->

                        <div class="col-md-3">

                            <div class="header-logo">

                                <a href="<?php echo _GetDomain; ?>" class="logo">

                                    <img src="<?php echo _GetDomain; ?>img/logo.png" alt="Neumatruck" style="width:300px;">

                                </a>

                                <br class="visible-xs"><br class="visible-xs"><br class="visible-xs">

                            </div>

                        </div>

                        <!-- /LOGO -->

                    </ul>

                </div>

                <div class="col-md-4 text-center">



                </div>

                <div class="col-md-4 text-center">

                  <ul class="footer-payments">

                      <!-- LOGO -->

                      <div class="col-md-3">

                          <div class="header-logo">

                              <a href="<?php echo _GetDomain; ?>" class="logo">

                                  <img style="margin-top:20px;" src="img/pgo.png" alt="Neumatruck">

                              </a>

                              <br class="visible-xs"><br class="visible-xs"><br class="visible-xs">

                          </div>

                      </div>

                      <!-- /LOGO -->

                  </ul>

                </div>

            </div>

            <!-- /row -->

        </div>

        <!-- /container -->

    </div>

    <!-- /bottom footer -->
</footer>

<!-- /FOOTER modal -->
<div class="modal fade" id="mi_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">
            <span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span>
          </button>
          <h4 class="modal-title" id="myModalLabel">Agrega tu correo</h4>
        </div>
        <div class="modal-body">
          <div class="row" style="padding:15px">
            <label for="" style="color:red; display:none; text-align:center" id="lbl-error">Debe agregar un email valido para continuar</label>
            <input id="email-session" type="text" class="form-control" id="recipient-name" placeholder="Email"><br>
            <button id="verificar-session" type="button" class="btn btn-default center-block" >Continuar</button>
          </div>
        </div>
        <!-- <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div> -->
      </div>
    </div>
  </div>
</div>


<!-- jQuery Plugins -->

<script src="<?php echo _GetDomain; ?>js/jquery.min.js"></script>

<script src="<?php echo _GetDomain; ?>js/bootstrap.min.js"></script>

<script src="<?php echo _GetDomain; ?>js/slick.min.js"></script>

<script src="<?php echo _GetDomain; ?>js/nouislider.min.js"></script>

<script src="<?php echo _GetDomain; ?>js/jquery.zoom.min.js"></script>

<script src="<?php echo _GetDomain; ?>js/main.js"></script>



<script type="text/javascript">

const _Url = '<?php echo _GetDomain; ?>';
const session = '<?php echo $_SESSION["idunica"]; ?>'

// $('#mi_modal').modal({backdrop: 'static', keyboard: false})
const verificar_session = document.querySelector("#verificar-session")
const email_secction = document.querySelector("#email-session")
const lbl_error = document.querySelector("#lbl-error")
const emailRegex = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i


// console.log(session)

if(session == '' || session == null){
    new Promise((resolve, reject) =>{
        $.ajax({
            url:  _Url+"funciones/status_session.php",
            type: "GET",
            success:function(response){
                resolve(response);
            }
        })
    }).then(res =>{
        // console.log(session)
    })
}






verificar_session.addEventListener("click", (e) => {
        // e.preventDefault();
        
        if(email_secction.value == "" || email_secction.value == null){
                lbl_error.style.display = "block"
        }else if(!emailRegex.test(email_secction.value)){
            Swal.fire(
                        'Inente en un momento',
                        'Debe agregar un email correcto',
                        'error'
                        )
        }else{
            new Promise((resolve, reject) =>{
                // * consulta el esta de la session
                // console.log("entrando a la primesa")
                $.ajax({
                        // data: parameters,
                        url:  _Url+"funciones/create_session.php?email="+email_secction.value,
                        type: "GET",
              
                        beforeSend:function(){
                           
                        },
                        success:function(response){
                            resolve(response);
                        }
                    })
            }).then(res =>{
                // console.log('resolviendo el response')
                console.log("aaaaaaaaaa 2")
                console.log(res)
                if(res == 'error'){
                    console.log("entro en el error")
                    Swal.fire(
                        'Inente en un momento',
                        'Debe agregar un email correcto',
                        'error'
                        )
                }else{
                    // * debe llenar la funcion de crear elemento en el carrito
                    var referencia		= $('.agregacarro').attr('rel'); //id del elemento
                    var bla             = '1' //cantidad seleccionada
                    var url             = baseurl + "carrito-accion.php?idpro="+referencia+"&accion=sumform&cantidad=" + bla; 

                    console.log("---------------")
                    console.log(url)
                    window.location.href= url;
                }
            })
        }
})



function href_envio(id){
    location.href = 'ficha.php?idProducto='+btoa(id);
}





function agregar_product(rel,stock,estado){
    if(stock == 0 || estado == 0){
        Swal.fire({
        title:'Verifica Stock con su vendedor',
        icon: 'warning',
        showCancelButton: false,
        })

    }else{

        var baseurl = '<?php echo _GetDomain; ?>';

        var referencia		= rel;

        var bla             = '1' //cantidad seleccionada

        var url             = baseurl + "carrito-accion.php?idpro="+referencia+"&accion=sumform&cantidad=" + bla;

        window.location.href= url;

    }

}


    var baseurl = '<?php echo _GetDomain; ?>';


    //  * boton para agrear al carro
    $('.agregacarro').click(function(event){
        event.preventDefault();
        if(session == "" || session == null){
            $('#mi_modal').modal('show');
        }else{
            fbq('track', 'AddToCart');
            var codigo_ivana = "codigo_demo_ivana";
            // * elemento que crea el ingreso del producto
            var referencia		= $(this).attr('rel'); //id del elemento
            var bla             = '1' //cantidad seleccionada
            var url             = baseurl + "carrito-accion.php?idpro="+referencia+"&accion=sumform&cantidad=" + bla; 
            // window.location.href= url;
        }



	});





    $(document).ready(function() {



        $('input[type="checkbox"]').click(function() {



            var $checked = $('input[type="checkbox"]:checked');

            var $productsDiv = $('.resfiltro');



            if ($checked.length > 0) {



                $productsDiv.hide();



                $checked.each(function() {

                    var actual  = $(this).val();

                    $('.' + actual ).fadeIn();



                    $('html, body').animate({

                        scrollTop: $('#breadcrumb').offset().top - 150

                    }, 1000, 'swing');



                });



            } else {

                $productsDiv.fadeIn();

            }

        });



    });





    if ( $("#hastaca").length > 0 ) {

        $('html, body').animate({

            scrollTop: $('#hastaca').offset().top - 150

        }, 1000, 'swing');

    }



</script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

<script src="https://www.neumabaterias.cl/js/typeahead.bundle.js" type="text/javascript"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script>

function send_newslatter(e){
    e.preventDefault();
    let email = document.getElementById("email-newslatter").value;
    let correccion = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/
    if (correccion.exec(email)){
        let parametros = {"email" : email};
        const send_newslatter = new Promise((resolve, rejected) =>{
            $.ajax({
                data: parametros,
                type: "POST",
                url:  "./funciones/send_newslatter.php", 
                beforeSend:function(){
                    Swal.fire({
                        html:'<div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>',
                        title: 'Enviando..',
                        showCloseButton: false,
                        showCancelButton: false,
                        focusConfirm: false,
                        showConfirmButton:false,
                    })
                    $(".swal2-modal").css('background-color', 'rgba(0, 0, 0, 0.0)'); 
                    $(".swal2-title").css("color","white"); 
                },
                success:function(response){
                    resolve(response);
                }
            });
        });


        send_newslatter.then(res=>{
            
            swal.close();
            if(res == 'ingresado'){
                Swal.fire('Newsletter','Su Email fue agregado correctamente','success');
            }else{
                Swal.fire('Newsletter','Su Email ya esta en nuestros registros','success');
            }
        });
    }else{
        Swal.fire('error','El email es invalido','error');
    }
}
// * div moda


</script>
<script type="text/javascript" id="zsiqchat">var $zoho=$zoho || {};$zoho.salesiq = $zoho.salesiq || {widgetcode: "90872474c6e22cee5d486a671662c849675c91e4c2dc01163e9240e46248b799", values:{},ready:function(){}};var d=document;s=d.createElement("script");s.type="text/javascript";s.id="zsiqscript";s.defer=true;s.src="https://salesiq.zoho.com/widget";t=d.getElementsByTagName("script")[0];t.parentNode.insertBefore(s,t);</script>
