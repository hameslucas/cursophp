<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/estilo.css">
    <title>Curso PHP</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice dos Exercícios</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo azul">
                    <h3>Básico</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=basico&file=ola">
                            Olá PHP
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=html">
                            Integração HTML
                            </a>
                        </li> 
                        <li>
                            <a href="exercicio.php?dir=basico&file=css">
                            Integração CSS
                            </a>
                        </li> 
                        <li>
                            <a href="exercicio.php?dir=basico&file=comentarios">
                            Comentários PHP
                            </a>
                        </li> 
                    </ul>
                </div>
                <div class="modulo verde-escuro">
                    <h3>Tipos</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=int">
                            Inteiro PHP
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=float">
                            Float
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=aritmeticas">
                            Aritmeticas
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=string">
                            String
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=booleano">
                            Booleano
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=conversoes">
                            Conversoes
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo azul">
                    <h3>Variáveis</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=basico">
                            Variáveis
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=atribuicoes">
                            Atribuições
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=interpolacao">
                            Interpolação
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=variaveis_variaveis">
                            Variáveis
                            </a>
                        </li>
                    </ul> 
                </div> 
            </nav>
        </div>
    </main>
    <footer class="rodape">
        Hames © <?= date('Y'); ?>
    </footer>
</body>
</html>