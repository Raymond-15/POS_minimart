<?php
function is_logged_in()
{
    $ci = get_instance();
    if (!$ci->session->userdata('email')) {
        redirect('auth');
    }
}

function check_supervisor()
{
    $ci = &get_instance();
    $ci->load->library('Fungsi');
    if ($ci->fungsi->user_login()->role_id != 1) {
        redirect('user');
    }
}
