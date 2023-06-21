<?php
function connectionDB()
{
    $con = mysqli_connect("localhost", "root", "", "tccdatabase");
    if (mysqli_connect_errno()) {
        echo "
                <div class='col-md-4 position-fixed bottom-0 end-0'>
                    <div class='alert alert-danger alert-dismissible fade show role=' alert'>
                        <p class='m-0'> Não possivel conectar-se com o banco de dados! </p>
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>
                </div>";
        exit()
        ;
    }
    return $con;
    ;
}

function DBClose()
{
    mysqli_close(connectionDB());
}

function addUser($query, $email, $pwd)
{
    $checkUser = "SELECT user_email, user_password FROM users WHERE user_email = '$email' AND user_password = '$pwd';";

    $user = mysqli_query(connectionDB(), $checkUser);

    if (mysqli_num_rows($user) != 0) {
        echo "
            <div class='col-md-4 position-fixed bottom-0 end-0'>
                <div class='alert alert-danger alert-dismissible fade show role='alert'>
                    <p class='m-0'> <strong>OPS!</strong> Esse e-mail ou senha já foram usados!</p>
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>
            </div>
            ";
        return false;
    } else {
        $result = mysqli_query(connectionDB(), $query);

        if ($result) {
            header('Location: login.php');
            die();
        } else {
            echo "
                        <div class='col-md-4 position-fixed bottom-0 end-0'>
                            <div class='alert alert-danger alert-dismissible fade show role='alert'>
                                <p class='m-0'> <strong>OPS!</strong> Ocorreu um erro ao tentar cadastrar!</p>
                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                            </div>
                        </div>";
            $_SESSION = array();
            return true;
        }
    }
}


function loginUser($query, $email, $pwd)
{

    $consultation = mysqli_query(connectionDB(), $query);

    while ($line = mysqli_fetch_array($consultation)) {
        if ($email == $line["user_email"] and $pwd == $line["user_password"]) {
            header('Location: index.php');
            die();
        }
    }

    echo "
    <div class='col-md-4 position-fixed bottom-0 end-0'>
      <div class='alert alert-danger alert-dismissible fade show role='alert'>
          <p class='m-0'> <strong>OPS!</strong> Ocorreu um erro ao tentar entrar!</p>
          <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>
    </div>";

}

function getName($email, $pwd)
{

    $query = "SELECT user_name FROM users WHERE user_email = '$email' AND user_password = '$pwd'";

    $result = mysqli_query(connectionDB(), $query);

    if (!$result) {
        echo "
        <div class='col-md-4 position-fixed bottom-0 end-0'>
          <div class='alert alert-danger alert-dismissible fade show role='alert'>
              <p class='m-0'> <strong>OPS!</strong> Ocorreu um erro ao tentar entrar!</p>
              <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
          </div>
        </div>";
    }

    $name = mysqli_fetch_assoc($result);

    return implode("", $name);
}

function returnWorkers($workersFunction)
{
    echo "
        <div class='col-lg-4 col-md-6 d-fluid'>
            <div class='card account-people'>
                <div class='accounts-header'></div>
                <img src='img\person-circle.svg' class='accounts-image' alt='Foto Usuário'>
                <div class='card-body'>
                    <h3 class='card-title text-center'> José Paulo </h5>
                    <p class='card-text'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel.</p>
                    <form method='GET' action='userspage.php'>
                        <button type='submit' class='btn btn-primary' name='worker' value='José Paulo'> Ver perfil</button>
                    </form>
                </div>
            </div>
         </div>
        ";
        echo "
        <div class='col-lg-4 col-md-6 d-fluid'>
            <div class='card account-people'>
                <div class='accounts-header'></div>
                <img src='img\person-circle.svg' class='accounts-image' alt='Foto Usuário'>
                <div class='card-body'>
                    <h3 class='card-title text-center'> Ana Paula </h5>
                    <p class='card-text'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel.</p>
                    <form method='GET' action='userspage.php'>
                        <button type='submit' class='btn btn-primary' name='worker' value='Ana Paula'> Ver perfil</button>
                    </form>
                </div>
            </div>
         </div>
        ";
        echo "
        <div class='col-lg-4 col-md-6 d-fluid'>
            <div class='card account-people'>
                <div class='accounts-header'></div>
                <img src='img\person-circle.svg' class='accounts-image' alt='Foto Usuário'>
                <div class='card-body'>
                    <h3 class='card-title text-center'> Mário Andrade </h5>
                    <p class='card-text'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel.</p>
                    <form method='GET' action='userspage.php'>
                        <button type='submit' class='btn btn-primary' name='worker' value='Mário Andrade'> Ver perfil</button>
                    </form>
                </div>
            </div>
         </div>
        ";
        echo "
        <div class='col-lg-4 col-md-6 d-fluid'>
            <div class='card account-people'>
                <div class='accounts-header'></div>
                <img src='img\person-circle.svg' class='accounts-image' alt='Foto Usuário'>
                <div class='card-body'>
                    <h3 class='card-title text-center'> Aparecida Souza </h5>
                    <p class='card-text'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel.</p>
                    <form method='GET' action='userspage.php'>
                        <button type='submit' class='btn btn-primary' name='worker' value='Aparecida Souza'> Ver perfil</button>
                    </form>
                </div>
            </div>
         </div>
        ";
        echo "
        <div class='col-lg-4 col-md-6 d-fluid'>
            <div class='card account-people'>
                <div class='accounts-header'></div>
                <img src='img\person-circle.svg' class='accounts-image' alt='Foto Usuário'>
                <div class='card-body'>
                    <h3 class='card-title text-center'> João Camargo </h5>
                    <p class='card-text'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel.</p>
                    <form method='GET' action='userspage.php'>
                        <button type='submit' class='btn btn-primary' name='worker' value='João Camargo'> Ver perfil</button>
                    </form>
                </div>
            </div>
         </div>
        ";
        echo "
        <div class='col-lg-4 col-md-6 d-fluid'>
            <div class='card account-people'>
                <div class='accounts-header'></div>
                <img src='img\person-circle.svg' class='accounts-image' alt='Foto Usuário'>
                <div class='card-body'>
                    <h3 class='card-title text-center'> Eliana Pereira </h5>
                    <p class='card-text'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel.</p>
                    <form method='GET' action='userspage.php'>
                        <button type='submit' class='btn btn-primary' name='worker' value='Eliana Pereira'> Ver perfil</button>
                    </form>
                </div>
            </div>
         </div>
        ";
}

?>