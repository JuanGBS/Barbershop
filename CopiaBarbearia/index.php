<?php 
session_start();

$servername = "localhost";
$username = "id22320465_root"; 
$password = "Senha-010203"; 
$dbname = "id22320465_bancobarbearia";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="stylesheet" href="assets/carousel.rtl.css">
    <link rel="stylesheet" href="assets/carousel.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="carousel.css" rel="stylesheet">
</head>
<body>
<div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
</div>
<header data-bs-theme="dark">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Josefin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <?php if(isset($_SESSION['Email']) && isset($_SESSION['Senha'])): ?>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="agendamento.php">Agendar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="banco/logout.php">Sair</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item" id="loginNavItem">
                            <a class="nav-link active" aria-current="page" href="login.php">Entrar</a>
                        </li>
                    <?php endif; ?>
                </ul>
                <form class="d-flex" role="search">
                </form>
            </div>
        </div>
    </nav>
</header>
<main>
<div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
    <div class="carousel-indicators">
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="imagens/logo.jpg" class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
            <rect width="100%" height="100%" fill="var(--bs-secondary-color)"/>
            </svg>
            <div class="container">
                <div class="carousel-caption text-start">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container marketing">
    <div class="row">
        <div class="col-lg-4">
            <img src="imagens/corte1.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="var(--bs-secondary-color)"/>
            </svg>
            <h2 class="fw-normal">Marcos</h2>
            <p>Sou cliente fiel da sua barbearia há anos, e nunca me decepciono. Os cortes de cabelo são sempre impecáveis e a atmosfera é tão acolhedora. Recomendo a todos os meus amigos!</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img src="imagens/corte3.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="var(--bs-secondary-color)"/>
            </svg>
            <h2 class="fw-normal">Mario</h2>
            <p>Eu simplesmente amo o meu novo corte de cabelo! O cabeleireiro da sua barbearia, Pedro, realmente entendeu o que eu queria e superou minhas expectativas. Estou me sentindo mais confiante e estiloso do que nunca.</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img src="imagens/corte2.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="var(--bs-secondary-color)"/>
            </svg>
            <h2 class="fw-normal">João Santos</h2>
            <p>Cada vez que saio da sua barbearia, recebo elogios pelo meu corte de cabelo. A precisão nos detalhes e a atenção aos meus pedidos sempre me impressionam. Definitivamente continuarei voltando!</p>
        </div>
    </div>
    <hr class="featurette-divider">
    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading fw-normal lh-1">Americano <span class="text-body-secondary"></span></h2>
            <p class="lead">apresenta cabelo curto nas laterais e na parte de trás da cabeça, enquanto o topo é mantido um pouco mais longo.</p>
        </div>
        <div class="col-md-5">
            <img src="imagens/corte4.jpg"
            <img src="imagens/corte4.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="var(--bs-secondary-bg)"/>
            <text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em"></text>
            </svg>
        </div>
    </div>
    <hr class="featurette-divider">
    <div class="row featurette">
        <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading fw-normal lh-1">Mullet<span class="text-body-secondary"></span></h2>
            <p class="lead">O mullet é distinguido por ter cabelo curto nas laterais e na parte da frente da cabeça, enquanto o cabelo na parte de trás é mantido mais longo.</p>
        </div>
        <div class="col-md-5 order-md-1">
            <img src="imagens/corte5.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="var(--bs-secondary-bg)"/>
            <text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em"></text>
            </svg>
        </div>
    </div>
        <hr class="featurette-divider">
    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading fw-normal lh-1">Buzz cut <span class="text-body-secondary"></span></h2>
            <p class="lead">No buzz cut, todo o cabelo é cortado para um comprimento uniforme, geralmente muito curto.</p>
        </div>
        <div class="col-md-5">
            <img src="imagens/corte6.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="var(--bs-secondary-bg)"/>
            <text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em"></text>
            </svg>
        </div>
    </div>
    <hr class="featurette-divider">
</div>
<footer class="container">
    <p class="float-end"><a href="#"><button>Topo</button></a></p>
</footer>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script>
    <?php if (isset($_SESSION['Email']) && isset($_SESSION['Senha'])): ?>
        var loginNavItem = document.getElementById("loginNavItem");
        
        if (loginNavItem) {
            loginNavItem.style.display = "none";
        }
    <?php endif; ?>
</script>
</body>
</html>

