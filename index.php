<?php

class User {
  public $name;
  public $surname;
  public $age;
  public $username;
  public $email;
  public $password;

  public function __construct($_username, $_password) {
    $this->username = $_username;
    $this->password = $_password;
  }

  public function printEmail($username) {
    $this->email = $username . "@gmail.com";
  }
}

class Admin extends User {
  public $livello;
  public $sconto = "0%";

  public function __construct($_username, $_password, $_livello) {
    $this->username = $_username;
    $this->password = $_password;
    $this->livello = $_livello;
  }

  public function getSconto($livello) {
    if ($livello > 2) {
      $this->sconto = "30%";
    }
  }
}


$user1 = new User("pinco", "aaaaaaaa");
$user1->printEmail($user1->username);

$user2 = new User("pallo", "bbbbbbbb");
$user2->printEmail($user2->username);

$user3 = new User("pippo", "cccccccc");
$user3->printEmail($user3->username);

$users = [$user1, $user2, $user3];

$admin1 = new Admin("amministratore1", "password1", 1);
$admin1->printEmail($admin1->username);
$admin1->getSconto($admin1->livello);

$admin2 = new Admin("amministratore2", "password2", 2);
$admin2->printEmail($admin2->username);
$admin2->getSconto($admin2->livello);

$admin3 = new Admin("amministratore3", "password3", 3);
$admin3->printEmail($admin3->username);
$admin3->getSconto($admin3->livello);

$admin4 = new Admin("amministratore4", "password4", 4);
$admin4->printEmail($admin4->username);
$admin4->getSconto($admin4->livello);

$admins = [$admin1, $admin2, $admin3, $admin4];

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Users</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <h1>Dati Utenti</h1>
    <table>

      <thead>
        <tr>
          <th>Username</th>
          <th>Email</th>
          <th>Password</th>
        </tr>
      </thead>

      <tbody>
        <?php foreach ($users as $user) { ?>
          <tr>
            <td><?php echo $user->username; ?></td>
            <td><?php echo $user->email; ?></td>
            <td><?php echo $user->password; ?></td>
          </tr>
        <?php } ?>
      </tbody>

    </table>

    <h1>Dati Amministratori</h1>
    <table>

      <thead>
        <tr>
          <th>Username</th>
          <th>Email</th>
          <th>Password</th>
          <th>Livello Autorizzazione</th>
          <th>Sconto</th>
        </tr>
      </thead>

      <tbody>
        <?php foreach ($admins as $admin) { ?>
          <tr>
            <td><?php echo $admin->username; ?></td>
            <td><?php echo $admin->email; ?></td>
            <td><?php echo $admin->password; ?></td>
            <td><?php echo $admin->livello; ?></td>
            <td><?php echo $admin->sconto; ?></td>
          </tr>
        <?php } ?>
      </tbody>

    </table>
  </body>
</html>
