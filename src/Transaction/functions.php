<?php

namespace Denpa\Bitcoin\Transaction;

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
     * @param array $tx
     *
     * @return string
     */
    function encode(array $tx): string {
        return '';
    }
}
