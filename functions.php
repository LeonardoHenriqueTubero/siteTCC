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
    $checkUser = "SELECT user_email, user_password FROM users;";

    $allUsers = mysqli_query(connectionDB(), $checkUser);

    while ($line = mysqli_fetch_assoc($allUsers)) {
        if ($email == $line["user_email"] and $pwd == $line["user_password"]) {
            echo "
                <div class='col-md-4 position-fixed bottom-0 end-0'>
                    <div class='alert alert-danger alert-dismissible fade show role='alert'>
                        <p class='m-0'> <strong>OPS!</strong> Ocorreu um erro ao tentar cadastrar!</p>
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>
                </div>";
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
                die();
            }
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

    $query = "SELECT user_name FROM users WHERE user_email = '$email' AND user_password = $pwd";

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

?>