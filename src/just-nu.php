<?php

namespace Aftonbladet;

class JustNu
{
    public function getCount(): int
    {
        return substr_count(
            strtoupper(
                preg_replace(
                    '/<script>.*?<\/script>/i',
                    '',
                    (string)$this->getContents()
                )
            ),
            'JUST NU'
        );
    }

    public function getContents(): string|false
    {
        return \file_get_contents('https://www.aftonbladet.se/');
    }
}
