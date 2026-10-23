<?php

namespace App\Support;

class WhatsApp
{
    /**
     * Normalize a phone number to standard international digit format (E.164 without leading +).
     * Returns null if missing, empty, or structurally invalid.
     */
    /**
     * Normalize a phone number passed explicitly.
     *
     * The method no longer falls back to the global configuration when the
     * argument is null – callers must decide if they want to use the configured
     * default. This allows a clear distinction between “no phone supplied” and
     * “use the application‑wide configured phone”.
     */
    public static function normalizePhone(?string $phone = null): ?string
    {
        // When $phone is null we treat it as an explicit “no phone”.
        if ($phone === null) {
            return null;
        }

        $raw = $phone;

        if (empty($raw) || !is_string($raw)) {
            return null;
        }

        // Strip non‑digit characters
        $digits = preg_replace('/[^0-9]/', '', trim($raw));

        if (empty($digits)) {
            return null;
        }

        // Normalize common Indonesian typo "6208..." -> "628..."
        if (str_starts_with($digits, '620')) {
            $digits = '62' . substr($digits, 3);
        }
        // Normalize Indonesian national format "08..." -> "628..."
        elseif (str_starts_with($digits, '0')) {
            $digits = '62' . substr($digits, 1);
        }

        // Validate international phone number length (E.164 limits)
        if (strlen($digits) < 8 || strlen($digits) > 15) {
            return null;
        }

        return $digits;
    }

    /**
     * Determine if a valid phone number is currently configured.
     */
    public static function hasValidPhone(?string $phone = null): bool
    {
        return static::normalizePhone($phone) !== null;
    }

    /**
     * Get the default WhatsApp inquiry message from configuration.
     */
    public static function defaultMessage(): string
    {
        return (string) config(
            'services.whatsapp.default_message',
             'Halo, saya ingin konsultasi mengenai pelatihan K3 Listrik.'
        );
    }

    /**
     * Build a secure, URL-encoded WhatsApp direct link (wa.me).
     * Falls back to universal WhatsApp share link if phone is missing or invalid.
     */
    public static function url(?string $message = null, ?string $phone = null): string
    {
        // If a phone is explicitly passed we normalize it directly; otherwise we
        // fall back to the configured phone value.
        $normalizedPhone = $phone !== null
            ? static::normalizePhone($phone)
            : static::normalizePhone(config('services.whatsapp.phone'));

        $rawMessage = !empty($message) ? $message : static::defaultMessage();
        $encodedMessage = rawurlencode($rawMessage);

        return $normalizedPhone !== null
            ? "https://wa.me/{$normalizedPhone}?text={$encodedMessage}"
            : "https://wa.me/?text={$encodedMessage}";
    }
}
