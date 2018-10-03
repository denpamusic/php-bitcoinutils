<?php

namespace Denpa\Bitcoin\Block;

if (!function_exists('decode')) {
    /**
     *
     *
     * @param string $address
     *
     * @return array
     */
    function decode($hex): array {
        return [];
    }
}

if (!function_exists('encode')) {
    /**
     *
     *
     * @param array $block
     *
     * @return string
     */
    function encode(array $block): string {
        return '';
    }
}
