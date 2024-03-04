<?php
function is_logged_in()
{
    $ci = get_instance();
    $ci->session->userdata('username') || redirect('admin/auth');
}

function active_menu($menu)
{
    $ci = get_instance();
    $class = $ci->router->fetch_class();
    return $class == $menu ? 'side-menu--active' : '';
}

function dropdown_active($menu)
{
    $ci = get_instance();
    $class = $ci->router->fetch_class();
    return $class == $menu ? 'side-menu__sub-open' : '';
}

function rotate_active($menu)
{
    $ci = get_instance();
    $class = $ci->router->fetch_class();
    return $class == $menu ? 'transform rotate-180' : '';
}
