<?php

// Use in resources/views/layouts/admin.blade.php - For change page direction

function getFolder(){
    return app()->getLocale() == 'ar' ? 'css-rtl' : 'css';
}
