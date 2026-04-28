<?php
declare(strict_types=1);

const SITE_NAME = 'Mark’s Services LLC';
const BUSINESS_NAME = 'Mark’s Services LLC';
const BUSINESS_EMAIL = 'info@MarksServices.com';
const BUSINESS_PHONE_DISPLAY = '(512) 549-0322';
const BUSINESS_PHONE_TEL = '+15125490322';
const BUSINESS_STREET = '25 Waters Edge Circle';
const BUSINESS_CITY = 'Georgetown';
const BUSINESS_STATE = 'TX';
const BUSINESS_ZIP = '78626';
const BUSINESS_ADDRESS_DISPLAY = BUSINESS_STREET . ', ' . BUSINESS_CITY . ', ' . BUSINESS_STATE . ' ' . BUSINESS_ZIP;
const BUSINESS_AREA = 'Georgetown & Sun City, Texas';
const ELECTRICAL_LICENSE = 'TECL 20547';
const PLUMBING_LICENSE = 'M-38601';

function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

function url_for(string $path): string
{
    return $path;
}

function is_active(string $current, array|string $targets): string
{
    $targets = (array) $targets;
    return in_array($current, $targets, true) ? 'active' : '';
}
