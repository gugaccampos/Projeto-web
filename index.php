<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Projeto-Web Gustavo Campos</title>
</head>
<body>

    <div class="up">
        <div class="left-up">
            <div class="head-left">
                <h1>Projeto curricular da disciplina de Introdução a Computação</h1>
                <h3>Atualizando para a disciplina de Introdução a Sistemas de Informação</h3>
                <p><h3>Turma: 2020.2</h3></p>
            </div>
        </div>
        <div class="right-up">
            <img class="foto" src="./assets/me.jpeg">
        </div>  
        
    </div>

    <div class="middle">
        
        <div class="middle-left">
            <h2>Um pouco sobre mim:</h2>
            <h3>Ex-estudante do colégio Marista São Luís</h3>
            <p>13 anos estudando no mesmo</p>
            <h3>Ex-atleta escolar de volêi e handeibol</h3>
            <p>Já fui em vários estados do Brasil para competir</p>
            <h3>Faço aniversário dia 10/12</h3>
            <p>Atualmente tenho 22 anos :)</p>
        </div>
        
        <div class="middle-center">
            <h2>Amo jogar e ver futebol também</h2>
            <p>Torcedor do náutico</p>
            <img class="nautico" src="./assets/nautico-05.gif">
        </div>

        <div class="middle-right">
            <h1>Gustavo Carvalho Campos</h1>
            <h3>Aluno de Ciência da Computação - UFPE</h3>
            <h3>Email para contato:</h3>
            <a href="https://mail.google.com/mail/u/1/?fs=1&to=gugaccampos13@gmail.com&tf=cm" style="color: blue;" target="_blank">gugaccampos13@gmail.com</a>
            <h3>Github:</h3>
            <a href="https://github.com/gugaccampos" style="color: blue;" target="_blank">gugaccampos</a>
            <h3>Linkedin:</h3>
            <a href="https://www.linkedin.com/in/gustavo-carvalho-campos-671183255/" style="color: blue;" target="_blank">Gustavo Campos</a>
                
        </div>

    </div>
    
    <div class="down">

        <div class="down-left">

            <div>
                <h2>
                    <?php
                        $hora = date("H");
                    
                        if ($hora >= 5 && $hora < 12) {
                            echo "Bom dia, Obrigado por visitar meu site!";
                        } else if ($hora >= 12 && $hora < 18) {
                            echo "Boa tarde, Obrigado por visitar meu site!";
                        } else if ($hora >= 18 || $hora < 5) {
                            echo "Boa noite, Obrigado por visitar meu site!";
                        }
                    ?>
                </h2>
                <h3>Hoje é 
                    <?php
                        echo date('d/m/Y');
                    ?>
                </h3>

            </div>

            <div>
                <h2>Meu Currículo:</h2>
                <h3>Monitor de Introdução a Programação</h3>
                <h6>Setembro de 2021 - Junho de 2023(1 ano 9 meses)</h6>
                <h3>Medalhista e/ou Menção Honrosa nas seguintes matérias:</h3>
                <p>-Química</p>
                <p>-Física</p>
                <p>-Matemática</p>
                <p>-Astronomia</p>
                <h3>Cursando Ciência da Computação no CIN-UFPE</h3>

            </div>

            <div>
                <h2>Línguas:</h2>
                <h3>Inglês: Avançado</h3>
                <h3>Português: Nativo</h3>            

            </div>

        </div>

        <div class="down-middle">
        
            <h2>Formulário pra Contato</h2>
            <h3>
                <form method="post" action="">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" required class="nome"><br><br>
                    <label for="nome">Email:</label>
                    <input type="text" id="email" name="email" required class="email"><br><br>
                    <label for="mensagem">Me diga o que você achou do meu site:</label><br>
                    <textarea id="mensagem" name="mensagem" rows="4" cols="50" required class="mensagem"></textarea><br><br>
                    <input type="submit" value="Enviar" class="botao">
                </form>
                
                
                <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $nome = htmlspecialchars($_POST['nome']);
                        $email = htmlspecialchars($_POST['email']);
                        $mensagem = htmlspecialchars($_POST['mensagem']);
                        echo "<h2>Mensagem Recebida</h2>";
                        echo "<h3>Nome: $nome<br></h3>";
                        echo "<h3>Email: $email<br></h3>";
                        echo "<h3>Mensagem: $mensagem<br></h3>";
                    }
                ?>

            </h3>
        </div>

        <div class="down-right">
            <h2>Principais competências e habilidades: </h2>
            
            <div class="abilities">
                <h3 style="margin-right: 6rem;">Python</h3> <img src="./assets/Python.svg.png" class="python">
            </div>
            <div class="abilities">
                <h3 style="margin-right: 7.5rem;">Java</h3> <img src="./assets/java.svg.png" class="java">
            </div>
            <div class="abilities">
                <h3 style="margin-right: 7.75rem;">C++</h3> <img src="./assets/c++.png" class="c">
            </div>
            <div class="abilities">
                <h3 style="margin-right: 6.5rem;">HTML</h3> <img src="./assets/html.png" class="html">
            </div>
            <div class="abilities">
                <h3 style="margin-right: 7.5rem;">CSS</h3> <img src="./assets/css.png" class="css">
            </div>
            <div class="abilities">
                <h3 style="margin-right: 3.75rem;">JavaScript</h3> <img src="./assets/js.png" class="js">
            </div>
            <div class="abilities">
                <h3 style="margin-right: 5.25rem;">Angular</h3> <img src="./assets/angular.png" class="angular">
            </div>
            <div class="abilities">
                <h3 style="margin-right: 6.25rem;">React</h3> <img src="./assets/react.png" class="react">
            </div>
            <div class="abilities">
                <h3 style="margin-right: 5.35rem;">Node.js</h3> <img src="./assets/nodejs.png" class="node">
            </div>
            <div class="abilities">
                <h3 style="margin-right: 7rem;">SQL</h3> <img src="./assets/sql.png" class="sql">
            </div>
            <div class="abilities">
                <h3 style="margin-right: 7.75rem;">Git</h3> <img src="./assets/git.png" class="git">
            </div>  
        </div>

    </div>
</body>
</html>
