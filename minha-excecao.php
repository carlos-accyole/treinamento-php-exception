<?php

class MinhaExcecao extends DomainException
{
    public function exibeVinicius()
    {
        echo "Carlos";
    }
}

try {
    throw new MinhaExcecao();
} catch (MinhaExcecao $e) {
    $e->exibeVinicius();
}
