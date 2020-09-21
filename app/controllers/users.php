<?php

// $_SESSION['id']

include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/middleware.php");
include(ROOT_PATH . "/app/helpers/validateUser.php");

$table = 'signin';

// $admin_users = selectAll($table, ['admin' => 1]);
$admin_users = selectAll($table);

$errors = array();
$id = '';
$fullname = '';
$username = '';
$admin = '';
$email = '';
$mnumber = '';
$password = '';
$passwordConf = '';
$fwhere = '';
$ainterest = '';

function loginUser($user)
{
    // log user in
    $_SESSION['id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['admin'] = $user['admin'];
    $_SESSION['message'] = 'You are now Logged in';
    $_SESSION['type'] = 'success';

    if ($_SESSION['admin']) {
        header('Location: ' . BASE_URL . '/blog/admin/dashboard.php');
    } else {
        header('Location: ' . BASE_URL . '/index.php');
    }
    exit();
}

if (isset($_POST['register-btn']) || isset($_POST['create-admin'])) {

    $errors = validateUser($_POST);

    if (count($errors) === 0) {
        unset($_POST['register-btn'], $_POST['passwordConf'], $_POST['create-admin']);
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);


        if (isset($_POST['admin'])) {
            $_POST['admin'] = 1;
            $user_id = create($table, $_POST);
            $_SESSION['message'] = "Admin user created successfully";
            $_SESSION['type'] = "success";
            header('Location: ' . BASE_URL . '/blog/admin/viewuser.php');
            exit();
        } else {
            $_POST['admin'] = 0;
            $user_id = create($table, $_POST);
            $user = selectOne($table, ['id' => $user_id]);
            loginUser($user);
        }
    } else {
        $username = $_POST['username'];
        $admin = isset($_POST['admin']) ? 1 : 0;
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordConf = $_POST['passwordConf'];
    }
}

if (isset($_POST['update-user'])) {
    adminOnly();
    $errors = validateUser($_POST);

    if (count($errors) === 0) {
        $id = $_POST['id'];
        unset($_POST['passwordConf'], $_POST['update-user'], $_POST['id']);
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $_POST['admin'] = isset($_POST['admin']) ? 1 : 0;
        $count = update($table, $id, $_POST);
        $_SESSION['message'] = "Admin user updated successfully";
        $_SESSION['type'] = "success";
        header('Location: ' . BASE_URL . '/blog/admin/viewuser.php');
        exit();
    } else {
        $username = $_POST['username'];
        $admin = isset($_POST['admin']) ? 1 : 0;
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordConf = $_POST['passwordConf'];
    }
}

if (isset($_GET['id'])) {
    $user = selectOne($table, ['id' => $_GET['id']]);

    $id = $user['id'];
    $username = $user['username'];
    $admin = $user['admin'];
    $email = $user['email'];
}

if (isset($_POST['login-btn'])) {
    // dd($_POST);
    $errors = validateLogin($_POST);

    if (count($errors) === 0) {
        $user = selectOne($table, ['username' => $_POST['username']]);
        // dd($_POST['password']);
        // dd(password_verify($_POST['password'], $user['password']));
        if ($user && password_verify($_POST['password'], $user['password'])) {
            // log user in
            loginUser($user);
        } else {
            array_push($errors, 'Wrong credentials');
        }
    }

    $username = $_POST['username'];
    $password = $_POST['password'];
}

if (isset($_GET['delete_id'])) {
    adminOnly();
    $count = delete($table, $_GET['delete_id']);
    $_SESSION['message'] = "Admin user deleted successfully";
    $_SESSION['type'] = "success";
    header('Location: ' . BASE_URL . '/blog/admin/viewuser.php');
    exit();
}
