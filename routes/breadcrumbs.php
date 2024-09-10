<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Admin
Breadcrumbs::for('admin.dashboard', function (BreadcrumbTrail $trail) {
   $trail->push('Dashboard', route('admin.dashboard'));
});

Breadcrumbs::for('admin.profile.index', function (BreadcrumbTrail $trail) {
   $trail->parent('admin.dashboard');
   $trail->push('Profil', route('admin.profile.index'));
});