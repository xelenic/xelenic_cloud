<?php

Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push(__('strings.backend.dashboard.title'), route('admin.dashboard'));
});

Breadcrumbs::for('admin.products', function ($trail) {
    $trail->push('Products', route('admin.products'));
});

Breadcrumbs::for('admin.products.create', function ($trail) {
    $trail->push('Products Create', route('admin.products.create'));
});

Breadcrumbs::for('admin.products.edit', function ($trail) {
    $trail->push('Products Edit', route('admin.products.edit',1));
});

require __DIR__.'/auth.php';
require __DIR__.'/log-viewer.php';
