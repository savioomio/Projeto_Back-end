<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="../img/logo_jsor.png" type="image/x-icon">
    <script type="module" src="../javascript/dark_nuvem_lista.js"></script>
    <link rel="stylesheet" href="style/areaTrabalho.css">
</head>

<body>
    <main class="mainPrincipal">
        <section id="logo">
            <img src="../img/logo.png" alt="logo">
            <div class="toggleWrapper">
                <input type="checkbox" checked class="dn" id="dn">
                <label for="dn" class="toggle">
                    <span class="toggle__handler">
                        <span class="crater crater--1"></span>
                        <span class="crater crater--2"></span>
                        <span class="crater crater--3"></span>
                    </span>
                    <div id="content" class="hidden">
                        <span class="nuvem"></span>
                    </div>
                    <span class="star star--1"></span>
                    <span class="star star--2" id="star2"></span>
                    <span class="star star--3"></span>
                    <span class="star star--4"></span>
                    <span class="star star--5"></span>
                    <span class="star star--6"></span>
                </label>
            </div>


            <!-- <input type="checkbox" name="" id="switch"> -->
        </section>

        <section id="areaTrabalho">
            <img src="" alt="">
            <h1>Área de Trabalho<ion-icon name="pencil-outline"></ion-icon></h1>
        </section>

        <hr>    

        <section id="quadro">
            <h2>Quadros</h2>
            <form action="" method="post">
                <article class="formQuadro">
                    <aside class="ordenar">
                        <!-- COLOCAR NO ACTION para atualizar a pagina com as configurações que foram editadas no formulario 
                        <?=$_SERVER['PHP_SELF']?> -->

                        <label for="iordem">Ordenar por</label>
                        <select name="ordem" id="iordem">
                            <option value="recente">Recentes</option>
                            <option value="a-a">A-Z</option>
                            <option value="z-a">Z-A</option>

                        </select>

                    </aside>

                    <article class="pesQuadro">
                        <aside class="ordenar">
                            <label for="ipesQuadro">Pesquisar Quadro</label>
                            <div>
                                <input type="text"  name="pesQuadro" id="ipesQuadro">
                                <ion-icon name="search-outline"></ion-icon>
                            </div>
                            
                        </aside>
            </form>
                    </article>

            </article>

            <article class="criarQuadro">
                <div class="quadros">
                    <p>Criar novo Quadro</p>
                    <ion-icon name="add-circle-outline"></ion-icon>
                </div>
                <div class="quadros">
                    Quadro 1 (exemplo)
                </div>
                <div class="quadros">
                    Quadro 2 (exemplo)
                </div>
                <div class="quadros">
                    Quadro 3 (exemplo)
                </div>
                <div class="quadros">
                    Quadro 4 (exemplo)
                </div>
                <div class="quadros">
                    Quadro 5 (exemplo)
                </div>
                
                   
            </article>
 
        </section>

        <section class="navigation">
            <ul>
                <li class="list">
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="person-circle-sharp"></ion-icon>
                        </span>
                        <span class="text">Perfil</span>
                    </a>
                </li>

                <li class="list active">
                    <a href="areaTrabalho.php">
                        <span class="icon">
                            <ion-icon name="calendar-sharp"></ion-icon>
                        </span>
                        <span class="text">Quadros</span>
                    </a>
                </li>
                <li class="list">
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="podium-sharp"></ion-icon>
                        </span>
                        <span class="text">Rankings</span>
                    </a>
                </li>
                <li class="list">
                    <a href="adicionarAmigos.php">
                        <span class="icon">
                            <ion-icon name="person-add-sharp"></ion-icon>
                        </span>
                        <span class="text">Amigos</span>
                    </a>
                </li>
                <li class="list">
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="notifications-sharp"></ion-icon>
                        </span>
                        <span class="text">Notificações</span>
                    </a>
                </li>
                <li class="list">
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="time"></ion-icon>
                        </span>
                        <span class="text">Recentes</span>
                    </a>
                </li>

                <div class="indicator"></div> 
            </ul>

        </section>

    </main>
    <script src='https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js'></script>
    <script src='https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js'></script>
    <script src="../script.js"></script>

</body>

</html>