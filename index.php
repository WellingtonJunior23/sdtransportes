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
                <h2 class="section-title">ENTRE EM CONTATO CONOSCO</h2>
            </div>
        
            <form class="form-horizontal">             
                <div class="form-group">
                    <div class="col-sm-8">
                        <label for="inputEmail3" class="col-sm-2 control-label">Nome</label>
                        <input class="form-control" type="text" id="formGroupInputLarge" placeholder="Nome Completo" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-8">
                        <label for="inputEmail3" class="col-sm-2 control-label">E-mail</label>
                        <input class="form-control" type="text" id="formGroupInputLarge" placeholder="E-mail">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-8">
                        <label for="inputEmail3" class="col-sm-2 control-label">Telefone</label>
                        <input class="form-control" type="text" id="formGroupInputLarge" placeholder="Telefone ou Celular">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-8">
                        <label for="inputEmail3" class="col-sm-2 control-label">Assunto</label>
                        <input class="form-control" type="text" id="formGroupInputLarge" placeholder="Assunto">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4">
                        <label for="inputEmail3" class="col-sm-2 control-label">Mensagem</label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-8">
                        <label for="inputEmail3" class="col-sm-2 control-label"></label>
                        <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-send"></span> Enviar</button>
                    </div>
                </div>                           
            </form>
        
        </div>
    </div>
</div>
<!-- End Contato --> 
    
<?php
    include_once 'components/footer.php';
?>