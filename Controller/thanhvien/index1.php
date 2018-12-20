<?php

    
    if(isset($_GET['action'])){
            $action =  $_GET['action'];
        }else{
            $action = "";
        }


        switch($action){
            case 'add':{
                require_once('../../View/ThanhVien/add_user.php');
                if(isset($_POST['add_user'])){
                    $hoten = $_POST['hoten'];
                    $namsinh = $_POST['namsinh'];
                    $quequan = $_POST['quequan'];
                
                    $database->InsertData($hoten,$namsinh,$quequan);
                }
                break;
            }
            case'edit':{
                require_once('../../View/ThanhVien/edit_user.php');
                if(isset($_POST['add_user'])){
                    $id = $_POST['id'];
                    $hoten = $_POST['hoten'];
                    $namsinh = $_POST['namsinh'];
                    $quequan = $_POST['quequan'];

                    $database->updateData($id,$hoten,$namsinh,$quequan);
                }
                break;
            }
            case 'delete':{
                                require_once('../../View/ThanhVien/delete.user.php');
                if(isset($_POST['delete_user'])){
                    $id = $_POST['id'];

                    $database->delete($id);
                }
                break;
            }

            default:{
                require_once('../../View/ThanhVien/list.php');
                break;
            }
        }
    ?>