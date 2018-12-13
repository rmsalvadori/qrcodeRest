<?php
require_once '/../lib/rb.php';
require_once '/../lib/limonade.php';
require_once '/../lib/db.php';

dispatch('/', 'show');
function show() {
    $books = R::findAll( 'clientes' );
    echo json_encode($books);
}

dispatch('/:name', 'show2');
function show2() {
    $name = params('name');
    $post = R::dispense( 'clientes' );
    $post->nome = $name;
    $id = R::store($post);
    echo 'salvo: ' . $id;
}

run();
