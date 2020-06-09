<?php

global $chex_investments;
$chex_investments = [];
$chex_investments[ 'ind_companies' ] = include __DIR__ . '/investment/ind_company.php';
$chex_investments[ 'investors' ] = include __DIR__ . '/investment/china.php';
$chex_investments[ 'industry' ] = include __DIR__ . '/investment/industry.php';
