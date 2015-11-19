<?php


function notify($type, $message){

    echo "<div class='notify' id='note-$type'>".$message."</div>";

}

function login($user){

    if(isset($_SESSION['author'])){
    unset($_SESSION['author']); }
    $_SESSION['author'] = $user;

}


function login_true($user){

    echo "<meta http-equiv='refresh' content='0;URL=http://www.pavatimarine.com/blog/'>";


}

function login_prompt(){

    echo "<meta http-equiv='refresh' content='0;URL=http://www.pavatimarine.com/blog/write/'>";


}


function login_false(){

    echo "<div class='login-prompt'>
            <span class='logo'></span>
              <form class='login-form' method='post'>
                  <label>Please login to continue to the dashboard</label>
                  <div class='login-fields'>
                      <div class='field-container'>
                          <div class='field-icon' id='icon-user'></div>
                          <input class='login-field' name='user' placeholder='Username' type='text' value='".$_POST['user']."' />
                      </div>
                      <div class='field-container'>
                          <div class='field-icon' id='icon-pass'></div>
                          <input class='login-field' name='pass' placeholder='Password' type='password' value='".$_POST['pass']."' />
                      </div>
                  </div>
                  <input class='login-buttn' name='login' type='submit' value='Login' />
              </form>
          </div>";

    if($_POST['login']){ $username = mysql_real_escape_string($_POST['user']); $password = md5(mysql_real_escape_string($_POST['pass']));
    $db_user = mysql_query("SELECT * FROM newblog_authors WHERE author_alias = '".$username."'");
    if(mysql_num_rows($db_user) < 1){ notify("error", "This username does not exist"); }else{
    $rt_user = mysql_fetch_assoc($db_user); $rt_pass = $rt_user['author_password']; $rt_last = $rt_user['last_login'];
    if($password === $rt_pass){ notify("success", "Logging you in, $username"); login($username); login_true($username); }else{ notify("error", "Wrong Password"); }}}

}


?>
