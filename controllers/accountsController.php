<?php
/**
 * Created by PhpStorm.
 * User: kwilliams
 * Date: 11/27/17
 * Time: 5:32 PM
 */


//each page extends controller and the index.php?page=tasks causes the controller to be called
class accountsController extends http\controller
{

    //each method in the controller is named an action.
    //to call the show function the url is index.php?page=task&action=show
    public static function show()
    {
        $record = accounts::findOne($_REQUEST['id']);
        self::getTemplate('show_account', $record);
    }

    public static function display()
    {
        self::getTemplate('show', 'data');
    }


    public static function mydisplay()
    {
        self::getTemplate('show1', 'data');
    }

    //to call the show function the url is index.php?page=accounts&action=all

    public static function all()
    {

        $records = accounts::findAll();
        self::getTemplate('all_accounts', $records);

    }
    //to call the show function the url is called with a post to: index.php?page=task&action=create
    //this is a function to create new tasks

    //you should check the notes on the project posted in moodle for how to use active record here

    //this is to register an account i.e. insert a new account
    public static function register()
    {
        //https://www.sitepoint.com/why-you-should-use-bcrypt-to-hash-stored-passwords/
        //USE THE ABOVE TO SEE HOW TO USE Bcrypt
        self::getTemplate('register');
    }

    //this is the function to save the user the new user for registration
    public static function store()

    {
        $user = accounts::findUserbyEmail($_REQUEST['email']);


        if ($user == FALSE) {
            $user = new account();
            $user->email = $_POST['email'];
            $user->fname = $_POST['fname'];
            $user->lname = $_POST['lname'];
            $user->phone = $_POST['phone'];
            $user->birthday = $_POST['birthday'];
            $user->gender = $_POST['gender'];
            //$user->password = $_POST['password'];
            $user->password = $user->setPassword($_POST['password']);
            $user->save();
            header("Location: index.php?page=accounts&action=all");

        } else {

            echo 'already registered';
        }

    }

    public static function edit()
    {
        $record = accounts::findOne($_REQUEST['id']);

        self::getTemplate('edit_account', $record);

    }
//this is used to save the update form data
    public static function save() {
        $user = accounts::findOne($_REQUEST['id']);

        $user->email = $_POST['email'];
        $user->fname = $_POST['fname'];
        $user->lname = $_POST['lname'];
        $user->phone = $_POST['phone'];
        $user->birthday = $_POST['birthday'];
        $user->gender = $_POST['gender'];
        $user->save();
        header("Location: index.php?page=accounts&action=all");

    }

    public static function delete() {

        $record = accounts::findOne($_REQUEST['id']);
        $record->delete();
        header("Location: index.php?page=accounts&action=all");
    }

    //this is to login, here is where you find the account and allow login or deny.
    public static function login()
    {
        //you will need to fix this so we can find users username.  YOu should add this method findUser to the accounts collection
        //when you add the method you need to look at my find one, you need to return the user object.
        //then you need to check the password and create the session if the password matches.
        //you might want to add something that handles if the password is invalid, you could add a page template and direct to that
        //after you login you can use the header function to forward the user to a page that displays their tasks.
        //        $record = accounts::findUser($_POST['uname']);

        $user = accounts::findUserbyEmail($_REQUEST['email']);


        if ($user == FALSE) {
            echo 'user not found';

            echo '<a href="index.php?page=accounts&action=register">click here to register</a>';


            //header("Location: index.php?page=accounts&action=register");
            

        } else {
//$user->checkPassword($_POST['password']) == TRUE
            if($_POST['password'] == $user->password) {

                echo 'login';

                session_start();
                $_SESSION["userID"] = $user->id;

                print_r($_SESSION);



            } else {
                echo 'password does not match';
            }

        }

      //todos::findTasksbyID($_REQUEST['$user']);


    }

}