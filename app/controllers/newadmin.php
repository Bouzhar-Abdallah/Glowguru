<?php

class Newadmin extends Controller
{
    private $form_errors = [];

    function __construct()
    {
        if ($_SESSION['Glowguru']['ROLE'] != 'admin') {
            redirect('home');
        }
    }
    public function index()
    {
        $admin = new Admin;
        $data = [];
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            
            $data = $this->validate($_POST);
            $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
            $admin->insert($data);
            if (isset($admin->status->exception)) {
                if ($admin->status->exception->errorInfo['1'] == '1062') {
                    $this->setFlash('failure', "l'email que vous avez introduit existe deja !");
                } else {
                    $this->setFlash('failure', 'something went wrong');
                }
            } else {
                if ($admin->status->success) {
                    $this->setFlash('success', 'compte crèe avec succes');
                
                } else {
                    $this->setFlash('failure', 'something went wrong');
                }
            }
        }
        $data['errors']=$this->form_errors;
        
        $this->view('dashboard','newadmin',$data);
    }
    
    public function validate($data)
    {
        
        foreach ($data as $key => $value) {
            $data[$key] = htmlspecialchars($value);
        }

        if (empty($data["email"])) 
        {
            $this->form_errors["email"] = "Email is required";
        }else 
        if(!filter_var($data['email'],FILTER_VALIDATE_EMAIL))
        {
            $this->form_errors["email"] = "Email is not valid";
        }

        if ($data["password-1"] != $data["password-2"] ) 
        {
            $this->form_errors["password"] = "passwords don't match";
        }else {
            $data['password'] = $data["password-1"];
            unset($data["password-1"]);
            unset($data["password-2"]);
        }
       
        return $data;
    }

}
