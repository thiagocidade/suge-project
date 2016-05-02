<?php

Breadcrumbs::register('inicio', function($breadcrumbs) {
    $breadcrumbs->push('Início', url('/'));
});

Breadcrumbs::register('sistema', function($breadcrumbs) {
    $breadcrumbs->push('Sistema', url('/sistema'));
});

Breadcrumbs::register('sistema.bairro', function($breadcrumbs) {
    $breadcrumbs->parent('inicio');
    $breadcrumbs->parent('sistema');
    $breadcrumbs->push('Bairro', url('/sistema/bairro'));
});

Breadcrumbs::register('sistema.usuario', function($breadcrumbs) {
    $breadcrumbs->parent('inicio');
    $breadcrumbs->parent('sistema');
    $breadcrumbs->push('Usuários', url('/sistema/usuario'));
});

Breadcrumbs::register('sistema.perfil', function($breadcrumbs) {
    $breadcrumbs->parent('inicio');
    $breadcrumbs->parent('sistema');
    $breadcrumbs->push('Perfil', url('/sistema/perfil'));
});