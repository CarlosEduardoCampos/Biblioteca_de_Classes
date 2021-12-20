<footer>
  <section class="superior">
    <div class="container conteudo">
      <div class="contatos">
        <h4>CONTATOS</h4>
        <div class="separador"></div>
      </div>
      <div class="produtos">
        <h4>PRODUTOS</h4>
        <div class="separador"></div>
        <ul>
          <li><a>Linha Maternidade</a></li>
          <li><a>Linha Batizado</a></li>
          <li><a>Linha Neutra</a></li>
          <li><a>Meninos</a></li>
          <li><a>Meninas</a></li>
          <li><a>Acessórios</a></li>
          <li><a>Personalizados</a></li>
        </ul>
      </div>
      <div class="info">
        <h4>INFORMAÇÕES</h4>
        <div class="separador"></div>
        <ul>
          <li><a href="">Quem Somos</a></li>
          <li><a href="">Dúvidas Frequentes</a></li>
        </ul>
      </div>
      <div class="newsletter">
        <div>
        <h4>NEWSLETTER</h4>
        <div class="separador"></div>
        <span>Cadastre seu email e receba nossas
          atualizações</span>
          <form action="">
            <input type="text" placeholder="exemplo@email.com">
            <button type="submit"><i class="fab fa-telegram-plane"></i></button>
          </form>
        </div>
        <div class="sociais">
          <h5>Siga nossas redes sociais</h5>
          <div class="icones">
          <a href=""><button><i class="fab fa-facebook-f"></i></button></a>
          <a href=""><button><i class="fab fa-instagram"></i></button></a>
        </div>
        </div>
      </div>
    </div>
    
  </section>
  <section class="inferior">

  </section>
</footer>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script
src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
crossorigin="anonymous"
></script>
<script
src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
crossorigin="anonymous"
></script>

<script src="/res/script.js"></script>
<script src="/res/pagarme.js"></script>
<script src="/res/easyzoom.js"></script>

<script>
  $(document).ready(function() { 
    var form = $("#payment_form")
    var botao = $(".finalizarPedido")
    botao.click(function(event) {
        event.preventDefault();
        var card = {} 
        card.card_holder_name = $("#form #card_holder_name").val()
        card.card_expiration_date = $("#form #card_expiration_month").val() + '/' + $("#form #card_expiration_year").val()
        card.card_number = $("#form #card_number").val()
        card.card_cvv = $("#form #card_cvv").val()

        // pega os erros de validação nos campos do form e a bandeira do cartão
        var cardValidations = pagarme.validate({card: card})
                
        //Então você pode verificar se algum campo não é válido
        if(!cardValidations.card.card_number)
          console.log('Oops, número de cartão incorreto')
         
        //Mas caso esteja tudo certo, você pode seguir o fluxo
        pagarme.client.connect({ encryption_key: 'ek_test_cTNQL5NUEGJM9dzUOgR7kNgAIJiHLG' })
          .then(client => client.security.encrypt(card))
          .then(card_hash => 
            {
              $("#hash").val(card_hash);
              form.submit()
            }
          )

        
       

        return false
    })
});
</script>

<script>
  var $easyzoom = $('.easyzoom').easyZoom();

// Setup thumbnails example
var api1 = $easyzoom.filter('.easyzoom--with-thumbnails').data('easyZoom');

$('.thumbnails').on('click', 'a', function(e) {
var $this = $(this);

e.preventDefault();

// Use EasyZoom's `swap` method
api1.swap($this.data('standard'), $this.attr('href'));
});
</script>

<script src="/res/mascara.min.js"></script>

</html>
