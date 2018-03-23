<?php


function authenticate($username, $password)
{
    $users = array(
        'corina' => '202cb962ac59075b964b07152d234b70',//123
        'raquel' => '289dff07669d7a23de0ef88d2f7129e7',//234
        'mohamed' => '250cf8b51c773f3f8dc8b4be867a9a02',//456
        'badreddine' => 'd07e70efcfab08731a97e7b91be644de',//458
        'marion' => '20aee3a5f4643755a79ee5f6a73050ac',//895
        'nassim' => 'b706835de79a2b4e80506f582af3676a',//999
        'blanca' => '4b04a686b0ad13dce35fa99fa4161c65',//785

    );
    return array_key_exists($username, $users) && ($users[$username] === md5($password));
}
    /*foreach ($users as $spwd) {
        echo '<p>md5(', $spwd, ')=', md5($spwd), '</p>';*/
