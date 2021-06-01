<?php
include_once 'Model/DAO.php';
include_once './config/Conexao.php';
?>
<script>
    function setaDadosModal(valor) {
        document.getElementById('idConsulta').value = valor;

    }
</script>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Clinica Vision</title>
        <!-- Favicon-->

        <link rel="icon" type="image/x-icon" href="../assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">

        <!-- Navigation-->
        <nav class="navbar navbar-expand-sm bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="index.html">Clinica Vision</a>
                <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="Login.php">Login</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cadastro</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="CadastroPaciente.php">Cadastro de Pacientes</a>
                                <a class="dropdown-item" href="CadastroFuncionario.php">Cadastro de Funcionários</a>
                                <a class="dropdown-item" href="CadastroConsulta.php">Cadastro de Consultas</a>                                
                            </div>
                        </li>                         
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="RelatorioUsuario.php">Usuário</a></li>                     
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Relatorios</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="RelatorioPaciente.php">Relatório de Pacientes</a>
                                <a class="dropdown-item" href="RelatorioFuncionario.php">Relatório de Funcionários</a>
                                <a class="dropdown-item" href="RelatorioConsulta.php">Relatório de Consultas</a>                                
                            </div>
                        </li>     
                    </ul>
                </div>
            </div>
        </nav>      

<!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="Controller/ConsultaControllerEditar.php/">
                            <input class="form-control" name="idConsulta" id="idConsulta" type=""/>
                             <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Data da consulta</label>
                                    <input class="form-control" name="datanascimento" id="datanascimento" type="date" placeholder="Data de nascimento" required="required" data-validation-required-message="Por favor, insira sua data de nascimento." />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>                           
                            <br>
                            <div class="form-group">
                                <select class="form-control form-control-lg" name="tipoConsulta" id="exampleFormControlSelect1">
                                    <option>Consulta</option>
                                    <option>Retorno</option>
                                    <option>Exames</option>


                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-control form-control-lg" name="especialidade" id="exampleFormControlSelect1">
                                    <option>Catarata</option>
                                    <option>Clínica geral</option>
                                    <option>Cirurgia</option>
                                    <option>Cirurgia Refrativa</option>
                                    <option>Glaucoma</option>
                                    <option>Plástica Ocular</option>


                                </select>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Observação</label>
                                    <textarea class="form-control" name="obsConsulta" id="message" rows="5" placeholder="Observação" required="required" data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            
                            
                            <div class="form-group"><button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit">Editar</button></div>

                        </form>    
                    </div>
                   
                </div>
            </div>
        </div>
        
        
        
<br/><br/><br/>
        <br/><br/><br/><br/><br/><br/>
        <br/><br/><br/><br/><br/><br/>
        <br/><br/><br/>


        <div class="container-lg">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Código</th>
                        <th scope="col">Data da Consulta</th>
                        <th scope="col">Tipo da Consulta</th>
                        <th scope="col">Especialidade</th>
                        <th scope="col">Observação</th>
                        <th scope="col">Paciente</th>
                        <th scope="col">Funcionário</th>                                                                         
                        <th scope="col">Excluir</th>
                        <th scope="col">Editar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                         <?php
                        $daop = new DAO();
                        $result = $daop->pesquisaConsulta();

                        while ($row = $result->fetch(PDO::FETCH_OBJ)) {
                            "<input class='form-control' name='idUsuario' type='' value='$row->idConsulta'";
                            echo '<form method="post" action="Controller/ConsultaControllerExcluir.php/">';
                            echo "<input class='form-control' name='idConsulta' type='hidden' value='$row->idConsulta'";
                            echo "<tr><th>$row->idConsulta</td>";
                            echo "<td>$row->dataConsulta</td>";
                            echo "<td>$row->tipoConsulta</td>";
                            echo "<td>$row->especialidadeConsulta</td>";
                            echo "<td>$row->obsConsulta</td>";
                            echo "<td>$row->nome</td>";
                            echo "<td>$row->nomeFuncionario</td>";
                            echo "<td><button type = 'SUBMIT' class = 'btn btn-danger'>X</button></td>";
                            echo "<td><button type = 'button' class = 'btn btn-info'  data-toggle='modal' data-target='#exampleModal' onclick=setaDadosModal('$row->idConsulta')>Editar</button></td></tr>";

                            echo '</form>';
                        }
                        ?>
                    </tr>    
                </tbody>
            </table>
        </div>
        <br/><br/><br/>
        <br/><br/><br/>
        <br/><br/><br/>
                <br/><br/><br/>

                        <br/><br/><br/>

                                <br/><br/><br/>
        <br/><br/><br/>
     
     
        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Localização</h4>
                        <p class="lead mb-0">
                            Centro Clínico Sudoeste
                            <br />
                            CHSW bloco 3/4/5, sala 155
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Web</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.facebook.com/login.php?skip_api_login=1&api_key=124024574287414&kid_directed_site=0&app_id=124024574287414&signed_next=1&next=https%3A%2F%2Fwww.facebook.com%2Fdialog%2Foauth%3Fclient_id%3D124024574287414%26redirect_uri%3Dhttps%253A%252F%252Fwww.instagram.com%252Faccounts%252Fsignup%252F%26state%3D%257B%2522fbLoginKey%2522%253A%252216jlfoj1on8hnfz0fc7a1cnekv3tbsdep1h2m6iqsu7rhtmxb8qw%2522%252C%2522fbLoginReturnURL%2522%253A%2522%252Ffxcal%252Fdisclosure%252F%2522%257D%26scope%3Demail%26response_type%3Dcode%252Cgranted_scopes%26locale%3Dpt_BR%26ret%3Dlogin%26fbapp_pres%3D0%26logger_id%3Dc9e45679-2815-4900-8492-e634f151760a%26tp%3Dunspecified&cancel_url=https%3A%2F%2Fwww.instagram.com%2Faccounts%2Fsignup%2F%3Ferror%3Daccess_denied%26error_code%3D200%26error_description%3DPermissions%2Berror%26error_reason%3Duser_denied%26state%3D%257B%2522fbLoginKey%2522%253A%252216jlfoj1on8hnfz0fc7a1cnekv3tbsdep1h2m6iqsu7rhtmxb8qw%2522%252C%2522fbLoginReturnURL%2522%253A%2522%252Ffxcal%252Fdisclosure%252F%2522%257D%23_%3D_&display=page&locale=pt_BR&pl_dbl=0"><i class="fab fa-fw fa-facebook-f"></i></a>                        
                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.instagram.com/accounts/login/"><i class="fab fa-instagram"></i></a>                     
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">Contato</h4>
                        <p class="lead mb-0">
                            Segunda a sexta de 8h às 20h.
                            Sábados de 8h às 12h.
                            <br>
                            TEL: 61 3442 4040
                            <br>
                            Whatsapp: 61 99138-5844                            

                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container">
                <small>
                    Copyright &copy; Your Website
                    <!-- This script automatically adds the current year to your website footer-->
                    <!-- (credit: https://updateyourfooter.com/)-->
                    <script>
                        document.write(new Date().getFullYear());
                    </script>
                </small>
            </div>
        </div>
        <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
        <div class="scroll-to-top d-lg-none position-fixed">
            <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a>
        </div>

        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
        <!-- Contact form JS-->
        <script src="../assets/mail/jqBootstrapValidation.js"></script>
        <script src="../assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
