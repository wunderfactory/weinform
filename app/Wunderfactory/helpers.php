<?php

    function substr_count_ins($haystack, $needle) {
        return substr_count(strtolower($haystack), strtolower($needle));
    }