<?php
//including the database connection file
include_once("inc/header.php");
?>

<h1 align="center">Registro de Cobrança</h1><br>

<form action="cadastrar.php" method="POST" name="form1">
  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="data_cob">Data da Cobrança</label>
      <input type="date" class="form-control" name="data_cob" required>
    </div>
    <div class="form-group col-md-3">
      <label for="matricula">Matrícula</label>
      <input type="text" class="form-control" name="matricula" required>
    </div>
    <div class="form-group col-md-2">
      <label for="parcela">Parcela Cobrada</label>
      <select name="parcela" class="form-control" required>
        <option selected>01</option>
        <option>02</option>
        <option>03</option>
        <option>04</option>
        <option>05</option>
        <option>06</option>
        <option>07</option>
        <option>08</option>
        <option>09</option>
        <option>10</option>
        <option>11</option>
        <option>12</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="mes_cob">Mês Cobrança</label>
      <select name="mes_cob" class="form-control" required>
        <option selected>Janeiro</option>
        <option>Fevereiro</option>
        <option>Março</option>
        <option>Abril</option>
        <option>Maio</option>
        <option>Junho</option>
        <option>Julho</option>
        <option>Agosto</option>
        <option>Setembro</option>
        <option>Outubro</option>
        <option>Novembro</option>
        <option>Dezembro</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="nome_aluno">Nome do Aluno</label>
    <input type="text" class="form-control" name="nome_aluno" placeholder="Nome do Aluno" required>
  </div>
  <div class="form-group">
    <label for="nome_contato">Nome do Contato</label>
    <input type="text" class="form-control" name="nome_contato" placeholder="Nome do Contato" required>
  </div>
  <div class="form-row">
    <div class="form-group col-md-2">
    <label for="tel_financeiro1">Telefone do Financeiro</label>
      <input type="text" class="form-control" name="tel_financeiro1" placeholder="85999999999">
    </div>
    <div class="form-group col-md-2">
    <label for="tel_financeiro2">.</label>
      <input type="text" class="form-control" name="tel_financeiro2" placeholder="85999999999">
    </div>
    <div class="form-group col-md-2">
    <label for="tel_pai1">Telefone do Pai</label>
      <input type="text" class="form-control" name="tel_pai1" placeholder="85999999999">
    </div>
    <div class="form-group col-md-2">
    <label for="tel_pai2">.</label>
      <input type="text" class="form-control" name="tel_pai2" placeholder="85999999999">
    </div>
    <div class="form-group col-md-2">
    <label for="tel_mae1">Telefone da Mãe</label>
      <input type="text" class="form-control" name="tel_mae1" placeholder="85999999999">
    </div>
    <div class="form-group col-md-2">
    <label for="tel_mae2">.</label>
      <input type="text" class="form-control" name="tel_mae2" placeholder="85999999999">
    </div>
  </div>
    <div class="form-row">
    <div class="form-group col-md-2">
    <label for="tel_fixo">Telefone Fixo</label>
      <input type="text" class="form-control" name="tel_fixo" placeholder="8533333333">
    </div>
    <div class="form-group col-md-6">
    <label for="email">E-mail</label>
      <input type="email" class="form-control" name="email" placeholder="E-mail" required>
    </div>
    <div class="form-group col-md-4">
      <label for="outros_motivos">Outros Motivos</label>
      <select name="outros_motivos" class="form-control" required>
        <option>BAILE DE LETRAS</option>
        <option>DÉBITO PARCELA</option>
        <option>ESPORTE</option>
        <option>EUCARISTIA</option>
      </select>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="pagamento">Data de Retorno do Pagamento</label>
      <input type="date" class="form-control" name="pagamento" required>
    </div>
    <div class="form-group col-md-4">
      <label for="sucesso">Sucesso da Ligação</label>
      <select name="sucesso" class="form-control" required>
        <option>Sim</option>
        <option>Não</option>
      </select>
    </div>
    <div class="form-group col-md-5">
      <label for="motivo">Motivo</label>
      <select name="motivo" class="form-control" required>
        <option>NÃO ATENDE O TELEFONE</option>
        <option>NÚMERO NÃO É DO RESPONSÁVEL</option>
        <option>TELEFONE DESATUALIZADO</option>
        <option>DESLIGADO OU FORA DE ÁREA</option>
        <option>NúMERO NÃO EXISTE</option>
        <option>ALUNO NÃO RESIDE COM OS PAIS</option>
        <option>TELEFONE OCUPADO</option>
        <option>OUTROS</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="obs">Observação</label>
    <textarea class="form-control" name="obs" rows="3" required></textarea>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">REGISTRAR</button>
</form>

<?php
//including the database connection file
include_once("inc/footer.php");
?>
