<?php
    $data = array();
    flexible_function($data);
    function flexible_function(&$data){
        $function = 'view';
        if(isset($_GET['action'])){
            $action = $_GET['action'];
            $function = $action;
        }
        $function($data);
    }
    function view(&$data){
        $data['page']='user/view';
        $data['data']= m_get_data();
    }
    function add(&$data){
        $data['page']='user/add';
    }
    function get_from_data(){
        $add_data = add_data();
        if($add_data){
            $action = 'view';
        }else{
            $action = 'create';
        }
        header("location: index.php?action=$action");  
    }
    function delete(&$data){
        $delete = delete_data();
        if($delete){
            $action ='view';
        }else{
            echo 'cannot delete';
        }
        header("Location: index.php?action=$action");
}
    function update(&$data){
        $data['page']= 'user/update';
        $data['update'] = getUpdateInfo();
    }

    function update_user(&$data) {
        $update_data = update_data();
        if($update_data){
            $action ='view';
        }else{
           $action = 'update';
        }
        header("Location: index.php?action=$action");
    }
    function show(&$data){
        $data['page']='user/show';
        $data['data'] = getUpdateInfo();
        return $data;
    }
    function login(&$data){
        $data['page']='login';
    
    }
    function validate(){
        login_form();
    }
    function register(&$data){
        $data['page']= 'register';
        
    }
    function get_data_register(){
        $addData=form_register();
        if($addData){
            $action = 'login';
        }else{
            $action = 'register';
        }
        header("Location: index.php?action=$action");
    }

?>