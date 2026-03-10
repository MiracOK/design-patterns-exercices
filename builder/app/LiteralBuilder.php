<?php

namespace App;

class LiteralBuilder implements QueryBuilderInterface
{
    private array $select = [];
    private array $from   = [];
    private array $where  = [];

    public function select(array $fields): self
    {
        $this->select = $fields;
        return $this;
    }

    public function from(array $tables): self
    {
        $this->from = $tables;
        return $this;
    }

    public function where(string $field, string $operator, $value): self
    {
        $this->where[] = "$field $operator $value";
        return $this;
    }

    public function build(): string
    {
        $fields  = empty($this->select) ? 'tous les champs' : implode(', ', $this->select);
        $tables  = implode(', ', $this->from);
        $sentence = "Je sélectionne les champs $fields de la table $tables";

        if (!empty($this->where)) {
            $sentence .= ' où ' . implode(' et ', $this->where);
        }

        return $sentence . '.';
    }
}
