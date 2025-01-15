<?php
$router->map('GET', '/group', 'groupController#index', 'group-index');
$router->map('GET', '/group/[i:id]', 'groupController#show', 'group-show');
$router->map('GET', '/group/create', 'groupController#create', 'group-create');
$router->map('POST', '/group', 'groupController#post');
$router->map('DELETE', '/group/[i:id]', 'groupController#delete');
$router->map('GET', '/group/[i:id]/edit', 'groupController#edit');
$router->map('PUT','/group/[i:id]', 'groupController#put');