<?php

function getForm() {
    
    $html = <<< EOF
        <div class="form-area">
            <form id="email-form">
                <input style="line-height: 25px;" type="email" id="email-input" name="email" placeholder="Enter email" required><br>
                <button class="form-button" type="submit">Submit</button>
                </form>
            </div>
        <div style="margin: 30px 0;" id="response"></div>
    EOF;

    return $html;
}

?>