<?php 

class Controller 
{
    public function view($name, $component = '', $data = [])
    {

        $categoriesobj = new Categories();
        $categories = $categoriesobj->selectAll(); 
        $success = $this->getFlash('success');
        $failure = $this->getFlash('failure');

        $componentfile = 'app/views/components/' . $component . '.php';
        $filename = 'app/views/' . $name . '.view.php';

        if (file_exists($componentfile)) {
            $componentfile = 'components/' . $component . '.php';
        } else {
            $componentfile = $componentfile = 'components/404.php';
        }

        if (file_exists($filename)) {
            require_once $filename;
        } else {
            $filename = 'app/views/404.view.php';
            require_once $filename;
        }
    }
    public function setFlash($key, $value)
    {
        $_SESSION[$key] = $value;
        $_SESSION[$key . '_flash'] = true;
    }

    public function getFlash($key)
    {
        if (isset($_SESSION[$key . '_flash'])) {
            $value = $_SESSION[$key];
            unset($_SESSION[$key]);
            unset($_SESSION[$key . '_flash']);
            return $value;
        }
    }
}
