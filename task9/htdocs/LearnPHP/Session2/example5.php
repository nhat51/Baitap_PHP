<?php
$page = "";
switch ($page){
    case 'Home': echo "You selected home";
    break;
    case 'About' : echo "You selected about";
    break;
    case 'News' : echo "You selected news";
    break;
    case 'Login' : echo "You selected login";
    break;
    case 'Links': echo "You selected Links";
    break;
    default: echo "Page not found";
     break;
}
