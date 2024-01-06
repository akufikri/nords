<?php

namespace App\Services;

class MessageService
{
    public function success($message)
    {
        return $this->formatMessage('success', $message);
    }

    public function error($message)
    {
        return $this->formatMessage('error', $message);
    }

    public function info($message)
    {
        return $this->formatMessage('info', $message);
    }

    private function formatMessage($type, $message)
    {
        return [
            'type' => $type,
            'message' => $message,
        ];
    }
}