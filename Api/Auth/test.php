<?php 




$this->bdd = new PDO($dsn, $dbUser, $dbPwd);
} catch (PDOException $e) {
    echo $e->getMessage();
}