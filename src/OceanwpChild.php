<?php

namespace OceanwpChild;

class OceanwpChild
{
    protected static ?OceanwpChild $instance = null;

    public function __construct()
    {
        $this->initHooks();
        $this->loadClasses();
    }

    private function initHooks(): void
    {
    }

    private function loadClasses(): void
    {
        new EnqueueScripts();
    }

    public static function getInstance(): ?OceanwpChild
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }
}
