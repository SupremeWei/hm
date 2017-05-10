<?php

namespace App\Repositories;

use Session;

class SessionRepository
{
    private function createSession($title, $message, $level, $key = 'default')
    {
        return Session::flash($key, [
            'title' => $title,
            'message' => $message,
            'level' => $level
        ]);
    }

    public function info($title = null, $message = null, $key = null)
    {
        return ($key) ? $this->createSession($title, $message, 'info', $key) :
            $this->createSession($title, $message, 'info');
    }

    public function success($title = null, $message = null, $key = null)
    {
        return ($key) ? $this->createSession($title, $message, 'success', $key) :
            $this->createSession($title, $message, 'success');
    }

    public function error($title = null, $message = null, $key = null)
    {
        return ($key) ? $this->createSession($title, $message, 'error', $key) :
            $this->createSession($title, $message, 'error');
    }
}

