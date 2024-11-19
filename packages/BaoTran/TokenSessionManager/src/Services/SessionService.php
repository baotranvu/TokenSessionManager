<?php

namespace BaoTran\TokenSessionManager\Services;

class SessionService
{
    public function startSession()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }

    public function setSession(string $key, $value)
    {
        $_SESSION[$key] = $value;
    }

    public function getSession(string $key)
    {
        return $_SESSION[$key] ?? null;
    }

    public function destroySession()
    {
        if (session_status() == PHP_SESSION_ACTIVE) {
            session_destroy();
        }
    }
}
