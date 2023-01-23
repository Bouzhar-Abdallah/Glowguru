<?php


class Login extends Controller
{
    public function index()
    {
        
        $data = [];
        if ($_SERVER['REQUEST_METHOD'] == "POST") 
        {
            $admin = new Admin;
            $arr['email'] = $_POST['email'];

            $row = $admin->where($arr);
            if(!empty($row)){
                $row = $row[0];
            }
            if ($row) 
            {
                if ($row['password'] === $_POST['password']){
                    $_SESSION['Glowguru'] = $row;
                    $_SESSION['Glowguru']['ROLE'] = 'admin';
                    redirect('dashboard');
                }
                
            }
            
            $admin->errors['email'] = "email ou mot de passe erronés";
            $data['errors'] = $admin->errors;
        }
        $this->view('home','login',$data);

    }

}
/* if (empty($_SESSION['USER'])) {
    $username = 'guest';
    $userrole = 'guest';
}else{
    //show($_SESSION['USER']);
    $username = $_SESSION['USER']['nom'];
    $userrole = $_SESSION['USER']['role'];
}
$data['username'] = $username;
$data['userrole'] = $userrole; */

