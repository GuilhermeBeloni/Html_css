<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulário</title>
    <script src="js/formulario.js"></script>

    <link
      rel="shortcut icon"
      href="imagens/logo-triangulos-coloridos30.ico"
      type="image/x-icon"
    />
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="container mx-auto bg-light mt-1 w-90">
      <header class="row d-flex align-items-center">
        <!-- oculte a barra de acessibilidade -->
        <div id="barra_acessibilidade" class="col-12">
          <ul id="atalhos">
            <li><a href="#menu" accesskey="1">Ir para menu [1]</a></li>
            <li>
              <a href="#formulario" accesskey="2">Ir para formulário [2]</a>
            </li>
          </ul>
        </div>

        <!-- faça com que as duas divs a seguir sejam exibidas lado a lado quando o viewport for maior ou igual a 576px sendo que a primeira deve ocupar 3/12 e a segunda 9/12 consulte: https://getbootstrap.com.br/docs/4.1/layout/grid/ -->
        <div class="col-3">
          <img
            src="imagens/logo-triangulos-coloridos120.png"
            alt="Logotipo da empresa com dois triângulos sobrepostos."
          />
        </div>

        <div class="col-sm-9">
          <h1>Empresa XPTO</h1>
        </div>
      </header>
      <hr />
      <main class="row">
        <section class="col">
          <div>
            <!-- oculte o header abaixo 
            consulte https://getbootstrap.com.br/docs/4.1/utilities/display/ -->
            <h2 id="menu">Menu</h2>
          </div>
          <div class="col-sm-flex d-sm-flex justify-content-sm-center">
            <!-- torne o menu responsivo, conforme o exemplo
            consulte https://getbootstrap.com.br/docs/4.1/components/navbar/ -->
            <nav class="navbar navbar-expand-sm navbar-light bg-light">
              <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Alterna navegação"
              >
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto mt-2 mt-sm-0">
                  <li class="nav-item">
                    <a class="nav-link" href="home.html">Home</a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Contato</a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
          <article class="col-flex">
            <h2 id="formulario">Formulário de Contato</h2>
            <!-- torne o formulário responsivo, conforme o exemplo consulte https://getbootstrap.com.br/docs/4.1/components/forms/ -->
            <form class="needs-validation" novalidate>
              <div class="form-group row">
                <label
                  for="validationCuston01"
                  class="col-sm-2 col-form-label col-form-label-sm"
                  >Nome*</label
                >
                <div class="col-sm-10">
                  <input
                    type="text"
                    class="form-control form-control-sm"
                    id="validationCuston01"
                    placeholder="Digite seu nome"
                    required/>
                    <div class="invalid-feedback">Campo nome obrigatório!</div>
                </div>
              </div>
              <div class="form-group row">
                <label
                  for="validationCuston02"
                  name="email"
                  class="col-sm-2 col-form-label col-form-label-sm"
                  >E-mail*</label
                >
                <div class="col-sm-10">
                  <input
                    type="email"
                    class="form-control form-control-sm"
                    id="validationCuston02"
                    placeholder="Digite seu e-mail"
                    required
                  />
                  <div class="invalid-feedback">Campo e-mail obrigatório!</div>
                </div>
              </div>
              <div class="form-group row">
                <label
                  for="validationCustonMsg"
                  name="mensagem"
                  class="col-sm-2 col-form-label col-form-label-sm"
                  >Mensagem*</label
                >
                <div class="col-sm-10">
                  <textarea
                    class="form-control"
                    name="mensagem"
                    id="validationCustonMsg"
                    placeholder="Digite sua mensagem..."
                    required
                    >
                  </textarea>
                  <div class="invalid-feedback">Campo mensagem obrigatório!</div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary my-1">
                      Enviar
                    </button>
                  </div>
                  <div>
                    <p>* Campos obrigatórios</p>

                  </div>
                  </div>
                </div>
              </div>
            </form>
          </article>
        </section>
      </main>
      <footer class="row">
        <div class="col-12">
          <p>Copyright © 2022</p>
          <noscript>
            <!-- referência a arquivo externo -->
            <a href="home.html">Home</a>
          </noscript>
        </div>
      </footer>
    </div>

    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
      integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
