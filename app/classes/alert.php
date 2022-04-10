<?php

class Alert
{
    public static function success($message)
    {
        return "
            <div class='alert alert-success alert-dismissible'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <i class='icon fas fa-check'></i> $message
            </div>";
    }

    public static function error($message)
    {
        return "
            <div class='alert alert-danger alert-dismissible'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <i class='icon fas fa-ban'></i> $message
            </div>";
    }
}
