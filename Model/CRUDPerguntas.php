<?php
include("/xampp/htdocs/Projeto_EsclareceAi/Model/Banco.php");

$sql = $pdo->prepare('SELECT conteudo, fk_Aluno_ID, fk_Disciplina_Id_disc FROM duvidas ORDER BY Data, Hora');
$sql->execute();
$conteudo = $sql->fetchAll(PDO::FETCH_ASSOC); // pega mais de um valor 

foreach ($conteudo as $option) {

    $sql = $pdo->prepare('SELECT NomeUsuario FROM aluno WHERE id = ?');
    $sql->execute(array($option['fk_Aluno_ID']));
    $nomeUser = $sql->fetchColumn(); // Obtém um único valor

    $sql = $pdo->prepare('SELECT Nome FROM disciplina WHERE Id_disc = ?');
    $sql->execute(array($option['fk_Disciplina_Id_disc']));
    $disciplina = $sql->fetchColumn(); // Obtém um único valor

    ?>
    <div class='conteudo_pergunta'>
        <div class='perguntas_informacoes'>

            <div class='info_nome_user'>
                <i class='bi bi-person-circle' style='font-size: 50px;'></i>
                <p class='nome_user'><?php echo $nomeUser; ?></p>
            </div>
            <div class='info_informacoes'>
                <p class='informacoes'><i class='bi bi-globe-americas' style='margin-right: .5rem;'></i><?php echo $disciplina; ?>
                    . Há 4 horas</p>

            </div>

        </div>
        <p class='texto_pergunta'>
            <?php echo $option['conteudo'] ?>
        </p>
        <div class='alinhamento_resp'>
            <a class='Resposta' href='#'>Responder</a>
            <ul class='rating'>
                <li class='star-icon ativo' data-avaliacao='1'></li>
                <li class='star-icon' data-avaliacao='2'></li>
                <li class='star-icon' data-avaliacao='3'></li>
                <li class='star-icon' data-avaliacao='4'></li>
                <li class='star-icon' data-avaliacao='5'></li>
            </ul>
        </div>
    </div>
<?php }?>