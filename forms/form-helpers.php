<?php
declare(strict_types=1);

function form_value(string $key): string
{
    return trim((string) ($_POST[$key] ?? ''));
}

function required_form_value(string $key, string $label): string
{
    $value = form_value($key);

    if ($value === '') {
        form_fail("Please provide {$label}.");
    }

    return $value;
}

function optional_form_value(string $key): string
{
    return form_value($key);
}

function required_email_value(string $key, string $label): string
{
    $value = required_form_value($key, $label);

    if (filter_var($value, FILTER_VALIDATE_EMAIL) === false) {
        form_fail("Please provide a valid {$label}.");
    }

    return $value;
}

function one_line_value(string $value): string
{
    return trim((string) preg_replace('/[\r\n]+/', ' ', $value));
}

function form_fail(string $message): never
{
    echo $message;
    exit;
}

function choice_label(string $value, array $labels): string
{
    return $labels[$value] ?? $value;
}
