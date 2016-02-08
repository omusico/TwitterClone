<?php
/* 
 * Pass a tweet to $model.
 */
?>

<div class="col-md-6 well">
<?php
    echo "<div class='row-fluid'>"; 
        echo "<div class='col-md-3'>";
            echo $model->owner;
            echo "<br/>";
            $hash = hash("md5", $model->owner);;
            echo "<img src='http://www.gravatar.com/avatar/$hash?d=identicon' />";
        echo "</div>";
        echo "<div class='col-md-9 text-center'>";
            echo "<div class='panel panel-default'>";
                echo "<div class='panel-body'>$model->text</div>";
            echo "</div>";
        echo "</div>";
    echo "</div>";
    
    echo "<div class='row-fluid'>";
        echo "<div class='col-md-12'>";
            echo date("Y-m-d H:i:s", $model->timestamp);
        echo "</div>";
    echo "</div>"
?>
</div>