
    <section class="search">
        <h1>Pesquisar: </h1>
    
        <form class="box-search" action="busca.php" method="post">

            <div class="box-item">
                <input type="text" placeholder="Nome do Aluno" name="nome">
            </div>
    
            <div class="box-item">
                <input type="number" name="rm" placeholder="RM">
            </div>
    
            <div class="box-item">
                <input type="number" name="cpf" placeholder="CPF">
            </div>
    
            <div class="box-item">
                <label> Data de Nascimento </label>
                <input type="date" placeholder="Data" name="data">
            </div>
    
    
            <div class="select">

                <div class="box-item-sel">
                    <select name="turnos">
                        <option value=""> Turno </option>
                        <option value="manha">Manhã</option>
                        <option value="tarde">Tarde</option>
                        <option value="noite">Noite</option>
                    </select>
                </div>
                
                <div class="box-item-sel">
                    <select name="modulos">
                        <option value=""> Modulo </option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
    
                <div class="box-item-sel">
                    <select name="curso">
                        <option value=""> Curso </option>
                        <option value="nut">Nutrição</option>
                        <option value="fin">Finanças</option>
                        <option value="adm">Administração</option>
                        <option value="des">Desenvolvimento de Sistemas</option>
                    </select>
                </div>

            </div>

            <div class="enviar">
                <input type="submit">
            </div>
            
        </form>
    </section>
