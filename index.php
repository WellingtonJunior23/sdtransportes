<?php
include_once 'components/topo.php';
?>

<?php
include_once 'slider.php';
?>

<!-- Serviços -->

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <h2 class="section-title">SERVIÇOS PRESTADOS</h2>
        </div>   
    </div>
</div>

<div id="services" class="content-section">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="service-item">
                    <span class="service-icon first"></span>
                    <h3>Easy Customization</h3>
                    <p>Cras congue orci at diam condimentum, in dignissim tellus elementum. Praesent id mauris eu urna vehicula rutrum sed in elit. Sed sed urna porta, viverra lacus in.</p>
                </div> <!-- /.service-item -->
            </div> <!-- /.col-md-3 -->
            <div class="col-md-3 col-sm-6">
                <div class="service-item">
                    <span class="service-icon second"></span>
                    <h3>Web Design</h3>
                    <p>Nulla in nunc elit. Etiam porttitor nibh et felis molestie fermentum. Ut quis diam porttitor, dictum dolor in, volutpat nulla. Phasellus egestas eu lacus eu pharetra.</p>
                </div> <!-- /.service-item -->
            </div> <!-- /.col-md-3 -->
            <div class="col-md-3 col-sm-6">
                <div class="service-item">
                    <span class="service-icon third"></span>
                    <h3>High Quality</h3>
                    <p>Sprint is free responsive website template using HTML5 CSS3 and Bootstrap framework. Feel free to download, edit and use it for your websites.</p>
                </div> <!-- /.service-item -->
            </div> <!-- /.col-md-3 -->
            <div class="col-md-3 col-sm-6">
                <div class="service-item">
                    <span class="service-icon fourth"></span>
                    <h3>Professional Design</h3>
                    <p>Morbi id nisi enim. Ut congue interdum pharetra facilisi. Aenean consectetur pellentesque mauris nec ornare. Nam tortor justo, rutrum ut condimentum.</p>
                </div> <!-- /.service-item -->
            </div> <!-- /.col-md-3 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</div> <!-- /#services -->
<!-- End Serviços -->

<!-- Contato -->   

<div id="contact" class="content-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="section-title">Entre em Contato</h2>
            </div> <!-- /.col-md-12 -->
        </div> <!-- /.row -->
        <div class="row">
            <div class="col-md-offset-2 col-md-8 text-center bigger-text">
                <p>Entre em contato conosco preenchendo o formulário abaixo, tire dúvidas, envie perguntas, comentários e sugestões.</p>
            </div>

            <form class="col-md-offset-3" method="post" action="enviarEmail.php">
                <div class="col-md-8 col-sm-8">

                    <div class="row contact-form">
                        <fieldset class="col-md-6 col-sm-6">
                            <input id="name" type="text" name="nome" placeholder="Nome" required>
                        </fieldset>
                        <fieldset class="col-md-6 col-sm-6">
                            <input type="email" name="email" id="email" placeholder="E-mail" required>
                        </fieldset>
                        <fieldset class="col-md-6">
                            <input type="number" name="telefone" id="subject" placeholder="Telefone" required>
                        </fieldset>
                        <fieldset class="col-md-6">
                            <input type="text" name="subject" id="subject" placeholder="Assunto">
                        </fieldset>
                        <fieldset class="col-md-12">
                            <textarea name="mensagem" id="comments" placeholder="Mensagem" required></textarea>
                        </fieldset>
                        <fieldset class="col-md-12">
                            <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-send"></span> Enviar</button 
                        </fieldset>
                    </div> <!-- /.contact-form -->

                </div> <!-- /.col-md-6 -->
            </form>
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</div> <!-- /#products -->

<!-- End Contato --> 

<?php
include_once 'components/footer.php';
?>