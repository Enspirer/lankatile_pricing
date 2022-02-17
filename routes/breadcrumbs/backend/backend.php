<?php

Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push(__('strings.backend.dashboard.title'), route('admin.dashboard'));
});

require __DIR__.'/auth.php';
require __DIR__.'/log-viewer.php';



Breadcrumbs::for('admin.price.index', function ($trail) {
    $trail->push('Price', route('admin.price.index'));
});
