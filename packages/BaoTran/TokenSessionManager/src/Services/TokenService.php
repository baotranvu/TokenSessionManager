<?php

namespace BaoTran\TokenSessionManager\Services;

class TokenService
{
    public function generateToken()
    {
        return bin2hex(random_bytes(16)); // Tạo token ngẫu nhiên
    }

    public function validateToken(string $token): bool
    {
        // Thêm logic kiểm tra token (VD: đối chiếu trong database)
        return !empty($token);
    }
}
