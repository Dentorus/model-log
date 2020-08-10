<?php

return [
    'user_model' => 'App\User',
    'related_user_columns' => ['user_email' => ['column' => 'email', 'name' => __('modellog::modellog.created_at')]]
];
