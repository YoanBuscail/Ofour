<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>oFour</title>

    <!-- Reboot.css est un reset amélioré (avec des valeurs par défaut standardisées) https://getbootstrap.com/docs/4.1/content/reboot/ -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <header>
        <!-- On utilise le composant navbar de la doc Bootstrap -->
        <!-- https://getbootstrap.com/docs/5.0/components/navbar/ -->
        <nav class="navbar navbar-expand-lg navbar-expand-md navbar-light bg-light">
            <div class="container-fluid">
                <div class="d-flex justify-content-between align-items-center"> <!-- Utilisation de d-flex pour aligner les éléments horizontalement -->
                    <a class="navbar-brand" href="#">
                        <img src="./images/logo ofour.png" alt="Logo O'Four" class="logo">
                    </a>
                    <h1 class="navbar-title">O'Four</h1> 
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav ">
                        <li class="nav-item active">
                            <a class="nav-link active" aria-current="page" href="#">Accueil</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Recettes de saison</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Entrées</a>
                        </li>   
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Plats</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Desserts</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="custom-container">
            <div class="container ">
                <div class="row">
                    <div class="col-lg-6 col-md-12 mb-4">             
                        <!-- Ajout de "cards" Bootstrap -->
                        <!-- https://getbootstrap.com/docs/5.0/components/card/ -->
                        <div class="card">
                            <div class="card-header">
                                <h2>Edito</h2>
                            </div>
                            <div class="card-body">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus, inventore voluptatem quaerat velit pariatur laborum id vero dolorem commodi ex quam cumque enim sunt quidem dolore necessitatibus neque rem minima?
                                    Dolorum facilis praesentium ullam reiciendis. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus, inventore voluptatem quaerat velit pariatur laborum id vero dolorem commodi ex quam cumque enim sunt quidem dolore necessitatibus neque rem minima?
                                    Dolorum facilis praesentium ullam reiciendis.</p>
                                    <p>Quasi libero non asperiores quos adipisci, sequi aspernatur, dolorem corrupti, quam nesciunt ab harum eum modi sint id reiciendis officia impedit dolorum eos vero delectus.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 mb-4">
                        <div class="card">
                            <div class="card-header">
                                <h2><a href="#">Recette du jour</a></h2>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="./images/recette1.jpeg" alt="recette de tarte" class="img-fluid">
                                    </div>
                                    <div class="col-md-6">
                                        <ul>
                                            <li>Tomates</li>
                                            <li>Thon</li>
                                            <li>Oeufs</li>
                                            <li>Lait</li>
                                            <li>Moutarde</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-12" id="recette">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolor sed iusto nostrum excepturi maiores quo iste itaque ducimus consequatur incidunt, quam veritatis similique odio aspernatur praesentium eaque quae perferendis eligendi. Quisquam, praesentium natus consequatur ipsam nam aspernatur quaerat alias corporis, vel est assumenda vero similique reprehenderit eaque aliquid sequi error ad nostrum!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="custom-container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <!-- Cartes "Les recettes les plus récentes" -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <h2><a href="#">Les recettes les plus récentes</a></h2>
                            </div>
                            <div class="card-body text-center">
                                <ol>
                                    <li>Pâtes carbonara</li>
                                    <li>Quiche Lorraine</li>
                                    <li>Salade fraîcheur</li>
                                    <li>Saumon en papillotte</li>
                                    <li>Moelleux au chocolat healthy</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <!-- Cartes "Les meilleures recettes" -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <h2><a href="#">Les meilleures recettes</a></h2>
                            </div>
                            <div class="card-body text-center">
                                <ol>
                                    <li>Mousse express au Nutella</li>
                                    <li>Courgettes farcies au poulet</li>
                                    <li>Quiche au chèvre et saumon</li>
                                    <li>Salade de légumes grillés</li>
                                    <li>Quiche ricotta épinards</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="container">
            <div class="row justify-content-between text-center">
                <div class="col-md-4">
                    <a href="page.php">Partagez votre recette</a>
                </div>
                <div class="col-md-4">
                    <h3>O'Four : le meilleur des recettes</h3>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="page.php">Contact</a></li>
                        <li class="list-inline-item"><a href="page.php">Mentions légales</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>