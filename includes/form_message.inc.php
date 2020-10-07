<?php
if (isset($message))
    echo
        "<div class='alert " . $message["class"] . " alert-dismissible fade show' role='alert'>" .
            $message["text"] .
            "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
        </button>
    </div>";
