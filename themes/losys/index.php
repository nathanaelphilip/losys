<?php

    use Timber\Timber;

    $context = Timber::context();

    $templates = ['index.twig'];

    Timber::render( $templates, $context );
