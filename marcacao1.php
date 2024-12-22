<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marcação</title>
    <link rel="stylesheet" href="css/marcacao1.css">
    <style>
        .terms-container {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-family: Arial, sans-serif;
        }
        .terms-content {
            max-height: 150px;
            overflow-y: scroll;
            margin-bottom: 15px;
            border: 1px solid #eee;
            padding: 10px;
            font-size: 14px;
        }
        #accept-btn:disabled {
            background-color: #ccc;
            cursor: not-allowed;
        }
    </style>
     <style>
        .hidden {
            display: none;
        }
        /* Botão de fechar */
  .fechar {
    background-color: #f44336;
    color: #fff;
    border: none;
    padding: 5px 10px;
    cursor: pointer;
    position: absolute;
    top: 20px;
    right: 20px;
    font-size: 16px;
  }
    </style>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet"> 
</head>
<body>

<section class="container">
    <button class="fechar"> <a href=" index.php" style="text-decoration: none;color: #ccc;">X</a></button>
    <header>Formulário para Marcação</header>
    <form action="insert.php" class="form" method="POST">
        <div class="input-box service">
            <label for="">Designação do curso
            </label>
            <div class="column">
                <div class="select-box">
                    <select id="curso-principal" name="curso-principal" onchange="mostrarSubopcoes()" >
                      <option value="" hidden>O que Pretendes?</option>
                      <option value="c.fiscal">Consultoria Fiscal</option>
                      <option value="c.empresarial">Consultoria Empresarial</option>
                      <option value="c.financeira">Consultoria Financeira</option>
                      <option value="G.projectos">Gestão de projectos</option>
                    </select>
                  <script>
                  function mostrarSubopcoes() {
                    const categoria = document.getElementById('curso-principal').value;
                    const subopcoes = document.getElementById('categoriacurso').options;
                  
                    // Loop por todas as opções para mostrar/ocultar com base na categoria selecionada
                    for (let i = 0; i < subopcoes.length; i++) {
                      if (subopcoes[i].className === categoria || subopcoes[i].value === "") {
                        subopcoes[i].style.display = 'block';
                      } else {
                        subopcoes[i].style.display = 'none';
                      }
                    }
                    
                    // Resetar seleção ao mudar de categoria
                    document.getElementById('categoriacurso').value = "";
                  }
                  </script>
                        </div>
                        <div class="select-box">
                            <select id="categoriacurso" name="categoriacurso" >
                                <option value="" hidden>Escolha uma categoria</option>
                                <!-- Subopções para Desenvolvimento -->
                                <option class="c.fiscal">Gestão e optimização da carga fiscal</option>
                                <option value="Complaince fiscal" class="c.fiscal">Complaince fiscal</option>
                                <option value="Recuperação de crédito fiscal" class="c.fiscal">Recuperação de crédito fiscal</option>
                                <option value="Planeamento Fiscal" class="c.fiscal">Planeamento Fiscal</option>
                                <!-- Subopções para Design -->
                                <option value="Planeamento Estratégico" class="c.empresarial">Planeamento Estratégico</option>
                                <option value="Liderança e Optimização de resultados" class="c.empresarial">Liderança e Optimização de resultados</option>
                                <option value="Gestão Estratégica" class="c.empresarial">Gestão Estratégica</option>
                
                                <option value="Modelagem de processos financeiros" class="c.financeira">Modelagem de processos financeiros</option>
                                <option value="Análise financeira" class="c.financeira">Análise financeira</option>
                                <option value="Planeamento financeiro" class="c.financeira">Planeamento financeiro</option>
                                <option value="Controlo financeiro" class="c.financeira">Controlo financeiro</option>
                                <option value="Análise de riscos financeiros" class="c.financeira">Análise de riscos financeiros</option>
                                <option value="Análise da estrutura financeira" class="c.financeira">Análise da estrutura financeira</option>
                                <option value="Análise da segurança financeira" class="c.financeira">Análise da segurança financeira</option>
                                
                                <option value="Elaboração de estudo de viabilidade económica e financeira" class="G.projectos">Elaboração de estudo de viabilidade económica e financeira</option>
                                <option value="Produção de estudos de mercado" class="G.projectos">Produção de estudos de mercado</option>
                                <option value="Reengenharia Organizacional" class="G.projectos">Reengenharia Organizacional</option>
                                <option value="Projectos em inteligência de mercado" class="G.projectos">Projectos em inteligência de mercado</option>
                                <option value="Implementação de gestão de negócios por processos" class="G.projectos">Implementação de gestão de negócios por processos</option>
                                <option value="Reengenharia de processos financeiros" class="G.projectos">Reengenharia de processos financeiros</option>
                                <option value="Gestão de macro projectos multidimensionais" class="G.projectos">Gestão de macro projectos multidimensionais</option>

                                    <option value="motion" class="f.qualificação">tentando </option>

                                
                             
                              </select>
                            </div>
            </div>
           
            <div class="input-box service">
                <label for="">Período de realização
                </label>
                <div class="column">
                    <input type="date" name="data" placeholder="Data" >
                    <input type="time" name="hora" placeholder="Horário" >
                </div>
                </div>
            </div>
        <div class="input-box service">
            <label for="">Identificação do Formando</label>
            <div class="column">
                <input type="text" id="nome" name="nome" placeholder="Nome Completo" required >
                
                <div class="select-box">
                <select id="nacionalidade" name="nacionalidade"  onchange="updateFields()">
            <option value="" hidden>-- Escolha uma nacionalidade --</option>
            <option value="angolana">Angolana</option>
            <option value="estrangeiro">Brasileiro</option>
            <option value="estrangeiro">Americano</option>
            <option value="estrangeiro">Japonês</option>
                 </select>
            </div>
            </div>
            <div   id="extraField1" class="hidden" style="display:none;">
            <div class="select-box">
                            <select  id="cpf" name="província" >
                                <option value="" hidden >-- Selecione a província --</option>
                                <option value="Bengo">Bengo</option>
                                <option value="Benguela">Benguela</option>
                                <option value="Bié">Bié</option>
                                <option value="Cabinda">Cabinda</option>
                                <option value="Cuando Cubango">Cuando Cubango</option>
                              </select>
                            </div>

                <input type="text" id="cpf" name="municipio" placeholder="Munícipio" >
                <input type="text" id="cpf" name="rua" placeholder="Rua" >
                <input type="text" id="cpf" name="nºbilhete" placeholder="Identificação BI nº" />
                
            </div>
        
        <div id="extraField2" class="hidden" style="display:none;">
                    <input type="text"id="ssn" name="província" placeholder="Província" >
                    <input type="text" id="ssn" name="municipio"placeholder="Munícpio" >
                    <input type="text"id="ssn" name="rua" placeholder="Rua" >
                    <input type="text"id="ssn" name="passaporte" placeholder="Passaporte Nº" >
                </div>
            <div class="column">
                <input type="email" id="email" name="email" placeholder="Email" >
                <input type="number" id="telefone" name="telefone" placeholder="Telefone" >
            </div>
            <div class="input-box service">
                <div class="column">
                        <div class="select-box">
                    <select id="especialidade" name="estudo" onchange="mostrarEspecialidade()">
                        <option value="" hidden>Habilitações Literárias</option>
                        <!-- Subopções para Desenvolvimento -->
                        <option value="" class="desenvolvimento">Ensino secundário</option>
                        <option value="especialidade1" class="especialidade1">Ensino Médio</option>
                        <option value="especialidade1" class="especialidade1">Ensino Superior</option>
                        <option value="especialidade1" class="especialidade1">Mestrado</option>  
                        <option value="especialidade1" class="especialidade1">Doutoramento</option>  
                      </select>
                    </div>
                   
                </div>
                <div class="column" id="campoEspecialidade1" style="display:none;">
                    <input type="text"id="especialidade1" name="especialidade" placeholder="Especialidade" >
                </div>
                </div>
            </div>
            <div class="input-box service">
                <label for="">Situação Profissional
                </label>
                <div class="select-box">
                            <label for="categoria">Ocupação:</label> 
                            <select name="ocupacao" id="categoria" onchange="mostrarCategoria()" >
                                <option value="" hidden >Selecione</option>
                                <option value="Trabalho por conta propria">Trabalho por conta propria</option>
                                <option value="Trabalho por conta de outrem">Trabalho por conta de outrem</option>
                                <option value="Desempregado">Desempregado</option>
                                <option value="Estudante">Estudante</option>
                              </select>
                            </div>
  
                <div class="column" id="campoCategoria1" style="display:none;">
                    <input type="text"id="campo1" name="categoria" placeholder="Categoria Profissional" >
                    <input type="text" id="campo1" name="servico"placeholder="Serviço" >
                    <input type="text"id="campo1" name="telefoneEmpresa" placeholder="Telefone" >
                </div>
                </div>
               
                   
       
            
    <label>
        <input type="checkbox" id="accept-checkbox" style="margin-top: 20px;">
        Concordo Com os <a href="termos e condições.pdf" style="text-decoration: none;">Termos & Condições</a>
    </label>
    <br><br>
    <button id="accept-btn" disabled>CONCLUIR</button>
<script>
    const checkbox = document.getElementById("accept-checkbox");
    const button = document.getElementById("accept-btn");

    checkbox.addEventListener("change", function() {
        button.disabled = !checkbox.checked;
    });
</script>
    </form>
    <script>
        // Recupera o valor armazenado no Local Storage
        const itemSelecionado = localStorage.getItem('itemSelecionado');
        // Preenche o campo do formulário com o item selecionado, se houver um valor
        if (itemSelecionado) {
            document.getElementById('itemSelecionado').value = itemSelecionado;
            // Limpa o valor do Local Storage após o uso
            localStorage.removeItem('itemSelecionado');
        }
    </script>
     <script>
        function mostrarCampo() {
          var opcao = document.getElementById("opcao").value;
          document.getElementById("campoOpcao1").style.display = opcao === "opcao1" ? "block" : "none";
          document.getElementById("campoOpcao2").style.display = opcao === "opcao2" ? "block" : "none";
        }
      </script>
      <script>
  function mostrarCategoria() {
    var categoria = document.getElementById("categoria").value;

    document.getElementById("campoCategoria1").style.display = categoria === "Trabalho por conta de outrem" ? "block" : "none";
    document.getElementById("campoCategoria2").style.display = categoria === "categoria2" ? "block" : "none";
  }
</script>
<script>
  function mostrarEspecialidade() {
    var especialidade = document.getElementById("especialidade").value;

    document.getElementById("campoEspecialidade1").style.display = especialidade === "especialidade1" ? "block" : "none";
    document.getElementById("campoEspecialidade2").style.display = especialidade === "especialidade2" ? "block" : "none";
  }
</script>
<script>
        function updateFields() {
            // Oculta todos os campos extras
            document.querySelectorAll('.hidden').forEach(field => field.style.display = 'none');

            // Mostra o campo correspondente à nacionalidade selecionada
            const selectedNationality = document.getElementById('nacionalidade').value;
            if (selectedNationality === 'angolana') {
                document.getElementById('extraField1').style.display = 'block';
            } else if (selectedNationality === 'estrangeiro') {
                document.getElementById('extraField2').style.display = 'block';
            }
        }
    </script>
     <script>
        function atualizarCampos() {
            const nacionalidade = document.getElementById('nacionalidade').value;
            const campoProvincia = document.getElementById('campo-provincia');
            const campoOutraNacionalidade = document.getElementById('campo-outra-nacionalidade');

            if (nacionalidade === "angolana") {
                campoProvincia.classList.remove('hidden');
                campoOutraNacionalidade.classList.add('hidden');
            } else if (nacionalidade === "outra") {
                campoProvincia.classList.add('hidden');
                campoOutraNacionalidade.classList.remove('hidden');
            } else {
                campoProvincia.classList.add('hidden');
                campoOutraNacionalidade.classList.add('hidden');
            }
        }
    </script>
    

</section>
    
</body>
</html>