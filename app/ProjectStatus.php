<?php

namespace App;

enum ProjectStatus: string
{
    case Open = "open";
    case Closes = "closed";

    public function label(): string {
        return match($this) {
            self::Open => "Aceitando propostas",
            self::Closes => "Encerrado"
        };
    }
}
