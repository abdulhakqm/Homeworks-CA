<?php 

$navItems = [
    'index.php?id=index' => 'Home Page',
    'index.php?id=about' => 'About',
    'index.php?id=contact' => 'Contact',
    'index.php?id=login' => 'Login'
];

$titles = [
    'index'    => 'Home page',
    'about'    => 'About page',
    'contact'  => 'Contact page',
    'login'    => 'Login page'
];

function getTitle ($id, $titles) {
    if ($id === '') {
        return 'Home page';
    } else {
        foreach ($titles as $key => $value) {
            if($id === $key) {
                return $value;
            }
        }
    }
};

function cookieSet($POST) {
    if(!empty($POST['username']) && isset($POST['submit'])) {
        $username = $POST['username'];
        setcookie('username', $username, time() + 9999);
        header('Location: ./index.php?id=about');
    }
}
