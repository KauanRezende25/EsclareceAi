<?php
include("/xampp/htdocs/Projeto_EsclareceAi/Model/Banco.php");

$sql = $pdo->prepare('select conteudo, fk_Aluno_ID, fk_Disciplina_Id_disc from duvidas order by Data, Hora');
$sql->execute();
$conteudo = $sql->fetchAll(PDO::FETCH_ASSOC); // pega mais de um valor 

foreach ($conteudo as $option) {

    $sql = $pdo->prepare('select nomeUsuario from aluno where id = ?');
    $sql->execute(array($option['fk_Aluno_ID']));
    $nomeUser = $sql->fetchColumn(); // Obtém um único valor

    $sql = $pdo->prepare('select Nome from disciplina where Id_disc = ?');
    $sql->execute(array($option['fk_Disciplina_Id_disc']));
    $disciplina = $sql->fetchColumn(); // Obtém um único valor

    ?>
    <div class='conteudo_pergunta'>
        <div class='perguntas_informacoes'>

            <div class='info_nome_user'>
                <i class='bi bi-person-circle' style='font-size: 50px;'></i>
                <?php if($option['fk_Disciplina_Id_disc']===8)
                {?>
                <?php } ?>
                <p class='nome_user'><?php echo $nomeUser; ?></p>
            </div>
            <div class='info_informacoes'>
                <p class='informacoes'>
                <?php if($option['fk_Disciplina_Id_disc']===1)
                {?>
                    <i class='bi bi-flag' style='margin-right: .5rem;'></i>
                <?php } ?>
                <?php if($option['fk_Disciplina_Id_disc']===2)
                {?>
                    <i class='bi bi-type-h2' style='margin-right: .5rem;'></i>
                <?php } ?>
                <?php if($option['fk_Disciplina_Id_disc']===3)
                {?>
                    <i class='bi bi-calculator-fill' style='margin-right: .5rem;'></i>
                <?php } ?>
                <?php if($option['fk_Disciplina_Id_disc']===4)
                {?>
                    <i class='bi bi-virus' style='margin-right: .5rem;'></i>
                <?php } ?>
                <?php if($option['fk_Disciplina_Id_disc']===5)
                {?>
                    <i class='bi bi-magnet-fill' style='margin-right: .5rem;'></i>
                <?php } ?>
                <?php if($option['fk_Disciplina_Id_disc']===6)
                {?>
                    <i class='bi bi-journal-bookmark' style='margin-right: .5rem;'></i>
                <?php } ?>
                <?php if($option['fk_Disciplina_Id_disc']===7)
                {?>
                    <i class='bi bi-pen' style='margin-right: .5rem;'></i>
                <?php } ?>
                <?php if($option['fk_Disciplina_Id_disc']===8)
                {?>
                    <i class='bi bi-globe-americas' style='margin-right: .5rem;'></i>
                <?php } ?>
                <?php if($option['fk_Disciplina_Id_disc']===9)
                {?>
                    <i class='bi bi-bank' style='margin-right: .5rem;'></i>
                <?php } ?>
                <?php if($option['fk_Disciplina_Id_disc']===10)
                {?>
                    <i class='bi bi-lightbulb-fill' style='margin-right: .5rem;'></i>
                <?php } ?>
                <?php if($option['fk_Disciplina_Id_disc']===11)
                {?>
                    <i class='bi bi-people' style='margin-right: .5rem;'></i>
                <?php } ?>
                <?php if($option['fk_Disciplina_Id_disc']===12)
                {?>
                    <i class='bi bi-pc-display"' style='margin-right: .5rem;'></i>
                <?php } ?>
                <?php if($option['fk_Disciplina_Id_disc']===13)
                {?>
                    <i class='bi bi-lightning-fill' style='margin-right: .5rem;'></i>
                <?php } ?>
                <?php if($option['fk_Disciplina_Id_disc']===14)
                {?>
                    <i class='bi bi-gear' style='margin-right: .5rem;'></i>
                <?php } ?>
                <?php if($option['fk_Disciplina_Id_disc']===15)
                {?>
                    <i class='bi bi-cpu' style='margin-right: .5rem;'></i>
                <?php } ?>
                <?php if($option['fk_Disciplina_Id_disc']===16)
                {?>
                    <i class='bi bi-robot' style='margin-right: .5rem;'></i>
                <?php } ?>
                <?php if($option['fk_Disciplina_Id_disc']===17)
                {?>
                    <i class='bi bi-pc-display-horizontal' style='margin-right: .5rem;'></i>
                <?php } ?>
                <?php echo $disciplina; ?>
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