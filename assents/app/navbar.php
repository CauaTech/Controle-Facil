<div class="vortex-navbar">
    <nav class="navbar navbar-expand-sm navbar-dark">
      <div class="container">

        <a class="navbar-brand nav-text" href="<?php echo $flow ?>">Controle Facil</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="nav">
            <ul class="navbar-nav">
                <a href="<?php echo $flow ?>" class="item_nav btn btn-stack">
                    Entrar
                </a>
            </ul>
        </div>
      </div>
    </nav>
</div>

<style type="text/css">
    .vortex-navbar{
        background-color: black;
    }
    .item_nav{
        display: block;
          padding: 0.5rem 1rem;
        text-decoration: none;
        color: #fff;
        font-size: 10px;
        border-radius: 25px;
    }
    .item_nav:hover{
        transition: 300ms;
        text-decoration: none;
        color: #c2c2c2;
    }
    .btn-stack{
        max-width: 100px;
        color: black;
        background-color: #ffff;
    }
    .nav-text{
        font-weight: 200;
    }
</style>