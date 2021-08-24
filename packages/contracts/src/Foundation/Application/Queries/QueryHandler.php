<?php

namespace Clean\Contracts\Foundation\Application\Queries;

interface QueryHandler
{
    public function execute(Query $query): QueryResponse;
}
