<?php 

session_start();
require_once 'header.php';

echo "<div class='center'>Приветствуем тебя, славяно-арий. ШУЕ ППШ!!!";
if($loggedin) echo "$user, you are logged in";
else echo 'please sign up or log in';

echo <<<_END
    </div><br>
    </div>
        <div data-role="footer">
            <h4>Я хз что писать</h4>
        </div>
    </body>
</html>
_END;
?>